<?php

use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\PlanController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\PromotionController;
use App\Http\Controllers\Front\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('front.index');
Route::get('/plans/', [PlanController::class, 'plans'])->name('front.plans');
Route::get('/plans/{plan}', [PlanController::class, 'plan'])->name('front.plans.plan');
Route::get('/courses/', [CourseController::class, 'courses'])->name('front.courses');
Route::get('/course/{course}', [CourseController::class, 'course'])->name('front.courses.course');
Route::get('/page/{page}/', [PageController::class, 'page'])->name('front.page');
Route::get('/blog/', [BlogController::class, 'blog'])->name('front.blog');
Route::get('/blog/{article}', [BlogController::class, 'article'])->name('front.blog.article');
Route::get('/promotions', [PromotionController::class, 'promotions'])->name('front.promotions');
Route::get('/promotions/{promotion}', [PromotionController::class, 'promotion'])->name('front.promotion');

//user profile
Route::prefix('profile/')->middleware(['auth'])->group(function () {
    Route::get('/', [ProfileController::class, 'profile'])->name('front.user');
    Route::post('/profile/{user}', [ProfileController::class, 'updateUserData'])->name('front.user.update');
    Route::get('/profile/{profile}', [ProfileController::class, 'profileData'])->name('front.profile');
    Route::post('/profile/{profile}', [ProfileController::class, 'updateProfileData'])->name('front.profile.update');
    Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('front.settings');
    Route::get('/profile/courses', [CourseController::class, 'myCourses'])->name('front.user.courses');

    Route::get('/order/', [OrderController::class, 'order'])->name('front.order');
    Route::post('/order/', [OrderController::class, 'createOrder'])->name('front.create_order');

    //blog
    Route::post('/blog/comment/{article}', [BlogController::class, 'publicComment'])->name('front.blog.comment');
});

Route::prefix('course/')->middleware(['auth'])->group(function (){
    Route::get('/{course}', [CourseController::class, 'course'])->name('front.user.courses');
    Route::get('/task/{task}', [TaskController::class, 'task'])->name('front.task');
});
