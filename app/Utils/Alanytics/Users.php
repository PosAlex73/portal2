<?php

namespace App\Utils\Alanytics;

use App\Models\User;
use App\Utils\AnalyticItem;

class Users extends AnalyticItem
{
    public const CLASS_NAME = User::class;

    public function __construct()
    {
        parent::__construct();
    }

    function getTitle(): string
    {
        return __('vars.users');
    }

    function getListLink(): string
    {
        return route('users.index');
    }
}
