@extends('Page_Views.Pages_Layout')
@section('content')

    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_2" style="background-image: url({{asset('Pages/img/banner/bradcam2.png')}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>{{__('Destinations')}}</h3>
                        <p>{{__('Southeast Asia at your feed')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    @include('Page_Views.where_to_go_bar')

    <!-- Destinations -->
    <div class="col-md-12 col-sm-12" style="padding-top:80px">
        <div class="container">
            <h2 class="wow fadeInUp" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;text-align: center;font-family: 'Philosopher';font-weight: bolder">
                {{__('It will be easy for you to take a trip with all our suggested ideas that helps your adventure become an unforgettable moment of a lifetime…')}}
            </h2>
        </div>
    </div>
    <div class="popular_destination_area">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[1]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">{{$dest[1]->destination_name_VI}} <a href="{{URL::to('/destination/'.$dest[1]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[2]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">{{$dest[2]->destination_name_VI}} <a href="{{URL::to('/destination/'.$dest[2]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb" >
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[3]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center" >{{$dest[3]->destination_name_VI}} <a  href="{{URL::to('/destination/'.$dest[3]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[4]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">{{$dest[4]->destination_name_VI}} <a href="{{URL::to('/destination/'.$dest[4]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[5]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">{{$dest[5]->destination_name_VI}} <a href="{{URL::to('/destination/'.$dest[5]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_destination">
                        <div class="thumb">
                            <img src="{{asset('uploads/destinations/thumb/'.$dest[6]->destination_thumb)}}" alt="">
                        </div>
                        <div class="content">
                            <p class="d-flex align-items-center">{{$dest[6]->destination_name_VI}} <a href="{{URL::to('/destination/'.$dest[6]->destination_name_EN)}}">  Xem ngay</a> </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    



    <!-- Destination end -->

    <!-- customize_area_start  -->
    <div class="bradcam_area overlay bradcam_bg_3">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-12">
                    <div class="row align-items-center">
                        <div class="col-lg-10 ">
                                <p style="font-size: 30px;font-weight: initial">If you know what you want. . .</p>
                                <h3 style="color: white; font-size: 50px;font-weight:bolder ">CREATE YOUR BEST TRIP</h3>
                                <a href="{{URL::to('wishlist')}}" class="genric-btn danger-border e-large" style="border-radius: 5px;" >Customize tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- customize_area_end  -->
   {{-- <div class="recent_trip_area">
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
@endsection

