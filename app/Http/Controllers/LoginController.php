<?php

namespace App\Http\Controllers;
use App\Models\Staff;
use Illuminate\Http\Request;
use Auth;
use Session;
use Illuminate\Support\Facades\Redirect;
class LoginController extends Controller
{
    public function AuthLogin(){
        $staff_id=Session::get('admin_id');
        if($staff_id) Redirect::to('/dashboard');
        else Redirect::to('admin')->send();
    }
    public function index(){
        return view('Admin_Views.AdminLogin');
    }
    public function login(Request $request){
        $staff_email = $request->staff_email;
        $staff_password = md5($request->staff_password);
        $result = Staff::where('staff_email', $staff_email)->where('staff_password', $staff_password)->first();
        if($result){
            Session::put('staff_name',$result->staff_name);
            Session::put('position_id',$result->position_id);
            Session::put('staff_email',$result->staff_email);
            Session::put('staff_id',$result->staff_id);
            $_SESSION['status_login'] = true;
            if($result->position_id==1){
                Session::put('year_revenue',2022);
                return Redirect::to('/dashboard');
            } elseif($result->position_id==2){
                return Redirect::to('list-tour');
            }elseif ($result->position_id==3){
                return Redirect::to('/dashboardkd');
            }elseif ($result->position_id==4){
                return Redirect::to('/dashboardhd');
            }
        }
        else {
            Session::put('message','*Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('/admin');}
    }
    public function logout(){
        $this->AuthLogin();
        Session::put('staff_name',null);
        Session::put('staff_id',null);
        Session::put('position_id',null);
        Session::put('staff_email',null);
        return view('Admin_Views.AdminLogin');
    }
}