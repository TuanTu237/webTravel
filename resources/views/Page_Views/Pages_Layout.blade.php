<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VIETRIP</title>
    <link rel="icon" type="image/png" size="20x10" href="{{asset('Pages/img/logo.jpg')}}">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->

    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet"
        href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/slicknav.css')}}">
    <link rel="stylesheet"
        href="{{asset('https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')}}">
    <link rel="stylesheet"
        href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('Pages/css/style.css')}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="{{URL::to('/')}}">
                                        <img style=" " src="{{asset('Pages/img/logo3.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="{{URL::to('/')}}">{{__('HOME')}}</a></li>
                                            <li><a class=""
                                                    href="{{URL::to('/destination')}}">{{__('DESTINATIONS')}}</a></li>
                                            <li><a class=""
                                                    href="{{URL::to('type-of-tour')}}">{{__('TYPE OF VACATION')}}</a>
                                            </li>
                                            <li><a class="" href="{{URL::to('post')}}">{{__('POST')}}</a></li>
                                            <li><a class="" href="{{URL::to('wishlist')}}">{{__('CUSTOM TOUR')}}</a>
                                            </li>
                                            {{--<li>
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                                
                                            </a>
                                            <ul class="submenu">
                                                <li><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us" style="font-size: 20px"></i> {{__('English')}}</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="flag-icon flag-icon-vn"
                                                        style="font-size: 20px"></i> {{__("Vietnamese")}}</a></li>
                                        </ul>
                                        </li>--}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_wrap d-flex align-items-center justify-content-end">
                                    <div class="number">
                                        <p>
                                            <li><a href="{{URL::to('/contact')}}">{{__('CONTACT')}}</a></li>
                                        </p>
                                    </div>
                                    <div class="social_links d-none d-xl-block">
                                        <ul>

                                            <li><a target="_blank" href="https://www.instagram.com"> <i
                                                        class="fa fa-instagram"></i> </a></li>
                                            <li><a target="_blank" href="https://www.facebook.com"> <i
                                                        class="fa fa-facebook"></i> </a></li>
                                            <?php $customer_id = Session::get('customer_id');
                        if($customer_id!=NULL){


                        ?>
                                            <li><a href="{{URL::to('/profile')}}">
                                                    <i class="fa fa-address-card fa-lg" aria-hidden="true"> </i></a>
                                            </li>
                                            <?php
                        }else {
                        ?>
                                            <li><a href="{{URL::to('/login-index')}}"> <i class="fa fa-user fa-lg"
                                                        aria-hidden="true"> </i></a></li>

                                            <?php
                        }
                        ?>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="seach_icon">
                                <a data-toggle="modal" data-target="#exampleModalCenter" href="">
                                    <i class="fa fa-search"></i>
                                </a>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- yield -->
    @yield('content')
    <!-- yield -->


    <!-- footer-start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="">
                                    <img src="{{asset('Pages/img/logo2.png')}}" alt="">
                                </a>
                            </div>
                            <p>1ST Floor, No 1 Dai Co Viet Street,<br> Bach Khoa District <br> Ha Noi, Viet Nam <br>
                                <a href="#">+84 0999912345</a> <br>
                                <a href="#">vietrip@gmail.com</a>
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com"
                                            target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Company
                            </h3>
                            <ul class="links">
                                <li><a href="{{URL::to('contact/')}}">{{__('About')}}</a></li>
                                <li><a href="{{URL::to('destination/')}}"> {{__('Destination')}}</a></li>
                                <li><a href="{{URL::to('type-of-tour/')}}">{{__('Type of Tour')}}</a></li>
                                <li><a href="{{URL::to('post/')}}"> {{__('Post')}}</a></li>
                                <li><a href="{{URL::to('wish-list/')}}"> {{__('Custom tour')}}</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                {{__('Popular Destination')}}
                            </h3>
                            <ul class="links double_links">
                                <li><a href="{{URL::to('destination/Halong')}}">Quảng Ninh</a></li>
                                <li><a href="{{URL::to('destination/Hanoi')}}">Hà Nội</a></li>
                                <li><a href="{{URL::to('destination/Ninhbinh')}}">Ninh Bình</a></li>
                                <li><a href="{{URL::to('destination/Danang')}}">Đà Nẵng</a></li>
                                <li><a href="{{URL::to('destination/Nhatrang')}}">Nha Trang</a></li>
                                <li><a href="{{URL::to('destination/Phuquoc')}}">Phú Quốc</a></li>
                                <li><a href="{{URL::to('destination/')}}">TP. Hồ Chí Minh</a></li>
                                <li><a href="{{URL::to('destination/')}}">Cần Thơ</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Instagram
                            </h3>
                            <div class="instagram_feed">
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/1.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/2.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/3.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/4.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/5.png')}}" alt="">
                                    </a>
                                </div>
                                <div class="single_insta">
                                    <a href="#">
                                        <img src="{{asset('Pages/img/instagram/6.png')}}" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"
                    style=" background-color: #FF4A52; border: none; position: fixed;bottom: 25px;right: 25px;display: none;"><i
                        style="color: white" class="fa fa-chevron-up"></i></a>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                            </script> All rights reserved | <a href="https://travel.vietnam" target="_blank">Viet
                                Trip </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- Modal -->
    <div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="serch_form">
                    <form action="{{URL::to('search-2')}}" method="get">
                        <input name="search_content" type="text"
                            placeholder="{{__('Name or Destination or Typetour')}}">
                        <button type="submit">search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- link that opens popup -->

    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js')}}"></script>
    {{--<script src="{{asset('https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js')}}">
    </script>--}}
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="{{asset('Pages/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{asset('Pages/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('Pages/js/popper.min.js')}}"></script>
    <script src="{{asset('Pages/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('Pages/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('Pages/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('Pages/js/ajax-form.js')}}"></script>
    <script src="{{asset('Pages/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Pages/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('Pages/js/scrollIt.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('Pages/js/wow.min.js')}}"></script>
    <script src="{{asset('Pages/js/nice-select.min.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('Pages/js/plugins.js')}}"></script>
    <script src="{{asset('Pages/js/gijgo.min.js')}}"></script>
    <script src="{{asset('Pages/js/slick.min.js')}}"></script>

    <!--contact js-->
    <script src="{{asset('Pages/js/contact.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.form.js')}}"></script>
    <script src="{{asset('Pages/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('Pages/js/mail-script.js')}}"></script>


    <script src="{{asset('Pages/js/main.js')}}"></script>
    <script>
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
            rightIcon: '<span class="fa fa-caret-down"></span>'
        }
    });
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function() {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
    </script>
    <script src="{{asset('Pages/ckeditor/ckeditor.js')}}"></script>
    <script>
    CKEDITOR.replace('ckeditor');
    CKEDITOR.replace('ckeditor4');
    </script>
</body>

</html>