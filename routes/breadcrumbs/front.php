<?php

use App\Models\AppNew;
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

Breadcrumbs::for('front.courses', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.courses'), route('front.courses'));
});

Breadcrumbs::for('front.courses.course', function(BreadcrumbTrail $trail, $course) {
    $trail->parent('front.courses');
    $trail->push('front.courses.course', route('front.courses.course', ['course' => $course]));
});

Breadcrumbs::for('front.promotions', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.promotions'), route('front.promotions'));
});

Breadcrumbs::for('front.promotion', function(BreadcrumbTrail $trail, $promotion) {
    $trail->parent('front.promotions');
    $trail->push('front.promotion', route('front.promotion', ['promotion' => $promotion]));
});

Breadcrumbs::for('front.plans', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.plans'), route('front.plans'));
});

Breadcrumbs::for('front.plans.plan', function(BreadcrumbTrail $trail, $plan) {
    $trail->parent('front.plans');
    $trail->push('front.plans.plan', route('front.plans.plan', ['plan' => $plan]));
});

Breadcrumbs::for('front.user', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.profile'), route('front.user'));
});

Breadcrumbs::for('front.checkout_complete', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.checkout_complete'), route('front.checkout_complete'));
});

Breadcrumbs::for('front.news', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.index'), route('front.index'));
    $trail->push(__('vars.news'), route('front.news'));
});

Breadcrumbs::for('front.news.show', function(BreadcrumbTrail $trail, AppNew $new) {
    $trail->parent('front.news');
    $trail->push('front.news.show', route('front.news.show', ['new' => $new]));
});
