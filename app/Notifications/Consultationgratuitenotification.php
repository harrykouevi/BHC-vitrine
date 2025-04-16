<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
// use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ConsultationGratuiteNotification extends Notification
{
    use Queueable;

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail']; // On envoie une notification par email
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Nouvelle demande de consultation gratuite')
            ->greeting('Bonjour,')
            ->line('Une nouvelle demande de consultation gratuite a été soumise.')
            ->line('**Nom :** ' . $this->data['name'])
            ->line('**Email :** ' . $this->data['email'])
            ->line('**Téléphone :** ' . $this->data['phone'])
            ->line('**Objet :** ' . $this->data['subject'])
            ->line('**Message :** ' . $this->data['message'])
            ->line('Merci de traiter cette demande rapidement.')
            ->salutation('Cordialement, votre site web');
    }
}
