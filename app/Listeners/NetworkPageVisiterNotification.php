<?php

namespace App\Listeners;

use App\Events\NetworkPageVisiterEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NetworkPageVisiterNotification
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
    public function handle(NetworkPageVisiterEvent $event): void
    {
        //
    }
}
