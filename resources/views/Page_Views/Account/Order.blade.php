@extends('Page_Views.Pages_Layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">
                    <h3 class="mb-30">Xin chào {{$customer_name=Session::get('customer_name')}}</h3>
                        
                        <div class="switch-wrap d-flex justify-content-between">
                            <p>{{$customer_email=Session::get('customer_email')}}</p>

                        </div>
                        <div class="single-element-widget mt-30">
                            <a class="btn btn-link" href="{{URL::to('/profile')}}">
                                {{ __('Thông tin cá nhân') }}
                            </a>
                        </div>
                        <div class="single-element-widget mt-30">
                            <a class="btn btn-link" href="{{URL::to('#')}}">
                                {{ __('Đơn đặt chỗ và đánh giá') }}
                            </a>
                        </div>

                        <div class="single-element-widget mt-30">
                            <a class="btn btn-link" href="{{URL::to('logout-customer')}}">
                                {{ __('Đăng xuất') }}
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-9 col-md-8">
                    <h3 class="mb-30">Đơn đặt chỗ của bạn</h3>


                    <div class="card-body">
                        <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                        <div class="table-responsive">
                            <table id="file_export"
                                class="table table-striped table-bordered display table-hover table-white">
                                <thead class="bg-white text-dark">
                                    <tr>
                                        <th>{{__('Booking Code')}}</th>
                                        <th>{{__('Ngày đặt')}}</th>
                                        <th>{{__('Tên')}}</th>
                                        <th>{{__('SDT')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Trạng thái')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($booking as $key =>$booking)
                                    <tr>
                                        <th><a class="btn btn-link"
                                                href="{{URL::to('/tra-cuu/'.$booking->booking_code)}}">
                                                {{$booking->booking_code}}
                                            </a></th>
                                        <th>{{$booking->created_at}}</th>
                                        <th>{{$booking->booking_customer_name}}</th>
                                        <th>{{$booking->booking_customer_phone_domain}}
                                            {{$booking->booking_customer_phone_number}}</th>
                                        <th>{{$booking->booking_customer_email}}</th>
                                        <th>
                                            <?php
                                        if ($booking->booking_status==0){

                                        ?>
                                            Chưa liên hệ

                                            <?php
                                        }
                                        else if ($booking->booking_status==1){
                                        ?>
                                            Đã liên hệ

                                            <?php
                                        }
                                        elseif ($booking->booking_status==2){


                                        ?>Đã huỷ<?php
                                            }
                                            else if ($booking->booking_status==3){
                                                ?>Đã hoàn thành
                                            <a class="btn btn-link"
                                                href="{{URL::to('/customer-review/'.$booking->booking_code)}}">
                                                {{ __('Đánh giá') }}
                                            </a>
                                            <?php
                                        }else if ($booking->booking_status==4){
                                            ?>
                                                Đã tạo hợp đồng
    
                                                <?php
                                            }else if ($booking->booking_status==5){
                                                ?>
                                                    Đã đánh giá
        
                                                    <?php
                                                }
                                        ?>
                                        </th>

                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                        <h3 class="mb-30">Đơn đặt theo yêu cầu của bạn</h3>
                        <div class="table-responsive">
                            <table id="file_export"
                                class="table table-striped table-bordered display table-hover table-white">
                                <thead class="bg-white text-dark">
                                    <tr>
                                        <th>{{__('Custom tour Code')}}</th>
                                        <th>{{__('Ngày đặt')}}</th>
                                        <th>{{__('Tên')}}</th>
                                        <th>{{__('SDT')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Trạng thái')}}</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($custom as $key =>$cus)
                                    <tr>
                                        <th>{{$cus->custom_code}}</th>
                                        <th>{{$cus->created_at}}</th>
                                        <th>{{$cus->custom_customer_name}}</th>
                                        <th>{{$cus->custom_customer_phone}} </th>
                                        <th>{{$cus->custom_customer_email}}</th>
                                        <th>
                                            <?php
                                        if ($cus->custom_status==0){

                                        ?>
                                            Chưa liên hệ

                                            <?php
                                        }
                                        else if ($cus->custom_status==1){
                                        ?>
                                            Đã liên hệ

                                            <?php
                                        }
                                        elseif ($cus->custom_status==2){


                                        ?>Đã huỷ<?php
                                            }
                                            else if ($cus->custom_status==3){
                                                ?>Đã hoàn thành

                                            <?php
                                        }
                                        else if ($cus->custom_status==4){
                                            ?>
                                                Đã tạo hợp đồng
    
                                                <?php
                                            }
                                        ?>
                                        </th>

                                    </tr>

                                    @endforeach
                                </tbody>

                            </table>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>
@endsection