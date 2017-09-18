@extends('layouts.master_layout')

@section('title', 'View Attendance')


@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <div class="row">
                <div class="col-lg-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Attendance</a></li>
                        <li class="active">View Attendance</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>

            @if (session('success'))
                <div class="alert alert-block alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>{{ session('success') }}</strong>
                </div>
            @elseif (session('decline'))
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong> {{session('decline')}} </strong>
                </div>
            @elseif (session('status')=='declined')
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Oh snap!</strong> There was a problem.Student Academic detail not deleted
                </div>


        @endif

            <?php $i = 1;?>
            <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Attendance View
                            </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-bordered table-striped" id="example">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Saturday</th>
                                            <th>Sunday</th>
                                            <th>Monday</th>
                                            <th>Tuesday</th>
                                            <th>Wednesday</th>
                                            <th>Thursady</th>
                                            <th>Friday</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                            <tr class="gradeA">
                                                <td> {{ $i++ }}</td>
                                                <td> Motiur Rahaman</td>
                                                <td> Business Management</td>
                                                <td> Manager</td>
                                                <td> Present</td>
                                                <td> Absent</td>
                                                <td> Present</td>
                                                <td> Present</td>
                                                <td> Present</td>
                                                <td> Present</td>
                                                <td> Present</td>


                                                </td>
                                            </tr>

                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- page end-->

        <!-- page end-->
        </section>
    </section>


@endsection