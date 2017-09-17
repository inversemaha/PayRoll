@extends('layouts.master_layout')

@section('title', 'Employee Profile')


@section('content')


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="/employee/view-employee">All Employee</a></li>
                        <li class="active">Employee Profile</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <!--widget start-->
                    <section class="panel">
                        <div class="twt-feed blue-bg">
                            <h1>{{ $result->employee_name }}</h1>
                            <p>Session: {{ $result->employee_id }}</p>
                            <a href="#">
                                <img src="/employee_image/{{ $result->emp_image }}" alt="">
                            </a>
                        </div>
                        <div class="weather-category twt-category custom-divider">
                            <ul>
                                <li>
                                    Designation
                                    <h5>{{ $result->designation_name }}</h5>

                                </li>
                                <li class="active">
                                    Department
                                    <h5>{{ $result->department_name }}</h5>

                                </li>

                                <li>
                                    Shift
                                    <h5>{{ $result->emp_id }}</h5>

                                </li>

                            </ul>
                        </div>
                        <hr>
                        <footer class="twt-footer">
                            <a href="/student/edit/{{ $result->emp_id }}" type="button"
                               class="btn btn-info center-block"><i class="fa fa-refresh"></i> Update</a>
                        </footer>
                    </section>
                    <!--widget end-->
                </div>
                <div class="col-lg-8">

                    <section class="panel">
                        <!--<div class="bio-graph-heading" style="max-height: 30px;">
                            Education is the backbone of a nation.
                        </div>-->
                        <div class="panel-body bio-graph-info">
                            <h1>Bio Graph</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Full Name </span>: {{$result->employee_name}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Date of Birth </span>: {{$result->employee_father_name}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Gender </span>: {{$result->employee_birthday}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Religion</span>: {{ $result->gender }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Phone Number</span>: {{ $result->employee_phone }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Special Quota </span>: {{ $result->employee_phone }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Extra Curricular </span>: {{ $result->employee_local_address }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Fingerprint </span>: {{ $result->employee_permanent_address }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Username </span>: {{ $result->nationality }}</p>
                                </div>
                            </div>


                            <h1>Guardian Details</h1>
                            <div class="row">
                                <div class="bio-row">
                                    <p><span>Father Name </span>: {{$result->employee_martial_status}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Mother Name </span>: {{$result->email}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Guardian Phone </span>: {{$result->employee_date_of_joining}}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>F Profession</span>: {{ $result->employee_joining_salary }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>M Profession </span>: {{ $result->employee_account_holder_name }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Address </span>: {{ $result->employee_account_holder_name }}</p>
                                </div>

                                <div class="bio-row">
                                    <p><span>Address </span>: {{ $result->employee_account_number }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Address </span>: {{ $result->employee_bank_name }}</p>
                                </div>
                                <div class="bio-row">
                                    <p><span>Address </span>: {{ $result->employee_bank_branch }}</p>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>

@endsection