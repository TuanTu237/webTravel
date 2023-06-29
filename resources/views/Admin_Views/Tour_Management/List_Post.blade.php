@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    $message = Session::get('message');
                    if($message){
                        echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                        Session::put('message',null);
                    }
                    ?>
                    <div class="table-responsive">
                        <table id="file_export" class="table table-striped table-bordered display table-hover table-dark">
                            <thead class="bg-dark text-white">
                            <tr>
                                <th>{{__('Title')}}</th>
                                <th>{{__('Views')}}</th>
                                <th>{{__('Thumbnail image')}}</th>
                                <th>{{__('Banner image')}}</th>
                                <th>{{__('Meta keyword')}}</th>
                                <th>{{__('Tóm tắt')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $key =>$Post)
                                <tr>
                                    <th>{{$Post->post_title}}</th>
                                    <th>{{$Post->post_view}}</th>
                                    <th>
                                        <img class="hover-img" src="uploads/posts/thumb/{{$Post->post_thumb}}" height="50" width="50">
                                    </th>
                                    <th> <img class="hover-img" src="uploads/posts/banner/{{$Post->post_banner}}" height="50" width="50"> </th>
                                    <th>{{$Post->post_meta_keyword}}</th>
                                    <th>{{ \Illuminate\Support\Str::of($Post->post_desc)->words(10) }}</th>
                                    <th style="text-align: center">
                                        <?php
                                        if ($Post->post_status==0){

                                        ?>
                                        <a href="{{URL::to('/enable-post/'.$Post->post_id)}}"><i style=" text-align: center;color: red; font-size: 30px" class="fa-status-styling fa fa-times-circle"> </i> </a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <a href="{{URL::to('/disable-post/'.$Post->post_id)}}"><i style="color: green;font-size: 30px" class="fa-status-styling fa fa-check-circle"> </i> </a>
                                        <?php
                                        }
                                        ?>
                                    </th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/edit-post/'.$Post->post_id)}}"><i class="fa fa-pencil-alt"></i></a>
                                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{URL::to('/delete-post/'.$Post->post_id)}}"><i class="icon-close"></i></a>
                                        </div>
                                    </th>
                                </tr>

                                @endforeach
                                
                            </tbody>
                            <tfoot class="bg-dark text-white">
                            
                            </tfoot>
                        </table>
                    </div>
                    <div>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-lg-4">
                            {{$post->render("pagination::bootstrap-4")}}
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
