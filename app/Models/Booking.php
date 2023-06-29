<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'booking_id','tour_id','booking_code','booking_customer_name','booking_customer_email','booking_customer_phone_domain',
        'booking_customer_phone_number','booking_customer_address','booking_customer_nationality','booking_date',
        'booking_customer_adult','booking_customer_child','booking_customer_ifant','booking_customer_message','booking_total_price'
    ];
    protected $primaryKey='booking_id';
    protected $table='tbl_booking';
}
