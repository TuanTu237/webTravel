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
                                <h4 class="card-title">Đơn đặt chỗ</h4>
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
                        
                    </div>
                    <!-- ============================================================== -->
                    <!-- Info Box -->
                    <!-- ============================================================== -->
                    <div class="card-body border-top">
                        <div class="row m-b-0">
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-orange display-5"></span></div>
                                    <div><b>{{__('Chưa xác nhận')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($unconfirmed_booking)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-cyan display-5"></span></div>
                                    <div><b>{{__('Đã xác nhận')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($confirmed_booking)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-info display-5"></span></div>
                                    <div><b>{{__('Đã ký hợp đồng')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{$contracted_booking}}</h3></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-primary display-5"></span></div>
                                    <div><b>{{__('Đã hủy')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($canceled_booking)}}</h3>
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
        <div class="row">
            <div class="col-lg-12 col-xl-6">
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
                                <h1 class="display-6 m-b-0 font-medium" style="text-align:left;color: red;font-weight: bold;width: 100%;">{{$total_booking}}</h1>
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
            
        </div>
        <!-- ============================================================== -->
        <!-- Email campaign chart -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            
            <!-- column -->
            <div class="col-lg-12">
            <div><h4 class="card-title">Đơn đặt chỗ theo yêu cầu</h4></div>
                <div class="card bg-cyan text-white  card-hover">
                <div class="card-body border-top">
                        <div class="row m-b-0">
                            
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-orange display-5"></span></div>
                                    <div><b>{{__('Chưa xác nhận')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: red;font-weight: bold;width: 100%;">{{($unconfirmed_custom)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-cyan display-5"></span></div>
                                    <div><b>{{__('Đã xác nhận')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: red;font-weight: bold;width: 100%;">{{($confirmed_custom)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-info display-5"></span></div>
                                    <div><b>{{__('Đã ký hợp đồng')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: red;font-weight: bold;width: 100%;">{{$contracted_custom}}</h3></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-primary display-5"></span></div>
                                    <div><b>{{__('Đã hủy')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: red;font-weight: bold;width: 100%;">{{($canceled_custom)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->
            
        </div>
        <!-- ============================================================== -->
        <!-- Ravenue - page-view-bounce rate -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Table -->
        <!-- ============================================================== -->
        
        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <script>
        $(Document).ready(function () {
            
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