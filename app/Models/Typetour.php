<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typetour extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'typetour_id','typetour_thumb','typetour_banner','typetour_name_VI','typetour_name_EN','typetour_desc_VI',
        'typetour_desc_EN','typetour_status'
    ];
    protected $primaryKey='typetour_id';
    protected $table='tbl_typetour';
}
