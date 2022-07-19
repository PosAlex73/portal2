<?php

namespace App\Models;

use App\Enums\Courses\CoursePractice;
use App\Enums\Courses\CourseTypes;
use App\Tasks\TasksRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'short_description', 'image', 'status', 'category_id', 'price', 'type',
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

    public function getPracticeTasks(string $course_name, TasksRepository $repo)
    {

    }
}
