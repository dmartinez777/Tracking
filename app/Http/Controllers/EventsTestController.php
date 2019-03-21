<?php

namespace App\Http\Controllers;

use App\Events;
use App\Degrees;
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

    public function eventInfo($event_id) {

        //get event details by $event_id
        $eventDetails = Events::findOrFail($event_id);


        //return page to view
        return view('eventsTestDetails', compact('eventDetails'));

    }


}
