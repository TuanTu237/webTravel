@extends('Page_Views.Pages_Layout')
@section('content')
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_4">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text text-center">
                    <h3>Create my trip</h3>
                    <p>Please note this inquiry is totally free and you are under no obligation!</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->
<div class="whole-wrap">
    <div class="container box_1170">
        <div class="section-top-border">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <h3 class="mb-30"><b>Let's start customizing your trip</b></h3>
                    <form role="form" action="{{URL::to('/custom')}}" method="post">
                        {{--<input type="hidden" name="customer_id" value="{{$customer->customer_id}}">--}}
                        {{csrf_field() }}
                        <div class="mt-10">
                            <div class="row">
                                <div class="col-6">
                                    
                                        <h4>Nơi bạn muốn đến</h4>
                                        <div class="input_field">
                                            <select name="custom_destination">
                                                <option data-display="{{__('Destinations')}}"></option>
                                                <option value="Ha Long" selected>{{__('Ha Long')}}</option>
                                                <option value="Ninh Binh">{{__('Ninh Binh')}}</option>
                                                <option value="Nha Trang">{{__('Nha Trang')}}</option>
                                                <option value="Da Nang">{{__('Da Nang')}}</option>
                                                <option value="Da Lat">{{__('Da Lat')}}</option>
                                                <option value="Phu Quoc">{{__('Phu Quoc')}}</option>
                                                <option value="Ha Noi">{{__('Ha Noi')}}</option>
                                                <option value="Sai Gon">{{__('Sai Gon')}}</option>
                                            </select>
                                        </div><br><br>
                                        <h4>Đi du lịch trong bao nhiêu ngày</h4>
                                        <div class="input_field">
                                            <select name="custom_day">
                                                <option data-display="{{__('Days')}}"></option>
                                                <option value="1" selected>{{__('1 ngày')}}</option>
                                                <option value="2">{{__('2 ngày')}}</option>
                                                <option value="3">{{__('3 ngày')}}</option>
                                                <option value="4">{{__('4 ngày')}}</option>
                                                <option value="5">{{__('5 ngày')}}</option>
                                                <option value="6">{{__('6 ngày')}}</option>
                                                <option value="7">{{__('7 ngày')}}</option>
                                                <option value="over7day">{{__('Trên 7 ngày')}}</option>
                                            </select>
                                        </div><br><br>
                                        <h4>Bạn muốn trả bao nhiêu cho chuyến đi?</h4>
                                        <input type="text" name="custom_spend" placeholder="{{__('Đơn vị đồng')}}"
                                            onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = '{{__('Chi phí bạn muốn trả')}}'" required
                                            class="single-input">
                                        <br>
                                        <h4>Bạn muốn đi vào ngày nào?</h4>
                                        <div class="col-lg-12">
                                            <input style="display: block;
                                                          width: 100%;
                                                          line-height: 40px;
                                                          border: none;
                                                          outline: none;
                                                          background: #f9f9ff;
                                                          padding: 0 20px;
                                                          resize: none;" class="form-control" type="date"
                                                placeholder="DATE" id="example-datetime-local-input" name="custom_date" required>
                                        </div><br>
                                    
                                </div>

                                <div class="col-6">
                                    <h4 class="mb-30">Loại hình du lịch muốn trải nghiệm</h4>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Du lịch ẩm thực</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Du lịch ẩm thực" type="checkbox"
                                                name="custom_type_tour[]" checked>
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Du lịch văn hóa, lịch sử</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Du lịch văn hóa, lịch sử"
                                                type="checkbox" name="custom_type_tour[]">
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Du lịch đô thị</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Du lịch đô thị" type="checkbox"
                                                name="custom_type_tour[]">
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Du lịch sinh thái</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Du lịch sinh thái" type="checkbox"
                                                name="custom_type_tour[]">
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Du lịch nghỉ dưỡng</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Du lịch nghỉ dưỡng" type="checkbox"
                                                name="custom_type_tour[]">
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-between">
                                        <p>Teambuilding</p>
                                        <div class="form-check-label">
                                            <input class="form-check-input" value="Teambuilding" type="checkbox"
                                                name="custom_type_tour[]">
                                            <label for="default-checkbox"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <input type="text" name="custom_customer_name" placeholder="{{__('Họ và tên')}}" 
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Họ và tên')}}'"
                                required class="single-input" value="{{$customer_name=Session::get('customer_name')}}">
                        </div>
                        <div class="mt-10">
                            <input type="email" name="custom_customer_email" placeholder="{{__(' Địa chỉ Email')}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Địa chỉ Email')}}'"
                                required class="single-input" value="{{$customer_email=Session::get('customer_email')}}">
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="row">
                                <div class="col-7">
                                    <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                    <input type="text" name="custom_customer_address" placeholder="{{__('Địa chỉ')}}"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Địa chỉ')}}'"
                                        required class="single-input">
                                </div>
                                <div class="col-5">
                                    <input onkeypress="return onlyNumberKey(event)" id="phone_numb" type="number"
                                        name="custom_customer_phone" placeholder="{{__('Số điện thoại')}}"
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = '{{__('Số điện thoại')}}'" required
                                        class="single-input" style="padding-left: 20px"
                                        value="{{$customer_phone_number=Session::get('customer_phone_number')}}">
                                </div>
                            </div>
                        </div>
                        <div class="input-group-icon mt-10">
                            <div class="row">
                                <div class="col-6">
                                    <input type="number" name="custom_adult" placeholder="{{__('Người lón( > 12 tuổi)')}}"
                                        min="1" onfocus="this.placeholder = '1'"
                                        onblur="this.placeholder = '{{__('Người lón( > 12 tuổi)')}}'" required class="single-input"
                                        style="padding-left: 20px">
                                </div>
                                <div class="col-6">
                                    <input type="number" name="custom_child" placeholder="Trẻ em( Từ 2 - 11 tuổi)" min="0"
                                        onfocus="this.placeholder = '0'" onblur="this.placeholder = 'Trẻ em( Từ 2 - 11 tuổi)'" required
                                        class="single-input" style="padding-left: 20px">
                                </div>

                            </div>
                        </div>
                        {{--<div class="mt-10">
                            <div class="form-group row">
                                <label style="padding-left: 30px;font-weight: 500;padding-top: 10px"
                                    for="example-datetime-local-input" class="col-7 col-form-label">When are you
                                    traveling?</label>
                                <div class="col-5">
                                    <input style="display: block;
                                                          width: 100%;
                                                          line-height: 40px;
                                                          border: none;
                                                          outline: none;
                                                          background: #f9f9ff;
                                                          padding: 0 20px;
                                                          resize: none;" class="form-control" type="date"
                                        placeholder="DATE" id="example-datetime-local-input" name="custom_date">
                                </div>
                            </div>
                        </div>--}}
                        <div class="mt-10">
                            <p>Yêu cầu dặc biệt</p>
                            <textarea class="single-textarea" placeholder="{{__('Message')}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Message')}}'"
                                name="custom_message" required></textarea>
                        </div>
                        <!-- For Gradient Border Use -->
                        <!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
                        
                        <div class="mt-10" style="margin-top:20px;">
                            <div class="submit_btn">
                                <button class="boxed-btn4" type="submit">{{__('gửi ngay')}}</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-lg-3 col-md-4 mt-sm-30">
                    <div class="single-element-widget">

                        <h3 class="mb-30"><b>{{__('HOW IT WORK')}}</b></h3>
                        <sup>{{__('fast and simple')}}</sup>
                        <div class="how-it-work-item">
                            <ul>
                                <li class="row">
                                    <div class="work-number">1</div>
                                    <p>{{__('Send us your inquiry')}}</p>
                                </li>
                                <li class="row">
                                    <div class="work-number">2</div>
                                    <p>{{__('we will reply and advice soon')}}</p>
                                </li>
                                <li class="row">
                                    <div class="work-number">3</div>
                                    <p>{{__('Confirm booking and deposit')}}
                        </p>
                                </li>
                            </ul>

                        </div>
                    </div>


                    <div class="single-element-widget mt-30">
                        <h3><b>{{__('CUSTOMER SUPPORT')}}</b></h3>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>HaNoi, VietNam.</h3>
                                <p>1st floor, DaiCoViet street</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+ 84 0999912345</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>vietrip@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection