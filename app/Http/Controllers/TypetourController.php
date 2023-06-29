<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Session;
use App\Models\Typetour;
use App\Models\Destination;
use Illuminate\Support\Facades\Redirect;
session_start();
class TypetourController extends Controller
{
    /*CRUD admin*/
    public function index(){
        $this->AuthLogin();
        if(Session::get('position_id')==2 || Session::get('position_id')==1){
        return view('Admin_Views.Tour_Management.Add_Typetour');
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
    public function AuthLogin(){
        $staff_id = Session::get('staff_id');
        if($staff_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add(Request $request){
        $data=$request->all();
        $typetour= new Typetour;
        $typetour->typetour_name_VI=$data['typetour_name_VI'];
        $typetour->typetour_name_EN=$data['typetour_name_EN'];
        $typetour->typetour_desc_VI=$data['typetour_desc_VI'];
        $typetour->typetour_desc_EN=$data['typetour_desc_EN'];
        $typetour->typetour_status=$data['typetour_status'];

        $get_thumb = $request->file('typetour_thumb');
        $get_banner = $request->file('typetour_banner');
        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/typetours/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/typetours/banner',$new_banner);
        $typetour->typetour_thumb=$new_thumb;
        $typetour->typetour_banner=$new_banner;
        Session::put('message','*successfully added');
        $typetour->save();
        Return Redirect::to('add-type-tour');
    }
    public function show_list(){
        if(Session::get('position_id')==2 || Session::get('position_id')==1){
        $typetour=Typetour::OrderBy('typetour_id','DESC')->get();
        return view('Admin_Views.Tour_Management.List_Typetour')->with(compact('typetour'));
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
    public function edit($typetour_id){
        $edit_typetour= Typetour::where('typetour_id',$typetour_id)->get();
        return view('Admin_Views.Tour_Management.Edit_Typetour')->with(compact('edit_typetour'));
    }
    public function enable($typetour_id){
        $typetour= Typetour::find($typetour_id);
        $typetour->typetour_status=1;
        $typetour->save();
        Session::put('message','*successfully enabled');
        return Redirect::to('list-type-tour');

    }
    public function disable($typetour_id){
        $typetour= Typetour::find($typetour_id);
        $typetour->typetour_status=0;
        $typetour->save();
        Session::put('message','*successfully disabled');
        return Redirect::to('list-type-tour');

    }
    public function update(Request $request,$typetour_id){
        $data=$request->all();
        $typetour= Typetour::find($typetour_id);
        $typetour->typetour_name_VI=$data['typetour_name_VI'];
        $typetour->typetour_name_EN=$data['typetour_name_EN'];
        $typetour->typetour_desc_VI=$data['typetour_desc_VI'];
        $typetour->typetour_desc_EN=$data['typetour_desc_EN'];
        $typetour->typetour_status=$data['typetour_status'];

        $get_thumb = $request->file('typetour_thumb');
        $get_banner = $request->file('typetour_banner');
        if($get_thumb){
        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/typetours/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/typetours/banner',$new_banner);
        $typetour->typetour_thumb=$new_thumb;
        $typetour->typetour_banner=$new_banner;
        }
        Session::put('message','*successfully updated');
        $typetour->save();
        return Redirect::to('list-type-tour');
    }
    public function delete($typetour_id){
        $typetour= Typetour::find($typetour_id);
        $typetour->delete();
        Session::put('message','*successfully deleted');
        return Redirect::to('list-type-tour');
    }
    /*End CRUD admin*/

    public function show_type_detail($typetour_name_EN){

        $Object=Typetour::where('typetour_name_EN',$typetour_name_EN)->first();
        $tour = Tour::where('tbl_tour.typetour_id',$Object->typetour_id)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        $related_tour= Tour::inRandomOrder()
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(3)->get();
        $object_status=2;
        $object=[
            'object_name_EN'=>$Object->typetour_name_EN,
            'object_name_VI'=>$Object->typetour_name_VI,
            'object_banner'=>$Object->typetour_banner,
            'object_desc_VI'=>$Object->typetour_desc_VI,
            'object_desc_EN'=>$Object->typetour_desc_EN
        ];
        $object=(object) $object;
        return view('Page_Views.List_tour')->with(compact('tour'))->with(compact('object'))
            ->with(compact('object_status'))->with(compact('related_tour'));



    }
    public function show_page(){
        $Type=Typetour::orderby('typetour_id','asc')->where('typetour_status','1')->get();
        return view('Page_Views.TypetourPage')->with(compact('Type'));
    }
}
