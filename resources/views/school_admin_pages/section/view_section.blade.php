@extends('layouts.master_layout')

@section('title', 'School Section')


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
                <?php $i=1;?>
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
                                            <th>Father Name</th>
                                            <th>Birthday</th>
                                            <th>Gender</th>
                                            <th>Phone</th>
                                            <th>Local Address</th>
                                            <th>Permanent Address</th>
                                            <th>Nationality</th>
                                            <th>Martial Status</th>
                                            <th>Email</th>
                                            <th>Employee Id</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Date Of Joining</th>
                                            <th>Joining Salary</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Bank Name</th>
                                            <th>Bank Branch</th>

                                            <th><i class=" fa fa-edit"></i> Action</th>
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
                                                <td> {{ $i++ }}</td>
                                                <td> {{ $res->class_name }}</td>
                                                <td> {{ $res->section_name }}</td>
                                                <td> {{ $res->institute_id }}</td>

                                                <td>

                                                    </button>
                                                    <a href="/section/edit/{{ $res->id }}"
                                                       class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                                    <a href="/section/delete/{{ $res->id }}"
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
