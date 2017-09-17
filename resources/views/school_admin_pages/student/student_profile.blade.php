@extends('layouts.master_layout')

@section('title', 'School Homepage')


@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="/student/all-student">All Student</a></li>
                        <li class="active">Student Profile</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!--widget start-->
                    <section class="panel">
                        <div class="twt-feed blue-bg">
                            <h1>{{ $result->student_full_name }}</h1>
                            <p>Session: {{ $result->student_current_session }}</p>
                            <a href="#">
                                <img src="/student_image/{{ $result->student_picture }}" alt="">
                            </a>
                        </div>
                        <div class="weather-category twt-category custom-divider">
                            <ul>
                                <li>
                                    Roll
                                    <h5>{{ $result->student_roll }}</h5>

                                </li>
                                <li class="active">
                                    Class
                                    <h5>{{ $result->student_class }}</h5>

                                </li>
                                <li>
                                    Sec
                                    <h5>{{ $result->student_section }}</h5>

                                </li>
                                <li>
                                    Shift
                                    <h5>{{ $result->student_shift }}</h5>

                                </li>

                            </ul>
                        </div><hr>
                        <footer class="twt-footer">
                            <a href="/student/edit/{{ $result->student_id }}"  type="button" class="btn btn-info center-block"><i class="fa fa-refresh"></i> Update</a>
                        </footer>
                    </section>
                    <!--widget end-->
                </div>
                <div class="col-lg-8">

                    <section class="panel">
                        <div class="bio-graph-heading" style="max-height: 30px;">
                            Education is the backbone of a nation.
                        </div>
                        <div class="panel-body bio-graph-info">
                            <h1>Bio Graph</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Full Name </span>: {{$result->student_full_name}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Date of Birth </span>: {{$result->student_date_of_birth}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Gender </span>: {{$result->student_gender}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Religion</span>: {{ $result->student_religion }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Special Quota </span>: {{ $result->student_special_quota }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Extra Curricular </span>: {{ $result->std_extra_curricular }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Fingerprint </span>: {{ $result->student_fingerprint_id }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Username </span>: {{ $result->student_username }}</p>
                                </div>
                            </div>


                            <h1>Guardian Details</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Father Name </span>: {{$result->students_father_name}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Mother Name </span>: {{$result->students_mother_name}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Guardian Phone </span>: {{$result->students_guardian_phone}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>F Profession</span>: {{ $result->students_father_profession }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>M Profession </span>: {{ $result->students_mother_profession }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Address </span>: {{ $result->students_address }}</p>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection