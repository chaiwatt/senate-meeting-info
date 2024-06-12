<?php

namespace App\Listeners;

use App\Models\ActivityLoginLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LogSuccessfulLogin
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        ActivityLoginLog::create([
            'user_id' => $event->user->id
        ]);
    }
}
