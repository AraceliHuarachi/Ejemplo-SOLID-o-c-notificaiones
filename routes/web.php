<?php

use App\Http\Controllers\CalculatorController;
use App\Http\Controllers\NotificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/send-notification', [NotificationController::class, 'sendNotification']);
Route::get('/calculator', [CalculatorController::class, 'calculator']);
