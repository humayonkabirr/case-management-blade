<?php

namespace App\Models\Auth;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserRole extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'role_id',
    ];

    public function role()
    {
        return $this->hasOne(Role::class, 'id','role_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
