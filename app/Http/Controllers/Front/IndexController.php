<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Notifications\ToolBar\UserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class IndexController extends Controller
{
    public function index()
    {
        return view('front.index');
    }
}
