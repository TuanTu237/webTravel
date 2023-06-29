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
                                <th>{{__('Name in Vietnamese')}}</th>
                                <th>{{__('Depature Day')}}</th>
                                <th>{{__('Thumbnail image')}}</th>
                                <th>{{__('Banner image')}}</th>
                                <th>{{__('Desc in Vietnamese')}}</th>
                                <th>{{__('Tour slots')}}</th>
                                <th>{{__('Status')}}</th>
                                <th>{{__('Action')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tour as $key =>$Tour)
                            <tr>
                                <th>{{$Tour->tour_name_VI}}</th>
                                <th>{{$Tour->tour_date}}</th>
                                <th>
                                    <img class="hover-img" src="uploads/Tours/thumb/{{$Tour->tour_thumb}}" height="50"
                                        width="50">
                                </th>
                                <th> <img class="hover-img" src="uploads/Tours/banner/{{$Tour->tour_banner}}"
                                        height="50" width="50"> </th>
                                <th>{{ \Illuminate\Support\Str::of($Tour->tour_desc_VI)->words(12) }}</th>
                                <th>{{$Tour->tour_slot}}</th>
                                <th style="text-align: center">
                                    <?php
                                            if ($Tour->tour_status==0){

                                            ?>
                                    <a href="{{URL::to('/enable-tour/'.$Tour->tour_id)}}"><i
                                            style=" text-align: center;color: red; font-size: 30px"
                                            class="fa-status-styling fa fa-times-circle"> </i> </a>
                                    <?php
                                            }
                                            else{
                                            ?>
                                    <a href="{{URL::to('/disable-tour/'.$Tour->tour_id)}}"><i
                                            style="color: green;font-size: 30px"
                                            class="fa-status-styling fa fa-check-circle"> </i> </a>
                                    <?php
                                            }
                                            ?>
                                </th>
                                <th style="text-align: center">
                                    <div class="btn-group">
                                        <a class="btn btn-primary" href="{{URL::to('/edit-tour/'.$Tour->tour_id)}}"><i
                                                class="fa fa-pencil-alt"></i></a>
                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger"
                                            href="{{URL::to('/delete-tour/'.$Tour->tour_id)}}"><i
                                                class="icon-close"></i></a>
                                    </div>
                                </th>
                            </tr>

                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
                <div>
                    <div class="row">
                        <div class="col-5"></div>
                        <div class="col-lg-4">
                            {{$tour->render("pagination::bootstrap-4")}}
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="container ">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection