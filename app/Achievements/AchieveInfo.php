<?php

namespace App\Achievements;

class AchieveInfo
{


    public function __construct(
        protected string $title,
        protected string $description,
        protected string $condition,
        protected string $image
    ){}

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getCondition(): string
    {
        return $this->condition;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }


}
