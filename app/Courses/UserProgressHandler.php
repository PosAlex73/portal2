<?php

namespace App\Courses;

use App\Enums\Tasks\TaskTypes;
use App\Models\PracticeTask;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Mockery\Exception;

class UserProgressHandler
{
    public static function handleResult(Request $request, Progressive $course, Executable $task)
    {
        if ($task->type === TaskTypes::THEORY) {
            return true;
        } elseif ($task->type === TaskTypes::TEST) {
            return static::checkTest($request, $task);
        } elseif ($task->type === TaskTypes::PRACTICE) {
            return static::checkPractice($request, $task);
        }
    }

    public static function checkDoneTask(Executable $task, User $user)
    {
        /** @var Progressive $course */
        $course = $task->course;
        $user_progress = $course->progress()
            ->where('user_id', $user->id)
            ->first();

//            UserProgress::where([
//            'user_id' => $user->id,
//            'course_id' => $course->id
//        ])->first();

        if (empty($user_progress)) {
            throw new Exception(__('vars.course_not_found'));
        }

        return (array_key_exists($task->id, $user_progress->data['tasks'] ?? []));
    }

    protected static function checkTest(Request $request, PracticeTask $task): bool|array
    {
        /** @var Collection $questions */
        $questions = $task->questions;
        $user_answers = $request->get('result');

        if (empty($user_answers)) {
            return false;
        }

        foreach ($user_answers as $test_id => $answer) {
            $current_test = $questions->where('id', $test_id)->first();
            $result[$test_id] = (int) $answer === $current_test->right_answer;
        }

        return $result;
    }

    protected static function checkPractice(Request $request, Executable $task): bool
    {

    }

    public static function checkTestResults(array $result): array
    {
        $wrong_answers = array_filter($result, fn ($answer) => $answer);

        return $wrong_answers;
    }
}
