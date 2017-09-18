@extends('layouts.master_layout')
@section('title', 'Add Salary')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Holiday
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
                                  action="/holiday/save-holiday"
                                  enctype="multipart/form-data">




                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Select Date</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="" type="date"
                                               name="holiday_date" required="true">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Occasion</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="" type="text"
                                               name="holiday_occasion" required="true">

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

