<?php

namespace App\Observers;

use App\Enums\Blog\ArticleStatuses;
use App\Enums\CommonStatuses;
use App\Enums\Settings\UserSettingTypes;
use App\Models\Article;
use App\Models\User;
use App\Notifications\ArticlePublished;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function created(Article $article)
    {
        $this->notifyUsers($article);
    }

    /**
     * Handle the Article "updated" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function updated(Article $article)
    {
        $this->notifyUsers($article);
    }

    /**
     * Handle the Article "deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function deleted(Article $article)
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function restored(Article $article)
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     *
     * @param  \App\Models\Article  $article
     * @return void
     */
    public function forceDeleted(Article $article)
    {
        //
    }

    private function notifyUsers($article)
    {
        if ($article->status !== ArticleStatuses::ACTIVE) {
            return false;
        }

        $users_to_notify = DB::table('user_settings')
            ->where(UserSettingTypes::GET_BLOG_NOTIFICATIONS, '=', CommonStatuses::ACTIVE)->get('user_id')->toArray();

        $users_to_notify = User::whereIn('id', array_column($users_to_notify, 'user_id'))->get();

        Notification::send($users_to_notify, new ArticlePublished($article));
    }
}
