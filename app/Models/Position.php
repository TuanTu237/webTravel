<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;
class Position extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable =[
        'position_id','position_name','position_desc'
    ];
    protected $primaryKey='position_id';
    protected $table='tbl_position';
    public function Staff(){
        return $this->belongsTo(Staff::class);
    }
}
