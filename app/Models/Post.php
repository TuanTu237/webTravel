<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'post_id','tour_id','post_title','post_status','post_desc','post_content',
        'post_meta_desc','post_image'
    ];
    protected $primaryKey='post_id';
    protected $table='tbl_post';
}
