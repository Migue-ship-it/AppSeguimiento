<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AsignacionInstructorNotification extends Notification
{
    use Queueable;
    public $instructor;

    public function __construct($instructor)
    {
        $this->instructor = $instructor;
    }
    public function via($notifiable)
    {
        return ['mail'];
    }
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->subject('Te notifico esto.')
                    ->view('email.envioInstructores', [
                        'instructor' => $this->instructor                    ]);
    }
}