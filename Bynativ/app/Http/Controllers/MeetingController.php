<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeeting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use DateTime;
use DateTimeZone;
use App\Meeting;

class MeetingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('meeting-form');
    }

    public function store(StoreMeeting $request)
    {
        $validated = $request->validated();

        $meeting = new Meeting;

        $meeting->user = $validated['user'];
        $meeting->phone = $validated['phone'];
        $meeting->email = $validated['email'];
        $meeting->time = new DateTime($validated['time'], new DateTimeZone( 'UTC' ));
        $meeting->message = $validated['message'];

        $meeting->save();

        return view('meeting-form', ['successMessage' => 'Validation success', 'meetingId' => $meeting->id]);
    }

    public function fetch($id)
    {
        $meeting = Meeting::find($id);

        if(!isset($meeting)) {
            return abort(404);
        }
 
        return view('meeting', ['meeting' => $meeting]);
    }

    public function getAll()
    {
        return Meeting::all();
    }
}
