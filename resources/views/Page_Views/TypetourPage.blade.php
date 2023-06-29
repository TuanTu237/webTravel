@extends('Page_Views.Pages_Layout')
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{__('TYPE OF TOURS')}}</h3>
                        <p>{{__('Enjoy it your way')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

   @include('Page_Views.where_to_go_bar')

    <!-- Type of Vacation -->
    <div class="col-md-12 col-sm-12" style="padding-top:80px">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;text-align: center;font-family: 'Philosopher';font-weight: bolder">
                {{__('Choose your trip with Vietrip in our categories, we have the best and most suitable options for you, from romantic and dreamy honeymoon, relaxing but adventurous tours with your friends or family, to the memorable cultural and traditional tours to discover the life of the past… All selections depend on you, on your budget and your interests.')}}
            </h2>
        </div>
    </div>

    <div class="destination" style="padding-top: 100px!important;">
        <div class="container">
            <div class="thumbnail">
                <div class="row">
                    @foreach($Type as $key=>$type)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <a href="{{URL::to('/type-of-tour/'.$type->typetour_name_EN)}}">
                                <div class="test-item">
                                    <img  alt="" class="img-fluid lazyloaded" src="uploads/typetours/thumb/{{$type->typetour_thumb}}">
                                    <?php $lang_status = Session::get('language');
                                    if($lang_status!="en"){
                                    ?>
                                    <h2>{{$type->typetour_name_VI}}</h2>
                                    <?php
                                    }else {
                                    ?>
                                    <h2>{{$type->typetour_name_EN}}</h2>
                                    <?php
                                    }
                                    ?>

                                    <p>{{__('Explore')}}
                                    </p>
                                    <div class="bg-item"></div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>

        </div>
    </div>
    <!-- Type of Vacation end -->

    <!-- customize_area_start  -->
    <div class="bradcam_area overlay bradcam_bg_3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-10 ">
                            <p style="font-size: 30px;font-weight: initial">If you know what you want. . .</p>
                            <h3 style="color: white; font-size: 50px;font-weight:bolder ">CREATE YOUR BEST TRIP</h3>
                            <a href="#" class="genric-btn danger-border e-large" style="border-radius: 5px;" >Customize tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customize_area_end  -->
 {{--   <div class="recent_trip_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb_70">
                        <h3>Recent Trips</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/1.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/2.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_trip">
                        <div class="thumb">
                            <img src="img/trip/3.png" alt="">
                        </div>
                        <div class="info">
                            <div class="date">
                                <span>Oct 12, 2019</span>
                            </div>
                            <a href="#">
                                <h3>Journeys Are Best Measured In
                                    New Friends</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}


    <!--    script-->

@endsection
