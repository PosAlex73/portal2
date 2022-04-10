<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::get('/boss/login', [AuthenticatedSessionController::class, 'adminLogin'])->name('admin.login');

//Route::prefix('/boss')->middleware(['auth', 'is_admin'])->group(function () {
Route::prefix('/boss')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('courses', \App\Http\Controllers\Admin\CourseController::class);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class);
    Route::resource('pages', \App\Http\Controllers\Admin\PageController::class);
    Route::resource('promotions', \App\Http\Controllers\Admin\PromotionController::class);
    Route::resource('plans', \App\Http\Controllers\Admin\PlanController::class);
    Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
    Route::resource('user_profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    Route::resource('tasks', \App\Http\Controllers\Admin\TaskController::class);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::get('/articles/comments/{article}', [\App\Http\Controllers\Admin\ArticleCommentController::class, 'index'])->name('article_comments.index');
    Route::post('/articles/comments/{article}', [\App\Http\Controllers\Admin\ArticleCommentController::class, 'store'])->name('article_comments.store');

});
