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

    public function checkPractice()
    {
        $result = Http::withBasicAuth($this->login, $this->password)
            ->post(
            $this->login . ':' . $this->port,
            [
                'result' => $this->result_text
            ]
        );

        dd($result);
    }
}
