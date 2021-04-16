<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    protected $fillable = [
        'name', 'sales', 'img_path', 'package_id', 'reward_quantity', 
    ];

    public function Package(){
        return $this->belongsTo('App\Package');
    }
}
