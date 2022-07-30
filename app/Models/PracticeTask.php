<?php

namespace App\Models;

use App\Courses\Executable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeTask extends Model implements Executable
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'status', 'points'
    ];

    public function pcourse()
    {
        return $this->belongsTo(PracticeCourse::class, 'practice_course_id', 'id');
    }

    public function course()
    {
        return $this->pcourse();
    }
}
