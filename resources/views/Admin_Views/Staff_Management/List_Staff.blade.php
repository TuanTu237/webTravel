@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('List Staff')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Staff')}}</li>
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
                                <th>{{__('Position')}}</th>
                                <th>{{__('Staff Name')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Phone number')}}</th>
                                <th>{{__('Birth')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($staff as $staff)
                                <tr>
                                    <th>
                                        <?php
                                        if ($staff->position_id==3){

                                        ?>
                                        {{__('NV kinh doanh')}}
                                        <?php
                                        }
                                        else if ($staff->position_id==4){
                                        ?>
                                        {{__('NV hop dong')}}
                                        <?php
                                        }
                                        else if($staff->position_id==2){


                                        ?>{{__('NV van phong')}}<?php
                                        }
                                        else{ ?>

                                            <?php
                                        }
                                        ?>
                                    </th>
                                    <th>{{$staff->staff_name}}</th>
                                    <th>{{$staff->staff_address}}</th>
                                    <th>{{$staff->staff_phone_number}}</th>
                                    <th>{{$staff->staff_birth}}</th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/edit-staff/'.$staff->staff_id)}}"><i class="fa fa-pencil-alt"></i></a>
                                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{URL::to('/delete-staff/'.$staff->staff_id)}}"><i class="icon-close"></i></a>
                                        </div>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot class="bg-dark text-white">
                            <tr>
                                <th>{{__('Position')}}</th>
                                <th>{{__('Staff Name')}}</th>
                                <th>{{__('Address')}}</th>
                                <th>{{__('Phone number')}}</th>
                                <th>{{__('Birth')}}</th>
                                <th>{{__('Actions')}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
