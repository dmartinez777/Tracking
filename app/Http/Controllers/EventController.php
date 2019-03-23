<?php

namespace App\Http\Controllers;

use App\Events;
use Illuminate\Http\Request;

class EventController extends Controller  {

    /**
     * Get all events in the database.
     * @return Events[]|\Illuminate\Database\Eloquent\Collection
     */
    public function all() {
        return Events::with('majors', 'degrees')->get();
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function add(Request $request) {

        $request->validate([
            'event_abv'     => 'required|min:1,max:10',
            'min_gpa'       => 'required',
            'deadline'      => 'required|date_format:Y-m-d',
            'test_schedule' => 'required|date',
            'school_name'   => 'required|min:5,max:200',
        ]);

        $event                = new Events();
        $event->event_abv     = $request->event_abv;
        $event->min_gpa       = $request->min_gpa;
        $event->deadline      = $request->deadline;
        $event->test_schedule = $request->test_schedule;
        $event->school_name   = $request->school_name;

        if ($event->save()) {

            return response()->json(['success' => true], 200);
        }

        return response()->json(['success' => false], 409);
    }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete(Request $request) {

        $event = Events::find($request->id);

        if ($event && $event->delete()) {
            return Response()->json(['data' => ['success' => true]]);
        }

        return Response()->json(['data' => ['success' => false]], 403);
    }
}
