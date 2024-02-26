<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    protected $guarded = ['_token'];
    use HasFactory;
    use SoftDeletes;

    public function userRole()
    {
        return $this->hasMany(UserRole::class);
    }

    public function rolePermissions()
    {
        return $this->hasMany(RolePermission::class);
    }


}
