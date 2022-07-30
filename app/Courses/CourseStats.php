<?php

namespace App\Courses;

use App\Models\User;
use App\Models\UserProgress;

class CourseStats
{
    protected Progressive $course;
    protected User $user;
    protected UserProgress $user_progress;

    public function __construct(UserProgress $user_progress)
    {
        $this->course = $user_progress->course;
        $this->user_progress = $user_progress;
        $this->user = $this->user_progress->user;
    }

    public function getCourseStats()
    {
        if (!empty($this->user_progress->data['tasks'])) {
            $done_tasks = $this->user_progress->data['tasks'];
        } else {
            $done_tasks = [];
        }

        $result = [
            'total_tasks' => $this->course->tasks()->count(),
            'tasks_done' => count($done_tasks),
        ];

        return $result;
    }
}
