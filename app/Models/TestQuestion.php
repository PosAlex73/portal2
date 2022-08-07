<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'questions', 'right_answer', 'status', 'practice_task_id'
    ];

    public function task()
    {
        return $this->belongsTo(PracticeTask::class);
    }
}
