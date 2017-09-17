@extends('layouts.master_layout')

@section('title', 'Manual Attendance')


@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-12 ">
                    <section class="panel">
                        <header class="panel-heading">
                           Student Manual Attendance
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal " method="post" action="/save-section" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label col-sm-1">Class</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" placeholder="Class Name" type="text" name="section_name" required="true">

                                    </div>

                                    <label class="control-label col-sm-1">Section</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" placeholder="Section Name" type="text" name="section_name" required="true">

                                    </div>

                                    <label class="control-label col-sm-1">Shift</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" placeholder="Shift Name" type="text" name="section_name" required="true">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-1">Group</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" placeholder="Group Name" type="text" name="section_name" required="true">

                                    </div>

                                    <label class="control-label col-sm-1">Date</label>
                                    <div class="col-sm-3">
                                        <input class="form-control" type="Date" name="section_name" required="true">

                                    </div>

                                    <div class="col-sm-3 col-md-offset-1">
                                        <button  type="submit" class="btn btn-success">Search</button>                                        
                                    </div>
                                </div>
                                <br>
                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>






@endsection

