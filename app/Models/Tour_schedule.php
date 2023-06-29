<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour_schedule extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'tour_schedule','tour_id','tour_schedule_number','tour_schedule_desc','tour_schedule_content'
    ];
    protected $primaryKey='tour_schedule_id';
    protected $table='tbl_tour_schedule';
}
