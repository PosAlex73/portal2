<?php

namespace App\View\Components\Admin;

use App\Enums\Blog\ArticleStatuses;
use App\Enums\Enumable;
use Illuminate\View\Component;

class Statuses extends Component
{
    public $statuses;
    public $selected;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($statuses, $label = 'common', $selected = '')
    {
        /** @var Enumable statuses */
        $this->statuses = $statuses::getAll();
        $this->selected = $selected;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.statuses');
    }
}
