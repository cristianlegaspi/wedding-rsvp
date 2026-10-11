
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

// Wedding homepage — SDE video and memories
Route::get('/', [RsvpController::class, 'index'])
    ->name('wedding.index');

// RSVP CLOSED — no longer accepting submissions
Route::post('/rsvp', function () {
    return response()->json([
        'success' => false,
        'message' => 'The wedding has concluded. RSVP submissions are now closed.'
    ], 410);
})->name('wedding.rsvp.store');

// Also block the alternative RSVP URL
Route::post('/wedding/rsvp', function () {
    abort(410, 'RSVP submissions are closed.');
});

// ADMIN — view previous RSVP responses
Route::get('/admin/rsvps', [RsvpController::class, 'responses'])
    ->name('admin.rsvps');

// ADMIN — edit existing RSVP
Route::get('/admin/rsvps/{id}/edit', [RsvpController::class, 'edit'])
    ->name('rsvps.edit');

// ADMIN — update existing RSVP
Route::put('/admin/rsvps/{id}', [RsvpController::class, 'update'])
    ->name('rsvps.update');

// ADMIN — delete existing RSVP
Route::delete('/admin/rsvps/{id}', [RsvpController::class, 'destroy'])
    ->name('rsvps.destroy');
