<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Staff;
use App\Models\Position;
use Session;

class StaffController extends Controller
{
    public function add_staff(){
        if(Session::get('position_id')==1){
        return view('Admin_Views.Staff_Management.Add_Staff');
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
    public function save_staff(Request $request){
        $request->validate([
            'staff_email' => ['required', 'string', 'email', 'max:255','unique:tbl_staff'],
            'staff_password' => ['required', 'string', 'min:6'],
            ], [
                'staff_email.required' => 'Email là trường bắt buộc',
                'staff_email.email' => 'Email không đúng định dạng',
                'staff_email.max' => 'Email không quá 255 ký tự',
                'staff_email.unique' => 'Email đã tồn tại',
                'staff_password.required' => 'Mật khẩu là trường bắt buộc',
                'staff_password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
                
            ]); 
        $staff= new Staff;
        $staff->position_id=$request['position_id'];
        $staff->staff_name=$request['staff_name'];
        $staff->staff_birth=$request['staff_birth'];
        $staff->staff_nationality=$request['staff_nationality'];
        $staff->staff_phone_number=$request['staff_phone_number'];
        $staff->staff_address=$request['staff_address'];
        $staff->staff_email=$request['staff_email'];
        $staff->staff_password=md5($request['staff_password']);
        
        $res = $staff->save();
        if($res){
            return back()->with('success','*Đăng ký nhân viên thành công');
           }else{
               return back()->with('fail','*Đăng ký nhân viên thất bại');
           }
       
    }
    public function edit_staff($staff_id){
        if(Session::get('position_id')==1){
        $edit_staff= Staff::where('staff_id',$staff_id)->get();
        /* $edit_staff = Staff::where('staff_id',$staff_id)->join('tbl_position','tbl_staff.position_id','=','tbl_position.position_id')->first(); */
        $posi= Position::OrderBy('position_id','desc')->get(); 
        return view('Admin_Views.Staff_Management.Edit_Staff')->with(compact('edit_staff','posi'));
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
    public function update_staff(Request $request,$staff_id){
        $data=$request->all();
        $staff= Staff::find($staff_id);
        $staff->staff_name=$data['staff_name'];
        $staff->staff_birth=$data['staff_birth'];
        $staff->staff_phone_number=$data['staff_phone_number'];
        $staff->staff_address=$data['staff_address'];
        $staff->position_id=$data['position_id'];
        $staff->staff_nationality=$data['staff_nationality'];

        $staff->save();
        Session::put('message','*Successfully updated');
        return Redirect::to('add-staff');
    }
    public function delete_staff($staff_id){
        

         $staff= Staff::Where('staff_id',$staff_id);
        
         $staff->delete();
        Session::put('message','*successfully deleted');
        return back();
    }
    public function show_list($position_id){
        if(Session::get('position_id')==1){
        $staff = Staff::where('position_id',$position_id)->get();
        return view('Admin_Views.Staff_Management.List_Staff')->with(compact('staff'));
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
}