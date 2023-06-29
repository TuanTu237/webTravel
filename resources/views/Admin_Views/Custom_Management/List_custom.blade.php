@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('List Custom Tour')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Custom Tour')}}</li>
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
                                <th>{{__('Custom Code')}}</th>
                                <th>{{__('Date book')}}</th>
                                <th>{{__('Customer Name')}}</th>
                                <th>{{__('Customer Phone number')}}</th>
                                <th>{{__('Customer Email')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($custom as $key =>$cus)
                                <tr>
                                    <th>{{$cus->custom_code}}</th>
                                    <th>{{$cus->created_at}}</th>
                                    <th>{{$cus->custom_customer_name}}</th>
                                    <th>{{$cus->custom_customer_phone}}</th>
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
                                        ?>
                                    </th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/details-custom/'.$cus->custom_id)}}"><i class="fa fa-book"></i></a>
                                        </div>
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
@endsection
