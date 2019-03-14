<!doctype html>
<html>
<head>
    <title>Events Listing Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

    <table>
        <tr>
            <td>School name</td>
            <td>Event Abrv</td>
            <td>Min GPA</td>
            <td>HR ID</td>
            <td>Deadline</td>
            <td>Test Date</td>
        </tr>
    @foreach($events as $event)
        <tr>
            <td> {{$event['school_name']}} </td>
            <td> {{$event['event_abv']}} </td>
            <td> {{$event['min_gpa']}} </td>
            <td> {{$event['hr_id']}} </td>
            <td> {{$event['deadline']}} </td>
            <td> {{$event['test_schedule']}} </td>
        </tr>
    @endforeach
    </table>

</body>
</html>
