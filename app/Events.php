<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model {

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hr() {

        return $this->belongsTo('App\Hr');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function majors() {

        return $this->belongsToMany(
            'App\Majors', 'events_majors', 'events_id', 'majors_id'
        );
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function degrees() {

        return $this->belongsToMany(
            'App\Degrees', 'events_degrees', 'events_id', 'degrees_id'
        );
    }

}
