<!doctype html>
<html>
<head>
    <title>Events Listing Test</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

    <table>
    @foreach($posts as $post)
        <tr>
            <td> {{post['school_name']}} </td>
            <td> {{post['event_abv']}} </td>
            <td> {{post['min_gpa']}} </td>
            <td> {{post['hr_id']}} </td>
            <td> {{post['deadline']}} </td>
            <td> {{post['test_schedule']}} </td>
        </tr>
    @endforeach
    </table>

</body>
</html>
