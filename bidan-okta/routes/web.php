<?php

use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/janji-temu', [LandingPageController::class, 'bookAppointment'])->name('appointment.store');
Route::post('/hitung-hpl', [LandingPageController::class, 'calculateHpl'])->name('hpl.calculate');
