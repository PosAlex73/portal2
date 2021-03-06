<?php

use App\Http\Controllers\Admin\ArticleCommentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\PracticeCourseController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Admin\ThreadController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Admin\UserProgressController;
use App\Http\Controllers\Admin\UserSettingController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\PracticeTaskController;
use Illuminate\Support\Facades\Route;

Route::get('/boss/login', [AuthenticatedSessionController::class, 'adminLogin'])->name('admin.login');
Route::get('/boss', function () {
    return redirect()->to(route('dashboard'));
});

Route::prefix('/boss')->middleware(['auth', 'is_admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('articles', ArticleController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('pcourses', PracticeCourseController::class)->except(['create', 'delete', 'store']);
    Route::resource('ptasks', PracticeTaskController::class)->except(['create', 'delete', 'store']);
    Route::resource('orders', OrderController::class);
    Route::resource('pages', PageController::class);
    Route::resource('promotions', PromotionController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('users', UserController::class);
    Route::resource('tasks', TaskController::class);

    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');

    Route::get('/articles/comments/{article}', [ArticleCommentController::class, 'index'])->name('article_comments.index');
    Route::post('/articles/comments/{article}', [ArticleCommentController::class, 'store'])->name('article_comments.store');

    Route::get('users/import', [UserController::class, 'import'])->name('users.import');
    Route::get('users/profile/{user}', [UserProfileController::class, 'edit'])->name('users.profiles');
    Route::get('users/settings/{user}', [UserSettingController::class, 'edit'])->name('users.settings');
    Route::get('users/progress/{user}', [UserProgressController::class, 'list'])->name('users.progress');
    Route::get('users/thread/{user}', [ThreadController::class, 'thread'])->name('thread.edit');

    Route::post('users/{thread}', [ThreadController::class, 'sendMessage'])->name('send_message');

    Route::get('progress/list', [UserProgressController::class, 'index'])->name('users.progress.index');
    Route::post('progress/', [UserProgressController::class, 'create'])->name('users.progress.create');
    Route::put('progress', [UserProgressController::class, 'store'])->name('users.progress.store');
    Route::delete('progress', [UserProgressController::class, 'delete'])->name('users.progress.destroy');

    Route::put('users/profile/{profile}', [UserProfileController::class, 'update'])->name('users.profiles.update');
    Route::put('users/settings/{user_settings}', [UserSettingController::class, 'update'])->name('users.settings.update');
});
