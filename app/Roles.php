<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function hr()
    {
        return $this->belongsToMany('App\HR');
    }

    public function perms()
    {
        return $this->belongsToMany('App\Perms', 'role_perms', 'roles_id', 'perms_id');
    }

}
