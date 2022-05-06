<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function page(Page $page)
    {
        return view('front.pages.page', ['page' => $page]);
    }
}
