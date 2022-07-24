<?php

namespace App\Listeners;

use App\Events\NewMessage;
use App\Models\Thread;
use App\Models\ThreadMessage;
use App\Models\User;
use App\Notifications\NewMessageFromAdmin;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NewMessageListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(NewMessage $event)
    {
        /** @var ThreadMessage $message */
        $message = $event->message;

        /** @var Thread $thread */
        $thread = $event->thread;

        /** @var User $thread_owner */
        $thread_owner = $thread->user;

        if ($thread_owner->id === $message->owner_id) {

        } else {
            $thread_owner->notify(new NewMessageFromAdmin($message));
        }
    }
}
