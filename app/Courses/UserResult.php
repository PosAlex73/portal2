<?php

namespace App\Courses;

use App\Enums\Tasks\TaskTypes;

final class UserResult
{
    public const TASK_DONE = true;
    public const TASK_FAILED = false;

    public function __construct(
        protected bool $result,
        protected array $data = [],
        protected string $task_type = TaskTypes::THEORY
    ) {}

    /**
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     */
    public function setResult(bool $result): void
    {
        $this->result = $result;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @param array $data
     */
    public function setData(array $data): void
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getTaskType(): string
    {
        return $this->task_type;
    }

    /**
     * @param string $task_type
     */
    public function setTaskType(string $task_type): void
    {
        $this->task_type = $task_type;
    }


}
