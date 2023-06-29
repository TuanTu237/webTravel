<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'customer_id','customer_name','customer_email','customer_password','customer_address','customer_phone_domain','customer_phone_number','customer_nationality',
    ];
    protected $primaryKey='customer_id';
    protected $table='tbl_customer';
}
