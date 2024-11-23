<?php

declare(strict_types=1);

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class OwnershipTransferred extends Notification
{
    use Queueable;

    public $team;

    /**
     * Create a new notification instance.
     *
     * @param  \App\Models\Team  $team
     */
    public function __construct($team)
    {
        $this->team = $team;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(__('team.transferred'))
            ->greeting(__('team.hello') . ' ' . $notifiable->name . ',')
            ->line(__('team.you_are_new_owner') . $this->team->name . '.')
            ->action(__('team.view_team'), url('/teams/' . $this->team->id))
            ->line(__('team.thank_you'));
    }
}
