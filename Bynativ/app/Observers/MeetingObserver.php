<?php

namespace App\Observers;

use Illuminate\Support\Facades\Notification;
use App\Meeting;
use App\Notifications\MeetingCreated;

class MeetingObserver
{
    /**
     * Handle the meeting "created" event.
     *
     * @param  \App\Meeting  $meeting
     * @return void
     */
    public function created(Meeting $meeting)
    {
        Notification::route('mail', $meeting->email)
            ->notify(new MeetingCreated());
    }

    /**
     * Handle the meeting "updated" event.
     *
     * @param  \App\Meeting  $meeting
     * @return void
     */
    public function updated(Meeting $meeting)
    {
        //
    }

    /**
     * Handle the meeting "deleted" event.
     *
     * @param  \App\Meeting  $meeting
     * @return void
     */
    public function deleted(Meeting $meeting)
    {
        //
    }

    /**
     * Handle the meeting "restored" event.
     *
     * @param  \App\Meeting  $meeting
     * @return void
     */
    public function restored(Meeting $meeting)
    {
        //
    }

    /**
     * Handle the meeting "force deleted" event.
     *
     * @param  \App\Meeting  $meeting
     * @return void
     */
    public function forceDeleted(Meeting $meeting)
    {
        //
    }
}
