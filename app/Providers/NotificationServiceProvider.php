<?php

namespace App\Providers;

use App\Notifications\EmailNotification;
use App\Notifications\PushNotification;
use App\Notifications\SmsNotification;
use App\Services\NotificationService;
use Illuminate\Support\ServiceProvider;

class NotificationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(NotificationService::class, function ($app) {

            return new NotificationService([
                new EmailNotification(),
                new SmsNotification(),
                new PushNotification(),
            ]);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // codigo que se necesita al arrancar el sistema
    }
}
