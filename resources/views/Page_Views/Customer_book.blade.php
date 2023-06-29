@extends('Page_Views.Pages_Layout')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="destination_details_info" style="padding-bottom: 40px;padding-top: 40px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 mb-2 ">
                        <div class="feature-img">
                            <img class="card-img rounded-0" src="{{asset('uploads/tours/banner/'.$tour->tour_banner)}}"
                                alt="">
                        </div>
                    </div>
                    <?php
				$content = Cart::content();
				
				?>
                    <div class="col-lg-8 col-md-8 mb-2 ">
                        <div class="row">
                            <?php $lang_status = Session::get('language');
                            if($lang_status!="en"){
                            ?>
                            <h2>{{$tour->tour_name_VI}}</h2>
                            <?php
                            }else {
                            ?>
                            <h2>{{$tour->tour_name_EN}}</h2>
                            <?php
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ff4a52">
                                            <path
                                                d="M64.5,7.16667v14.33333h43v-14.33333zM135.87272,20.01628l-9.26627,10.93197l21.13606,17.91667l9.26628,-10.93197zM86,28.66667c-35.561,0 -64.5,28.939 -64.5,64.5c0,35.561 28.939,64.5 64.5,64.5c35.561,0 64.5,-28.939 64.5,-64.5c0,-35.561 -28.939,-64.5 -64.5,-64.5zM78.83333,50.16667h14.33333v50.16667h-14.33333z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="tour_name">{{__('Thời gian ')}}: </span><b> {{$tour->tour_day}}
                                    {{__('ngày')}}
                                    {{$tour->tour_night}} {{__('đêm')}}</b>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="12" y1="8" x2="12" y2="12"></line><line x1="12" y1="16" x2="12.01" y2="16"></line></svg>
                        <span class="tour_name">{{__('Cấp độ dịch')}}: </span> <b> {{$tour->tour_covid}}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ff4a52">
                                            <path
                                                d="M57.92122,22.31185l-12.97559,3.91927l28.65267,49.9987l-36.50521,9.63021l-12.96159,-10.88997l-9.79818,2.92545l18.36458,31.34017l116.05241,-30.55632c0.01401,-0.00464 0.02801,-0.00931 0.042,-0.014c5.13237,-0.90944 8.87286,-5.36971 8.87435,-10.58203c0,-5.93706 -4.81294,-10.75 -10.75,-10.75c-0.93573,0.00017 -1.86743,0.12252 -2.77149,0.36393v-0.014l-37.48503,9.86816zM21.5,129v14.33333h129v-14.33333z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="tour_name">{{__('Nơi khởi hành')}}: </span> <b>
                                    {{$tour->tour_departure}}</b>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#ff4a52">
                                            <path
                                                d="M71.66667,17.2028v57.5013l-35.23145,-9.28027l-5.9069,-15.88704l-9.02832,-2.04362v36.21127l115.73047,30.68229v-0.028c0.82473,0.20179 1.67047,0.30516 2.51953,0.30794c5.93706,0 10.75,-4.81294 10.75,-10.75c-0.00126,-5.15347 -3.65959,-9.58105 -8.72038,-10.55403l-35.79134,-9.57422l-20.10026,-63.3942zM21.5,136.16667v14.33333h129v-14.33333z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <span class="tour_name">{{__('Nơi đến')}}: </span> <b> {{$tour->tour_arrival}}</b>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span class="tour_name">{{__('Khởi hành')}}: </span> <b>
                            {{date('d-m-Y', strtotime($tour->tour_date))}}</b>
                            </div>
                            <div class="col-lg-6 col-md-6 mb-2 icon_tour">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ff4a52" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <span class="tour_name">{{__('Số chỗ còn nhận')}}: </span> <b> {{$tour->tour_slot}}</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr id="fix_form">
<div class="destination_details_info" style="padding-bottom: 40px;padding-top: 40px;">
    <div class="container">
        <div class="row">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9">
                    <div class="contact_join">
                        <h3>{{__('Tổng quan chuyến đi')}}</h3>
                        <form role="form" action="{{URL::to('/booking')}}" method="post">
                            {{csrf_field() }}
                            <input type="hidden" name="tour_id" value="{{$tour->tour_id}}">
                            <input type="hidden" name="destination_name_EN" value="{{$tour->destination_name_EN}}">
                            <input type="hidden" name="typetour_id" value="{{$tour->typetour_id}}">
                            <div class="mt-10">
                                <p>Họ và tên</p>
                                <input type="text" name="booking_customer_name" placeholder="{{__('Họ và tên')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Họ và tên')}}'"
                                    required class="single-input" value="{{$customer_name=Session::get('customer_name')}}">
                            </div>
                            <div class="mt-10">
                                <p>Địa chỉ email</p>
                                <input type="email" name="booking_customer_email" placeholder="{{__('Email')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Email')}}'"
                                    required class="single-input" value="{{$customer_email=Session::get('customer_email')}}">
                            </div>
                            <div class="input-group-icon mt-10">

                                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                <input type="text" name="booking_customer_address" placeholder="{{__('Địa chỉ')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Địa chỉ')}}'"
                                    required class="single-input">
                            </div>
                            <div class="input-group-icon mt-10 ">

                                <div class="row">
                                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="form-select col-5" id="default-select">
                                        <select name="booking_customer_phone_domain">
                                            <option value="+84">+ 84 (Vietnam)</option>


                                        </select>
                                    </div>
                                    <div class="col-7">
                                        <input onkeypress="return onlyNumberKey(event)" id="phone_numb" type="text"
                                            name="booking_customer_phone_number" placeholder="{{__('Số điện thoại')}}"
                                            onfocus="this.placeholder = ''" value="{{$customer_phone_number=Session::get('customer_phone_number')}}"
                                            onblur="this.placeholder = '{{__('Số điện thoại')}}'" required
                                            class="single-input" style="padding-left: 20px">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                    <select name="booking_customer_nationality">
                                        <option value="1">{{__('Quốc tịch')}}</option>
                                        <option value="Vietnam">Vietnam</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mt-10">
                                <div class="form-group row">
                                    <label style="padding-left: 30px;font-weight: 500;padding-top: 10px"
                                        for="example-datetime-local-input" class="col-2 col-form-label"><h5>Ngày
                                        đi</h5></label>
                                    <div class="col-10">
                                        <input style="display: block;
                                                          width: 100%;
                                                          line-height: 40px;
                                                          border: none;
                                                          outline: none;
                                                          background: #f9f9ff;
                                                          padding: 0 20px;
                                                          resize: none;" class="form-control" type="date" value="{{$tour->tour_date}}"
                                            placeholder="DATE" id="example-datetime-local-input" name="booking_date" require readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10">
                                <div class="row">

                                    <div class="col-4">
                                        <h5>Người lớn( > 12 tuổi) :</h5>
                                    </div>
                                    <div class="col-4 text-right">
                                    {{number_format($tour->tour_adult_price). ' VNĐ x'}}
                                    </div>
                                    <div class="col-4">
                                       
                                            <input type="number" required min="1" name="booking_customer_adult" class="form-control" placeholder="Số người lớn" id="adult">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10 ">
                                <div class="row">

                                    <div class="col-4">
                                        <h5>Trẻ em( Từ 2 - 11 tuổi) :</h5>
                                    </div>
                                    <div class="col-4 text-right">
                                    {{number_format($tour->tour_child_price). ' VNĐ x'}}
                                    </div>
                                    <div class="col-4">
                                         
                                            <input type="number" required min="0" name="booking_customer_child" class="form-control" placeholder="Số trẻ em" id="child"> 
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10 ">
                                <div class="row">

                                    <div class="col-4">
                                        <h5>Em bé( Từ 0 - 2 tuổi) :</h5>
                                    </div>
                                    <div class="col-4 text-right">
                                    {{number_format(0). ' VNĐ   x'}}
                                    </div>
                                    <div class="col-4">
                                        
                                             <input required min="0" type="number" name="booking_customer_ifant" class="form-control" placeholder="Số trẻ sơ sinh" id="ifant">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group-icon mt-10 ">
                                    <div class="row">

                                        <div class="col-8">
                                            <h5>TỔNG CỘNG</h5>
                                        </div>
                                        <div class="col-3">
                                        
                                        <input type="text" name="subtotal" class="form-control" id="total" value="{{number_format(0)}}" >
                                        </div>
                                        <div class="col-1">
                                            <p>Người</p>
                                        </div>
                                    </div>
                                </div>
                            <div class="mt-10">
                                <p>Ghi chú thêm</p>
                                <textarea class="single-textarea" placeholder="{{__('Ghi chú thêm')}}"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Ghi chú thêm')}}'"
                                    name="booking_customer_message"></textarea>
                            </div>
                            <div class="mt-10" style="margin-top:20px;">
                                <div class="submit_btn">
                                    <button class="boxed-btn4" type="submit">{{__('Đặt ngay')}}</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-4 col-md-9">
                    <div id="form_to_book" style="position: sticky;top: -100px">
                        <div class="container">
                            <div class="cost_from">
                                <div class="sample-text">
                                    {{__('No')}} <del>{{__('bank fee')}}.</del>
                                    {{__('Travelling with us The Real Deal with Personal Service')}}
                                    <h3><b>{{__('From')}}: {{number_format($tour->tour_price). ' VNĐ'}}</b></h3>

                                    <sup>{{__('The price includes all services')}}</sup>
                                </div>
                            </div>
                        </div>

                        <div class="section-top-border">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr>
<script type="text/javascript">
 $(document).ready(function() {

    $("#total").click(function() {
        /*var quantity = document.getElementById("quantity").value;*/
        var quantity = $("#quantity").val();
        var child = $("#child").val();
        var adult = $("#adult").val();
        var ifant = $("#ifant").val();
        if((child >= 0) && (adult > 0) && (ifant >= 0)){
        var unitprice = $("#unitprice").val();
        var total = (adult*1+child*1+ifant*1);
       
    }else{
          alert('Nhập số người lớn hơn 0');
        
        }
         $('#total').val(total);
         $('#subtotal').val(total);
        
    });

    $('#vat').change(function() {
      var vInput = this.value;

      var subtotal = $("#subtotal").val();

      var vInput = ((vInput*subtotal)/100);

      var vstotal = (parseFloat(subtotal)+parseFloat(vInput)).toFixed(1);
      $('#vatsubtotal').val(vstotal);
      });

    $('#paid').change(function() {
      var pInput = this.value;
      var vatsubtotal = $("#vatsubtotal").val();
  
        if((pInput < vatsubtotal) || (pInput <= vatsubtotal)){
          $('#paid').val(pInput);

          var dInput = (vatsubtotal-pInput);
          $('#due').val(dInput);

          var total = $("#total").val();
          var subtotal = $("#subtotal").val();
          var gtInput = (parseFloat(total)+parseFloat(subtotal)+parseFloat(vatsubtotal)).toFixed(1);
          $('#grandtotal').val(gtInput);
        }else{
          alert('You are paying so much amount');
        
        }
      });
  
});
  
</script>
@endsection