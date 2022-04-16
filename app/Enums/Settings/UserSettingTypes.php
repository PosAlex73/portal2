<?php

namespace App\Enums\Settings;

use App\Enums\Enumable;

class UserSettingTypes
{
    use Enumable;

    //common
    public const STATUS = 'status';

    //notifications
    public const GET_NOTIFICATIONS = 'get_notifications';
    public const GET_BLOG_NOTIFICATIONS = 'get_blog_notifications';
    public const GET_REVIEW_NOTIFICATIONS = 'get_review_notifications';
    public const GET_NEWS_NOTIFICATIONS = 'get_news_notifications';
}
