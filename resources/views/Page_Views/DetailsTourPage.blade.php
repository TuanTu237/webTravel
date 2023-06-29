@extends('Page_Views.Pages_Layout')
@section('content')
<div class="destination_banner_wrap overlay"
    style="background-image: url('{{asset('uploads/tours/banner/'.$tour->tour_banner)}}') ">
    <div class="destination_text text-center">
        <?php $lang_status = Session::get('language');
            if($lang_status!="en"){
            ?>
        <h3>{{$tour->tour_name_VI}}</h3>
        <p>{{$tour->tour_desc_VI}}</p>
        <?php
            }else {
            ?>
        <h3>{{$tour->tour_name_EN}}</h3>
        <p>{{$tour->tour_desc_EN}}</p>
        <?php
            }
            ?>

    </div>
</div>
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
                        <span class="tour_name">{{__('Thời gian ')}}: </span><b> {{$tour->tour_day}} {{__('ngày')}}
                            {{$tour->tour_night}} {{__('đêm')}}</b>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        <span class="tour_name">{{__('Cấp độ dịch')}}: </span> <b> {{$tour->tour_covid}}</b>
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
                        <span class="tour_name">{{__('Nơi khởi hành')}}: </span> <b> {{$tour->tour_departure}}</b>
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
                        <span class="tour_name">{{__('Nơi đến')}}: </span> <b> {{$tour->tour_arrival}}</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span class="tour_name">{{__('Khởi hành')}}: </span> <b>
                            {{date('d-m-Y', strtotime($tour->tour_date))}}</b>
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
                        <span class="tour_name">{{__('Lịch trình')}}: </span> <b> {{$tour->tour_sche}}</b>
                    </div>
                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span class="tour_name">{{__('Số chỗ còn nhận')}}: </span> <b> {{$tour->tour_slot}}</b>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="destination_details_info" style="padding-bottom: 40px;padding-top: 40px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-9">
                {{--picture--}}
                <div class="section-top-border">

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
            </div>
        </div>
    </div>
</div>
<hr id="fix_form">
<div style="padding-bottom: 0px" class="destination_details_info">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">

                    {{--schedule--}}
                    <div class="detail-tour">
                        <section>
                            <div class="accordion-container block ">
                                <div class="category-faq">
                                    <h3>{{__('Lịch trình')}}</h3>
                                </div>
                                <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                    @foreach($schedule as $key=>$Schedule)
                                    <div class="panel panel-default">
                                        <a role="button" class="item-question collapsed" data-toggle="collapse"
                                            href="#{{$Schedule->tour_schedule_number}}" aria-expanded="false"
                                            aria-controls="collapse1a">
                                            {{__('Ngày-')}} {{$key+1}}
                                        </a>
                                        <div id="{{$Schedule->tour_schedule_number}}" class="panel-collapse collapse"
                                            role="tabpanel">
                                            <div class="panel-body">
                                                {!! nl2br(e($Schedule->tour_schedule_content))!!};

                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>

                    </div>
                    {{--end schedule--}}
                    <div class="bordered_1px"></div>
                    {{--service--}}
                    <div class="destination_info">
                        <h2>{{__('Dịch vụ')}}</h2>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-4">
                                <h4>{{__('Combo bao gồm')}}:</h4>
                            </div>
                            <div class="col-8">
                                {!! nl2br(e($tour->tour_service_in))!!};
                            </div>
                        </div>
                        <br> <br>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-4">
                                <h4>{{__('Combo không bao gồm')}}:</h4>
                            </div>
                            <div class="col-8">
                                {!! nl2br(e($tour->tour_service_ex))!!};
                            </div>

                        </div>


                    </div>
                    {{--end service--}}
                    <div class="bordered_1px"></div>
                    {{--price--}}
                    <div class="destination_info">
                        <h2>{{__('Bảng tính giá')}}</h2>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-4">
                                <h4>{{__('Người lớn trên 12 tuổi')}}:</h4>
                            </div>
                            <div class="col-8">
                                {{number_format($tour->tour_adult_price). ' VNĐ'}}
                            </div>
                        </div>
                        <br>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-4">
                                <h4>{{__('Trẻ em từ 2 đến 12 tuổi')}}:</h4>
                            </div>
                            <div class="col-8">
                                {{number_format($tour->tour_child_price). ' VNĐ'}}
                            </div>

                        </div>
                        <br>
                        <div class="row" style="padding-left: 20px">
                            <div class="col-4">
                                <h4>{{__('Em bé dưới 2 tuổi')}}:</h4>
                            </div>
                            <div class="col-8">
                                {{number_format(0). ' VNĐ'}}
                            </div>

                        </div>

                    </div>
                    {{--end price--}}
                    <div class="bordered_1px" id="fix2_form"></div>

                    <div class="map-on-google">
                        <iframe src="{{$tour->tour_map}}" width="100%" height="480"></iframe>
                    </div>
                    <div style="padding: 25px"></div>
                    {{--highlight--}}
                    <div class="destination_info">
                        <h2>{{__('Highlight')}}</h2>
                        <div class="row" style="padding-left: 20px">

                            @foreach($tour_highlight as $Tour_highlight)
                            <?php $lang_status = Session::get('language');
                                    if($lang_status!="en"){
                                    ?>
                            <div class="col-lg-3 col-sm-4">
                                <img style="margin-top: -8px"
                                    src="{{asset('uploads/highlight/'.$Tour_highlight->highlight_img)}}" />
                                {{$Tour_highlight->highlight_name_VI}}
                            </div>
                            <?php
                                    }else {
                                    ?>
                            <div class="col-lg-3 col-sm-4">
                                <img style="margin-top: -8px"
                                    src="{{asset('uploads/highlight/'.$Tour_highlight->highlight_img)}}" />
                                {{$Tour_highlight->highlight_name_EN}}
                            </div>
                            <?php
                                    }
                                    ?>
                            @endforeach
                        </div>


                    </div>
                    {{--end highlight--}}
                    <div class="bordered_1px"></div>


                    {{--Giá chỉ từ--}}

                </div>
                {{--form booking--}}
                <div class="col-lg-4 col-md-9">
                    <div id="form_to_book" style="position: sticky;top: -100px">
                        <div class="container">
                            <div class="cost_from">
                                <div class="sample-text">
                                    {{__('No')}} <del>{{__('bank fee')}}.</del>
                                    {{__('Travelling with us The Real Deal with Personal Service')}}
                                    <h3><b>{{__('From')}}: {{number_format($tour->tour_price). ' VNĐ'}}</b></h3>

                                    <sup>{{__('The price includes all services')}}</sup>
                                </div>
                            </div>
                        </div>

                        <div class="section-top-border">
                            <h3 class="mb-30">{{__('Tổng quan')}}</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <blockquote class="generic-blockquote">

                                        <?php $lang_status = Session::get('language');
                                    if($lang_status!="en"){
                                    ?>
                                        <div class="text-body ">
                                            {!!$tour->tour_overview_VI!!}
                                        </div>
                                        <?php
                                    }else {
                                    ?>
                                        <p>{{$tour->tour_overview_EN}}</p>
                                        <?php
                                    }
                                    ?>

                                    </blockquote>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <a href="{{URL::to('/book-form/'.$tour->tour_name_VI)}}" class="boxed-btn4">Đặt Ngay</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<hr>
