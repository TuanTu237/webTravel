@extends('Admin_Views.Admin_Layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{__('Edit Tour')}}</h4>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Tours')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-lg-12 col-lg-6">
        <div class="card">
            <form role="form" action="{{URL::to('/update-tour/'.$tour->tour_id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field() }}
                <input type="hidden" name="tour_id" value="{{$tour->tour_id}}">
                <div class="card-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('EDIT TOUR')}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1"
                                    class="control-label col-form-label">{{__("Name in Vietnamese")}}</label>
                                <input type="text" class="form-control" id="com1" placeholder="{{$tour->tour_name_VI}}"
                                    name="tour_name_VI" value="{{$tour->tour_name_VI}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="emp1" class="control-label col-form-label">{{__("Name in English")}}</label>
                                <input type="text" class="form-control" id="emp1" placeholder="{{$tour->tour_name_EN}}"
                                    name="tour_name_EN" value="{{$tour->tour_name_EN}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Tour base price")}}</label>
                                <div class="row" style="margin-left:1px ">
                                    <div class="col-1">
                                        <h4 style="margin: 5px 0px 0px 10px">VNĐ</h4>
                                    </div>
                                    <input onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" type="text"
                                        class="form-control col-11 " id="com9" placeholder="{{__("Cost here")}}"
                                        name="tour_price" value="{{$tour->tour_price}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Departure day')}}</label>
                                <input type="date" class="form-control input" id="com1" name="tour_date" value="{{$tour->tour_date}}" require>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Number of slots')}}</label>
                                <input min="1" type="number" class="form-control col-12 " id="emp6" placeholder=""
                                        name="tour_slot" required value="{{$tour->tour_slot}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">Desc in Vietnamese</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Desc Here')}}"
                                    name="tour_desc_VI">{{$tour->tour_desc_VI}}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">Desc in English</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Desc Here')}}"
                                    name="tour_desc_EN">{{$tour->tour_desc_EN}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Overview in Vietnamese</label>
                                <textarea class="form-control" id="ckeditor5" rows="4"
                                    placeholder="{{__('Overview Here')}}"
                                    name="tour_overview_VI">{{$tour->tour_overview_VI}}</textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">Overview in English</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Overview Here')}}"
                                    name="tour_overview_EN">{{$tour->tour_overview_EN}}</textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Thumb</label>
                                    <img style="width: 100px;height: auto"
                                        src="{{asset('uploads/tours/thumb/'.$tour->tour_thumb)}}">
                                    <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                        name="tour_thumb">
                                </div>
                                <div class="form-group col-6">
                                    <label>Banner</label>
                                    <img style="width: 100px;height: auto"
                                        src="{{asset('uploads/tours/banner/'.$tour->tour_banner)}}">
                                    {{--<input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                        name="tour_banner">--}}
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 1</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img1)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 2</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img2)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 3</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img3)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 4</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img4)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 5</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img5)}}">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 6</label>
                                <img style="width: 100px;height: auto"
                                    src="{{asset('uploads/tours/img/'.$tour->tour_img6)}}">
                            </div>
                        </div>
                    </div>
                    {{--<div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 1</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img1">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 2</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 3</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img3">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 4</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 5</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img5">
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 6</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img6">
                            </div>
                        </div>
                    </div>--}}
                    <hr style="background-color: #b2b9bf">
                    <div class="row">
                        <div class="col-4">
                            <label for="">{{__('Duration')}}</label>
                            <div class="row ">

                                <div class="col-lg-3 col-sm-6">
                                    <input min="1" type="number" class="form-control col-12 " id="emp5"
                                        value="{{$tour->tour_day}}" name="tour_day">
                                </div>
                                <p style="padding:8px 8px 0px 0px;">{{__("Days")}}</p>
                                <div class="col-lg-3 col-sm-6">
                                    <input min="1" type="number" class="form-control col-12 " id="emp6"
                                        value="{{$tour->tour_night}}" name="tour_night">
                                </div>
                                <p style="padding:8px 8px 0px 0px;">{{__("Night")}}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">{{__('Arrival')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" class="form-control col-12 " id="emp7"
                                        value="{{$tour->tour_arrival}}" name="tour_arrival">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">{{__('Departure')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" class="form-control col-12 " id="emp8"
                                        value="{{$tour->tour_departure}}" name="tour_departure">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                        <div class="col-6">
                            <label for="">{{__('Adult price')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                <input onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" type="text"
                                        class="form-control col-11 " id="com9" placeholder="{{__("Adult price(VNĐ)")}}"
                                        name="tour_adult_price" value="{{$tour->tour_adult_price}}" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="">{{__('Child price')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                <input onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" type="text"
                                        class="form-control col-11 " id="com9" placeholder="{{__("Child price(VNĐ)")}}"
                                        name="tour_child_price" value="{{$tour->tour_child_price}}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Tour schedule')}}</label>
                                <div class="control-group" id="fields">
                                    <div class="entry input-group ">
                                        <textarea class="form-control" name="tour_sche">{{$tour->tour_sche}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Details schedule')}}</label>
                                <div class="control-group" id="fields">
                                @foreach($tour_schedule as $tour_schedule)
                                    <div class="controls">
                                        <div class="entry input-group ">
                                            {{--<label for="">Ngày 1 </label>--}}
                                            <textarea class="form-control clone col-8" name="tour_day_1"
                                                placeholder="Day 1" required>{{$tour_schedule->tour_schedule_content}}</textarea>
                                            <button class="btn-add btn waves-effect  btn-primary " type="button"
                                                style="margin: 10px">Add</button>
                                            <button class="btn-remove btn waves-effect waves-light btn-danger "
                                                type="button" style="margin: 10px">Remove </button>
                                        </div>
                                        <div class="padding-div" style="margin-bottom: 10px"></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-6">
                            <label for="">{{__('Destinations')}}</label>
                            <select class="form-control" name="destination_id">
                                @foreach($dest as $key => $Dest)
                                <option {{$tour->destination_id==$Dest->destination_id ? 'selected':''}} value="{{$Dest->destination_id}}">
                                    {{$Dest->destination_name_VI}}</option>
                                
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="">{{__('Type of tours')}}</label>
                            <select class="form-control" name="typetour_id" id="">
                                @foreach($type as $key => $Type)
                                
                                <option {{$tour->typetour_id==$Type->typetour_id ? 'selected':''}} value="{{$Type->typetour_id}}">
                                    {{$Type->typetour_name_VI}}</option>
                                       
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr style="background-color: #b2b9bf ;margin-top: 25px">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Tour Map')}}</label>

                                <div class="control-group" id="fields">
                                    <div class="entry input-group ">
                                        <iframe src="{{$tour->tour_map}}" style="width: 100%; height: 400px"></iframe>
                                    </div>
                                </div>
                                <hr>
                                <div class="control-group" id="fields">
                                    <div class="entry input-group ">
                                        <textarea class="form-control" name="tour_map"
                                            placeholder="{{__('URL google maps here')}}">{{$tour->tour_map}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <label for="">{{__('Tour service')}}</label>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea2" rows="8"
                                    placeholder="{{__('Included')}}"
                                    name="tour_service_in">{{$tour->tour_service_in}}</textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea2" rows="8"
                                    placeholder="{{__('Excluded')}}"
                                    name="tour_service_ex">{{$tour->tour_service_ex}}</textarea>
                            </div>
                        </div>
                    </div>
                    <label for="">{{__('Tour highlights')}}</label>
                    <div class="row" style="margin-left: 2px">
                        <?php $lang_status = Session::get('language'); $i=0;
                            if($lang_status!="en"){
                            ?>
                        @foreach($highlight as $key => $Highlight)
                        <?php $i++?>
                        <div class="custom-control custom-checkbox col-lg-2 col-sm-4  " style="margin-bottom: 10px">
                            <input type="checkbox" class="custom-control-input" id="{{$Highlight->highlight_name_EN}}"
                                name="highlight[]" value="{{$Highlight->highlight_id}}">
                            <label class="custom-control-label"
                                for="{{$Highlight->highlight_name_EN}}">{{$Highlight->highlight_name_VI}}</label>
                        </div>
                        @endforeach
                        <?php
                            }else {
                            ?>
                        @foreach($highlight as $key => $Highlight)
                        <?php $i++?>
                        <div class="custom-control custom-checkbox col-lg-2 col-sm-4 " style="margin-bottom: 10px">
                            <input type="checkbox" class="custom-control-input" id="{{$Highlight->highlight_name_EN}}"
                                name="highlight[]" value="{{$Highlight->highlight_id}}">
                            <label class="custom-control-label"
                                for="{{$Highlight->highlight_name_EN}}">{{$Highlight->highlight_name_EN}}</label>
                        </div>
                        @endforeach
                        <?php
                            }
                            ?>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Status')}}</label>
                                <select class="form-control" name="tour_status">
                                    <option value="1">{{__('Enable')}}</option>
                                    <option value="0">{{__('Disable')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Cấp độ dịch')}}</label>
                                <select class="form-control" name="tour_covid">
                                    <option value="1">{{__('Cấp độ 1')}}</option>
                                    <option value="2">{{__('Cấp độ 2')}}</option>
                                    <option value="3">{{__('Cấp độ 3')}}</option>
                                    <option value="4">{{__('Cấp độ 4')}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="action-form">
                        <div class="form-group m-b-0 text-center">
                            <div></div>
                            <button type="submit" class="btn btn-info waves-effect waves-light">{{__('Save')}}</button>
                            <a href="{{URL::to('list-tour')}}"
                                class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="{{asset('//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js')}}"></script>
<script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
<script>

$(document).ready(function() {
    var day = 1;
    $(".btn-add").click(function() {
        day++;
        $(".clone:first").clone().appendTo(".controls").attr('name', 'tour_day_' + day).attr(
            'placeholder', 'Day ' + day);
        $(".padding-div:first").clone().appendTo(".controls");
    });
    $('.btn-remove').click(function() {
        if (day > 1) {
            day--;
            $(".clone:last").remove();
        } else {

        }
    })
});



function fun_AllowOnlyAmountAndDot(txt) {
    if (event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46) {
        var txtbx = document.getElementById(txt);
        var amount = document.getElementById(txt).value;
        var present = 0;
        var count = 0;

        if (amount.indexOf(".", present) || amount.indexOf(".", present + 1)); {

        }

        do {
            present = amount.indexOf(".", present);
            if (present != -1) {
                count++;
                present++;
            }
        }
        while (present != -1);
        if (present == -1 && amount.length == 0 && event.keyCode == 46) {
            event.keyCode = 0;
            return false;
        }

        if (count >= 1 && event.keyCode == 46) {

            event.keyCode = 0;
            return false;
        }
        if (count == 1) {
            var lastdigits = amount.substring(amount.indexOf(".") + 1, amount.length);
            if (lastdigits.length >= 2) {
                event.keyCode = 0;
                return false;
            }
        }
        return true;
    } else {
        event.keyCode = 0;
        //alert("Only Numbers with dot allowed !!");
        return false;
    }

}
</script>

@endsection