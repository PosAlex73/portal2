<?php

namespace App\Observers;

use App\Models\Article;

class ArticleObserver
{
    /**
     * Handle the Articale "created" event.
     *
     * @param  \App\Models\Article  $articale
     * @return void
     */
    public function created(Article $articale)
    {
        //
    }

    /**
     * Handle the Articale "updated" event.
     *
     * @param  \App\Models\Article  $articale
     * @return void
     */
    public function updated(Article $articale)
    {
        //
    }

    /**
     * Handle the Articale "deleted" event.
     *
     * @param  \App\Models\Article  $articale
     * @return void
     */
    public function deleted(Article $articale)
    {
        //
    }

    /**
     * Handle the Articale "restored" event.
     *
     * @param  \App\Models\Article  $articale
     * @return void
     */
    public function restored(Article $articale)
    {
        //
    }

    /**
     * Handle the Articale "force deleted" event.
     *
     * @param  \App\Models\Article  $articale
     * @return void
     */
    public function forceDeleted(Article $articale)
    {
        //
    }
}
