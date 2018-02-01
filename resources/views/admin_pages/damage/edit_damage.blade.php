@extends('layouts.master_layout')
@section('title', 'Add Damage')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Damage
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">

                            @if (session('success'))
                                <div class="alert alert-success">

                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('decline'))
                                <div class="alert alert-danger">

                                    {{ session('decline') }}
                                </div>
                            @endif


                            <form class="form-horizontal form-label-left" method="post"
                                  action="/employee/damage/save"
                                  enctype="multipart/form-data">


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose Employee</label>
                                    <div class="col-md-6">
                                        @if(isset($result))
                                            <select class="form-control" name="employee_id" id="employee_id" required>
                                                <option value="none">Select one...</option>

                                                @foreach($result as $res)
                                                    <option value="{{ $res->employee_id }}">{{ $res->employee_name }}</option>
                                                @endforeach

                                            </select>

                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Damage Date</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="" type="date"
                                               name="damage_date" required="true">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Damage Notes</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea id="damage_notes" name="damage_notes" class="form-control col-md-7 col-xs-12"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Damage Amount</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="" type="number"
                                               name="damage_amount" required="true">
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



@endsection

