<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AsignacionInstructorNotification extends Notification
{
    use Queueable;
    public $descripcion;
    public $instructor;

    public function __construct($instructor, $descripcion)
    {
        $this->instructor = $instructor;
        $this->descripcion = $descripcion;
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
                        'instructor' => $this->$instructor,
                        'descripcion' => $this->$descripcion
                    ]);
    }
}