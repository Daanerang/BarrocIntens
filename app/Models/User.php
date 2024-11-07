<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Jetstream\HasTeams;
use Laravel\Sanctum\HasApiTokens;
use League\CommonMark\Extension\SmartPunct\Quote;

class User extends Authenticatable
{
    protected $table = 'users';

    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use HasTeams;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
    ];

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
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class, 'quote_id');
    }

    public function error_notifications()
    {
        return $this->hasMany(ErrorNotification::class, 'error_notification_id');
    }

    public function visits()
    {
        return $this->hasMany(Visit::class, 'visit_id');
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class, 'invoice_id');
    }

    public function leasecontracts()
    {
        return $this->hasMany(LeaseContract::class, 'leasecontract_id');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class, 'rol_id');
    }
}
