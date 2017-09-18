

@extends('layouts.master_layout')
@section('title', 'Working Day Setup')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-12 ">
                    <section class="panel">
                        <header class="panel-heading">
                            Working Day Setup
                            </details>
                            <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">
                            @if (session('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif


                                <div class="panel-body">
                                    <section id="flip-scroll">
                                        <form class="form-horizontal form-label-left" method="post" action="/workingday/save"
                                              enctype="multipart/form-data">
                                        <table class="table table-bordered table-condensed cf">
                                            <thead class="cf">
                                            <tr>
                                                <th class="btn-primary">Day</th>
                                                <th class="btn-success">Working Status</th>

                                                <th class="btn-info">Starting hour</th>
                                                <th class="btn-warning">Ending Hour</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="btn-success">Saturday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="saturday_check_status" checked>
                                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="saturday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div style="width:100%" class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="saturday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-info">Sunday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="sunday_check_status" checked>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="sunday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="sunday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-warning">Monday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="monday_check_status"checked>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="monday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="monday_ending_hour">
                                                            <span class="input-group-btn" >
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-primary">Tuesday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="tuesday_check_status" checked>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="tuesday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div >
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="tuesday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-success">Wednesday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="wednesday_check_status" checked>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="wednesday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="wednesday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-info">Thursday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="thursday_check_status" checked>
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="thursday_starting_hour">
                                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="thursday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="btn-danger">Friday</td>
                                                <td>
                                                    <label>
                                                        <input type="checkbox" name="friday_check_status">
                                                    </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="friday_starting_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <div class="input-group bootstrap-timepicker">
                                                            <input class="form-control timepicker-default" type="text" name="friday_ending_hour">
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-default" type="button"><i class="fa fa-clock-o"></i></button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-info btn-block">Save Details</button>
                                        </form>
                                    </section>
                                </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection

