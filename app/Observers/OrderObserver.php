<?php

namespace App\Observers;

use App\Models\Order;

class OrderObserver
{
    /**
     * Handle the Articale "created" event.
     *
     * @param  \App\Models\Order  $articale
     * @return void
     */
    public function created(Order $articale)
    {
        //
    }

    /**
     * Handle the Articale "updated" event.
     *
     * @param  \App\Models\Order  $articale
     * @return void
     */
    public function updated(Order $articale)
    {
        //
    }

    /**
     * Handle the Articale "deleted" event.
     *
     * @param  \App\Models\Order  $articale
     * @return void
     */
    public function deleted(Order $articale)
    {
        //
    }

    /**
     * Handle the Articale "restored" event.
     *
     * @param  \App\Models\Order  $articale
     * @return void
     */
    public function restored(Order $articale)
    {
        //
    }

    /**
     * Handle the Articale "force deleted" event.
     *
     * @param  \App\Models\Order  $articale
     * @return void
     */
    public function forceDeleted(Order $articale)
    {
        //
    }
}
