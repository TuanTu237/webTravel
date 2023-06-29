<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable =[
        'review_id','booking_id','review_comment','review_rating'
    ];
    protected $primaryKey='review_id';
    protected $table='tbl_review';

}
