<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Contract;
use App\Models\Booking;
use App\Models\Staff;
use App\Models\Tour;
use Illuminate\Support\Facades\Redirect;
use Mail;
use Session;

class ContractController extends Controller
{
    public function new_contract(){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $all_booking= Booking::where('booking_status',1)->orderby('booking_id','desc')->get();
            return view('Admin_Views.Booking_Management.Contract_New')->with(compact('all_booking'));
        }else{
            Session::put('message','*you not have this permission');
            return redirect()->back();
        }
    }
    public function add_contract(Request $request){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $booking = Booking::where('booking_id',$request['booking_id'])->first();
            $price = Tour::where('tour_id',$booking->tour_id)->first('tour_price');
            $customer= Customer::where('customer_id',$booking->customer_id)->first();
            /*Session::put('message','*successfully added');*/
            return view('Admin_Views.Booking_Management.Add_Contract')->with(compact('booking'))->with(compact('customer'))
                ->with(compact('price'));
        }else{
            Session::put('message','*you not have this permission');
            return redirect()->back();
        }

    }
    public function save_contract(Request $request){
        $booking=Booking::where('booking_id',$request['booking_id'])->first();
       // $customer= Customer::where('customer_id',$booking->customer_id)->first();
        $booking->booking_status=4;
        $contract= new Contract;
        $contract->booking_id=$request['booking_id'];
        $contract->staff_id=Session::get('staff_id');
       // $contract->customer_id=Session::get('customer_id');
        $contract->contract_total_price=$request['contract_total_price'];
        $contract->contract_date=$request['contract_date'];
        $contract->contract_status=1;
        $get_file=$request->file('contract_file');
        $get_name_file = $get_file->getClientOriginalName();
        $name_file = current(explode('.',$get_name_file));
        $new_file =  $name_file.rand(0,99).'.'.$get_file->getClientOriginalExtension();
        $get_file->move('Admins/contract_pdf',$new_file);
        $contract->contract_file=$new_file;
        $booking->save();
        $contract->save();
        Session::put('message','*successfully added');
        return Redirect::to('list-contract/1');
    }
    public function list_contract( $contract_status){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $contract= Contract::where('contract_status',$contract_status)->join('tbl_booking','tbl_contract.booking_id','=','tbl_booking.booking_id')
                ->join('tbl_customer','tbl_booking.customer_id','=','tbl_customer.customer_id')
                ->join('tbl_staff','tbl_contract.staff_id','=','tbl_staff.staff_id')->orderby('contract_date','desc')->get();
            return view('Admin_Views.Booking_Management.List_contract')->with(compact('contract'));
        }else{
            Session::put('message','*you not have this permission');
            return redirect()->back();
        }

    }
    public function detail_contract($contract_id){
        if(Session::get('position_id')==4 || Session::get('position_id')==1){
            $contract=Contract::Where('contract_id',$contract_id)->join('tbl_staff','tbl_staff.staff_id','=','tbl_contract.staff_id')
            ->join('tbl_booking','tbl_contract.booking_id','=','tbl_booking.booking_id')->first();
            /* $booking=Booking::where('booking_id',$contract->booking_id)->join('tbl_booking','tbl_contract.booking_id','=','tbl_booking.booking_id')->first(); */
            return view('Admin_Views.Booking_Management.Detail_contract')->with(compact('contract'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function update(Request $request){

        $contract = Contract::where('contract_id',$request['contract_id'])
        ->join('tbl_booking','tbl_contract.booking_id','=','tbl_booking.booking_id')->first();
         if($contract->contract_status==3){
            Session::put('message','*The contract is completed');
            return Redirect::back();

        }
        else if($contract->contract_status==2){
            if($request['contract_status']==1  or $request['contract_status']==0 ){
                Session::put('message','*Ongoing contract');
                return Redirect::back();
            }
        }
         else if($contract->contract_status==0){
            Session::put('message','*The contract has been canceled');
            return Redirect::back();
        }
        
         if($request['contract_status']==3){
            $booking = Booking::where('booking_id',$request['contract_id'])->first();
            $from_host ='Vietrip';
            $to_email =$contract->booking_customer_email;
            $data=array('title'=>'Thư cám ơn','body1'=>'Cám ơn bạn đã book tour của chúng tôi!',
                'customer_name'=>$contract->booking_customer_name,'booking_code'=>$contract->booking_code);
            Mail::send('Page_Views.send_mail',$data,function ($message) use ($from_host,$to_email){
                $message->to($to_email)->subject('Thư cám ơn!');
                $message->from($to_email,$from_host);
            });
        }  
        $contract->contract_status =$request['contract_status'];
        $contract->save();
        Session::put('message','*successfully update');
        return Redirect::to('list-contract/'.$contract->contract_status);

    }
}
