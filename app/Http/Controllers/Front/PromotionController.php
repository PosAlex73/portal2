<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function promotions()
    {
        $promotions = Promotion::where([
            'status' => CommonStatuses::ACTIVE
        ])->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('front.promotions.index', ['promotions' => $promotions]);
    }

    public function promotion(Request $request, Promotion $promotion)
    {
        return view('front.promotions.view', ['promotion' => $promotion]);
    }
}
