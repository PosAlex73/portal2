<?php

namespace App\Models;

use App\Models\Traits\UseShortDesc;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, UseShortDesc, UseShortDesc;

    protected $fillable = [
        'title', 'description', 'data', 'status', 'type', 'course_id', 'points'
    ];

    protected $attributes = [
        'points' => 0,
        'data' => ''
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function reviews()
    {
        return $this->hasMany(TaskReview::class);
    }
}
