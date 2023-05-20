<?php

namespace App\CourseUtils;

class CourseStats
{
    public function __construct(
        protected int $id,
        protected int $tasks = 0,
        protected int $progress = 0,
    ){}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getTasks(): int
    {
        return $this->tasks;
    }

    /**
     * @param int $tasks
     */
    public function setTasks(int $tasks): void
    {
        $this->tasks = $tasks;
    }

    /**
     * @return int
     */
    public function getProgress(): int
    {
        return $this->progress;
    }

    /**
     * @param int $progress
     */
    public function setProgress(int $progress): void
    {
        $this->progress = $progress;
    }
}
