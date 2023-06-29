@extends('Admin_Views.Admin_Layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{__('CUSTOM TOUR Details')}}</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('CUSTOM TOUR')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <form role="form" action="{{URL::to('/update-custom')}}" method="post" enctype="multipart/form-data">
                {{csrf_field() }}
                <input hidden="" name="custom_id" value="{{$custom->custom_id}}">
                <div class="card-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('CUSTOM TOUR DETAILS')}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Custom code")}}</label>
                                <input type="text" class="form-control" id="com1" value="{{$custom->custom_code}}"
                                    name="custom_code" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Destination")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    value="{{$custom->custom_destination}}" name="custom_destination">

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Type of Tour")}}</label>
                                <input type="text" class="form-control" id="com1" value="{{$custom->custom_type_tour}}"
                                    name="custom_type_tour">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Spend")}}</label>
                                <input type="text" class="form-control" id="com1" value="{{$custom->custom_spend}}"
                                    name="custom_spend">

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="emp1"
                                    class="control-label col-form-label">{{__("custom Tour status")}}</label>
                                <select class="form-control" name="custom_status">
                                    @if($custom->custom_status==0)
                                    <option value="0" selected>{{__('Unconfirmed')}}</option>
                                    <option value="1">{{__('Confirmed')}}</option>
                                    <option value="2">{{__('Canceled')}}</option>
                                    @elseif($custom->custom_status==1)
                                    <option value="0">{{__('Unconfirmed')}}</option>
                                    <option value="1" selected>{{__('Confirmed')}}</option>
                                    <option value="2">{{__('Canceled')}}</option>
                                    @elseif($custom->custom_status==2)
                                    <option value="0">{{__('Unconfirmed')}}</option>
                                    <option value="1">{{__('Confirmed')}}</option>
                                    <option value="2" selected>{{__('Canceled')}}</option>
                                    @else
                                    <option value="4" selected>{{__('Contracted')}}</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Day")}}</label>
                                <input type="text" class="form-control" id="com1" value="{{$custom->custom_day}}"
                                    name="custom_day">

                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #b2b9bf ;margin-top: 25px">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Customer Name")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    value="{{$custom->custom_customer_name}}" name="custom_customer_name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Customer Email")}}</label>
                                <input type="text" class="form-control" id="com1"
                                    value="{{$custom->custom_customer_email}}" name="custom_customer_email">
                            </div>
                        </div>
                        <label class="control-label col-form-label col-6">{{__("Customer Phone")}}</label>
                        <label class="control-label col-form-label col-6">{{__("customer Address")}}</label>

                        <div class="col-6">
                            <div class="form-group">

                                <input type="text" class="form-control" id="com1"
                                    value="{{$custom->custom_customer_phone}}" name="custom_customer_phone">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <input type="text" class="form-control" value=" {{$custom->custom_customer_address}}"
                                    name="custom_customer_address">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("custom date")}}</label>
                                <input type="date" class="form-control input" id="com1" value="{{$custom->custom_date}}"
                                    name="custom_date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Request date")}}</label>
                                <input type="text" class="form-control input" id="com1" value="{{$custom->created_at}}"
                                    name="" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Number Adult")}}</label>
                                <input min="1" type="number" class="form-control input"
                                    value="{{$custom->custom_adult}}" name="custom_adult">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Number Child")}}</label>
                                <input min="0" type="number" class="form-control input"
                                    value="{{$custom->custom_child}}" name="custom_child">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1"
                                    class="control-label col-form-label">{{__("Yeu cau khach hang")}}</label>
                                <textarea class="form-control" id="exampleTextarea12" rows="4"
                                    value="{{$custom->custom_message}}"
                                    name="custom_message">{{$custom->custom_message}}</textarea>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Tour schedule')}}</label>
                                <div class="control-group" id="fields">
                                    <div class="entry input-group ">
                                        <textarea class="form-control" name="custom_schedule" rows="5" id="ckeditor2"
                                            placeholder="{{__('Tour schedule')}}" required>{{$custom->custom_schedule}}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Dich vu kem theo")}}</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="8"
                                    placeholder="{{__('Included')}}" name="custom_service_in" required>{{$custom->custom_service_in}}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Dich vu ben ngoai")}}</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="8"
                                    placeholder="{{__('Excluded')}}" name="custom_service_ex" required>{{$custom->custom_service_ex}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <hr>
        <div class="card-body">
            <div class="action-form">
                <div class="form-group m-b-0 text-center">
                    <div></div>
                    <button type="submit"
                        class="btn-enable btn btn-info waves-effect waves-light">{{__('Save')}}</button>
                    <a href="{{URL::to('list-custom/'.$custom->custom_status)}}"
                        class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection