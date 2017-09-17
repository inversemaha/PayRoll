@extends('layouts.master_layout')

@section('title', 'View Employee')


@section('content')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper site-min-height">

            <div class="row">
                <div class="col-lg-12">
                    <!--breadcrumbs start -->
                    <ul class="breadcrumb">
                        <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="#">Employee</a></li>
                        <li class="active">View Employee</li>
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

        @if(isset( $result))
            <?php $i = 1;?>
            <!-- page start-->
                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                Employee
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
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Employee Id</th>


                                            <th><i class=" fa fa-edit"></i> Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($result as $res)


                                            <tr class="gradeA">
                                                <td> {{ $i++ }}</td>
                                                <td> {{ $res->employee_name }}</td>
                                                <td> {{ $res->department_name }}</td>
                                                <td> {{ $res->designation_name }}</td>

                                                <td> {{ $res->gender }}</td>
                                                <td> {{ $res->employee_phone }}</td>
                                                <td> {{ $res->email }}</td>
                                                <td> {{ $res->employee_id }}</td>
                                                <td>
                                                    <a href="/employee/view/{{ $res->emp_id }}" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                                                    <a href="/employee/edit/{{ $res->emp_id }}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                    <a href="/employee/delete/{{ $res->emp_id }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                                                </td>


                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
        @else


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