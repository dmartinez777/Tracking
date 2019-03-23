<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = "processes";
    protected $fillable = array('name', 'order', 'has_test', 'has_interview', 'is_active');

    //$this->hasMany('App\Comment', 'foreign_key', 'local_key');

    public function app()
    {
        return $this->hasMany('App\App', 'processes_id', 'id');
    }

}
