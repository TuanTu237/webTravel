@extends('Page_Views.Pages_Layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="destination_details_info" style="padding-bottom: 40px;padding-top: 40px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-9">
                <div class="row">
                    <?php $lang_status = Session::get('language');
                        if($lang_status!="en"){
                        ?>
                    <h2>{{$tour->tour_name_VI}}</h2>
                    <?php
                        }else {
                        ?>
                    <h2>{{$tour->tour_name_EN}}</h2>
                    <?php
                        }
                        ?>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ff4a52">
                                    <path
                                        d="M64.5,7.16667v14.33333h43v-14.33333zM135.87272,20.01628l-9.26627,10.93197l21.13606,17.91667l9.26628,-10.93197zM86,28.66667c-35.561,0 -64.5,28.939 -64.5,64.5c0,35.561 28.939,64.5 64.5,64.5c35.561,0 64.5,-28.939 64.5,-64.5c0,-35.561 -28.939,-64.5 -64.5,-64.5zM78.83333,50.16667h14.33333v50.16667h-14.33333z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="tour_name">{{__('Thời gian ')}}: </span><span> {{$tour->tour_day}} {{__('ngay')}}
                            {{$tour->tour_night}} {{__('dem')}}</span>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ff4a52">
                                    <path
                                        d="M86,14.33333c-27.70633,0 -50.16667,22.46033 -50.16667,50.16667c0,35.83333 50.16667,93.16667 50.16667,93.16667c0,0 50.16667,-57.33333 50.16667,-93.16667c0,-27.70633 -22.46033,-50.16667 -50.16667,-50.16667zM86,82.41667c-9.89717,0 -17.91667,-8.0195 -17.91667,-17.91667c0,-9.89717 8.0195,-17.91667 17.91667,-17.91667c9.89717,0 17.91667,8.0195 17.91667,17.91667c0,9.89717 -8.0195,17.91667 -17.91667,17.91667z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="tour_name">{{__('Cấp độ dịch')}}: </span> <span> {{$tour->tour_covid}}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ff4a52">
                                    <path
                                        d="M57.92122,22.31185l-12.97559,3.91927l28.65267,49.9987l-36.50521,9.63021l-12.96159,-10.88997l-9.79818,2.92545l18.36458,31.34017l116.05241,-30.55632c0.01401,-0.00464 0.02801,-0.00931 0.042,-0.014c5.13237,-0.90944 8.87286,-5.36971 8.87435,-10.58203c0,-5.93706 -4.81294,-10.75 -10.75,-10.75c-0.93573,0.00017 -1.86743,0.12252 -2.77149,0.36393v-0.014l-37.48503,9.86816zM21.5,129v14.33333h129v-14.33333z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="tour_name">{{__('Nơi khởi hành')}}: </span> <span> {{$tour->tour_departure}}</span>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                            viewBox="0 0 172 172" style=" fill:#000000;">
                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                                font-family="none" font-weight="none" font-size="none" text-anchor="none"
                                style="mix-blend-mode: normal">
                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                <g fill="#ff4a52">
                                    <path
                                        d="M71.66667,17.2028v57.5013l-35.23145,-9.28027l-5.9069,-15.88704l-9.02832,-2.04362v36.21127l115.73047,30.68229v-0.028c0.82473,0.20179 1.67047,0.30516 2.51953,0.30794c5.93706,0 10.75,-4.81294 10.75,-10.75c-0.00126,-5.15347 -3.65959,-9.58105 -8.72038,-10.55403l-35.79134,-9.57422l-20.10026,-63.3942zM21.5,136.16667v14.33333h129v-14.33333z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                        <span class="tour_name">{{__('Nơi đến')}}: </span> <span> {{$tour->tour_arrival}}</span>
                    </div>
                </div>
                <div class="tour_location">
                    <div class="tour_hightlight_body">
                        <ul class="tour_item">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ff4a52">
                                            <path
                                                d="M86,14.33333c-27.70633,0 -50.16667,22.46033 -50.16667,50.16667c0,35.83333 50.16667,93.16667 50.16667,93.16667c0,0 50.16667,-57.33333 50.16667,-93.16667c0,-27.70633 -22.46033,-50.16667 -50.16667,-50.16667zM86,82.41667c-9.89717,0 -17.91667,-8.0195 -17.91667,-17.91667c0,-9.89717 8.0195,-17.91667 17.91667,-17.91667c9.89717,0 17.91667,8.0195 17.91667,17.91667c0,9.89717 -8.0195,17.91667 -17.91667,17.91667z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                            </li>
                            <li>
                                {{$tour->tour_sche}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr id="fix_form">
<div style="padding-bottom: 0px" class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div id="form_to_book">
                    <div class="contact_join">
                        <h3>{{__('CUSTOMER INFOR')}}</h3>
                        <input type="hidden" name="tour_id" value="{{$tour->tour_id}}">
                        <input type="hidden" name="destination_name_EN" value="{{$tour->destination_name_EN}}">
                        <input type="hidden" name="typetour_id" value="{{$tour->typetour_id}}">
                        <div class="mt-10">
                            <input disabled type="text" name="booking_customer_name"
                                value="{{$booking->booking_customer_name}}" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('Full Name')}}'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <input disabled type="email" name="booking_customer_email"
                                value="{{$booking->booking_customer_email}}" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('Email address')}}'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                            <input disabled type="text" name="booking_customer_address"
                                value="{{$booking->booking_customer_address}}" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('Address')}}'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                            <input disabled type="text" name="booking_customer_address"
                                value="{{$booking->booking_customer_nationality}}" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('Address')}}'" required class="single-input">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <input disabled type="text" name="booking_customer_address"
                                value="{{$booking->booking_customer_phone_number}}" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = '{{__('Address')}}'" required class="single-input">
                        </div>
                        <div class="mt-10">
                            <div class="form-group row">
                                <div class="col-2">
                                    <label style="padding-left: 30px;font-weight: 500;padding-top: 10px">{{__('DATE')}}</label>
                                </div>
                                <div class="col-10">
                                    <input disabled style="display: block;
                                                          width: 100%;
                                                          line-height: 40px;
                                                          border: none;
                                                          outline: none;
                                                          background: #f9f9ff;
                                                          padding: 0 20px;
                                                          resize: none;" class="form-control" type="date"
                                        value="{{$booking->booking_date}}" id="example-datetime-local-input"
                                        name="booking_date">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <textarea disabled class="single-textarea" value="booking_customer_message"
                                onblur="this.placeholder = '{{__('Message')}}'"
                                name="booking_customer_message"></textarea>
                        </div>
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-4">BOOKING CODE:</div>
                                <div class="col-8">
                                    <input disabled type="email" name="booking_code" value="{{$booking->booking_code}}"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('')}}'"
                                        required class="single-input">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-4">TRỊ GIÁ BOOKING :</div>
                                <div class="col-8">
                                    <input disabled type="email" name="booking_code"
                                        value="{{number_format($booking->booking_total_price). ' VNĐ'}}"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('')}}'"
                                        required class="single-input">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="how-it-work" style="margin-top: 20px">
                        <div class="container">



                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-9">
                {{--picture--}}
                <div class="section-top-border" style="padding-top: 0px;">
                    <h3>{{__('Some pictures')}}</h3>
                    <div class="row gallery-item">
                        <div class="col-md-6">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img1)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background-image: url('{{asset('uploads/tours/img/'.$tour->tour_img1)}}')">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img2)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img2)}}');"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img3)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img3)}}');"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img4)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img4)}}');"></div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img5)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img5)}}');"></div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <a href="{{asset('uploads/tours/img/'.$tour->tour_img6)}}" class="img-pop-up">
                                <div class="single-gallery-image"
                                    style="background: url('{{asset('uploads/tours/img/'.$tour->tour_img6)}}');"></div>
                            </a>
                        </div>

                    </div>
                </div>
                {{-- end picture--}}
                {{--Giá chỉ từ--}}

            </div>
            {{--form booking--}}
        </div>
    </div>
</div>
<hr>
@endsection