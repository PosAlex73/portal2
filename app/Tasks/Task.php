<?php

namespace App\Tasks;

/**
 *
 */
abstract class Task
{
    /**
     * @var string
     */
    protected string $title;
    /**
     * @var string
     */
    protected string $description;
    /**
     * @var string
     */
    protected string $status;
    /**
     * @var string
     */
    protected string $type;
    /**
     * @var string
     */
    protected string $points;
    /**
     * @var int
     */
    protected int $course_id;

    /**
     * @param string $title
     * @param string $description
     * @param string $status
     * @param string $type
     * @param string $points
     * @param int $course_id
     */
    public function __construct(string $title, string $description, string $status, string $type, string $points, int $course_id)
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = $status;
        $this->type = $type;
        $this->points = $points;
        $this->course_id = $course_id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getPoints(): string
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints(string $points): void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getCourseId(): int
    {
        return $this->course_id;
    }

    /**
     * @param int $course_id
     */
    public function setCourseId(int $course_id): void
    {
        $this->course_id = $course_id;
    }
}
