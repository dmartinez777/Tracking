<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventsTestController extends Controller  {

    /**
     * Get all events in the database.
     * @return Events[]|\Illuminate\Database\Eloquent\Collection
     **/
    public function index() {

        $events = Events::all()->toArray();
        return view('eventsTest', compact('events'));

    }

}
