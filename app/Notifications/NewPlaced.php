<?php

namespace App\Notifications;

use App\Notifications\ToolBar\UserNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewPlaced extends Notification
{
    use Queueable;

    public $new;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($new)
    {
        $this->new = $new;
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
        $url = route('front.news.show', ['new' => $this->new]);

        return (new MailMessage)
            ->greeting(__('vars.hello_user', ['user' => $notifiable->first_name]))
            ->line(__('vars.new_was_published'))
            ->action(__('vars.show_new'), $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        $notification = new UserNotification(
            $this->new->title,
            $this->new->description,
            route('front.news.show', ['new' => $this->new])
        );

        return $notification->getNotificcation();
    }
}
