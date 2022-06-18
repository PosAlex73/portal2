<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;
use App\Models\Course;
use App\Models\Order;
use App\Models\Page;
use App\Models\Promotion;
use App\Models\Setting;
use App\Models\Task;
use App\Models\TaskReview;
use App\Models\Thread;
use App\Models\ThreadMessage;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserProgress;
use App\Models\UserSetting;
use App\Policies\ArticleCommentPolicy;
use App\Policies\ArticlePolicy;
use App\Policies\CategoryPolicy;
use App\Policies\CoursePolicy;
use App\Policies\OrderPolicy;
use App\Policies\PagePolicy;
use App\Policies\SettingPolicy;
use App\Policies\TaskPolicy;
use App\Policies\ThreadMessagePolicy;
use App\Policies\ThreadPolicy;
use App\Policies\UserPolicy;
use App\Policies\UserProfilePolicy;
use App\Policies\UserSettingPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Article::class => ArticlePolicy::class,
        ArticleComment::class => ArticleCommentPolicy::class,
        Category::class => CategoryPolicy::class,
        Course::class => CoursePolicy::class,
        Order::class => OrderPolicy::class,
        Page::class => PagePolicy::class,
        Promotion::class => Promotion::class,
        Setting::class => SettingPolicy::class,
        Task::class => TaskPolicy::class,
        TaskReview::class => TaskPolicy::class,
        Thread::class => ThreadPolicy::class,
        ThreadMessage::class => ThreadMessagePolicy::class,
        User::class => UserPolicy::class,
        UserProfile::class => UserProfile::class,
        UserProgress::class => UserProfilePolicy::class,
        UserSetting::class => UserSettingPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
    }
}
