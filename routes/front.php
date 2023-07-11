<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Front\AchievementsController;
use App\Http\Controllers\Front\BlogController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\IndexController;
use App\Http\Controllers\Front\NewsController;
use App\Http\Controllers\Front\NotificationsController;
use App\Http\Controllers\Front\OrderController;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\PlanController;
use App\Http\Controllers\Front\PracticeController;
use App\Http\Controllers\Front\PracticeTaskController;
use App\Http\Controllers\Front\ProfileController;
use App\Http\Controllers\Front\PromotionController;
use App\Http\Controllers\Front\RatingController;
use App\Http\Controllers\Front\ReportController;
use App\Http\Controllers\Front\SearchController;
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
Route::get('/rating', [RatingController::class, 'getUsersRating'])->name('front.rating');

Route::get('/pcourses/', [PracticeController::class, 'index'])->name('front.pcourses');
Route::get('/pcourses/{pcourse}', [PracticeController::class, 'pcourse'])->name('front.pcourse');

Route::get('/news', [NewsController::class, 'index'])->name('front.news');
Route::get('/news/{new}', [NewsController::class, 'show'])->name('front.news.show');
Route::get('/search', [SearchController::class, 'search'])->name('front.search');
Route::get('/achievements', [AchievementsController::class, 'index'])->name('front.achievements.list');


Route::get('/signed-registration/{user_id}', RegisteredUserController::class)
    ->name('front.signed-registration')
    ->middleware('signed');

//user profile
Route::prefix('profile/')->middleware(['auth'])->group(function () {
    Route::get('/', [ProfileController::class, 'profile'])->name('front.user');
    Route::get('/messages/', [ProfileController::class, 'messages'])->name('front.messages');
    Route::post('/messages/', [ProfileController::class, 'sendMessage'])->name('front.send_message');
    Route::post('/profile/{profile}', [ProfileController::class, 'updateProfileData'])->name('front.profile.update');
    Route::post('/settings', [ProfileController::class, 'settings'])->name('front.user.settings');

    Route::get('/order/create/{type}/{id}', [OrderController::class, 'order'])->name('front.order');
    Route::post('/order/', [OrderController::class, 'createOrder'])->name('front.create_order');
    Route::get('/order/complete', [OrderController::class, 'complete'])->name('front.checkout_complete');

    //blog
    Route::post('/blog/comment/{article}', [BlogController::class, 'publicComment'])->name('front.blog.comment');

    //notifications
    Route::get('notifications/', [NotificationsController::class, 'index'])->name('front.notifications');
    Route::delete('notifications/', [NotificationsController::class, 'destroy'])->name('front.notifications.delete');
});

Route::prefix('user_courses/')->middleware(['auth'])->group(function (){
    Route::get('/my/course/{course}', [CourseController::class, 'myCourse'])->name('front.user.courses');
    Route::get('/my/pcourse/{pcourse}', [PracticeController::class, 'myCourse'])->name('front.user.pcourses');

    Route::get('/task/{task}', [TaskController::class, 'doTask'])->name('front.task');
    Route::get('/practice_task/{task}', [PracticeTaskController::class, 'doTask'])->name('front.practice_task');


    Route::post('/check_task/{task}', [TaskController::class, 'checkTask'])->name('front.task.check');
    Route::post('/check_ptask/{task}', [PracticeTaskController::class, 'checkTask'])->name('front.ptask.check');
    Route::delete('/destroy_course/{course}', [CourseController::class, 'dropProgress'])->name('front.drop_course');
});

Route::prefix('reports/')->middleware(['auth'])->group(function() {
    Route::post('{task}', [ReportController::class, 'report'])->name('front.report_task_mistake');
});
