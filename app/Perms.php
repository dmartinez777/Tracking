<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perms extends Model
{
    public function roles()
    {
        return $this->belongsToMany('App\Roles', 'role_perms', 'perms_id', 'roles_id');
    }
}
