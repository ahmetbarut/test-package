<?php

namespace Ahmetbarut\TestPackage\Listeners;

use Ahmetbarut\TestPackage\Models\UserLog;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class LoginListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \Illuminate\Auth\Events\Login  $event
     * @return void
     */
    public function handle(Login $event)
    {
        UserLog::unguard();
        UserLog::create([
            'user_id' => $event->user->id,
            'ip' => '::1',
            'user_agent' => 'test',
        ]);
    }
}
