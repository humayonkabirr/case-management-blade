<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'mobile',
        'email',
        'birthday',
        'blood_group',
        'religion',
        'gender',
        'nationality',
        'mother_tongue',
        'avatar',
        'type',
        'email_verified_at',
        'password',
        'status',
    ];



    public function education()
    {
        return $this->hasMany(EducationInfo::class, 'user_id');
    }

    public function experience()
    {
        return $this->hasMany(Experience::class, 'user_id');
    }

    public function emergencyContact()
    {
        return $this->hasMany(EmergencyContact::class, 'user_id');
    }

    public function address()
    {
        return $this->hasMany(Address::class, 'user_id');
    }



    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];


    // Define the accessor for the `type` attribute
    public function getTypeAttribute($value)
    {
        $types = [
            1 => 'Admin/Staff',
            2 => 'Advocate',
            3 => 'Judge',
        ];

        return $types[$value] ?? 'Unknown';
    }
}
