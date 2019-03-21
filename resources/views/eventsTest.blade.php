<!doctype html>
<html lang="en">
<head>
    <title>Events Listing Test</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


    <br><br>


    <div class="container col-md-8">
        <div class="row justify-content-center">
            <div class="col-md-12">


                <h1 class="panel-title">Event Listing Test</h1>

                <table class="table table-hover table-sm">

                    <caption>Showing {{ count($events) }} entries</caption>

                    <thead class="thead-light">
                        <tr>
                            <th scope="col"> # </th>
                            <th scope="col">School name</th>
                            <th scope="col">Event Abrv</th>
                            <th scope="col">Min GPA</th>
                            <th scope="col">HR ID</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Test Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $event)
                        <tr>
                            <th scope="row"> {{ $loop->iteration }} </th>
                            <td> {{$event['school_name']}} </td>
                            <td> {{$event['event_abv']}} </td>
                            <td> {{$event['min_gpa']}} </td>
                            <td> {{$event['hr_id']}} </td>
                            <td> {{ \Carbon\Carbon::parse($event['deadline'])->format('m/d/Y') }} </td>
                            <td> {{ \Carbon\Carbon::parse($event['test_schedule'])->format('m/d/Y') }} </td>
                            <td> <a href="/test/e/{{$event['id']}}" role="button" class="btn btn-outline-primary btn-sm">Details</a> </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>


</body>
</html>