<div class="container">
    <div class="category-faq">
        <h3>
            <div class="row">
                {{__('Comments and Rates')}}
                <?php $rate =(int)$rate ?>
                <div style="padding-left: 10px">
                    @if($rate==1)
                    <div class="comment-footer" style="color: red">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>


                    </div>
                    @elseif($rate==2)
                    <div class="comment-footer" style="color: red">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    @elseif($rate==3)
                    <div class="comment-footer" style="color: red">


                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>

                    @elseif($rate==4)
                    <div class="comment-footer" style="color: red">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    @else
                    <div class="comment-footer" style="color: red">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>
                    @endif
                </div>
            </div>
        </h3>
    </div>
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

        @foreach($review as $review)
        <hr>
        <div class="d-flex flex-row comment-row m-t-0">
            <div class="comment-text w-100">
                <span class="m-b-15 d-block"><i>{{$review->review_comment}}</i></span>
                <div class="row" style="padding-left: 15px">
                    @if($review->review_rating==1)
                    <div class="comment-footer" style="color: red">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>


                    </div>
                    @elseif($review->review_rating==2)
                    <div class="comment-footer" style="color: red">

                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    @elseif($review->review_rating==3)
                    <div class="comment-footer" style="color: red">


                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>

                    </div>

                    @elseif($review->review_rating==4)
                    <div class="comment-footer" style="color: red">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>

                    </div>
                    @else
                    <div class="comment-footer" style="color: red">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>

                    </div>
                    @endif
                    <span style="margin-left: 20px" class="text-muted float-left">
                        {{date('d-m-Y', strtotime($review->created_at))}}</span>
                </div>

                <h6 style="font-weight: bolder;" class="font-medium">{{$review->customer_name}}</h6>
            </div>
        </div>
        <hr>
        @endforeach

    </div>
