<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProcessHistory extends Model
{
    protected $table = 'process_histories';
    protected $fillable = array('processes_id', 'apps_id', 'hr_id');



}
