<!DOCTYPE html>
<html>
<head>
    <title>RSVP Responses</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f9f9f9;
        }

        h1{
            margin-bottom: 10px;
        }

        .summary{
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        table{
            width:100%;
            border-collapse: collapse;
            background: white;
        }

        th, td{
            border:1px solid #ddd;
            padding:12px;
            text-align:left;
        }

        th{
            background:#f4f4f4;
        }

        tr:nth-child(even){
            background:#fafafa;
        }

        .yes{
            color: green;
            font-weight: bold;
        }

        .no{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<h1>Joel & Stephanie RSVP Responses</h1>

@php
    $totalParticipants = $rsvps->sum(function ($rsvp) {
        return 1 + (int) $rsvp->guests;
    });

    $totalResponses = $rsvps->count();

    $attendingCount = $rsvps->where('attending', 'yes')->count();

    $notAttendingCount = $rsvps->where('attending', 'no')->count();
@endphp

<div class="summary">
    <h2>Summary</h2>

    <p><strong>Total RSVP Responses:</strong> {{ $totalResponses }}</p>

    <p><strong>Total Participants:</strong> {{ $totalParticipants }}</p>

    {{-- <p><strong>Attending:</strong> {{ $attendingCount }}</p> --}}

    <p><strong>Not Attending:</strong> {{ $notAttendingCount }}</p>
</div>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            {{-- <th>Attending</th> --}}
            <th>Guests Invited</th>
            <th>Total Participants</th>
            <th>Dietary Needs</th>
            <th>Message</th>
            <th>Submitted</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @forelse($rsvps as $rsvp)
            <tr>
                <td>{{ $rsvp->name }}</td>

                <td>{{ $rsvp->email }}</td>

                {{-- <td>
                    <span class="{{ $rsvp->attending == 'yes' ? 'yes' : 'no' }}">
                        {{ strtoupper($rsvp->attending) }}
                    </span>
                </td> --}}

                <td>{{ $rsvp->guests }}</td>

                <td>{{ 1 + (int) $rsvp->guests }}</td>

                <td>{{ $rsvp->dietary_needs ?? 'N/A' }}</td>

                <td>{{ $rsvp->message ?? 'N/A' }}</td>

                <td>{{ $rsvp->created_at->format('M d, Y h:i A') }}</td>

                <td>

                        <form action="{{ route('rsvps.destroy', $rsvp->id) }}"
                            method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    onclick="return confirm('Delete this RSVP?')">
                                Delete
                            </button>
                        </form>
                    </td>
            </tr>
        @empty
            <tr>
                <td colspan="9">No RSVP responses yet.</td>
            </tr>
        @endforelse
    </tbody>


    
</table>

</body>
</html>