<?php

namespace App\Notifications;

class SmsNotification
{
    public function send(string $message, array $recipients): void
    {
        foreach ($recipients as $recipient) {
            if (preg_match('/^\+\d+$/', $recipient)) {
                echo "SMS send to {$recipient} with the message: '{$message}'<br>";
            }
        }
    }
}
