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
                                <h4 class="card-title">Thống kê hợp đồng</h4>
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
                                    <div><b>{{__('Chờ xác nhận')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($signed_contract)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-cyan display-5"></span></div>
                                    <div><b>{{__('Đang thực hiện')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($ongoing_contract)}}</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-info display-5"></span></div>
                                    <div><b>{{__('Đã hoàn thành')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{$completed_contract}}</h3></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-10"><span class="text-primary display-5"></span></div>
                                    <div><b>{{__('Đã hủy')}}</b>
                                        <h3 class="font-medium m-b-0" style="text-align: center;color: blue;font-weight: bold;width: 100%;">{{($canceled_contract)}}</h3>
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
            <div class="col-lg-12 col-xl-6">
                <div class="card card-hover">
                    <div class="card-body" style="background:url({{'Admins/img/background/active-bg.png'}}) no-repeat top center;">
                        <div class="p-t-20 text-center">
                            <i class="mdi mdi-file-chart display-4 text-orange d-block"></i>
                            <span class="display-4 d-block font-medium" style="text-align: center;color: red;font-weight: bold;width: 100%;">{{$total_contract}}</span>
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
        
        
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <script>
        $(Document).ready(function () {
            
            
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