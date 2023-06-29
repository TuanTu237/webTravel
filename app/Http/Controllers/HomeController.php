<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Staff;
use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Typetour;
use App\Models\Tour;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Custom;
use App\Models\Review;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\Types\Array_;
use Illuminate\Support\Arr;
use DB;
use Session;
use Mail;

class HomeController extends Controller
{
    public function index(){
        $dest=Destination::where('destination_status',1)->inRandomOrder()->limit(6)->get();
        $typetour=Typetour::where('typetour_status',1)->orderby('typetour_id','asc')->limit(6)->get();
        $full_dest=Destination::where('destination_status',1)->get();
        $full_typetour=Typetour::where('typetour_status',1)->get();
       /* $number_tour=Tour::where('tbl_tour.destination_id',$full_dest->destination_id)->count();*/
        $tour=Tour::where('tour_status',1)->inRandomOrder()
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(6)->get();
        return view('Page_Views.HomePage')->with(compact('dest'))->with(compact('typetour'))
            ->with(compact('full_dest'))->with(compact('full_typetour'))->with(compact('tour'));

    }
    public function search_1(Request $request){
        if($request['typetour_id']==null){
            $tour=Tour::where('tbl_tour.destination_id',$request['destination_id'])
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        }
        elseif ($request['destination_id']==null){
            $tour=Tour::
                where('tbl_tour.typetour_id',$request['typetour_id'])
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        }
        else{
            $tour=Tour::where('tbl_tour.destination_id',$request['destination_id'])
                ->where('tbl_tour.typetour_id',$request['typetour_id'])
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        }

        if($tour[0]){
            $related_tour=Tour::where('tbl_tour.destination_id',$request['destination_id'])
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                    ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(3)->get();
        }else{
            $related_tour= Tour::inRandomOrder()
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(3)->get();
        }
        $object_status=3;
        $object=[
            'object_name_EN'=>'',
            'object_name_VI'=>'',
            'object_banner'=>'',
            'object_desc_VI'=>'',
            'object_desc_EN'=>''
        ];
        $object=(object) $object;
        return view('Page_Views.List_tour')->with(compact('tour'))->with(compact('object'))->with(compact('related_tour'))
            ->with(compact('object_status'));
    }
    public function search_2(Request $request){
        $result =$request['search_content'];
        if($result==null){
            $tour = Tour::join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        }else{
            $keyword= $request->search_content;
            $tour=Tour::where('tbl_tour.tour_name_VI','like','%'.$keyword.'%')->orwhere('tbl_tour.tour_name_VI','like','%'.$keyword.'%')
                ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
                ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->paginate(6);
        }
        $related_tour= Tour::inRandomOrder()
            ->join('tbl_destination','tbl_tour.destination_id','=','tbl_destination.destination_id')
            ->join('tbl_typetour','tbl_tour.typetour_id','=','tbl_typetour.typetour_id')->limit(3)->get();
        $object_status=3;
        $object=[
            'object_name_EN'=>'',
            'object_name_VI'=>'',
            'object_banner'=>'',
            'object_desc_VI'=>'',
            'object_desc_EN'=>''
        ];
        $object=(object) $object;
        return view('Page_Views.List_tour')->with(compact('tour'))->with(compact('object'))
            ->with(compact('object_status'))->with(compact('related_tour'));



    }
    public function dashboard(){

        if(Session::get('position_id')==1){
            $filter_by_year= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->get(); /*doanh thu của năm*/
            $month_revenue = array();
            for($i=0;$i<=11;$i++){
                $month_numb=$i+1;
                $revenue_per_month= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->whereMonth('contract_date','=',$i+1)->sum('contract_total_price');
                array_push($month_revenue,$revenue_per_month);
            }
            $highest_month= max($month_revenue);
            $month_revenue=json_encode($month_revenue);

            $first_part=0;
            for($i=0;$i<=2;$i++){
                $month_numb=$i+1;
                $revenue_per_month= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->whereMonth('contract_date','=',$i+1)->sum('contract_total_price');
                $first_part=$first_part+$revenue_per_month;
            }
            $second_part=0;
            for($i=3;$i<=5;$i++){
                $month_numb=$i+1;
                $revenue_per_month= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->whereMonth('contract_date','=',$i+1)->sum('contract_total_price');
                $second_part=$second_part+$revenue_per_month;
            }
            $third_part=0;
            for($i=6;$i<=8;$i++){
                $month_numb=$i+1;
                $revenue_per_month= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->whereMonth('contract_date','=',$i+1)->sum('contract_total_price');
                $third_part=$third_part+$revenue_per_month;
            }
            $fourth_part=0;
            for($i=9;$i<=11;$i++){
                $month_numb=$i+1;
                $revenue_per_month= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->whereMonth('contract_date','=',$i+1)->sum('contract_total_price');
                $fourth_part=$fourth_part+$revenue_per_month;
            }

            $total_revenue=Contract::where('contract_status',3)->whereyear('contract_date','=',Session::get('year_revenue'))->sum('contract_total_price');

            /*Thống kê số lượng hợp đồng và booking*/
            $total_contract=Contract::count();
            $Completed_contract=Contract::where('contract_status',3)->count();
            $Completed_contract=$Completed_contract/$total_contract;
            $Ongoing_contract=Contract::where('contract_status',2)->count();
            $Ongoing_contract=$Ongoing_contract/$total_contract;
            $Signed_contract=Contract::where('contract_status',1)->count();
            $Signed_contract=$Signed_contract/$total_contract;
            $Canceled_contract=Contract::where('contract_status',0)->count();
            $Canceled_contract=$Canceled_contract/$total_contract;
            $per_completed_contract = round((float)$Completed_contract * 100 ) . '%';
            $per_signed_contract = round((float)$Signed_contract * 100 ) . '%';
            $per_ongoing_contract =round((float)$Ongoing_contract * 100 ) . '%';
            $per_canceled_contract =round((float)$Canceled_contract * 100 ) . '%';
            $total_booking=Booking::count();
            $Contracted_booking=Booking::Where('booking_status',4)->count();
            $confirmed_booking=Booking::Where('booking_status',1)->count();
            $unconfirmed_booking=Booking::Where('booking_status',0)->count();
            $canceled_booking=Booking::Where('booking_status',2)->count();
            $per_contracted_booking=round((float)$Contracted_booking/$total_booking * 100 ) . '%';
            $per_confirmed_booking=round((float)$confirmed_booking/$total_booking * 100 ) . '%';
            $per_unconfirmed_booking=round((float)$unconfirmed_booking/$total_booking * 100 ) . '%';
            $per_canceled_booking=round((float)$canceled_booking/$total_booking * 100 ) . '%';
            $booking_array=[
                $Contracted_booking,$confirmed_booking,$unconfirmed_booking,$canceled_booking
            ];
            $booking_array=json_encode($booking_array);
            $review = Review::join('tbl_booking','tbl_review.booking_id','=','tbl_booking.booking_id')
                ->join('tbl_customer','tbl_customer.customer_id','=','tbl_booking.customer_id')
                ->join('tbl_tour','tbl_tour.tour_id','=','tbl_booking.tour_id')
                ->orderby('tbl_review.review_id','desc')->get();
            $staff= Staff::join('tbl_position','tbl_position.position_id','=','tbl_staff.position_id')->get();
            return view('Admin_Views.AdminDashboard')
                ->with(compact('total_revenue','month_revenue','highest_month'))
                ->with(compact('first_part','second_part','third_part','fourth_part'))
                ->with(compact('total_contract','per_completed_contract','per_ongoing_contract','per_signed_contract','per_canceled_contract'))
                ->with(compact('total_booking','booking_array','per_contracted_booking','per_confirmed_booking','per_canceled_booking','per_unconfirmed_booking'))
                ->with(compact('review'))
                ->with(compact('staff'));
            /* echo $per_canceled_contract ;*/
        }
        else{
            Session::put('message','*you don\'t have this permission');
            return redirect()->back();
        }

    }
    public function dashboardkd(){

        if(Session::get('position_id')==3){
            $filter_by_year= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->get(); /*doanh thu của năm*/
           
            $total_revenue=Contract::where('contract_status',3)->whereyear('contract_date','=',Session::get('year_revenue'))->sum('contract_total_price');

            /*Thống kê số lượng hợp đồng và booking*/
            $total_custom=Custom::count();
            $unconfirmed_custom=Custom::where('custom_status',0)->count();
            $confirmed_custom=Custom::where('custom_status',1)->count();    
            $canceled_custom=Custom::where('custom_status',2)->count();
            $contracted_custom=Custom::where('custom_status',4)->count();
            $total_booking=Booking::count();
            $contracted_booking=Booking::Where('booking_status',4)->count();
            $confirmed_booking=Booking::Where('booking_status',1)->count();
            $unconfirmed_booking=Booking::Where('booking_status',0)->count();
            $canceled_booking=Booking::Where('booking_status',2)->count();
            $per_contracted_booking=round((float)$contracted_booking/$total_booking * 100 ) . '%';
            $per_confirmed_booking=round((float)$confirmed_booking/$total_booking * 100 ) . '%';
            $per_unconfirmed_booking=round((float)$unconfirmed_booking/$total_booking * 100 ) . '%';
            $per_canceled_booking=round((float)$canceled_booking/$total_booking * 100 ) . '%';
            $booking_array=[
                $contracted_booking,$confirmed_booking,$unconfirmed_booking,$canceled_booking
            ];
            $booking_array=json_encode($booking_array);
            return view('Admin_Views.KdDashboard')
            ->with(compact('total_custom','unconfirmed_custom','confirmed_custom','canceled_custom','contracted_custom'))
            ->with(compact('total_booking','booking_array','per_contracted_booking','per_confirmed_booking','per_canceled_booking','per_unconfirmed_booking'))
            ->with(compact('contracted_booking','confirmed_booking','canceled_booking','unconfirmed_booking'));
        }
        else{
            Session::put('message','*You don\'t have this permission');
            return redirect()->back();
        }

    }
    public function dashboardhd(){

        if(Session::get('position_id')==4){
            $filter_by_year= Contract::whereyear('contract_date','=',Session::get('year_revenue'))->get(); /*doanh thu của năm*/
           
            $total_revenue=Contract::where('contract_status',3)->whereyear('contract_date','=',Session::get('year_revenue'))->sum('contract_total_price');

            /*Thống kê số lượng hợp đồng và booking*/
            $total_custom=Custom::count();
            $unconfirmed_custom=Custom::where('custom_status',0)->count();
            $confirmed_custom=Custom::where('custom_status',1)->count(); 
            $canceled_custom=Custom::where('custom_status',2)->count();
            $contracted_custom=Custom::where('custom_status',4)->count();

            $total_contract=Contract::count();
            $completed_contract=Contract::where('contract_status',3)->count();
            $Completed_contract=$completed_contract/$total_contract;
            $ongoing_contract=Contract::where('contract_status',2)->count();
            $Ongoing_contract=$ongoing_contract/$total_contract;
            $signed_contract=Contract::where('contract_status',1)->count();
            $Signed_contract=$signed_contract/$total_contract;
            $canceled_contract=Contract::where('contract_status',0)->count();
            $Canceled_contract=$canceled_contract/$total_contract;
            $per_completed_contract = round((float)$Completed_contract * 100 ) . '%';
            $per_signed_contract = round((float)$Signed_contract * 100 ) . '%';
            $per_ongoing_contract =round((float)$Ongoing_contract * 100 ) . '%';
            $per_canceled_contract =round((float)$Canceled_contract * 100 ) . '%';
            
            return view('Admin_Views.HdDashboard')
            ->with(compact('total_contract','completed_contract','ongoing_contract','signed_contract','canceled_contract'))
            ->with(compact('total_contract','per_completed_contract','per_ongoing_contract','per_signed_contract','per_canceled_contract'));

        }
        else{
            Session::put('message','*You don\'t have this permission');
            return redirect()->back();
        }

    }
    public function contact(){
        $total_contract=Contract::count();
        $total_booking=Booking::count();
        $total_customer=Customer::count();
        return view('Page_Views.ContactPage')->with(compact('total_contract','total_booking','total_customer'));
    }
    public function select_year(Request $request){
        Session::put('year_revenue',$request['year']);
       return Redirect('dashboard');


    }
}