<?php

namespace App\Services;

use App\Models\Meeting;
use DateTime;
use DateTimeZone;

class MeetingService
{
    public function create($data): Meeting
    {
        $meeting = new Meeting;

        $meeting->user = $data['user'];
        $meeting->phone = $data['phone'];
        $meeting->email = $data['email'];
        $meeting->time = new DateTime($data['time'], new DateTimeZone( 'UTC' ));
        $meeting->message = $data['message'];

        $meeting->save();

        return $meeting;
    }

    public function findOne($id): ?Meeting
    {
        return Meeting::find($id);
    }

    public function findAll()
    {
        return Meeting::all();
    }
}