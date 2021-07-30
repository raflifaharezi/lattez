<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
// use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use App\Traits\HasPermissionTrait;

class User extends Authenticatable
{
    use Notifiable, HasPermissionTrait;
    
    public $incrementing = false;
    protected $fillable = [
        'id', 'name', 'email', 'password', 'sales', 'phone', 'address', 'leader_id', 'package_id', 'reward_expired',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Package(){
        return $this->belongsTo('App\Package');
    }
}
