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
                    <h3>Bài viết</h3>
                    <p>Cảm nhận của bạn về chuyến đi</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ bradcam_area  -->
<div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <form role="form" action="{{URL::to('/luu')}}" method="post" enctype="multipart/form-data">
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
                        <h3 class="mb-30">Thêm bài viết</h3>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="com1" class="control-label col-form-label">{{__("Tiêu đề")}}</label>
                                    
                                    <input type="text" name="post_title" placeholder="{{__('Tiêu đề')}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Tiêu đề')}}'"
                                required class="single-input">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="emp1" class="control-label col-form-label">{{__("Tóm tắt bài viết")}}</label>
                                 
                                    <input type="text" name="post_desc" placeholder="{{__('Tóm tắt bài viết')}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Tóm tắt bài viết')}}'"
                                required class="single-input">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Nội dung bài viết')}}</label>
                                    <textarea class="form-control" id="ckeditor4" rows="4" placeholder="{{__('Content Here')}}" name="post_content" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Từ khóa meta')}}</label>
                                    
                                    <textarea class="single-textarea" placeholder="{{__('Từ khóa meta')}}"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = '{{__('Từ khóa meta')}}'"
                                name="post_meta_keyword" required></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Ảnh bài viết')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Thumb</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_thumb" required>
                                            <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Ảnh bìa')}}</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Banner</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" accept="image/x-png,image/gif,image/jpeg" name="post_banner" required>
                                            <label class="custom-file-label" for="inputGroupFile01">{{__('Choose')}}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12" >
                                <div class="form-group">
                                    <label class="control-label col-form-label">{{__('Status')}}</label>
                                    <select class="form-control" name="post_status">
                                        
                                        <option value="0" selected>{{__('Disable')}}</option>
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
                                <a href="{{URL::to('/them-bai-viet')}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection