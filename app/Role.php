<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permission(){
        return $this->belongsToMany(Permission::class,'roles_permissions');
    }

    
    public function users() {
     
        return $this->belongsToMany(User::class,'user_roles');
            
     }
}