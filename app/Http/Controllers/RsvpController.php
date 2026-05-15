<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RsvpController extends Controller
{
    public function index(): View
    {
        return view('wedding');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'attending' => ['required', 'in:yes,no'],
            'guests' => ['nullable', 'integer', 'min:1', 'max:4'],
            'dietary_needs' => ['nullable', 'string', 'max:500'],
            'message' => ['nullable', 'string', 'max:1000'],
        ]);

        if (($validated['attending'] ?? null) === 'no') {
            $validated['guests'] = null;
            $validated['dietary_needs'] = null;
        }

        Rsvp::create($validated);

        return back()->with([
            'rsvp_submitted' => true,
            'attending' => $validated['attending'],
        ]);
    }
}
