@extends('layouts.master_layout')
@section('title', 'View Holiday')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <div class="panel-body">
                            <br>
                            <br>
                            <br>
                            <div id='calendar'></div>
                        </div>
                    </section>

                </div>
            </div>
        </section>
    </section>

    <link rel='stylesheet'
          href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css'/>


    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function () {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here

                events: [
                        @foreach($result as $task)
                    {
                        title: '{{ $task->holiday_occasion }}',
                        start: '{{ $task->holiday_date }}',


                    },
                    @endforeach
                ]
            })
        });
    </script>

@endsection