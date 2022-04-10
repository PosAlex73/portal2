<?php

namespace App\Observers;

use App\Models\Articale;

class OrderObserver
{
    /**
     * Handle the Articale "created" event.
     *
     * @param  \App\Models\Articale  $articale
     * @return void
     */
    public function created(Articale $articale)
    {
        //
    }

    /**
     * Handle the Articale "updated" event.
     *
     * @param  \App\Models\Articale  $articale
     * @return void
     */
    public function updated(Articale $articale)
    {
        //
    }

    /**
     * Handle the Articale "deleted" event.
     *
     * @param  \App\Models\Articale  $articale
     * @return void
     */
    public function deleted(Articale $articale)
    {
        //
    }

    /**
     * Handle the Articale "restored" event.
     *
     * @param  \App\Models\Articale  $articale
     * @return void
     */
    public function restored(Articale $articale)
    {
        //
    }

    /**
     * Handle the Articale "force deleted" event.
     *
     * @param  \App\Models\Articale  $articale
     * @return void
     */
    public function forceDeleted(Articale $articale)
    {
        //
    }
}
