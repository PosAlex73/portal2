<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('front.blog', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.blog'), route('front.blog'));
});

Breadcrumbs::for('front.blog.article', function(BreadcrumbTrail $trail, $article) {
    $trail->parent('front.blog');
    $trail->push('front.blog.article', route('front.blog.article', ['article' => $article]));
});
