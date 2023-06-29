@extends('Page_Views.Pages_Layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Vietrip</h3>
                    <p>Chào mừng quý khách</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area Start ##### -->
<div class="destination_details_info">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-9">
                <div class="contact_join">
                    <div class="section_title text-center mb_70">
                        <h3>Đăng ký tài khoản</h3>
                    </div>
                    <form action="{{URL::to('/add-customer')}}" id="formLogin" method="POST">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session:: get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session:: get('fail')}}</div>
                        @endif
                        <!-- <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?> -->
                        {{csrf_field()}}
                        <div class="row">
                        <div class="col-lg-12 ">
                                <h4>Họ tên</h4>
                                <div class="single_input">
                                    <input type="name" class="form-control @error('customer_name') is-invalid @enderror" id="InputName" placeholder="Enter Name"
                                        name="customer_name" required>
                                        @error('customer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <h4>Email</h4>
                                <div class="single_input">
                                    <input type="email" class="form-control @error('customer_email') is-invalid @enderror" id="InputEmail" placeholder="Enter Email"
                                        name="customer_email" required>
                                        @error('customer_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <h4>Số điện thoại</h4>
                                <div class="single_input">
                                    <input type="phone" class="form-control" id="InputPhone" placeholder="Enter Phone Number"
                                        name="customer_phone_number" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h4>Mật khẩu</h4>
                                <div class="single_input">
                                    <input type="password" class="form-control @error('customer_password') is-invalid @enderror" id="InputPassword"
                                        placeholder="Password" name="customer_password" required>
                                        @error('customer_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <h4> Xác nhận mật khẩu</h4>
                                <div class="single_input">
                                    <input type="password" class="form-control" id="password-confirm"
                                        placeholder="Password" name="password_confirmation" required>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="submit_btn">
                                <button class="boxed-btn4" type="submit">submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <a class="btn btn-link w-100" href="{{URL::to('/login-index')}}">
                                {{ __('Bạn đã có tài khoản? Đăng Nhập') }}
                            </a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->
@endsection