</div>
<hr>
@if($related_tour->count()==6)
<div class="popular_places_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb_70">
                    <h3>{{__('Other Tours')}}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[0]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[0]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[0]->tour_name_EN)}}">
                                                <h3>{{$related_tour[0]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[0]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[0]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[0]->tour_name_EN)}}">
                                                <h3>{{$related_tour[0]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[0]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[0]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[0]->tour_day}} {{__('days')}}
                                                        {{$related_tour[0]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[1]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[1]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[1]->tour_name_EN)}}">
                                                <h3>{{$related_tour[1]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[1]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[1]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[1]->tour_name_EN)}}">
                                                <h3>{{$related_tour[1]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[1]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[1]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[1]->tour_day}} {{__('days')}}
                                                        {{$related_tour[1]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[2]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[2]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[2]->tour_name_EN)}}">
                                                <h3>{{$related_tour[2]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[2]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[2]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[2]->tour_name_EN)}}">
                                                <h3>{{$related_tour[2]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[2]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[2]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[2]->tour_day}} {{__('days')}}
                                                        {{$related_tour[2]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[3]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[3]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[3]->tour_name_EN)}}">
                                                <h3>{{$related_tour[3]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[0]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[3]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[3]->tour_name_EN)}}">
                                                <h3>{{$related_tour[3]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[3]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[3]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[3]->tour_day}} {{__('days')}}
                                                        {{$related_tour[3]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[4]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[4]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[4]->tour_name_EN)}}">
                                                <h3>{{$related_tour[4]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[4]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[4]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[4]->tour_name_EN)}}">
                                                <h3>{{$related_tour[4]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[4]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[4]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[4]->tour_day}} {{__('days')}}
                                                        {{$related_tour[4]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$related_tour[5]->tour_thumb)}}"
                                                alt="">
                                            <a href="#" class="prise">{{$related_tour[5]->tour_price}}</a>
                                        </div>
                                        <div class="place_info">
                                            <?php $lang_status = Session::get('language');
                                                    if($lang_status!="en"){
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[5]->tour_name_EN)}}">
                                                <h3>{{$related_tour[5]->tour_name_VI}}</h3>
                                            </a>
                                            <div class="row">
                                                <p class="col-6">{{$related_tour[5]->destination_name_VI}}</p>
                                                <p class="col-6" style="text-align: center">
                                                    {{$related_tour[5]->typetour_name_VI}}</p>
                                            </div>
                                            <?php
                                                    }else {
                                                    ?>
                                            <a href="{{URL::to('/tour/'.$related_tour[5]->tour_name_EN)}}">
                                                <h3>{{$related_tour[5]->tour_name_EN}}</h3>
                                            </a>
                                            <p class="col-6">{{$related_tour[5]->destination_name_EN}}</p>
                                            <p class="col-6" style="text-align: center">
                                                {{$related_tour[5]->typetour_name_EN}}</p>
                                            <?php
                                                    }
                                                    ?>

                                            <div class="rating_days d-flex justify-content-between">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <a href="#">(20 Review)</a>
                                                </span>
                                                <div class="days">
                                                    <i class="fa fa-clock-o"></i>
                                                    <a href="#">{{$related_tour[5]->tour_day}} {{__('days')}}
                                                        {{$related_tour[5]->tour_night}} {{__('nights')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
@endif
<div class="why_book_us">
    <div class="why_book_us_text">
        <h1>Why Book Us</h1>
    </div>
    <div class="why_book_us_background">
        <div class="container">
            <div class="row">
                <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                    <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/Icon_bestprice.png"
                        alt="" class=" ls-is-cached lazyloaded"
                        src="https://www.asiaeyestravel.com/template/public/images/whybook/Icon_bestprice.png">
                    <div class="review-content">{{__('Best Price')}} </div>
                    <div class="review-content2">{{__('Save your costs')}}</div>
                </div>
                <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                    <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_support.png"
                        alt="" class=" ls-is-cached lazyloaded"
                        src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_support.png">
                    <div class="review-content">{{__('Always support')}}</div>
                    <div class="review-content2">{{__('Close and continuous attention throughout the trip')}}</div>
                </div>
                <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                    <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_circlestar.png"
                        alt="" class=" lazyloaded"
                        src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_circlestar.png">
                    <div class="review-content">{{__('Easy customize')}}</div>
                    <div class="review-content2">{{__('Exclusive customized trips so that nothing is missing')}}
                    </div>
                </div>
                <div class=" col-md-3 col-sm-6  best_price wow fadeInUp " data-wow-duration="2500ms">
                    <img data-src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_verified.png"
                        alt="" class=" lazyloaded"
                        src="https://www.asiaeyestravel.com/template/public/images/whybook/icon_verified.png">
                    <div class="review-content">{{__('Indigenous collaborators')}}</div>
                    <div class="review-content2">{{__('Local agency with a professional and accessible team')}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function onlyNumberKey(evt) {
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode
    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
        return false;
    return true;
}
</script>
@endsection