@extends('Page_Views.Pages_Layout')
@section('content')
<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>About Us</h3>
                    <p>Pixel perfect design with awesome contents</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->

<div class="about_story">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="story_heading">
                    <h3>About us</h3>
                </div>
                <div class="row">
                    <div class="col-lg-11 offset-lg-1">
                        <div class="story_info">
                            <div class="row">
                            <div class="col-lg-8">
                                <b>Với sứ mệnh mang cho khách hàng những chuyến đi hấp dẫn và an toàn, công ty chúng tôi luôn nỗ lực để làm hài lòng quý khách</b>
                                </div>
                                <div class="col-lg-4">
                                    
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                                            <div class="media-body">
                                                <h3>HaNoi, VietNam.</h3>
                                                <p>1st floor, DaiCoViet street</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                                            <div class="media-body">
                                                <h3>+ 84 0999912345</h3>
                                                <p>Mon to Fri 9am to 6pm</p>
                                            </div>
                                        </div>
                                        <div class="media contact-info">
                                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                                            <div class="media-body">
                                                <h3>vietrip@gmail.com</h3>
                                                <p>Send us your query anytime!</p>
                                            </div>
                                        </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="story_thumb">
                            <div class="row">
                                
                                    <div class="thumb padd_1">
                                        <img src="{{('Pages/img/banner/newsletter.png')}}" alt="">
                                    </div>
                                
                                
                            </div>
                        </div>
                        <div class="counter_wrap">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="single_counter text-center">
                                        <h3 class="counter">{{$total_contract}}</h3>
                                        <p>Hợp đồng du lịch đã hoàn thành</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single_counter text-center">
                                        <h3 class="counter">{{$total_booking}}</h3>
                                        <p>Đơn booking đã được đặt</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4">
                                    <div class="single_counter text-center">
                                        <h3 class="counter">{{$total_customer}}</h3>
                                        <p>Khách hàng đã đăt hàng</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="video_area video_bg overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video_wrap text-center">
                    <h3>Enjoy Video</h3>
                    <div class="video_icon">
                    
                        <a class="popup-video video_play_button" href="https://www.youtube.com/watch?v=Au6LqK1UH8g">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="travel_variation_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{('Pages/img/svg_icon/1.svg')}}" alt="">
                    </div>
                    <h3>Comfortable Journey</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{('Pages/img/svg_icon/2.svg')}}" alt="">
                    </div>
                    <h3>Luxuries Hotel</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_travel text-center">
                    <div class="icon">
                        <img src="{{('Pages/img/svg_icon/3.svg')}}" alt="">
                    </div>
                    <h3>Travel Guide</h3>
                    <p>A wonderful serenity has taken to the possession of my entire soul.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- testimonial_area  -->
<div class="testimonial_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{('Pages/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported
                                        programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Jack</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{('Pages/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported
                                        programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Alex</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single_carousel">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="single_testmonial text-center">
                                    <div class="author_thumb">
                                        <img src="{{('Pages/img/testmonial/author.png" alt="">
                                    </div>
                                    <p>"Working in conjunction with humanitarian aid agencies, we have supported
                                        programmes to help alleviate human suffering.</p>
                                    <div class="testmonial_author">
                                        <h3>- Tom</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /testimonial_area  -->





<!-- ================ contact section end ================= -->
@endsection