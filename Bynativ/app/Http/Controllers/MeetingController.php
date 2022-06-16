<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMeeting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\MeetingService;

class MeetingController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function create()
    {
        return view('meeting-form');
    }

    public function store(StoreMeeting $request, MeetingService $meetingService)
    {
        $validated = $request->validated();

        $meeting = $meetingService->create($validated);

        return view('meeting-form', ['successMessage' => 'Validation success', 'meetingId' => $meeting->id]);
    }

    public function fetch($id, MeetingService $meetingService)
    {
        $meeting = $meetingService->findOne($id);

        if(!isset($meeting)) {
            return abort(404);
        }
 
        return view('meeting', ['meeting' => $meeting]);
    }

    public function getAll(MeetingService $meetingService)
    {
        return $meetingService->findAll();
    }
}
