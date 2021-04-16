<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'name', 'sales', 'period',
    ];

    public function User(){
        return $this->hasOne('App\User');
    }
    public function Reward(){
        return $this->hasMany('App\Reward');
    }
}
