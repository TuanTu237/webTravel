@extends('Admin_Views.Admin_Layout')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   {{-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>--}}

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <input id="year-from-session" type="hidden" value="{{Session::get('year_revenue')}}">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Dashboard')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page"></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- <div class="col-7 align-self-center">
                <div class="d-flex no-block justify-content-end align-items-center">
                    <div class="m-r-10">
                        <div class="lastmonth"></div>
                    </div>
                    <div class=""><small>lastmon </small>
                        <h4 class="text-info m-b-0 font-medium">$58,256</h4></div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" style="margin-bottom: 30px">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">Phân tích bán hàng</h4>
                                <h5 class="card-subtitle">Chỉ số quan trọng</h5>
                            </div>
                            <div class="ml-auto d-flex no-block align-items-center">
                                <ul class="list-inline font-12 dl m-r-15 m-b-0">
                                    <li style="color: red!important;" class="list-inline-item text-info"><i class="fa fa-circle"></i> Năm</li>
                                </ul>
                                <div class="dl">
                                    <form id="form-submit" action="{{URL::to('select-year')}}" method="get">
                                        <select id="year" name="year" class="custom-select" >
                                            <option value="2022" selected>2022</option>
                                            <option value="2021">2021</option>
                                            <option value="2020">2020</option>
                                            <option value="2019">2019</option>
                                            
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- column -->
                            <div class="col-lg-4">
                                <h1 class="m-b-0 m-t-30">{{number_format($total_revenue). '₫'}}</h1>
                                <h6 class="font-light text-muted">{{__("Doanh thu năm nay")}}</h6>
                                <h3 class="m-t-30 m-b-0">{{number_format($highest_month). '₫'}}</h3>
                                <h6 class="font-light text-muted">{{__('Doanh thu tháng cao nhất')}}</h6>
                                <a class="btn btn-info m-t-20 p-15 p-l-25 p-r-25 m-b-20" href="javascript:void(0)">{{__('Doanh thu năm '). Session::get('year_revenue')}}</a>
                            </div>
                            <!-- Cột thống kê  -->
                            <div class="col-lg-8 col-md-10 col-sm-10">
                                <div class="col-12"  >Doanh số(₫)</div>
                                    <div  style="width: 100%;height: 100%" id="chart" class="ct-charts"></div>
                                <div class="col-12" style="text-align: center;top: -20px" >Tháng</div>
                            </div>
                            <!-- Cột thống kê -->
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- Info Box -->
                    <!-- ============================================================== -->
                    <div class="card-body border-top">
                        <div class="row m-b-0">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-orange display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>{{__('Quý I')}}</span>
                                        <h3 class="font-medium m-b-0">{{number_format($first_part).'₫'}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-cyan display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>{{__('Quý II')}}</span>
                                        <h3 class="font-medium m-b-0">{{number_format($second_part).'₫'}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-info display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>{{__('Quý III')}}</span>
                                        <h3 class="font-medium m-b-0">{{number_format($third_part).'₫'}}</h3></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-primary display-5"><i class="mdi mdi-currency-usd"></i></span></div>
                                    <div><span>{{__('Quý IV')}}</span>
                                        <h3 class="font-medium m-b-0">{{number_format($fourth_part).'₫'}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Sales chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-8 col-xl-6">
                <div class="card card-hover">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">{{__('Thống kê đơn đặt chỗ')}}</h4>
                                <h5 class="card-subtitle">{{'Tour booking report'}}</h5>
                            </div>
                        </div>
                        <!-- column -->
                        <div class="row m-t-40">
                            <!-- column -->
                            <div class="col-lg-6">
                                <div  style="width: 100%;height: 100%" id="pie-chart" class="ct-charts"></div>
                            </div>
                            <!-- column -->
                            <div class="col-lg-6">
                                <h1 class="display-6 m-b-0 font-medium">{{$total_booking}}</h1>
                                <span>{{__('yêu cầu từ khách')}}</span>
                                <ul class="list-style-none">
                                    <li class="m-t-20"><i style="color: #d70206" class="fas fa-circle m-r-5 font-12">
                                        </i> {{__('Đã tạo hợp đồng')}} <span class="float-right">{{$per_contracted_booking}}</span></li>
                                    <li class="m-t-20"><i style="color: #f05b4f" class="fas fa-circle m-r-5  font-12">
                                        </i> {{__('Đã xác nhận')}} <span class="float-right">{{$per_confirmed_booking}}</span></li>
                                    <li class="m-t-20"><i style="color: #f4c63d" class="fas fa-circle m-r-5  font-12">
                                        </i> {{__('Chưa xác nhận')}} <span class="float-right">{{$per_unconfirmed_booking}}</span></li>
                                    <li class="m-t-20"><i style="color: #d17905" class="fas fa-circle m-r-5  font-12">
                                        </i> {{__('Đã hủy')}} <span class="float-right">{{$per_canceled_booking}}</span></li>
                                </ul>
                            </div>
                        </div>
                        <!-- column -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-6">
                <div class="card card-hover">
                    <div class="card-body" style="background:url({{'Admins/img/background/active-bg.png'}}) no-repeat top center;">
                        <div class="p-t-20 text-center">
                            <i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
                            <span class="display-4 d-block font-medium">{{$total_contract}}</span>
                            <span>{{__('Tổng số hợp đồng')}}</span>
                            <!-- Progress -->
                            <div class="progress m-t-40" style="height:4px;">
                                <div class="progress-bar bg-megna" role="progressbar" style="width: {{$per_signed_contract}}" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{$per_ongoing_contract}}" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-orange" role="progressbar" style="width: {{$per_completed_contract}}" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{$per_canceled_contract}}" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- Progress -->
                            <!-- row -->
                            <div class="row m-t-30 m-b-20">
                                <!-- column -->
                                <div class="col-3 border-right text-center">
                                    <h3 class="m-b-0 font-medium">{{$per_signed_contract}}</h3>{{__('Đã ký')}}</div>
                                <!-- column -->
                                <div class="col-3 border-right text-center">
                                    <h3 class="m-b-0 font-medium">{{$per_ongoing_contract}}</h3>{{__('Thực hiện')}}</div>
                                <!-- column -->
                                <div class="col-3 text-center">
                                    <h3 class="m-b-0 font-medium">{{$per_completed_contract}}</h3>{{__('Hoàn thành')}}</div>
                                <div class="col-3 text-center">
                                    <h3 class="m-b-0 font-medium">{{$per_canceled_contract}}</h3>{{__('Hủy')}}</div>
                            </div>
                            <a href="javascript:void(0)" class="waves-effect waves-light m-t-20 btn btn-lg btn-info accent-4 m-b-20">View More Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-4">
                <div class="card bg-info text-white  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Revenue Statistics</h4>
                        <div class="d-flex align-items-center m-t-30">
                            <div class="" id="ravenue"></div>
                            <div class="ml-auto">
                                <h3 class="font-medium white-text m-b-0"></h3><span class="white-text op-5"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
                <div class="card bg-cyan text-white  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Page Views</h4>
                        <h3 class="white-text m-b-0"><i class="ti-arrow-up"></i> 6548</h3>
                    </div>
                    <div class="m-t-20" id="views"></div>
                </div>
            </div>
            <!-- column -->
            <div class="col-lg-4">
                <div class="card  card-hover">
                    <div class="card-body">
                        <h4 class="card-title">Bounce Rate</h4>
                        <div class="d-flex no-block align-items-center m-t-30">
                            <div class="">
                                <h3 class="font-medium m-b-0"></h3><span class=""></span></div>
                            <div class="ml-auto">
                                <div style="max-width:150px; height:60px;" class="m-b-40">
                                    <canvas id="bouncerate"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-md-flex align-items-center">
                            <div>
                                <h4 class="card-title">{{__('Danh sách nhân viên')}}</h4>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table no-wrap v-middle">
                                <thead>
                                <tr class="border-0">
                                    <th class="border-0">{{__('Tên')}}</th>
                                    <th class="border-0">{{__('Chức danh')}}</th>
                                    <th class="border-0">{{__('Số điện thoại')}}</th>
                                    <th class="border-0">Trạng thái</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($staff as $key =>$staff)
                                    <tr>
                                        <td>
                                            <div class="d-flex no-block align-items-center">
                                                <?php $rand = rand(1,5) ?>
                                                <div class="m-r-10"><img src="{{'Admins/img/users/'.$rand.'.jpg'}}" alt="user" class="rounded-circle" width="45" /></div>
                                                <div class="">
                                                    <h5 class="m-b-0 font-16 font-medium">{{$staff->staff_name}}</h5><span>{{$staff->staff_email}}</span></div>
                                            </div>
                                        </td>
                                        <td>{{$staff->position_name}}</td>
                                        <td>{{$staff->staff_phone_number}}</td>
                                        <td><i class="fa fa-circle text-orange" data-toggle="tooltip" data-placement="top" title="In Progress"></i></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{__('Nhận xét và đánh giá')}}</h4>
                </div>
                <div class="comment-widgets scrollable" style="height:560px;">
                    <!-- Comment Row -->
                    @foreach($review as $review)
                    <div class="d-flex flex-row comment-row m-t-0">
                        <div class="p-2"><img src="{{'Admins/img/users/1.jpg'}}" alt="user" width="50"
                                class="rounded-circle"></div>
                        <div class="comment-text w-100">
                            <div class="col-sm-6 float-right">
                                <h5 class="font-medium"> {{$review->tour_name_VI}}</h5>
                                <img width="200" hight="200" src="{{asset('uploads/tours/thumb/'.$review->tour_thumb)}}"
                                    alt="">
                            </div>

                            <h6 class="font-medium">{{$review->customer_name}}</h6>
                            <span class="m-b-15 d-block">{{$review->review_comment}}</span>
                            @if($review->review_rating==1)
                            <div class="comment-footer">
                                <span class="label label-rounded label-danger">Very Bad</span>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>


                            </div>
                            @elseif($review->review_rating==2)
                            <div class="comment-footer">
                                <span class="label label-rounded label-danger">Bad</span>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>

                            </div>
                            @elseif($review->review_rating==3)
                            <div class="comment-footer">
                                <span class="label label-rounded label-warning">Medium</span>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>

                            </div>

                            @elseif($review->review_rating==4)
                            <div class="comment-footer">
                                <span class="label label-rounded label-success">Good</span>

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>

                            </div>
                            @else
                            <div class="comment-footer">

                                <span class="label label-rounded label-success">Very Good</span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                            </div>

                            @endif
                            <span class="m-b-15 d-block"> {{date('d-m-Y', strtotime($review->created_at))}}</span>


                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
            <!-- column -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{__('Staff chat box')}}</h4>
                        <div class="chat-box scrollable position-relative" style="height:475px;">
                            <!--chat Row -->
                            {{--<ul class="chat-list">
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{'Admins/img/users/1.jpg'}}" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">James Anderson</h6>
                                        <div class="box bg-light-info">Lorem Ipsum is simply dummy text of the printing &amp; type setting industry.</div>
                                    </div>
                                    <div class="chat-time">10:56 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{'Admins/img/users/2.jpg'}}" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Bianca Doe</h6>
                                        <div class="box bg-light-info">It’s Great opportunity to work.</div>
                                    </div>
                                    <div class="chat-time">10:57 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">I would love to join the team.</div>
                                        <br>
                                    </div>
                                </li>
                                <!--chat Row -->
                                <li class="odd chat-item">
                                    <div class="chat-content">
                                        <div class="box bg-light-inverse">Whats budget of the new project.</div>
                                        <br>
                                    </div>
                                    <div class="chat-time">10:59 am</div>
                                </li>
                                <!--chat Row -->
                                <li class="chat-item">
                                    <div class="chat-img"><img src="{{'Admins/img/users/3.jpg'}}" alt="user"></div>
                                    <div class="chat-content">
                                        <h6 class="font-medium">Angelina Rhodes</h6>
                                        <div class="box bg-light-info">Well we have good budget for the project</div>
                                    </div>
                                    <div class="chat-time">11:00 am</div>
                                </li>
                                <!--chat Row -->
                                <!-- <div id="someDiv"></div> -->
                            </ul>--}}
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="row">
                            <div class="col-9">
                                <div class="input-field m-t-0 m-b-0">
                                    <input type="text" id="textarea1" placeholder="Type and enter" class="form-control border-0">
                                </div>
                            </div>
                            <div class="col-3">
                                <a class="btn-circle btn-lg btn-cyan float-right text-white" href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Recent comment and chats -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <script>
        $(Document).ready(function () {
            new Chartist.Line('#chart', {
                labels: [1, 2, 3, 4, 5, 6, 7, 8,9,10,11,12],
                series: [{!! $month_revenue !!}]

            }, {
                low: 0,
                showArea: true
            });
            /*pie chart*/
            new Chartist.Pie('#pie-chart', {
                series:  [{!!$booking_array[1] !!},{!!$booking_array[3] !!},{!!$booking_array[5] !!},{!!$booking_array[7] !!}]
            }, {
                donut: true,
                donutWidth: 30,
                donutSolid: true,
                startAngle: 270,
                showLabel: true
            });

            /*năm*/
            var year_session=$('#year-from-session').val()
            $('#year').find("option[value="+ year_session + "]").attr('selected','selected')
            /*alert(year_session)*/
        });
        $('#year').on('change', function (e) {
            $('#form-submit').submit();
        });


    </script>


@endsection