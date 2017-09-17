

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
                                                <th class="btn-danger">Edit</th>
                                                <th class="btn-danger">Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($result as $res)

                                            <tr>
                                                <td class="btn-success">{{$res->day}}</td>
                                                <td>
                                                    <label>
                                                        {{ $res->working_day_status }}
                                                        </label>
                                                </td>
                                                <td>
                                                    <div>
                                                        {{ $res->office_starting_time }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        {{ $res->office_closing_time }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="/workingday/edit/{{ $res->working_day_id}}">Edit</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div>
                                                        <a href="/workingday/delete/{{$res->working_day_id}}">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>


                                                @endforeach
                                            </tbody>
                                        </table></form>
                                </section>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
@endsection

