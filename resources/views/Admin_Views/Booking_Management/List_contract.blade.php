@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('List Contract')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Contract')}}</li>
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
                                <th>{{__('Date Contract')}}</th>
                                <th>{{__('Staff Name')}}</th>
                                <th>{{__('Customer Name')}}</th>
                                <th>{{__('Staff ID')}}</th>
                                <th>{{__('Customer ID')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contract as $key =>$contract)
                                <tr>
                                    <th>{{$contract->booking_code}}</th>
                                    <th>{{$contract->contract_date}}</th>
                                    <th>{{$contract->staff_name}}</th>
                                    <th>{{$contract->customer_name}}</th>
                                    <th>{{$contract->staff_id}}</th>
                                    <th>{{$contract->customer_id}}</th>
                                    <th>
                                        <?php
                                        if ($contract->contract_status==1){

                                        ?>
                                        {{__('Wait for confirmation')}}
                                        <?php
                                        }
                                        else if ($contract->contract_status==2){
                                        ?>
                                        {{__('Completing contracts')}}
                                        <?php
                                        }
                                        else if($contract->contract_status==3){
                                        ?>
                                            {{__('Completed contracts')}}
                                        <?php
                                        }
                                        else{
                                            ?>
                                            {{__('Cancel contracts')}}
                                            <?php
                                        }
                                        ?>
                                    </th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/detail-contract/'.$contract->contract_id)}}"><i class="fa fa-book"></i></a>
                                        </div>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot class="bg-dark text-white">
                            <tr>
                                <th>{{__('Booking Code')}}</th>
                                <th>{{__('Date Contract')}}</th>
                                <th>{{__('Staff Name')}}</th>
                                <th>{{__('Customer Name')}}</th>
                                <th>{{__('Staff ID')}}</th>
                                <th>{{__('Customer ID')}}</th>
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
