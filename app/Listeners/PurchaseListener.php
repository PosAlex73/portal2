<?php

namespace App\Listeners;

use App\Enums\CommonStatuses;
use App\Enums\Orders\OrderTypes;
use App\Models\UserProgress;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class PurchaseListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $product = $event->product;
        $order = $event->order;

        if ($product->type === OrderTypes::COURSE) {
            UserProgress::create([
                'data' => '',
                'user_id' => $order->user_id,
                'status' => CommonStatuses::ACTIVE,
                'order_id' => $order->id,
                'course_id' => $product->id
            ]);
        }
    }
}
