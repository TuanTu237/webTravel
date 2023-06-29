@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('List Booking')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Booking')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    <div class="table-responsive">
                        <table id="file_export" class="table table-striped table-bordered display table-hover table-dark">
                            <thead class="bg-dark text-white">
                            <tr>
                                <th>{{__('Booking Code')}}</th>
                                <th>{{__('Date book')}}</th>
                                <th>{{__('Customer Name')}}</th>
                                <th>{{__('Customer Phone number')}}</th>
                                <th>{{__('Customer Email')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($booking as $key =>$booking)
                                <tr>
                                    <th>{{$booking->booking_code}}</th>
                                    <th>{{$booking->created_at}}</th>
                                    <th>{{$booking->booking_customer_name}}</th>
                                    <th>{{$booking->booking_customer_phone_domain}} {{$booking->booking_customer_phone_number}}</th>
                                    <th>{{$booking->booking_customer_email}}</th>
                                    <th>
                                        <?php
                                        if ($booking->booking_status==0){

                                        ?>
                                        chưa liên hệ
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
                                        ?>
                                    </th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/details-booking/'.$booking->booking_id)}}"><i class="fa fa-book"></i></a>
                                        </div>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot class="bg-dark text-white">
                            <tr>
                                <th>{{__('Booking Code')}}</th>
                                <th>{{__('Date book')}}</th>
                                <th>{{__('Customer Name')}}</th>
                                <th>{{__('Customer Phone number')}}</th>
                                <th>{{__('Customer Email')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('action')}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
