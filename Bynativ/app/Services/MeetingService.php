<?php

namespace App\Services;

use App\Models\Meeting;
use DateTime;
use DateTimeZone;
use Illuminate\Database\Eloquent\Collection;
use Carbon\Carbon;

class MeetingService
{
    public function create(array $data): Meeting
    {
        $meeting = new Meeting;

        $utc = Carbon::parse($data['time'], $data['timezone'])->setTimezone('UTC');

        $meeting->user = $data['user'];
        $meeting->phone = $data['phone'];
        $meeting->email = $data['email'];
        $meeting->timezone = $data['timezone'];
        $meeting->time = $utc;
        $meeting->message = $data['message'];

        $meeting->save();

        return $meeting;
    }

    public function findOne(string $id): ?Meeting
    {
        return Meeting::find($id);
    }

    public function findAll(): Collection
    {
        return Meeting::all();
    }
}