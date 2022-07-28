<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeTask extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'status', 'points'
    ];

    public function pcourse()
    {
        return $this->belongsTo(PracticeCourse::class, 'practice_course_id', 'id');
    }
}
