@extends('Admin_Views.Admin_Layout')
@section('content')
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">{{__('Add Tour')}}</h4>
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
            <form role="form" action="{{URL::to('/save-tour')}}" method="post" enctype="multipart/form-data">
                {{csrf_field() }}
                <div class="card-body">
                    <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                    <div class="d-flex no-block align-items-center">
                        <h4 class="card-title">{{__('ADD TOUR')}}</h4>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1"
                                    class="control-label col-form-label">{{__("Name in Vietnamese")}}</label>
                                <input type="text" class="form-control" id="com1" placeholder="{{__("Name here")}}"
                                    name="tour_name_VI" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="emp1" class="control-label col-form-label">{{__("Name in English")}}</label>
                                <input type="text" class="form-control" id="emp1" placeholder="{{__("Name here")}}"
                                    name="tour_name_EN" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="com1" class="control-label col-form-label">{{__("Tour price")}}</label>
                                <div class="row" style="margin-left:1px ">
                                    <div class="col-1">
                                        <h4 style="margin: 5px 0px 0px 10px">VNĐ</h4>
                                    </div>
                                    <input onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" type="text"
                                        class="form-control col-11 " id="com9" placeholder="{{__("Cost here")}}"
                                        name="tour_price" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Desc in Vietnamese')}}</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Desc Here')}}" name="tour_desc_VI" required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Desc in English')}}</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Desc Here')}}" name="tour_desc_EN" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Departure day')}}</label>
                                <input type="date" class="form-control input" id="com1" name="tour_date" require>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Number of slots')}}</label>
                                <input min="1" type="number" class="form-control col-12 " id="emp6" placeholder=""
                                        name="tour_slot" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Overview in Vietnamese')}}</label>
                                <textarea class="form-control" id="ckeditor4" rows="4"
                                    placeholder="{{__('Overview Here')}}" name="tour_overview_VI" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label class="control-label col-form-label">{{__('Overview in English')}}</label>
                                <textarea class="form-control" id="exampleTextarea2" rows="4"
                                    placeholder="{{__('Overview Here')}}" name="tour_overview_EN" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Thumb</label>
                                    <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                        name="tour_thumb">
                                </div>
                                <div class="form-group col-6">
                                    <label>Banner</label>
                                    <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                        name="tour_banner">
                                </div>
                            </div>

                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 1</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img1" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 2</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img2" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 3</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img3" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 4</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img4" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 5</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img5" required>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="form-group">
                                <label for="">{{__('Image')}} 6</label>
                                <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg"
                                    name="tour_img6" required>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #b2b9bf">
                    <div class="row">
                        <div class="col-4">
                            <label for="">{{__('Duration')}}</label>
                            <div class="row ">

                                <div class="col-lg-3 col-sm-6">
                                    <input min="1" type="number" class="form-control col-12 " id="emp5" placeholder=""
                                        name="tour_day" required>
                                </div>
                                <p style="padding:8px 8px 0px 0px;">{{__("Days")}}</p>
                                <div class="col-lg-3 col-sm-6">
                                    <input min="1" type="number" class="form-control col-12 " id="emp6" placeholder=""
                                        name="tour_night" required>
                                </div>
                                <p style="padding:8px 8px 0px 0px;">{{__("Night")}}</p>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">{{__('Arrival')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" class="form-control col-12 " id="emp7" placeholder=""
                                        name="tour_arrival" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <label for="">{{__('Departure')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                    <input type="text" class="form-control col-12 " id="emp8" placeholder=""
                                        name="tour_departure" required>
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
                                        name="tour_adult_price" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="">{{__('Child price')}}</label>
                            <div class="row ">
                                <div class="col-12">
                                <input onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" type="text"
                                        class="form-control col-11 " id="com9" placeholder="{{__("Child price(VNĐ)")}}"
                                        name="tour_child_price" required>
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
                                        <textarea class="form-control" name="tour_sche"
                                            placeholder="{{__('Tour schedule')}}" required></textarea>
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
                                    <div class="controls">
                                        <div class="entry input-group ">
                                            {{--<label for="">Ngày 1 </label>--}}
                                            <textarea class="form-control clone col-8" name="tour_day_1"
                                                placeholder="Day 1" rows="4" required></textarea>
                                            <button class="btn-add btn waves-effect  btn-primary " type="button"
                                                style="margin: 10px">Add</button>
                                            <button class="btn-remove btn waves-effect waves-light btn-danger "
                                                type="button" style="margin: 10px">Remove </button>
                                        </div>
                                        <div class="padding-div" style="margin-bottom: 10px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="">{{__('Destinations')}}</label>
                            <select class="form-control" name="destination_id">
                                @foreach($dest as $key => $Dest)
                                <?php $lang_status = Session::get('language');
                                        if($lang_status!="en"){
                                        ?>
                                <option value="{{$Dest->destination_id}}">{{$Dest->destination_name_VI}}</option>
                                <?php
                                        }else {
                                        ?>
                                <option value="{{$Dest->destination_id}}">{{$Dest->destination_name_EN}}</option>
                                <?php
                                        }
                                        ?>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="">{{__('Type of tours')}}</label>
                            <select class="form-control" name="typetour_id" id="">
                                @foreach($type as $key => $Type)
                                <?php $lang_status = Session::get('language');
                                        $name=Session::get('customer_name');
                                        if($lang_status!="en"){
                                        ?>
                                <option value="{{$Type->typetour_id}}">{{$Type->typetour_name_VI}}</option>
                                <?php
                                        }else {
                                        ?>
                                <option value="{{$Type->typetour_id}}">{{$Type->typetour_name_EN}}</option>
                                <?php
                                        }
                                        ?>
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
                                        <textarea class="form-control" name="tour_map"
                                            placeholder="{{__('url google maps here')}}" required></textarea>
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
                                    placeholder="{{__('Included')}}" name="tour_service_in" required></textarea>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea2" rows="8"
                                    placeholder="{{__('Excluded')}}" name="tour_service_ex" required></textarea>
                            </div>
                        </div>
                    </div>
                    <label for="">{{__('Tour highlights')}}</label>
                    <div class="row" style="margin-left: 2px">
                        
                        @foreach($highlight as $key => $Highlight)
                        
                        <div class="custom-control custom-checkbox col-lg-2 col-sm-4  " style="margin-bottom: 10px">
                            <input type="checkbox" class="custom-control-input" id="{{$Highlight->highlight_name_EN}}"
                                name="highlight[]" value="{{$Highlight->highlight_id}}">
                            <label class="custom-control-label"
                                for="{{$Highlight->highlight_name_EN}}">{{$Highlight->highlight_name_VI}}</label>
                        </div>
                        @endforeach
                        
                       
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
                            <a href="{{URL::to('/add-tour')}}"
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
/*$(function()
        {
            var day=1;
            $(document)
                .on('click', '.btn-add', function(e)
            {
                day++;
                e.preventDefault();
                var controlForm = $('.controls:first '),
                    currentEntry = $(this).parents('.entry:first '),
                    text=$(this).parents('.clone:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm).attr('name','Day ' + day).attr('placeholder','Day ' + day),
                    textarea =$(text.clone()).appendTo(controlForm).attr('name','Day ' + day).attr('placeholder','Day ' + day)
                ;

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add')/!*.addClass('btn-remove')*!/
                    .removeClass('btn waves-effect waves-light btn-primary')/!*.addClass('btn waves-effect waves-light btn-danger')*!/
                    /!*.html('<span class="btn waves-effect waves-light btn-danger">Remove</span>');*!/
                })
                .on('click', '.btn-remove', function(e)
                {
                    day--;
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
                });
        });*/
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

        /*if(amount.length==2)
        {
          if(event.keyCode != 46)
          return false;
        }*/
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