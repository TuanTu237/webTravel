<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Custom;
use App\Models\Custom_detail;
use App\Models\Tour;
use Illuminate\Support\Facades\Redirect;
use phpDocumentor\Reflection\Element;
use Auth;
use Session;
use App\Models\Review;

class CustomController extends Controller
{
    public function AuthLogin(){
        $customer_id=Session::get('customer_id');
        if($customer_id) Redirect::to('/');
        else Redirect::to('login-index')->send();
        }
    public function wishlist(Request $request){
    $this->AuthLogin();
   
       $customer = Session::get('customer_id');
        //$customer = Customer::where('customer_id',$request['customer_id'])->first();
        return view('Page_Views.CustomPage')->with(compact('customer'));
    }
    public function custom(Request $request){
        $this->AuthLogin();
        $customer = Session::get('customer_id');
        $include_chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $charLength = strlen($include_chars);
        $randomString = '';
        for ($i = 0; $i < 5; $i++) {
            $randomString .= $include_chars [rand(0, $charLength - 1)];
        }
        $arrayToString = implode(',', $request->input('custom_type_tour'));
        $first_str= $request['destination_name_EN'];
        $last_str= $request['typetour_id'];
        $customcode=$randomString;
        
        $custom = new Custom;
        $custom->custom_code= $customcode;
        $custom->customer_id=Session::get('customer_id');
        $custom->custom_customer_name=$request['custom_customer_name'];
        $custom->custom_customer_email=$request['custom_customer_email'];
        $custom->custom_customer_address=$request['custom_customer_address'];
        $custom->custom_customer_phone=$request['custom_customer_phone'];
        $custom->custom_date=$request['custom_date'];
        $custom->custom_day=$request['custom_day'];
        $custom->custom_destination=$request['custom_destination'];
        $custom['custom_type_tour'] = $arrayToString;
        $custom->custom_spend=$request['custom_spend'];
        $custom->custom_adult=$request['custom_adult'];
        $custom->custom_child=$request['custom_child'];
        $custom->custom_message=$request['custom_message'];
        $custom->save();
        return view('Page_Views.BookingPage');
    }
    /*-----------------------------------------------------------------*/
       /*CRUD admin*/
    public function show_list($status){
        ;
        if(Session::get('position_id')==1 or Session::get('position_id')==3){
            $custom=Custom::where('custom_status',$status)->orderby('custom_date','desc')->get();
            return view('Admin_Views.Custom_Management.List_custom')->with(compact('custom'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function detail($custom_id){
        if(Session::get('position_id')==3 or Session::get('position_id')==1){
            $custom = Custom::where('custom_id',$custom_id)->first();
            //$custom_detail = Custom_detail::where('custom_id',$custom_id)->get();
            return view('Admin_Views.Custom_management.Detail_custom')->with(compact('custom'));
        }else{
            Session::put('message','*You not have this permission');
            return redirect()->back();
        }

    }
    public function edit($custom_id){
        
        $custom= Custom::where('custom_id',$custom_id)->first();
        $custom_detail =Custom_detail::where('custom_id',$custom_id)->get();
        return view('Admin_Views.Custom_management.Detail_custom')->with(compact('custom','custom_detail'));
    }
    public function update(Request $request){
        $custom =Custom::find($request['custom_id']);
        if($custom->custom_status==4){
            return redirect()->back();
        }else{
            $custom->custom_customer_name=$request['custom_customer_name'];
            $custom->custom_customer_email=$request['custom_customer_email'];
            $custom->custom_customer_address=$request['custom_customer_address'];
            $custom->custom_type_tour=$request['custom_type_tour'];
            $custom->custom_customer_phone=$request['custom_customer_phone'];
            $custom->custom_destination=$request['custom_destination'];
            $custom->custom_date=$request['custom_date'];
            $custom->custom_adult=$request['custom_adult'];
            $custom->custom_child=$request['custom_child'];
            $custom->custom_day=$request['custom_day'];
            $custom->custom_spend=$request['custom_spend'];
            $custom->custom_message=$request['custom_message'];
            $custom->custom_status=$request['custom_status'];
            $custom->custom_schedule=$request['custom_schedule'];
            $custom->custom_service_in=$request['custom_service_in'];
            $custom->custom_service_ex=$request['custom_service_ex'];
            $custom->save();
            
            Session::put('message','*successfully updated');
            return Redirect::to('/list-custom/'.$request['custom_status']);
        }
    }
    /*public function book_form(){
        $tour=Tour::where('tbl_tour.tour_name_EN',$tour->tour_name_EN)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->first();
        $tour_id=$tour->tour_id;
        $related_tour =Tour::where('tbl_tour.destination_id',$tour->destination_id)
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(6)->get();
        $tour_highlight=tour_highlight::where('tour_id',$tour->tour_id)
            ->join('tbl_highlight','tbl_tour_highlight.highlight_id','=','tbl_highlight.highlight_id')->get();
        $schedule =Tour_schedule::where('tour_id',$tour->tour_id)->get();
        $review =Booking::where('tour_id',$tour_id)->join('tbl_customer','tbl_customer.customer_id','=','tbl_booking.customer_id')
            ->join('tbl_review','tbl_review.booking_id','=','tbl_booking.booking_id')->distinct('tbl_review.review_id')
            ->get();
        
        $rate=$review->avg('review_rating');
        return view('Page_Views.Customer_book')->with(compact('tour'))
                    ->with(compact('schedule'))
                    ->with(compact('tour_highlight'))->with(compact('related_tour'))->with(compact('review','rate'));

    }
    
    */
}