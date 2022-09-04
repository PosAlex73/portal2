<?php

namespace App\Utils\HttpService;

class PracticeRequest
{
    public function __construct(
        protected int $course_id,
        protected int $task_id,
        protected string $user_code
    ){}

    public function toArray()
    {
        return [
            'course_id' => $this->course_id,
            'task_id' => $this->task_id,
            'code' => $this->user_code
        ];
    }

    public function toJson()
    {


        return json_encode($this->toArray());
    }
}
