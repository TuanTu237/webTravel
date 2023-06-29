@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('Edit Post')}}</h4>
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
                @foreach($edit_post as $key=>$edit_Post)
                <form role="form" action="{{URL::to('/update-post/'.$edit_Post->post_id)}}" method="post" enctype="multipart/form-data">
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
                            <h4 class="card-title">{{__('EDIT POST')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="com1" class="control-label col-form-label">{{__("Title")}}</label>
                                    <input type="text" class="form-control" id="com1" placeholder="{{__("Title here")}}" name="Post_title" value="{{$edit_Post->post_title}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="emp1" class="control-label col-form-label">{{__("Tóm tắt bài viết")}}</label>
                                    <input type="text" class="form-control" id="emp1" placeholder="{{__("Desc here")}}" name="Post_desc" value="{{$edit_Post->post_desc}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Nội dung bài viết')}}</label>
                                    <textarea class="form-control" id="ckeditor1" rows="4" placeholder="{{__('Content Here')}}" name="Post_content" value="{{$edit_Post->post_content}}">
                                    {{$edit_Post->post_content}}</textarea>
                                            
  
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Từ khóa meta')}}</label>
                                    <textarea class="form-control" id="exampleTextarea2" rows="2" placeholder="{{__('Meta')}}" name="Post_meta_keyword">{{$edit_Post->post_meta_keyword}}</textarea>
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
                                                <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_thumb">
                                                <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <img class="hover-img" src="{{asset('uploads/posts/thumb/'.$edit_Post->post_thumb)}}" height="80" width="80">
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
                                                   <input type="file" class="form-control" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_banner">
                                                   <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                               </div>
                                           </div>
                                       </div>
                                       <div class="col-4">
                                           <img class="hover-img" src="{{URL::to('uploads/posts/banner/'.$edit_Post->post_banner)}}" height="80" width="80">

                                       </div>
                                   </div>
                            </div>
                            <div class="col-12" >
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Status')}}</label>
                                    <select class="form-control" name="Post_status">
                                        @foreach($edit_post as $key =>$status)
                                            @if($status->post_status==1){
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
                                <a href="{{URL::to('/list-post')}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
