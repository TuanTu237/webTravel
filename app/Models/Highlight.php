<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class highlight extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'highlight_id','highlight_name_VI','highlight_name_EN','highlight_img'
    ];
    protected $primaryKey='highlight_id';
    protected $table='tbl_highlight';
}
