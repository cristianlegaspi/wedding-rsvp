<!DOCTYPE html>
<html>
<head>
    <title>RSVP Responses</title>

    <style>
        body{
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
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
    </style>
</head>
<body>

<h1>Wedding RSVP Responses</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Attending</th>
            <th>Guests</th>
            <th>Dietary Needs</th>
            <th>Message</th>
            <th>Submitted</th>
        </tr>
    </thead>

    <tbody>
        @forelse($rsvps as $rsvp)
            <tr>
                <td>{{ $rsvp->name }}</td>
                <td>{{ $rsvp->email }}</td>
                <td>{{ strtoupper($rsvp->attending) }}</td>
                <td>{{ $rsvp->guests }}</td>
                <td>{{ $rsvp->dietary_needs }}</td>
                <td>{{ $rsvp->message }}</td>
                <td>{{ $rsvp->created_at->format('M d, Y h:i A') }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="7">No RSVP responses yet.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>