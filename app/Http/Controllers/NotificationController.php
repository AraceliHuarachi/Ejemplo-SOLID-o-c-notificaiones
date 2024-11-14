<?php

namespace App\Http\Controllers;

use App\Services\NotificationService;

class NotificationController extends Controller
{
    private NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function sendNotification()
    {
        $message = "Hello, this is a test message!";
        $recipients = ['user1@example.com', '+123456789', 'user123'];

        $this->notificationService->sendNotification($message, $recipients);
    }
}
