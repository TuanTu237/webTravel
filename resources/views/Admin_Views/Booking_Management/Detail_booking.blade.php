@extends('Admin_Views.Admin_Layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{__('Booking Details')}}</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Booking')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <form role="form" action="{{URL::to('/update-booking')}}" method="post" enctype="multipart/form-data">
                {{csrf_field() }}
                <input hidden="" name="booking_id" value="{{$booking->booking_id}}">
                <div class="card-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('BOOKING DETAILS')}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Booking code")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    placeholder="{{$booking->booking_code}}" name="booking_code" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <a href="{{URL::to('')}}"><label for="com1"
                                        class="control-label col-form-label">{{__("Tour booking")}}</label></a>
                                <?php $lang_status = Session::get('language');
                                        if($lang_status!="en"){
                                        ?>
                                <input type="text" class="form-control" id="com1"
                                    placeholder="{{$booking->tour_name_VI}}" name="tour_name" disabled>
                                <?php
                                        }else {
                                        ?>
                                <input type="text" class="form-control" id="com11"
                                    placeholder="{{$booking->tour_name_EN}}" name="tour_name" disabled>
                                <?php
                                        }
                                        ?>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="emp1" class="control-label col-form-label">{{__("Booking status")}}</label>
                                <select class="form-control" name="booking_status">
                                    @if($booking->booking_status==0)
                                    <option value="0" selected>{{__('Unconfirmed')}}</option>
                                    <option value="1">{{__('Confirmed')}}</option>
                                    <option value="2">{{__('Canceled')}}</option>
                                    @elseif($booking->booking_status==1)
                                    <option value="0">{{__('Unconfirmed')}}</option>
                                    <option value="1" selected>{{__('Confirmed')}}</option>
                                    <option value="2">{{__('Canceled')}}</option>
                                    @elseif($booking->booking_status==2)
                                    <option value="0">{{__('Unconfirmed')}}</option>
                                    <option value="1">{{__('Confirmed')}}</option>
                                    <option value="2" selected>{{__('Canceled')}}</option>
                                    @else
                                    <option value="4" selected>{{__('Contracted')}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                       
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Tour slots")}}</label>
                                <input  min="0" type="number" class="form-control input" value="{{$booking->tour_slot}}"
                                    name="tour_slot">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Number Adult")}}</label>
                                <input min="1" type="number" class="form-control input"
                                    value="{{$booking->booking_customer_adult}}" name="booking_customer_adult">
                                <input disabled type="text" class="form-control input "
                                    value="{{number_format($booking->tour_adult_price). ' VNĐ'}}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Number Child")}}</label>
                                <input min="0" type="number" class="form-control input"
                                    value="{{$booking->booking_customer_child}}" name="booking_customer_child">
                                <input disabled type="text" class="form-control input"
                                    value="{{number_format($booking->tour_child_price). ' VNĐ'}}">

                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Number Ifant")}}</label>
                                <input min="0" type="number" class="form-control input"
                                    value="{{$booking->booking_customer_ifant}}" name="booking_customer_ifant">
                                <input disabled type="text" class="form-control input "
                                    value="{{number_format(0). ' VNĐ'}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Tour base price")}}</label>
                                <input type="text" disabled class="form-control input"
                                    value="{{number_format($booking->tour_price). ' VNĐ'}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <?php
                                $a = (float)$booking->booking_customer_adult;
                                $c = (float)$booking->booking_customer_child;
                                $i = (float)$booking->booking_customer_ifant;
                                $ap = (float)$booking->tour_adult_price;
                                $cp = (float)$booking->tour_child_price;
                                $bp = (float)$booking->tour_price;
                                $booking_total_price = $a*$ap + $c*$cp +$bp;
                                ?>
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Total price")}}</label>
                                <input type="text" class="form-control input" value="{{$booking_total_price}}"
                                    name="booking_total_price">

                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #b2b9bf ;margin-top: 25px">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Customer Name")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    value="{{$booking->booking_customer_name}}" name="booking_customer_name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Customer Email")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    value="{{$booking->booking_customer_email}}" name="booking_customer_email">
                            </div>
                        </div>
                        <label class="control-label col-form-label col-4">{{__("Customer Phone")}}</label>
                        <label class="control-label col-form-label col-4">{{__("Customer Address")}}</label>
                        <label class="control-label col-form-label col-4">{{__("Customer Nationality")}}</label>
                        <div class="col-2">
                            <div class="form-group">
                                <select class="form-control" name="booking_customer_phone_domain">
                                    <option>{{$booking->booking_customer_phone_domain}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-group">
                                <input type="text" class="form-control" id="phone"
                                    value=" {{$booking->booking_customer_phone_number}}"
                                    name="booking_customer_phone_number">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" value=" {{$booking->booking_customer_address}}"
                                    name="booking_customer_address">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <input type="text" class="form-control" id="com1"
                                    value="{{$booking->booking_customer_nationality}}"
                                    name="booking_customer_nationality">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Booking date")}}</label>
                                <input type="date" class="form-control input" id="com1"
                                    value="{{$booking->booking_date}}" name="booking_date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Request date")}}</label>
                                <input type="text" class="form-control input" id="com1" value="{{$booking->created_at}}"
                                    name="" disabled>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Booking message")}}</label>
                                <textarea class="form-control" id="exampleTextarea12" rows="4"
                                    data-value="{{$booking->booking_customer_message}}"
                                    placeholder="{{$booking->booking_customer_message}}"
                                    name="booking_customer_message">{{$booking->booking_customer_message}}</textarea>
                            </div>
                        </div>
                        <div class="col=lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-md-flex align-items-center">
                                        <div>
                                            <h4 class="card-title">{{__('Customer contact history')}}</h4>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table no-wrap v-middle">
                                            <thead>
                                                <tr class="border-0">
                                                    <th class="border-0">{{__('Lịch sử liên lạc')}}</th>
                                                    <th class="border-0">{{__('Thời gian')}}</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($booking_history as $key =>$b)
                                                <tr>
                                                    
                                                    <td><div class="text--content">{!!$b->booking_history_content!!}</div></td>
                                                    <td>{!!$b->created_at!!}</td>
                                                    
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label
                                    class="control-label col-form-label">{{__('Add customer contact history ')}}</label>
                                <textarea class="form-control" rows="4" required id="editor7"
                                    name="booking_history_content"></textarea>
                            </div>
                        </div>


                    </div>

                </div>
                <hr>
                <div class="card-body">
                    <div class="action-form">
                        <div class="form-group m-b-0 text-center">
                            <div></div>
                            <button type="submit"
                                class="btn-enable btn btn-info waves-effect waves-light">{{__('Save')}}</button>
                            <a href="{{URL::to('list-booking/'.$booking->booking_status)}}"
                                class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
var editor = CKEDITOR.replace( 'editor7', {
    language: 'en',
    extraPlugins: 'notification'
});

editor.on( 'required', function( evt ) {
    editor.showNotification( 'This field is required.', 'warning' );
    evt.cancel();
} );
</script>
@endsection