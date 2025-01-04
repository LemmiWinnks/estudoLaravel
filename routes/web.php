<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/eventCreate', [EventController::class, 'eventCreate']);
Route::get('/events/events', [EventController::class, 'events']);
Route::get('/events/accountCreate' , [EventController::class, 'accountCreate']);
Route::get('/events/enter', [EventController::class, 'enter']);
