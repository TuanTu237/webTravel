@extends('Page_Views.Pages_Layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




    <div class="bradcam_area bradcam_bg_2" style="background-image: url({{asset('uploads/destinations/banner/'.$dest->destination_banner)}});">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <?php $lang_status = Session::get('language');
                        if($lang_status!="en"){
                        ?>
                            <h3>{{$dest->destination_name_VI}}</h3>
                        <?php
                        }else {
                        ?>
                            <h3>{{$dest->destination_name_EN}}</h3>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->

    @include('Page_Views.where_to_go_bar')
    <div class="desc-dest" style="padding-top: 40px">
        <div class="container">
            <blockquote class="generic-blockquote">
            <?php $lang_status = Session::get('language');
            if($lang_status!="en"){
            ?>
            <p>{{$dest->destination_desc_VI}}</p>
            <?php
            }else {
            ?>
            <p>{{$dest->destination_desc_EN}}</p>
            <?php
            }
            ?>
            </blockquote>
        </div>
    </div>

    <div class="popular_places_area">
        <div class="container">
            <div class="" style="padding-bottom: 10px">
                <div class="filter_result_wrap">
                    <div class="filter_bordered">
                        <div class="filter_inner">
                            <div class="row">
                                <div class="col-4">
                                    <div class="search-filter">
                                            <i class="fa fa-search"></i>
                                            <input class="filter_input" type="text" id="search_name" placeholder="{{__('Name or Destination')}}" value="">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-sm-2">
                                    <button id="sort-by-name"  class="genric-btn primary-border sort-btn">
                                        <i value="1" id="sort-name-icon"  class="fa fa-sort-alpha-asc"></i>
                                    </button>
                                </div>
                                <div class="col-lg-1 col-sm-2">
                                    <button id="sort-by-price" class="genric-btn primary-border sort-btn">
                                        <i value="3" id="sort-price-icon" class="fa fa-sort-numeric-asc"></i>
                                    </button>
                                </div>
                                <div class="col-lg-1 col-sm-2">
                                    <button onclick="href='{{ Redirect::back()}}'"  class="genric-btn primary-border sort-btn">
                                        <i id="reset-sort-btn" class="fa fa-undo"></i>
                                    </button>
                                </div>
                                <div class="col-lg-2 col-sm-2">
                                    <i class="fa fa-tag"> Việt nam</i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="table_item">
                        @foreach($tour as $key=>$Tour)
                            <?php $lang_status = Session::get('language');
                            if($lang_status!="en"){
                            ?>
                                <div class="item_box col-lg-4 col-sm-6" price="{{$Tour->tour_price}}" name="{{$Tour->tour_name_VI}}">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$Tour->tour_thumb)}}" alt="">
                                            <a href=""  class="prise tour-price">{{number_format($Tour->tour_price). ' VNĐ'}}</a>
                                        </div>
                                        <div class="place_info">
                                            <a class="tour-name"  href="{{URL::to('/tour/'.$Tour->tour_name_EN)}}"><h3> {{ str_limit($Tour->tour_name_VI, $limit = 150, $end = '...') }}{{ Str::limit($Tour->tour_name_EN, 10) }}</h3></a>
                                            <p >{{$dest->destination_name_VI}}</p>
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
                                                    <a href="">{{$Tour->tour_day}} {{__('Days')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }else {
                            ?>
                                <div class="item_box col-lg-4 col-sm-6" price="{{$Tour->tour_price}}" name="{{$Tour->tour_name_EN}}">
                                    <div class="single_place">
                                        <div class="thumb">
                                            <img src="{{asset('uploads/tours/thumb/'.$Tour->tour_thumb)}}" alt="">
                                            <a href="" class="prise tour-price">{{number_format($Tour->tour_price). ' VNĐ'}}</a>
                                        </div>
                                        <div class="place_info">
                                            <a class="tour-name"   href="{{URL::to('/tour/'.$Tour->tour_name_EN)}}"><h3>{{ str_limit($Tour->tour_name_EN, 20) }}</h3></a>
                                            <p>{{$dest->destination_name_EN}}</p>
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
                                                    <a href="#">{{$Tour->tour_day}} {{__('Days')}}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>

                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_place_btn text-center">
                                <a class="boxed-btn4" href="#">More Places</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- newletter_area_start  -->
    <div class="newletter_area overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-10">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="newsletter_text">
                                <h4>Subscribe Our Newsletter</h4>
                                <p>Subscribe newsletter to get offers and about
                                    new places to discover.</p>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="mail_form">
                                <div class="row no-gutters">
                                    <div class="col-lg-9 col-md-8">
                                        <div class="newsletter_field">
                                            <input type="email" placeholder="Your mail" >
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4">
                                        <div class="newsletter_btn">
                                            <button class="boxed-btn4 " type="submit" >Subscribe</button>
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
    <!-- newletter_area_end  -->
    <div class="recent_trip_area">
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
                            <img src="{{'Pages/img/trip/1.png'}}" alt="">
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
                            <img src="{{'Pages/img/trip/2.png'}}" alt="">
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
                            <img src="{{'Pages/img/trip/3.png'}}" alt="">
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
    </div>


















    <script>
        function ResetFilter(){
            document.getElementById("search_name").value='';
            document.getElementById("search_destination").value='';
            $("#table_item .item_box ").filter().reset();

        }
        $(document).ready(function(){
            $("#search_name").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#table_item .item_box  ").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            /*
            * value=1 theo az
            * =2 theo tên za
            * =3 theo giá tăng dần
            * =4 theo giá giảm dần*/
            $("#sort-by-name").click(function () {
                if ($("#sort-name-icon").attr("value")==1){
                    $("#sort-name-icon").removeClass("fa-sort-alpha-asc").addClass("fa-sort-alpha-desc");
                    $("#sort-name-icon").attr("value","2");

                    var result = $(".item_box").sort(function (a,b) {
                        var contentA =parseInt($(a).attr('name').charCodeAt(0));
                        var contentB =parseInt($(b).attr('name').charCodeAt(0));
                        return (contentA > contentB) ? -1 : (contentA < contentB) ? 1 : 0;
                    })
                    $('#table_item').html(result);
                }
                else{
                    $("#sort-name-icon").removeClass("fa-sort-alpha-desc").addClass("fa-sort-alpha-asc");
                    $("#sort-name-icon").attr("value","1");
                    var result = $(".item_box").sort(function (a,b) {
                        var contentA =parseInt($(a).attr('name').charCodeAt(0));
                        var contentB =parseInt($(b).attr('name').charCodeAt(0));
                        return (contentA > contentB) ? 1 : (contentA < contentB) ? -1 : 0;
                    })
                    $('#table_item').html(result);
                }
            });
            $("#sort-by-price").click(function () {
                if ($("#sort-price-icon").attr("value")==3){
                    $("#sort-price-icon").removeClass("fa-sort-numeric-asc").addClass("fa-sort-numeric-desc");
                    $("#sort-price-icon").attr("value","4");
                    var result = $(".item_box").sort(function (a,b) {
                        var contentA =parseFloat( $(a).attr('price'));
                        var contentB =parseFloat( $(b).attr('price'));
                        return (contentA > contentB) ? -1 : (contentA < contentB) ? 1 : 0;
                    })
                    $('#table_item').html(result);

                }
                else{
                    $("#sort-price-icon").removeClass("fa-sort-numeric-desc").addClass("fa-sort-numeric-asc");
                    $("#sort-price-icon").attr("value","3");
                    var result = $(".item_box").sort(function (a,b) {
                        var contentA =parseFloat( $(a).attr('price'));
                        var contentB =parseFloat( $(b).attr('price'));
                        return (contentA < contentB) ? -1 : (contentA > contentB) ? 1 : 0;
                    })
                    $('#table_item').html(result);
                }
            });
        });

    </script>
@endsection
