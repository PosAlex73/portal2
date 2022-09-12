<?php

namespace App\Utils\HttpService;

use Illuminate\Support\Facades\Http;

class PracticeChecker
{
    protected string $result_text;

    public function __construct()
    {
        $this->login = env('COURSE_LOGIN');
        $this->password = env('COURSE_PASS');
        $this->url = env('COURSE_URL');
        $this->port = env('COURSE_PORT');
    }

    public function checkPractice(int $course_id, int $task_id, string $code)
    {
        $practice_request = new PracticeRequest($course_id, $task_id, $code, $type = 'php'); //fixme

        $result = Http::withBasicAuth($this->login, $this->password)
            ->accept('application/json')
            ->acceptJson()
            ->post($this->url . ':' . $this->port, $practice_request->toArray());

        dd($result);
    }
}
