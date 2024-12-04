<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RolePermission extends Model
{
    protected $guarded = ['_token'];
    use HasFactory,  SoftDeletes;

     public function permissionByRole($role_id)
     {
         return RolePermission::where('role_id',$role_id)->get();
     }

     public function permission()
     {
         return $this->hasOne(Permission::class, 'id', 'permission_id');
     }



}
