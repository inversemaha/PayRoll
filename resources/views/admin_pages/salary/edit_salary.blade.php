@extends('layouts.master_layout')
@section('title', 'Add Salary')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">

                    <div class="alert alert-info alert-block fade in">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="fa fa-times"></i>
                        </button>
                        <h4>
                            <i class="fa fa-ok-sign"></i>
                            Instruction!
                        </h4>
                        <p> Salary will be the same for all Employees of same department and designation.</p>
                        <p> If needed to add different salary it could be possible by going to <a href="/employee/salary/view-salary"
                                                                                                  class="alert-danger">View
                                Employee Salary-> Edit</a></p>
                    </div>

                    <section class="panel">
                        <header class="panel-heading">
                            Add Salary
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">


                            @if(session('success'))
                                <div class="alert alert-block alert-success fade in">
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @elseif(session('decline'))
                                <div class="alert alert-block alert-danger fade in">
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>{{ session('decline') }}</strong>
                                </div>
                            @endif


                            <form class="form-horizontal form-label-left" method="post"
                                  action="/employee/salary/save-salary"
                                  enctype="multipart/form-data">


                                <div class="form-group">
                                    <label for="field-2" class="col-sm-3 control-label">Department</label>
                                    <div class="col-sm-7">
                                        @if(isset($department))

                                            @if(count($department)<=0)
                                                <a href="/department/department-setup" class="btn btn-info">+ Add
                                                    Department First To Continue</a>
                                            @else
                                                <select name="department" class="form-control" id="department"
                                                        required="true">
                                                    <option>Select A Department First</option>
                                                    @foreach( $department as $dept)
                                                        <option value="{{ $dept->department_id}}">
                                                            {{ $dept->department_name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            @endif

                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="field-2" class="col-sm-3 control-label">Designation</label>
                                    <div class="col-sm-7" id="replace">
                                        <select class="form-control" name="designation_id"
                                                id="designation" required>
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="field-2" class="col-sm-3 control-label">Salary Duration</label>
                                    <div class="col-sm-7" id="replace">
                                        <select name="salary_duration" class="form-control" id="salary_duration"
                                                required="true">

                                            <option value="weekly" selected>Weekly</option>
                                            <option value="monthly">Monthly</option>
                                            <option value="hourly">Hourly</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="field-2" class="col-sm-3 control-label">Salary</label>
                                    <div class="col-sm-7">
                                        <input class="form-control" name="salary" type="number" required>
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $("#department").change(function () {
            var v = $('#department').val();
            console.log(v);
            var url = '/designation/department-wise-designation/' + v;
            console.log(url);

            $.get(url, function (data, status) {

                var option = '';


                console.log(data.length);
                if (data.length == 0) {
                    alert("Add Designation First");
                    //document.getElementById("replace").innerHTML = "<a href='/designation/add-designation'  class=\"btn btn-success\">Add Designation First To Continue</a>"
                } else {
                    option += '<option value="Select one...">' + 'Select one...' + '</option>';
                }
                $.each(data, function (key, value) {
                    //console( key + ": " + value );
                    option += '<option value="' + value.designation_id + '">' + value.designation_name + '</option>';
                });
                $('#designation').empty().append(option);
            });
        });

    </script>



@endsection

