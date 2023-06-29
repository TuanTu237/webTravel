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
                                <a class="btn btn-link" href="{{URL::to('#')}}">
                                    {{ __('Thông tin cá nhân') }}
                                </a>
                            </div>
                            <div class="single-element-widget mt-30">
                            <?php $customer_id = Session::get('customer_id');?>
                                <a class="btn btn-link" href="{{URL::to('/order/'.$customer_id=Session::get('customer_id'))}}">
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
               

                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30">Cập nhật thông tin cá nhân</h3>
                    <form role="form" action="{{URL::to('/update-profile/'.$customer_id=Session::get('customer_id'))}}" method="post"
                        enctype="multipart/form-data">
                        {{csrf_field() }}
                        
                        <div class="card-body">
                            <?php
                            $customer_name=Session::get('customer_name');
                            $customer_email=Session::get('customer_email');
                            $customer_phone_number=Session::get('customer_phone_number');
                            $customer_address=Session::get('customer_address');
                            $customer_nationality=Session::get('customer_nationality');
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
                            <div class="mt-10">
                                <h4>Tên</h4>
                                <input type="text" name="customer_name" placeholder="{{__('Full Name')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Full Name')}}'"
                                    required class="single-input" value="{{$customer_name=Session::get('customer_name')}}">
                            </div>
                            <div class="input-group-icon mt-10">
                                <h4>Số điện thoại</h4>
                                <div class="row">
                                    <div class="col-2">

                                        <select class="form-control" name="customer_phone_domain">
                                            <option value="+84" selected>{{__('+84')}}</option>
                                        </select>

                                    </div>
                                    <div class="col-10">
                                        <input type="text" name="customer_phone_number"
                                            placeholder="{{__('Số điện thoại')}}" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = '{{__('Số điện thoại')}}'" required
                                            class="single-input" value="{{$customer_phone_number=Session::get('customer_phone_number')}}">
                                    </div>
                                </div>
                            </div>

                            <div class="mt-10">
                                <h4>Địa chỉ</h4>
                                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                <input type="text" name="customer_address" placeholder="{{__('Address')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Address')}}'"
                                    required class="single-input" value="{{$customer_address=Session::get('customer_address')}}">
                            </div>
                            <div class="mt-10">
                                <h4>Quốc tịch</h4>
                                <input onkeypress="return onlyNumberKey(event)" id="phone_numb" type="text"
                                    name="customer_nationality" placeholder="{{__('Nationality')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Nationallity')}}'"
                                    required class="single-input" style="padding-left: 20px"
                                    value="{{$customer_nationality=Session::get('customer_nationality')}}">
                            </div>
                            <div class="mt-10" style="margin-top:20px;">
                                <div class="submit_btn">
                                    <button class="boxed-btn4" type="submit">{{__('Submit')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection