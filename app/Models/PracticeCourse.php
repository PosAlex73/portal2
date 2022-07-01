<?php

namespace App\Models;

use App\Tasks\TasksRepository;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeCourse extends Model
{
    use HasFactory;

    public function getPracticeTasks(string $course_name, TasksRepository $repo)
    {

    }
}
