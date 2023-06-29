@extends('Admin_Views.Admin_Layout')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">{{__('New Contract')}}</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('Contract')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-lg-12 col-lg-6">
            <div class="card">
                <div>
                    <div class="card-body">
                        <div class="d-flex no-block align-items-center">
                            <h4 class="card-title">{{__('TOUR BOOKING')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a target="_blank" href="{{URL::to('details-booking/'.$booking->booking_id)}}"><label for="" class="control-label col-form-label">{{__("Details")}}</label></a>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input disabled class="form-control" type="text" value="" placeholder="Booking code: {{$booking->booking_code}}    &nbsp&nbsp&nbsp&nbsp&nbsp  Date: {{$booking->created_at}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                                   <hr>
            </div>
            <div class="card">
                <form role="form" action="{{URL::to('/save-contract')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field() }}
                    <input type="hidden" value="{{$booking->booking_id}}" name="booking_id">
                    <div class="card-body">
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span  style="text-align: center;color: red;font-weight: bold;width: 100%;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>

                        <div class="d-flex no-block align-items-center">
                            <h4 class="card-title">{{__('ADD NEW CONTRACT')}}</h4>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <?php $staff_id=Session::get('staff_id'); $staff_name=Session::get('staff_name') ?>
                                    <label for="" class="control-label col-form-label">{{__("Representative staff")}}</label>
                                    <input disabled type="text" class="form-control" value="{{$staff_name}}" id="" >
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Customer")}}</label>
                                    <input disabled type="text" class="form-control" id="" value="{{$customer->customer_name}}" name="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Staff ID")}}</label>

                                    <input disabled type="text" class="form-control" placeholder="" id="" value="{{Session::get('staff_id')}}" name="staff_id">
                                    <input hidden type="text" class="form-control" placeholder="" id="" value="{{$staff_name}}" name="">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" class="control-label col-form-label">{{__("Customer phone")}}</label>
                                    <input disabled type="text" class="form-control" id="" value="{{$customer->customer_phone_domain}} {{$customer->customer_phone_number}}" name="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label for="" class="control-label col-form-label">{{__("Total Contract Price")}}</label>
                            </div>
                            <div class="col-4">
                                <label for="" class="control-label col-form-label">{{__("Contract signing date")}}</label>
                            </div>
                            <div class="col-4">
                                <label for="" class="control-label col-form-label">{{__("Scan File")}}</label>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input required onkeypress="return fun_AllowOnlyAmountAndDot(this.id)" name="contract_total_price" id="only_numb" class="form-control" value="{{number_format($booking->booking_total_price)}} ">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input required type="date" class="form-control" placeholder=" " name="contract_date">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <input required type="file" class="form-control" placeholder=" " name="contract_file"  accept="application/pdf,application/vnd.ms-excel" />
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
                                <a href="{{URL::previous()}}" class="btn btn-dark waves-effect waves-light">{{__('Cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function onlyNumberKey(evt) {
            var ASCIICode = (evt.which) ? evt.which : evt.keyCode
            if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
                return false;
            return true;
        }
        function fun_AllowOnlyAmountAndDot(txt)
        {
            if(event.keyCode > 47 && event.keyCode < 58 || event.keyCode == 46)
            {
                var txtbx=document.getElementById(txt);
                var amount = document.getElementById(txt).value;
                var present=0;
                var count=0;

                if(amount.indexOf(".",present)||amount.indexOf(".",present+1));
                {

                }

                /*if(amount.length==2)
                {
                  if(event.keyCode != 46)
                  return false;
                }*/
                do
                {
                    present=amount.indexOf(".",present);
                    if(present!=-1)
                    {
                        count++;
                        present++;
                    }
                }
                while(present!=-1);
                if(present==-1 && amount.length==0 && event.keyCode == 46)
                {
                    event.keyCode=0;
                    return false;
                }

                if(count>=1 && event.keyCode == 46)
                {

                    event.keyCode=0;
                    return false;
                }
                if(count==1)
                {
                    var lastdigits=amount.substring(amount.indexOf(".")+1,amount.length);
                    if(lastdigits.length>=2)
                    {
                        event.keyCode=0;
                        return false;
                    }
                }
                return true;
            }
            else
            {
                event.keyCode=0;
                //alert("Only Numbers with dot allowed !!");
                return false;
            }

        }
    </script>
@endsection
