@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Add post')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Posts')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <form role="form" action="{{URL::to('/save-post')}}" method="post" enctype="multipart/form-data">
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
                            <h4 class="card-title">{{__('ADD TOUR POST')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="com1" class="control-label col-form-label">{{__("Title")}}</label>
                                    <input type="text" class="form-control" id="com1" placeholder="{{__("Title here")}}" name="post_title">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="emp1" class="control-label col-form-label">{{__("Tóm tắt bài viết")}}</label>
                                    <input type="text" class="form-control" id="emp1" placeholder="{{__("Desc here")}}" name="post_desc">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Nội dung bài viết')}}</label>
                                    <textarea class="form-control" id="ckeditor1" rows="4" placeholder="{{__('Content Here')}}" name="post_content"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Từ khóa meta')}}</label>
                                    <textarea class="form-control" id="exampleTextarea2" rows="2" placeholder="{{__('Meta')}}" name="post_meta_keyword"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Thumbnail image')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Thumb</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_thumb">
                                            <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Banner image')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Banner</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_banner">
                                            <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" >
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Status')}}</label>
                                    <select class="form-control" name="post_status">
                                        <option value="1">{{__('Enable')}}</option>
                                        <option value="0">{{__('Disable')}}</option>
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
                                <a href="{{URL::to('/add-post')}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
