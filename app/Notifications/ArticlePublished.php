<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ArticlePublished extends Notification
{
    use Queueable;

    public $article;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($article)
    {
        $this->article = $article;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $article_url = route('front.blog.article', ['article' => $this->article]);

        return (new MailMessage)
                    ->greeting(__('vars.hello', ['user' => $notifiable->first_name]))
                    ->line(__('vars.new_article_published'))
                    ->action(__('vars.new_article'), $article_url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'title' => $this->article->title,
            'text' => $this->article->text,
            'category_id' => $this->article->category_id,
            'article_id' => $this->article->id
        ];
    }
}
