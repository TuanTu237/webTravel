<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_history extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'booking_history_id','booking_id','booking_history_content','booking_history_image'
    ];
    protected $primaryKey='booking_history_id';
    protected $table='tbl_booking_history';
}
