<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'contract_id','customer_id','staff_id','contract_total_price','contract_date','contract_status','contract_file'
        ];
    protected $primaryKey='contract_id';
    protected $table='tbl_contract';
}
