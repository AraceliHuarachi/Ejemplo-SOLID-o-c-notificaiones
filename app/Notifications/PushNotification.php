<?php

namespace App\Notifications;

class PushNotification implements NotificationInterface
{
    public function send(string $message, array $recipients): void
    {
        foreach ($recipients as $recipient) {

            if (ctype_alnum($recipient)) {
                echo "Push notification sent to {$recipient} with the message: '{$message}'<br>";
            }
        }
    }
}
