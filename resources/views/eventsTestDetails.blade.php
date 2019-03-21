<!doctype html>
<html lang="en">
<head>
    <title>Event Details Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<br><br>

    <div class="container col-md-6">
        <div class="row justify-content-center">
            <div>


                <div class="row justify-content-center">
                    <h2>JOB OPPORTUNITY</h2>
                </div>

                <br>

                Company Description: Company X is located in Jakarta Indonesia. We invite you to join our company. Blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah. The following are the positions and qualifications that we are currently looking for:<br>
                Company blah blahb albh blahdflasdfjhkolas dflaks dflkasfasfasdfafassfasfasd fasfdasfasfasf a fdasd f adfa dasfasf asfasdfas fasddf asdfa sdf asdf asdf adfa sdf afd asfd afdas dfasdf asdf asdf asdf asdf as adfasfd asd fasdfd asdfas fdasfas dfd asdf asf sd

                <br><br><br>

                <h4>SCHOOL: {{$eventDetails['school_name']}}</h4>
                <h4>POSITION:
                    @foreach ($eventDetails['degrees'] as $degree)
                        {{ $degree['name'] }}
                    @endforeach

                    Technical Staff

                </h4>
                <h4>LOCATION: Lampung, Sumatra, Indonesia</h4>

                <br><br>

                <div class="row">
                    <div class="col-md-6">
                        <h4>QUALIFICATIONS:</h4>
                        <ol>
                            <li>Minimum GPA: {{$eventDetails['min_gpa']}}</li>
                            <li>Majors:
                                <ul>

                                    @forelse ($eventDetails['majors'] as $major)
                                        <li>{{ $major->name }}</li>
                                    @empty
                                        <li>test 1</li>
                                        <li>test 2</li>
                                        <li>test 3</li>
                                        <li>test 4</li>
                                        <li>test 5</li>
                                        <li>test 6</li>
                                        <li>test 7</li>
                                        <li>test 8</li>
                                        <li>test 9</li>
                                        <li>test 10</li>
                                    @endforelse

                                </ul>
                            </li>
                            <li>Can work individually or in a team</li>
                            <li>Ready to work in Jakarta</li>
                            <li>Ready to live in Jakarta</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <h4>DOCUMENTATION:</h4>
                        <ol>
                            <li>Photo 4 x 6 – 2 copies</li>
                            <li>Photocopy of your ID</li>
                            <li>Application Letter</li>
                            <li>Resume</li>
                            <li>Legalized photocopy of your degree</li>
                            <li>Legalized photocopy of your transcripts</li>
                        </ol>
                        <br><br><br><br>
                        *Note:<br>
                        bring with you to the written test
                    </div>
                </div>

                <br>

                <h4>APPLICATION DEADLINE: {{ \Carbon\Carbon::parse($eventDetails['deadline'])->format('m/d/Y') }}</h4>
                <h4>TEST SCHEDULE: {{ \Carbon\Carbon::parse($eventDetails['test_schedule'])->format('m/d/Y') }} </h4>

                <br><br>

                <h4>DISCLAIMER:</h4>
                In our recruitment efforts for candidate employees of Company X, we would like to inform you of the following:<br><br>
                <ol>
                    <li>Company X has never and will never charge any fees during any point of our recruitment process.</li>
                    <li>Official information and communication from Company X will only come from phone +6211111111 or email: xyz@corp.com</li>
                </ol>

                <br><br>

                <a href="#" class="btn btn-danger btn-lg" role="button">APPLY</a>

                <br><br><br>

                <!--//
                Event ID: {{$eventDetails['id']}} <br>
                School Name: {{$eventDetails['school_name']}} <br>
                Event Abr: {{$eventDetails['event_abv']}} <br>
                Min GPA: {{$eventDetails['min_gpa']}} <br>
                HR ID: {{$eventDetails['hr_id']}} <br>
                Application Deadline: {{ \Carbon\Carbon::parse($eventDetails['deadline'])->format('m/d/Y') }} <br>
                Test Date: {{ \Carbon\Carbon::parse($eventDetails['test_schedule'])->format('m/d/Y') }} <br>
                //-->


            </div>
        </div>
    </div>

</body>
</html>
