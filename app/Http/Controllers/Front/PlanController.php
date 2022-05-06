<?php

namespace App\Http\Controllers\Front;

use App\Enums\CommonStatuses;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Models\Plan;

class PlanController extends Controller
{
    public function plans()
    {
        $plans = Plan::where(['status' => CommonStatuses::ACTIVE])->paginate(Set::get(SettingTypes::FRONT_PAGINATION));

        return view('front.plans.index', ['plans' => $plans]);
    }

    public function plan(Plan $plan)
    {
        return view('front.plans.plan', ['plan' => $plan]);
    }
}
