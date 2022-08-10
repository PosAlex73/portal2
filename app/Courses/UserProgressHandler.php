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
    public static function handleResult(Request $request, Progressive $course, Executable $task): UserResult
    {
        if ($task->type === TaskTypes::THEORY) {
            return new UserResult(
                UserResult::TASK_DONE,
                []
            );
        } elseif ($task->type === TaskTypes::TEST) {
            return static::checkTest($request, $task);
        } elseif ($task->type === TaskTypes::PRACTICE) {
            return static::checkPractice($request, $task);
        }

        return new UserResult(UserResult::TASK_FAILED);
    }

    public static function checkDoneTask(Executable $task, User $user)
    {
        /** @var Progressive $course */
        $course = $task->course;
        $user_progress = $course->progress()
            ->where('user_id', $user->id)
            ->first();


        if (empty($user_progress)) {
            throw new Exception(__('vars.course_not_found'));
        }

        return (array_key_exists($task->id, $user_progress->data['tasks'] ?? []));
    }

    protected static function checkTest(Request $request, PracticeTask $task): UserResult
    {
        /** @var Collection $questions */
        $questions = $task->questions;
        $user_answers = $request->get('result');

        if (empty($user_answers)) {
            return new UserResult(UserResult::TASK_FAILED);
        }

        $result = [];
        foreach ($user_answers as $test_id => $answer) {
            $current_test = $questions->where('id', $test_id)->first();
            $result[$test_id] = (int) $answer === $current_test->right_answer;
        }

        $result = array_filter($result, fn ($item) => $item);

        if (!empty($result)) {
            $user_result = new UserResult(UserResult::TASK_FAILED, ['failed_answers' => $result]);
        } else {
            $user_result = new UserResult(UserResult::TASK_DONE);
        }

        return $user_result;
    }

    protected static function checkPractice(Request $request, Executable $task): UserResult
    {
        return new UserResult(UserResult::TASK_DONE);
    }
}
