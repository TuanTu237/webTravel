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
                                <th>{{__('Name in English')}}</th>
                                <th>{{__('Thumbnail image')}}</th>
                                <th>{{__('Banner image')}}</th>
                                <th>{{__('Desc in Vietnamese')}}</th>
                                <th>{{__('Desc in English')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('action')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($typetour as $key =>$Typetour)
                                <tr>
                                    <th>{{$Typetour->typetour_name_VI}}</th>
                                    <th>{{$Typetour->typetour_name_EN}}</th>
                                    <th>
                                        <img class="hover-img" src="uploads/typetours/thumb/{{$Typetour->typetour_thumb}}" height="50" width="50">
                                    </th>
                                    <th> <img class="hover-img" src="uploads/typetours/banner/{{$Typetour->typetour_banner}}" height="50" width="50"> </th>
                                    <th>{{$Typetour->typetour_desc_VI}}</th>
                                    <th>{{$Typetour->typetour_desc_EN}}</th>
                                    <th style="text-align: center">
                                        <?php
                                        if ($Typetour->typetour_status==0){

                                        ?>
                                        <a href="{{URL::to('/enable-type-tour/'.$Typetour->typetour_id)}}"><i style=" text-align: center;color: red; font-size: 30px" class="fa-status-styling fa fa-times-circle"> </i> </a>
                                        <?php
                                        }
                                        else{
                                        ?>
                                        <a href="{{URL::to('/disable-type-tour/'.$Typetour->typetour_id)}}"><i style="color: green;font-size: 30px" class="fa-status-styling fa fa-check-circle"> </i> </a>
                                        <?php
                                        }
                                        ?>
                                    </th>
                                    <th style="text-align: center">
                                        <div class="btn-group">
                                            <a class="btn btn-primary" href="{{URL::to('/edit-type-tour/'.$Typetour->typetour_id)}}"><i class="fa fa-pencil-alt"></i></a>
                                            <a onclick="return confirm('Are you sure?')" class="btn btn-danger" href="{{URL::to('/delete-type-tour/'.$Typetour->typetour_id)}}"><i class="icon-close"></i></a>
                                        </div>
                                    </th>
                                </tr>

                            @endforeach
                            </tbody>
                            <tfoot class="bg-dark text-white">
                            <tr>
                                <th>{{__('Name in Vietnamese')}}</th>
                                <th>{{__('Name in English')}}</th>
                                <th>{{__('Thumbnail image')}}</th>
                                <th>{{__('Banner image')}}</th>
                                <th>{{__('Desc in Vietnamese')}}</th>
                                <th>{{__('Desc in English')}}</th>
                                <th>{{__('status')}}</th>
                                <th>{{__('action')}}</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
