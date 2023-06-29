<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tour_highlight extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $fillable =[
        'tour_highlight_id','highlight_id','tour_id'
    ];
    protected $primaryKey='tour_highlight_id';
    protected $table='tbl_tour_highlight';
}
