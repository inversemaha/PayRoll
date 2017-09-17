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
                        <li><a href="#">Student</a></li>
                        <li class="active">View Student</li>
                    </ul>
                    <!--breadcrumbs end -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Student Acadamic Details
                            </details>
                            <span class="tools pull-right">
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                        <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                        </header>
                        <div class="panel-body">


                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif


                            <form class="form-horizontal form-label-left" method="post" action="/student/view-student-with-parameter"
                                  enctype="multipart/form-data">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Class <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            @include('school_admin_pages.class.all_classes')

                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Section<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_section">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>F</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Shift<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_shift">
                                                <option>N/A</option>
                                                <option>Day</option>
                                                <option>Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Group</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_group">
                                                <option>N/A</option>
                                                <option>Science</option>
                                                <option>Commerce</option>
                                                <option>Arts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Current
                                            Session<span class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_session">
                                                <option>{{date('Y')+1}}</option>
                                                <option>{{date('Y')}}</option>
                                                <option>{{date('Y')-1}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="col-md-12 pull-right">
                                            <button type="submit" class="btn btn-danger btn-block">Search</button>
                                        </div>

                                    </div>
                                </div>



                            </form>

                        </div>
                    </section>
                </div>
            </div>




            @if (session('status')=='success')
                <div class="alert alert-block alert-success fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Student Deleted Successfully</strong>
                </div>
            @elseif (session('status')=='decline')
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Oh snap!</strong> There was a problem.
                </div>
            @elseif (session('status')=='declined')
                <div class="alert alert-block alert-danger fade in">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="fa fa-times"></i>
                    </button>
                    <strong>Oh snap!</strong> There was a problem.Student Academic detail not deleted
                </div>


            @endif

            @if(isset( $result))

            <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Student Data Table
                            </header>
                            <div class="panel-body">
                                <div class="adv-table">
                                    <table class="display table table-bordered table-striped" id="example">
                                        <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Date of Birth</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Roll</th>
                                            <th>Shift</th>
                                            <th>Group</th>
                                            <th>Session</th>
                                            <th>Active</th>
                                            <th><i class=" fa fa-edit"></i> Institute Id</th>
                                            <th class="hidden-phone">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($result as $res)

                                            <!--
                                    <tr class="gradeX">
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 4.0</td>
                                        <td>Win 95+</td>
                                        <td><span class="label label-success label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>
                                    <tr class="gradeC">
                                        <td>Trident</td>
                                        <td>Internet
                                            Explorer 5.0</td>
                                        <td>Win 95+</td>
                                        <td><span class="label label-danger label-mini">Paid</span></td>
                                        <td>
                                            <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                            <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                        </td>
                                    </tr>-->
                                            <tr class="gradeA">
                                                <td> {{ $res->student_full_name }}</td>
                                                <td> {{ $res->student_date_of_birth }}</td>
                                                <td>{{ $res->student_class }}</td>
                                                <td>{{ $res->student_section }}</td>
                                                <td>{{ $res->student_roll }}</td>
                                                <td>{{ $res->student_shift }}</td>
                                                <td>{{ $res->student_group }}</td>
                                                <td>{{ $res->student_current_session }}</td>
                                                <td>
                                                    @if ($res->student_active_status==1)
                                                        <span class="label label-success label-mini">Active</span>
                                                    @else
                                                        <span class="label label-danger label-mini">Inactive</span>
                                                    @endif

                                                </td>
                                                <td>{{ $res->student_institute_id }}</td>
                                                <td>
                                                    <a href="/student/profile/{{ $res->student_id }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i>
                                                    </a>
                                                    <a href="/student/edit/{{ $res->student_id }}"
                                                       class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                    <a href="/student/delete/{{ $res->student_id }}"
                                                       class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                        <!--<tfoot>
                                        <tr>
                                            <th>Rendering engine</th>
                                            <th>Browser</th>
                                            <th>Platform(s)</th>
                                            <th class="hidden-phone">Engine version</th>
                                            <th class="hidden-phone">CSS grade</th>
                                        </tr>
                                        </tfoot>-->
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            @else
                Value is empty

        @endif
        <!-- page end-->
        </section>
    </section>
    <!--main content end-->
    <!-- js placed at the end of the document so the admin_pages load faster -->
    <script type="text/javascript" language="javascript" src="/assets/advanced-datatable/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript"
            src="/assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="/assets/data-tables/DT_bootstrap.js"></script>



    <!--script for this page only-->

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function () {
            $('#example').dataTable({
                "aaSorting": [[4, "desc"]]
            });
        });
    </script>

@endsection
