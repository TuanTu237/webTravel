<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Custom_contract;
use App\Models\Custom;
use App\Models\Staff;
use App\Models\Tour;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;

class CustomContract extends Controller
{
    public function new_contract(){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $all_custom= Custom::where('custom_status',1)->orderby('custom_id','desc')->get();
            return view('Admin_Views.custom_Management.Contract_New')->with(compact('all_custom'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }
    }
    public function add_contract(Request $request){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $custom = Custom::where('custom_id',$request['custom_id'])->first();
            //$price = Tour::where('tour_id',$custom->tour_id)->first('tour_price');
            //$customer= Customer::where('customer_id',$custom->customer_id)->first();
            /*Session::put('message','*successfully added');*/
            return view('Admin_Views.custom_Management.Add_Contract')->with(compact('custom'))
               ;
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function save_contract(Request $request){
        $custom=Custom::where('custom_id',$request['custom_id'])->first();
       // $customer= Customer::where('customer_id',$custom->customer_id)->first();
        $custom->custom_status=4;
        $contract= new Custom_contract;
        $contract->custom_id=$request['custom_id'];
        $contract->staff_id=Session::get('staff_id');
       // $contract->customer_id=Session::get('customer_id');
        $contract->custom_contract_total_price=$request['custom_contract_total_price'];
        $contract->custom_contract_date=$request['custom_contract_date'];
        $contract->custom_contract_status=1;
        $get_file=$request->file('custom_contract_file');
        $get_name_file = $get_file->getClientOriginalName();
        $name_file = current(explode('.',$get_name_file));
        $new_file =  $name_file.rand(0,99).'.'.$get_file->getClientOriginalExtension();
        $get_file->move('Admins/contract_pdf',$new_file);
        $contract->custom_contract_file=$new_file;
        $custom->save();
        $contract->save();
        Session::put('message','*successfully added');
        return Redirect::to('list-custom-contract/1');
    }
    public function list_contract( $custom_contract_status){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $contract= Custom_contract::where('custom_contract_status',$custom_contract_status)->join('tbl_custom','tbl_custom_contract.custom_id','=','tbl_custom.custom_id')
                ->join('tbl_customer','tbl_custom.customer_id','=','tbl_customer.customer_id')
                ->join('tbl_staff','tbl_custom_contract.staff_id','=','tbl_staff.staff_id')->orderby('custom_contract_date','desc')->get();
            return view('Admin_Views.Custom_Management.List_contract')->with(compact('contract'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function detail_contract($custom_contract_id){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $contractcus=Custom_contract::Where('custom_contract_id',$custom_contract_id)->join('tbl_staff','tbl_staff.staff_id','=','tbl_custom_contract.staff_id')
            ->join('tbl_custom','tbl_custom_contract.custom_id','=','tbl_custom.custom_id')->first();
            //$custom= Custom::where('custom_id',$contract->custom_contract_id)->first();
            return view('Admin_Views.Custom_Management.Detail_contract')->with(compact('contractcus'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function update(Request $request,$custom_contract_id){

        //$contractcus = Custom_contract::where('custom_contract_id',$request['custom_contract_id'])->first();
        $contractcus =Custom_contract::find($request['custom_contract_id']);
        /* if (!$contract){
            abort(404);
        } */
          if($contractcus->custom_contract_status == 3){
            Session::put('message','*The contract is completed');
            return Redirect::back();

        }
        else if($contractcus->custom_contract_status==2){
            if($request['custom_contract_status']==1  or $request['custom_contract_status']==0 ){
                Session::put('message','*Ongoing contract');
                return Redirect::back();
            }
        }
         else if($contractcus->custom_contract_status==0){
            Session::put('message','*The contract has been canceled');
            return Redirect::back();
        }   
       
        $contractcus->custom_contract_status =$request['custom_contract_status'];
        $contractcus->save();
        Session::put('message','*successfully update');
        return Redirect::to('list-contract/'.$contractcus->custom_contract_status);

    }
}
