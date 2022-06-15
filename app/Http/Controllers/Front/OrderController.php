<?php

namespace App\Http\Controllers\Front;

use App\Facades\Alert;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Orders\NewOrderRequest;
use App\Models\Course;
use App\Orders\OrderFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function order(NewOrderRequest $request)
    {
        $order_data = $request->safe()->only(['type', 'id']);
        $order_data = OrderFactory::getOrderData($order_data['type'], $order_data['id']);

        if (!$order_data) {
            Alert::set('status', __('vars.entity_not_found'));
            return back();
        }

        $user = Auth::user();
        $profile = $user->profile;

        return view('front.orders.order', [
            'order_data' => $order_data,
            'user' => $user,
            'profile' => $profile
        ]);
    }

    public function createOrder()
    {

    }
}
