<?php

namespace App\Models;

use App\Courses\Progressive;
use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseStatuses;
use App\Enums\Courses\CourseTypes;
use App\Models\Traits\UseShortDesc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PracticeCourse extends Model implements Progressive
{
    use HasFactory;

    protected $table = 'practice_courses';

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
        'category_id',
        'price',
        'type',
    ];

    protected $attributes = [
        'price' => 0,
        'type' => CourseTypes::FREE,
        'practice' => CoursePractice::YES
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tasks()
    {
        return $this->hasMany(PracticeTask::class);
    }

    public function progress()
    {
        return $this->morphMany(UserProgress::class, 'course');
    }

    public function scopeActive(Builder $builder)
    {
        return $builder->where('status', CourseStatuses::ACTIVE);
    }
}
