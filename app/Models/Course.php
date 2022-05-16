<?php

namespace App\Models;

use App\Enums\Courses\CourseTypes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'short_description', 'image', 'status', 'category_id', 'price', 'type'
    ];

    protected $attributes = [
        'price' => 0,
        'type' => CourseTypes::FREE
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
