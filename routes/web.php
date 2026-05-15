<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::get('/', [RsvpController::class, 'index'])->name('wedding.index');
Route::post('/rsvp', [RsvpController::class, 'store'])->name('wedding.rsvp.store');
Route::get('/admin/rsvps', [RsvpController::class, 'responses'])->name('admin.rsvps');