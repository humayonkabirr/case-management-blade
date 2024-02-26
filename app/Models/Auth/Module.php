<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function permissionList()
    {
        return $this->hasMany(Permission::class);
    }

    public function permissions()
    {
        return $this->hasMany(Permission::class)->select('unique_key', 'name');
    }
}
