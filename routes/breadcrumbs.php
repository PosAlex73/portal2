<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.dashboard'), route('dashboard'));
});

Breadcrumbs::for('users.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.users'), route('users.index'));
});

Breadcrumbs::for('users.create', function(BreadcrumbTrail $trail) {
    $trail->parent('users.index');
    $trail->push('users.create', route('users.create'));
});

Breadcrumbs::for('users.profiles', function(BreadcrumbTrail $trail, $profile) {
    $trail->parent('users.index');
    $trail->push('users.profiles', route('users.profiles', $profile));
});

Breadcrumbs::for('users.edit', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.index');
    $trail->push(__('vars.edit'), route('users.edit', $user));
});

Breadcrumbs::for('users.settings', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.index');
    $trail->push(__('vars.settings'), route('users.settings', $user));
});

Breadcrumbs::for('users.progress', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.index');
    $trail->push(__('vars.progress'), route('users.progress', $user));
});

Breadcrumbs::for('thread.edit', function (BreadcrumbTrail $trail, $user) {
    $trail->parent('users.index');
    $trail->push(__('vars.thread'), route('thread.edit', $user));
});

Breadcrumbs::for('courses.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.courses'), route('courses.index'));
});

Breadcrumbs::for('courses.edit', function (BreadcrumbTrail $trail, $course) {
    $trail->parent('courses.index');
    $trail->push(__('vars.courses'), route('courses.edit', $course->id));
});

Breadcrumbs::for('courses.create', function (BreadcrumbTrail $trail) {
    $trail->parent('courses.index');
    $trail->push(__('vars.courses_create'), route('courses.create'));
});

Breadcrumbs::for('plans.index', function (BreadcrumbTrail $trail) {
    $trail->push(__('vars.plans'), route('plans.index'));
});

Breadcrumbs::for('plans.edit', function (BreadcrumbTrail $trail, $plan) {
    $trail->parent('plans.index');
    $trail->push(__('vars.plans'), route('plans.edit', $plan));
});

Breadcrumbs::for('plans.create', function (BreadcrumbTrail $trail) {
    $trail->parent('plans.index');
    $trail->push(__('vars.plans_create'), route('plans.create'));
});
