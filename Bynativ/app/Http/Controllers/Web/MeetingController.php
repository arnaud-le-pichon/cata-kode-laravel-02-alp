<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\StoreMeeting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Services\MeetingService;
use App\Models\Meeting;

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

        return view('meeting-form', ['successMessage' => 'Validation success', 'id' => $meeting->id]);
    }

    public function get(Meeting $meeting)
    { 
        return view('meeting', ['meeting' => $meeting]);
    }

    public function getAll(MeetingService $meetingService)
    {
        return $meetingService->findAll();
    }
}
