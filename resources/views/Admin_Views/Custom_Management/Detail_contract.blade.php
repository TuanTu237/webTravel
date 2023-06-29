@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Details Contract')}}</h4>
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
    <div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('TOUR custom')}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <a target="_blank" href="{{URL::to('details-custom-contract/'.$contractcus->custom_id)}}"><label for="" class="control-label col-form-label">{{__("Details")}}</label></a>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input disabled class="form-control" type="text" value="" placeholder="custom code: {{$contractcus->custom_code}}    &nbsp&nbsp&nbsp&nbsp&nbsp  Date: {{$contractcus->created_at}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <form role="form" action="{{URL::to('/update-custom-contract/'.$contractcus->custom_contract_id)}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                    <input type="hidden" value="{{$contractcus->custom_contract_id}}" name=">custom_contract_id">
                    <div class="card-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                        <div class="d-flex no-block align-items-center">
                            <h4 class="card-title">{{__('CONTRACT')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <a href=""><label for="" class="control-label col-form-label">{{__("Representative staff")}}</label></a>
                                    <input disabled type="text" class="form-control" value="{{$contractcus->staff_name}}" id="" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                   <a href=""> <label for="" class="control-label col-form-label">{{__("Customer")}}</label></a>
                                    <input disabled type="text" class="form-control" id="" value="{{$contractcus->custom_customer_name}}" name="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Staff ID")}}</label>
                                    <input hidden type="text" class="form-control" placeholder="" id="" value="2" name="staff_id">
                                    <input disabled  type="text" class="form-control" value="{{$contractcus->staff_id}}" id="" name="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Customer phone")}}</label>
                                    <input disabled type="text" class="form-control" id="" value=" {{$contractcus->custom_customer_phone}}" name="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="" class="control-label col-form-label">{{__("Tour Price")}}</label>
                            </div>
                            <div class="col-4">
                                <label for="" class="control-label col-form-label">{{__("contract signing date")}}</label>
                            </div>
                            <div class="col-4">
                                <label style="color: red" for="" class="control-label col-form-label">{{__("Status")}}</label>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input disabled   name="contract_total_price" id="only_numb" class="form-control" value="{{$contractcus->custom_contract_total_price}} ">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input  disabled type="date" class="form-control" value="{{$contractcus->custom_contract_date}}" placeholder=" " name="custom_contract_date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <select name="custom_contract_status" class="form-control">
                                        @if($contractcus->custom_contract_status==1)
                                            <option value="1" selected>{{__('Wait for confirmation')}}</option>
                                            <option value="2" >{{__('Completing contracts')}}</option>
                                            <option value="3">{{__('Completed contracts')}}</option>
                                            <option value="0">{{__('Cancel contracts')}}</option>
                                        @elseif($contractcus->custom_contract_status==2)
                                            <option value="1" >{{__('Wait for confirmation')}}</option>
                                            <option value="2" selected>{{__('Completing contracts')}}</option>
                                            <option value="3">{{__('Completed contracts')}}</option>
                                            <option value="0">{{__('Cancel contracts')}}</option>
                                        @elseif($contractcus->custom_contract_status==3)
                                            <option value="1" >{{__('Wait for confirmation')}}</option>
                                            <option value="2" >{{__('Completing contracts')}}</option>
                                            <option value="3"selected>{{__('Completed contracts')}}</option>
                                            <option value="0">{{__('Cancel contracts')}}</option>
                                        @else
                                            <option value="1" >{{__('Wait for confirmation')}}</option>
                                            <option value="2" >{{__('Completing contracts')}}</option>
                                            <option value="3">{{__('Completed contracts')}}</option>
                                            <option value="0" selected>{{__('Cancel contracts')}}</option>
                                        @endif

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <div class="action-form">
                            <div class="form-group m-b-0 text-center">
                                <div></div>
                                <button type="submit" class="btn btn-info waves-effect waves-light">{{__('Save')}}</button>
                                <a href="{{URL::previous()}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('CONTRACT RECEIPT')}}</h4>
                    </div>
                    <div class="col-12">
                        <iframe src="{{asset('Admins/contract_pdf/'.$contractcus->custom_contract_file)}}" frameborder="0" style="width: 100%" height="600px"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
