<?php

namespace App\Notifications;

use App\Mail\NotificationMail;
use Illuminate\Support\Facades\Mail;

class EmailNotification implements NotificationInterface
{
    public function send(string $message, array $recipients): void
    {
        foreach ($recipients as $recipient) {
            if (strpos($recipient, '@') !== false) {
                echo "Email send to {$recipient} with the message: '{$message}'<br>";
            }
        }
    }
}
