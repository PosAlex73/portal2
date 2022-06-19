<?php

namespace App\Http\Controllers\Front;

use App\Facades\Alert;
use App\Facades\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\Orders\NewOrderRequest;
use App\Models\Course;
use App\Orders\OrderFactory;
use App\Orders\OrderHandler;
use App\Orders\Payments\TestPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function createOrder(NewOrderRequest $request)
    {
        $order_data = $request->safe()->only(['id', 'type']);
        $order_data['user'] = Auth::user();
        //FIXME payment component
        $order_data['payment'] = TestPayment::class;

        $order = Order::handleOrder($order_data);

        if (empty($order)) {
            return back()->withErrors([
                __('vars.entity_not_provided')
            ]);
        } else {
            Alert::set('status', __('vars.order_was_created'));
        }

        return redirect()->route('front.checkout_complete');
    }

    public function complete()
    {
        Alert::set('status', __('vars.course_was_purchased'));

        return view('front.orders.complete');
    }
}
