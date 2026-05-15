<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

Route::get('/', [RsvpController::class, 'index'])
    ->name('wedding.index');

Route::post('/rsvp', [RsvpController::class, 'store'])
    ->name('wedding.rsvp.store');

Route::get('/admin/rsvps', [RsvpController::class, 'responses'])
    ->name('admin.rsvps');

Route::get('/admin/rsvps/{id}/edit', [RsvpController::class, 'edit'])
    ->name('rsvps.edit');

Route::put('/admin/rsvps/{id}', [RsvpController::class, 'update'])
    ->name('rsvps.update');

Route::delete('/admin/rsvps/{id}', [RsvpController::class, 'destroy'])
    ->name('rsvps.destroy');