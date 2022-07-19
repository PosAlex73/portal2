<?php

namespace App\Listeners;

use App\Events\TaskDone;
use App\Models\UserProgress;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Mockery\Exception;

class TaskDoneListener
{
    private $task;
    private $course;
    private $user;

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
    public function handle(TaskDone $event)
    {
        $this->course = $event->course;
        $this->user = $event->user;
        $this->task = $event->task;

        $user_progress = UserProgress::where([
            'user_id' => $this->user->id,
            'course_id' => $this->course->id
        ]);

        if (empty($user_progress)) {
            throw new Exception(__('Course not found'));
        }


    }
}
