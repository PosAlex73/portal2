<?php

namespace App\Courses;

use App\Enums\Courses\CourseTypes;

/**
 *
 */
abstract class Course
{
    /**
     * @var string
     */
    protected string $type = CourseTypes::FREE;
    /**
     * @var int
     */
    protected int $price = 0;
    /**
     * @var string
     */
    private string $title;
    /**
     * @var string
     */
    protected string $description;
    /**
     * @var string
     */
    protected string $short_description;
    /**
     * @var int
     */
    protected int $category_id;
    /**
     * @var string
     */
    protected string $status;

    protected string $course_category;

    protected iterable $tests;
    protected iterable $tasks;

    /**
     * @param $title
     * @param $description
     * @param $short_description
     * @param $category_id
     * @param $type
     * @param $status
     * @param $price
     */
    public function __construct($title, $description, $short_description, $category_id, $type, $status, $price)
    {
        $this->title = $title;
        $this->description = $description;
        $this->short_description = $short_description;
        $this->category_id = $category_id;
        $this->type = $type;
        $this->status = $status;
        $this->price = $price;
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
     * @return int
     */
    public function getPrice(): int
    {
        return $this->price;
    }

    /**
     * @param int $price
     */
    public function setPrice(int $price): void
    {
        $this->price = $price;
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
    public function getShortDescription(): string
    {
        return $this->short_description;
    }

    /**
     * @param string $short_description
     */
    public function setShortDescription(string $short_description): void
    {
        $this->short_description = $short_description;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     */
    public function setCategoryId(int $category_id): void
    {
        $this->category_id = $category_id;
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
     * @return iterable
     */
    public function getTasks(): iterable
    {
        return $this->tasks;
    }

    /**
     * @param iterable $tasks
     */
    public function setTasks(iterable $tasks): void
    {
        $this->tasks = $tasks;
    }
}
