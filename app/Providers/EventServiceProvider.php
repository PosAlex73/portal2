<?php

namespace App\Providers;

use App\Events\CourseCompleted;
use App\Events\NewMessage;
use App\Events\Purchase;
use App\Events\Redis\ViewCourse;
use App\Events\TaskDone;
use App\Events\UserAchivement;
use App\Listeners\AchivementListener;
use App\Listeners\CourseCompleteListener;
use App\Listeners\NewMessageListener;
use App\Listeners\PurchaseListener;
use App\Listeners\Redis\ViewCourseRedis;
use App\Listeners\RegisterWelcome;
use App\Listeners\TaskDoneListener;
use App\Models\AppNew;
use App\Models\Article;
use App\Models\ArticleComment;
use App\Models\Category;
use App\Models\Order;
use App\Models\Setting;
use App\Models\ThreadMessage;
use App\Models\User;
use App\Observers\ArticleObserver;
use App\Observers\CategoryObserver;
use App\Observers\MessageObserver;
use App\Observers\NewsObserver;
use App\Observers\OrderObserver;
use App\Observers\SettingsObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
            RegisterWelcome::class
        ],
        Purchase::class => [
            PurchaseListener::class
        ],
        TaskDone::class => [
            TaskDoneListener::class
        ],
        CourseCompleted::class => [
            CourseCompleteListener::class
        ],
        NewMessage::class => [
            NewMessageListener::class
        ],
        UserAchivement::class => [
            AchivementListener::class
        ],
        ViewCourse::class => [
            ViewCourseRedis::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Article::observe(ArticleObserver::class);
        AppNew::observe(NewsObserver::class);
        ArticleComment::observe(ArticleComment::class);
        Category::observe(CategoryObserver::class);
        Order::observe(OrderObserver::class);
        Setting::observe(SettingsObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
