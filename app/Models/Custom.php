<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'custom_id','customer_id','custom_code','custom_status','custom_customer_name','custom_customer_email',
        'custom_customer_address','custom_customer_phone','custom_date','custom_child','custom_adult','custom_day'
        ,'custom_message','custom_destination','custom_type_tour','custom_spend'
    ];
    protected $primaryKey='custom_id';
    protected $table='tbl_custom';
}
