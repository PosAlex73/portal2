<?php

namespace App\Models;

use App\Courses\Executable;
use App\Enums\Tasks\TaskTypes;
use App\Models\Traits\UseShortDesc;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeTask extends Model implements Executable
{
    use HasFactory, useShortDesc;

    protected $fillable = [
        'title',
        'description',
        'status',
        'points'
    ];

    public function pcourse()
    {
        return $this->belongsTo(PracticeCourse::class, 'practice_course_id', 'id');
    }

    public function course()
    {
        return $this->pcourse();
    }

    public function questions()
    {
        if ($this->type !== TaskTypes::TEST) {
            throw new \Exception('Task is not a test');
        }

        return $this->hasMany(TestQuestion::class);
    }

    public function scopeGetTests(Builder $builder)
    {
        return $builder->where('type', TaskTypes::TEST);
    }
}
