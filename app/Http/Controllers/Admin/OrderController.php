<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Orders\OrderTypes;
use App\Enums\Settings\SettingTypes;
use App\Facades\Set;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Commercial\StoreOrderRequest;
use App\Http\Requests\Admin\Commercial\UpdateOrderRequest;
use App\Models\Order;
use App\Models\PracticeCourse;
use App\Models\User;
use App\Utils\Checkers\UserHasCourse;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['user'])->paginate(Set::get(SettingTypes::ADMIN_PAGINATION));

        return view('admin.orders.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Commercial\StoreOrderRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreOrderRequest $request)
    {
        $fields = $request->validated();

        if (!UserHasCourse::UserHasCourse($fields['user_id'], $fields['course'])) {
            return back()->withErrors([
                __('vars.user_already_has_course')
            ]);
        }

        $order_data['user'] = User::find($fields['user_id']);
        $order_data['id'] = PracticeCourse::find($fields['course'])->id;
        $order_data['payment'] = $fields['payment'];
        $order_data['type'] = OrderTypes::PCOURSE;

        $order = \App\Facades\Order::handleOrder($order_data);

        if (empty($order)) {
            return back()->withErrors([
                __('vars.entity_not_provided')
            ]);
        } else {
            session()->flash('status', __('vars.order_was_created'));
        }

        return redirect()->to(route('orders.edit', ['order' => $order]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('admin.orders.edit', ['order' => $order]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Admin\Commercial\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $fields = $request->validated();
        $order->update($fields);
        session()->flash('status', __('vars.order_was_updated'));

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        session()->flash('status', __('vars.order_was_deleted'));

        return redirect()->to(route('orders.index'));
    }
}
