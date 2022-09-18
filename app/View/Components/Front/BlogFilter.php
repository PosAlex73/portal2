<?php

namespace App\View\Components\Front;

use App\Utils\Blog\BlogFilterCollection;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\View\Component;


class BlogFilter extends Component
{
    public BlogFilterCollection $filters_container;
    public Collection $filters;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->filters_container = App::make(BlogFilterCollection::class);
        $this->filters = $this->filters_container->getFilters();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.blog-filter');
    }
}
