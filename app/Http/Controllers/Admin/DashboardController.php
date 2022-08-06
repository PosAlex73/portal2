<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Utils\DashBoardAnalytics;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $analytics = DashBoardAnalytics::getAnalytics();

        return view('admin.dashboard', [
            'analytics' => $analytics
        ]);
    }
}
