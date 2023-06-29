<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custom_contract extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'custom_contract_id','custom_id','staff_id','custom_contract_date',
        'custom_contract_file','custom_contract_total_price','custom_contract_status'
    ];
    protected $primaryKey='custom_contract_id';
    protected $table='tbl_custom_contract';
}
