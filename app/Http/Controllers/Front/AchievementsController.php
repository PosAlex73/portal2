<?php

namespace App\Http\Controllers\Front;

use App\Achievements\AchieveRepository;
use App\Http\Controllers\Controller;

class AchievementsController extends Controller
{
    public function index()
    {
        $achieves = AchieveRepository::getAllAchievements();

        return view('front.achievements.index', [
            'achievements' => $achieves
        ]);
    }
}
