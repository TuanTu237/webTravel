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
                    <h3 class="mb-30"><b>Đăng nhập</b></h3>
                    </div>
                    <form action="{{URL::to('/login-customer')}}" id="formLogin" method="POST">
                       <!--  <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?> -->
                            @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session:: get('fail')}}</div>
                        @endif
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-lg-12 ">
                                <h4>Email</h4>
                                <div class="single_input">

                                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter Email"
                                        name="customer_email">
                                </div>

                            </div>
                            <div class="col-lg-12 ">
                                <h4>Mật khẩu</h4>
                                <div class="single_input">
                                    <input type="password" class="form-control" id="InputPassword"
                                        placeholder="Password" name="customer_password">
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="submit_btn">
                                <button class="boxed-btn4" type="submit">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                </div>
                <a class="btn btn-link w-100" href="{{URL::to('/register-index')}}">
                                {{ __('Bạn chưa có tài khoản? Đăng ký') }}
                            </a>
            </div>
        </div>
    </div>
</div>
<!-- ##### Login Area End ##### -->
@endsection