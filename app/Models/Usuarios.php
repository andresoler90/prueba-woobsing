<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    public function role()
    {
        return $this->hasOne('App\Models\Roles','id','role_id');
    }
    public function roles()
    {
        return $this->hasMany('App\Models\UsersRelations','usuario_id','id');
    }


}
