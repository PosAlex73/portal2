<?php

namespace App\Utils\Blog;

use App\Enums\Courses\CourseCategories;
use Illuminate\Support\Collection;

class BlogFilterCollection
{
    protected Collection $filters;

    public function __construct()
    {
        $this->filters = new Collection();
    }

    public function setFilter(Collection $filters, string $type)
    {
        $this->filters->put($type, $filters);
    }

    public function getFilters($type = null)
    {
        return is_null($type) ? $this->filters : $this->filters[$type];
    }
}
