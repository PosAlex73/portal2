<?php

namespace App\Models;

use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'short_description', 'image', 'status', 'category_id', 'price', 'type', 'practice'
    ];

    protected $attributes = [
        'price' => 0,
        'type' => CourseTypes::FREE,
        'practice' => CoursePractice::NO
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
        return $this->morphTo(UserProgress::class, 'course');
    }

    public function scopeSearchText(Builder $builder, string $text)
    {
        return $builder
            ->where('title', 'LIKE', "%{$text}%")
            ->orWhere('description', 'LIKE', "%{$text}%");
    }
}
