<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'tour_id','destination_id','typetour_id','tour_name_VI','tour_name_EN','tour_price',
        'tour_desc_VI','tour_desc_EN','tour_overview_VI','tour_overview_EN','tour_thumb','tour_banner','tour_img1','tour_img2',
        'tour_img3','tour_img4','tour_img5','tour_img6','tour_day','tour_night','tour_sche','tour_arrival','tour_departure',
        'tour_service_in','tour_service_ex','tour_status','tour_map'
    ];
    protected $primaryKey='tour_id';
    protected $table='tbl_tour';
}
