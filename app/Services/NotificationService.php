<?php

namespace App\Services;

use App\Notifications\NotificationInterface;

class NotificationService
{
    private array $notifiers = [];

    public function __construct(array $notifiers)
    {
        $this->notifiers = $notifiers;
    }

    public function sendNotification(string $message, array $recipients): void
    {
        foreach ($this->notifiers as $notifier) {
            $notifier->send($message, $recipients);
        }
    }
}
