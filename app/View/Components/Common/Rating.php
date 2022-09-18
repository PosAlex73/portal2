<?php

namespace App\View\Components\Common;

use Illuminate\View\Component;

class Rating extends Component
{
    public float|int $rating;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(float|int $rating = 0)
    {
        $this->rating = $rating;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.rating');
    }

    protected function calculateRating()
    {

    }
}
