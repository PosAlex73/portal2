<?php

namespace App\Events;

use App\Models\Order;
use App\Orders\Products\Product;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Purchase
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $product;
    public $order;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Product $product, Order $order)
    {
        $this->product = $product;
        $this->order = $order;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}