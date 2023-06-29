<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'destination_id','destination_thumb','destination_banner','destination_name_VI','destination_name_EN','destination_desc_VI',
        'destination_desc_EN','destination_status'
    ];
    protected $primaryKey='destination_id';
    protected $table='tbl_destination';
}
