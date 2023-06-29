
    <!-- where_togo_area_start  -->
    <div class="where_togo_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="form_area">
                        <h3>{{__('Where you want to go?')}}</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="search_wrap">
                        <form class="search_form" action="{{URL::to('search-1')}}" method="get" >
                            <div class="input_field">
                                <select name="destination_id">
                                    <option data-display="{{__('Destinations')}}"></option>
                                    <option value="1">{{__('Ha Long')}}</option>
                                    <option value="2">{{__('Ninh Binh')}}</option>
                                    <option value="3">{{__('Nha Trang')}}</option>
                                    <option value="4">{{__('Da Nang')}}</option>
                                    <option value="5">{{__('Da Lat')}}</option>
                                    <option value="6">{{__('Phu Quoc')}}</option>
                                    <option value="7">{{__('Ha Noi')}}</option>
                                    <option value="8">{{__('Dong Thap')}}</option>
                                </select>
                            </div>
                            <div class="input_field">
                                <input id="datepicker" placeholder="Date">
                            </div>
                            <div class="input_field">
                                <select name="typetour_id">
                                    <option data-display="{{__('Type of tours')}}"></option>
                                    <option value="1">{{__('Food tour')}}</option>
                                    <option value="2">{{__('Day tour')}}</option>
                                    <option value="3">{{__('Sea tour')}}</option>
                                    <option value="4">{{__('Eco tour')}}</option>
                                    <option value="5">{{__('Adventure tour')}}</option>
                                    <option value="6">{{__('Historical tour')}}</option>
                                    <option value="7">{{__('Resort tour')}}</option>
                                    <option value="8">{{__('Honeymoon tour')}}</option>
                                    <option value="9">{{__('Trans Vietnam')}}</option>
                                </select>
                            </div>
                            <div class="search_btn">
                                <button class="boxed-btn4 " type="submit" >{{__('Search')}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- where_togo_area_end  -->

