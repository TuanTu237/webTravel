<?php

namespace App\Http\Controllers;

use App\Models\Typetour;
use Illuminate\Http\Request;
use Session;
use DB;
use App\Models\Destination;
use App\Models\Tour;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Return_;
session_start();

class DestinationController extends Controller
{
    /*CRUD admin*/
    public function index(){
        if(Session::get('position_id')==2 || Session::get('position_id')==1){
        $this->AuthLogin();
       return view('Admin_Views.Tour_Management.Add_Destination');
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
        $dest= new Destination;
        $dest->destination_name_VI=$data['dest_name_VI'];
        $dest->destination_name_EN=$data['dest_name_EN'];
        $dest->destination_desc_VI=$data['dest_desc_VI'];
        $dest->destination_desc_EN=$data['dest_desc_EN'];
        $dest->destination_status=$data['dest_status'];

        $get_thumb = $request->file('dest_thumb');
        $get_banner = $request->file('dest_banner');
        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/destinations/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/destinations/banner',$new_banner);
        $dest->destination_thumb=$new_thumb;
        $dest->destination_banner=$new_banner;
        Session::put('message','*successfully added');
        $dest->save();
        return Redirect::to('add-destination');
    }
    public function show_list(){
        if(Session::get('position_id')==2 || Session::get('position_id')==1){
        $dest=Destination::OrderBy('destination_id','DESC')->get();
        return view('Admin_Views.Tour_Management.List_Destination')->with(compact('dest'));
    }else{
        Session::put('message','*You not have this permission');
        return redirect()->back();
    }
    }
    public function edit($destination_id){
        $edit_dest= Destination::where('destination_id',$destination_id)->get();
        return view('Admin_Views.Tour_Management.Edit_Destination')->with(compact('edit_dest'));
    }
    public function enable($destination_id){
        $dest= Destination::find($destination_id);
        $dest->destination_status=1;
        $dest->save();
        Session::put('message','*successfully enabled');
        return Redirect::to('list-destination');

    }
    public function disable($destination_id){
        $dest= Destination::find($destination_id);
        $dest->destination_status=0;
        $dest->save();
        Session::put('message','*successfully disabled');
        return Redirect::to('list-destination');

    }
    public function update(Request $request,$destination_id){
        $data=$request->all();
        $dest= Destination::find($destination_id);
        $dest->destination_name_VI=$data['dest_name_VI'];
        $dest->destination_name_EN=$data['dest_name_EN'];
        $dest->destination_desc_VI=$data['dest_desc_VI'];
        $dest->destination_desc_EN=$data['dest_desc_EN'];
        $dest->destination_status=$data['dest_status'];
        $get_banner = $request->file('dest_banner');
        $get_thumb = $request->file('dest_thumb');
if($get_thumb){
    /* $get_thumb_old= $dest->dest_thumb;
    $path='uploads/destinations/thumb/'.$get_thumb_old;
    unlink($path); */
        
        $get_name_thumb = $get_thumb->getClientOriginalName();
        $name_thumb = current(explode('.',$get_name_thumb));
        $new_thumb =  $name_thumb.rand(0,99).'.'.$get_thumb->getClientOriginalExtension();
        $get_thumb->move('uploads/destinations/thumb',$new_thumb);
        $get_name_banner = $get_banner->getClientOriginalName();
        $name_banner = current(explode('.',$get_name_banner));
        $new_banner =  $name_banner.rand(0,99).'.'.$get_banner->getClientOriginalExtension();
        $get_banner->move('uploads/destinations/banner',$new_banner);
        $dest->destination_thumb=$new_thumb;
        $dest->destination_banner=$new_banner;
        /* DB::table('tbl_destination')->where('destination_id',$destination_id)->update($data);
        Session::put('message','*successfully updated');
        return Redirect::to('list-destination'); */
    }

        $dest->save();
        Session::put('message','*successfully updated');
        return Redirect::to('list-destination');
    }
    public function delete($destination_id){
        $dest= Destination::find($destination_id);
        $dest->delete();
        Session::put('message','*successfully deleted');
        return Redirect::to('list-destination');
    }
    /*End CRUD admin*/
/************************************************************************************/
    /*View */
    public function show_dest_detail($destination_name_EN){
        $Object=Destination::where('destination_name_EN',$destination_name_EN)->first();
        $tour = Tour::where('tbl_tour.destination_id',$Object->destination_id)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        $related_tour= Tour::inRandomOrder()
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(3)->get();
        $object_status=1;
        $object=[
            'object_name_EN'=>$Object->destination_name_EN,
            'object_name_VI'=>$Object->destination_name_VI,
            'object_banner'=>$Object->destination_banner,
            'object_desc_VI'=>$Object->destination_desc_VI,
            'object_desc_EN'=>$Object->destination_desc_EN
        ];
        $object=(object) $object;
        return view('Page_Views.List_tour')->with(compact('tour'))->with(compact('object'))
            ->with(compact('object_status'))->with(compact('related_tour'));
    }
    public function show_page(){
        $i=1; $dest=[];
        $Dest=Destination::orderby('destination_id','asc')->where('destination_status','1')->get();
        foreach ($Dest as $key =>$Dests){
            $dest[$i]=$Dests;
            $i++;
        }
        return view('Page_Views.DestinationPage')->with(compact('dest'))->with(compact('i'))->with(compact('dest'));
    }
}
