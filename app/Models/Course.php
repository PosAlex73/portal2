<?php

namespace App\Models;

use App\Courses\Progressive;
use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Courses\CourseTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model implements Progressive
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'short_description',
        'image',
        'status',
        'category_id',
        'price',
        'type',
        'practice',
        'slug'
    ];

    protected $attributes = [
        'price' => 0,
        'type' => CourseTypes::FREE,
        'practice' => CoursePractice::NO,
        'slug' => ''
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function progress()
    {
        return $this->morphMany(UserProgress::class, 'course');
    }

    public function scopeSearchText(Builder $builder, string $text)
    {
        return $builder
            ->where('title', 'LIKE', "%{$text}%")
            ->orWhere('description', 'LIKE', "%{$text}%");
    }

    public function scopeLandingCourses(Builder $builder)
    {
        return $builder
            ->where('status', CourseStatuses::ACTIVE)
            ->limit(9);
    }
}
