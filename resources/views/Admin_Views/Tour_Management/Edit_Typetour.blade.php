@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Add Type of Tour')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Type of Tours')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                @foreach($edit_typetour as $key=>$edit_Typetour)
                    <form role="form" action="{{URL::to('/update-type-tour/'.$edit_Typetour->typetour_id)}}" method="post" enctype="multipart/form-data">
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
                                <h4 class="card-title">{{__('ADD TYPE OF TOUR')}}</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="com1" class="control-label col-form-label">{{__("Name in Vietnamese")}}</label>
                                        <input type="text" class="form-control" id="com1" placeholder="{{__("Name here")}}" name="typetour_name_VI"
                                               value="{{$edit_Typetour->typetour_name_VI}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="emp1" class="control-label col-form-label">{{__("Name in English")}}</label>
                                        <input type="text" class="form-control" id="emp1" placeholder="{{__("Name here")}}" name="typetour_name_EN"
                                               value="{{$edit_Typetour->typetour_name_EN}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label col-form-label">{{__('Desc in Vietnamese')}}</label>
                                        <textarea class="form-control" id="exampleTextarea2" rows="4" placeholder="{{__('Desc Here')}}" name="typetour_desc_VI">{{$edit_Typetour->typetour_desc_VI}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label col-form-label">{{__('Desc in English')}}</label>
                                        <textarea class="form-control" id="exampleTextarea2" rows="4" placeholder="{{__('Desc Here')}}" name="typetour_desc_EN">{{$edit_Typetour->typetour_desc_EN}}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-8">
                                            <label class="control-label col-form-label">{{__('Thumbnail image')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Thumb</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="typetour_thumb">
                                                    <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img class="hover-img" src="{{URL::to('uploads/typetours/thumb/'.$edit_Typetour->typetour_thumb)}}" height="80" width="80">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding:10px"></div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-8">
                                            <label class="control-label col-form-label">{{__('Banner image')}}</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Banner</span>
                                                </div>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="typetour_banner">
                                                    <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <img class="hover-img" src="{{URL::to('uploads/typetours/banner/'.$edit_Typetour->typetour_banner)}}" height="80" width="80">

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12" >
                                    <div class="form-group">
                                        <label class="control-label col-form-label">{{__('Status')}}</label>
                                        <select class="form-control" name="typetour_status">
                                            @foreach($edit_typetour as $key =>$status)
                                                @if($status->typetour_status==1){
                                                <option selected value="1">{{__('Enable')}}</option>
                                                <option value="0">{{__('Disable')}}</option>
                                                }
                                                @else{
                                                <option selected value="0">{{__('Disable')}}</option>
                                                <option  value="1">{{__('Enable')}}</option>}
                                                @endif
                                            @endforeach
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
                                    <a href="{{URL::to('/list-type-tour')}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                                </div>
                            </div>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
