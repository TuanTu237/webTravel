<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Position;
class Staff extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable =[
        'staff_id','position_id','staff_name','staff_nationality','staff_birth','staff_phone_number','staff_address','staff_email','staff_password',
    ];
    protected $primaryKey='staff_id';
    protected $table='tbl_staff';
    public function Positon(){
        return $this->belongsTo(Position::class);
    }

    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn(‘name’, $roles)->first();
    }


    public function hasRole($role)
    {
        return null !== $this->roles()->where(‘name’, $role)->first();
    }
}
