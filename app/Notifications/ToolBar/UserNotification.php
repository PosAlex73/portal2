<?php

namespace App\Notifications\ToolBar;

use Illuminate\Support\Collection;

class UserNotification
{
    public function __construct(
        public string $title,
        public string $text,
        public string $url = '',
        public string $icon = '',
        public string $date = '',
        public string $id = ''
    ){}

    public function getNotificcation()
    {
        return [
            'title' => $this->title,
            'text' => $this->text,
            'url' => $this->url,
            'icon' => $this->icon
        ];
    }

    public static function getNotificationsArray($notifications)
    {
        $result = new Collection();
        foreach ($notifications as $notification) {
            $result->add(new static(
                $notification->data['title'],
                $notification->data['text'],
                $notification->data['url'] ?? null,
                $notification->data['icon'] ?? null,
                $notification->created_at,
                $notification->id
            ));
        }

        return $result;
    }
}
