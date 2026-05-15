<?php

use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment('Wedding RSVP site is ready.');
})->purpose('Display an inspiring message');
