<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class taskanotify extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */


    private $tasktitle;
    private $taskbody;
    public function __construct($tit,$bod,)
    {

        $this->tasktitle =$tit;
        $this->taskbody =$bod;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'title' => $this->tasktitle,
            'body' => $this->taskbody

        ];
    }
}
