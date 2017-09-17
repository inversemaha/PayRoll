@extends('layouts.master_layout')
@section('title', 'Add Designation')
@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Department
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">


                            @if(session('status')=="success")
                                <div class="alert alert-block alert-success fade in">
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>Section Added Successfully</strong>
                                </div>
                            @elseif(session('staus')=='decline')
                                <div class="alert alert-block alert-danger fade in">
                                    <button data-dismiss="alert" class="close close-sm" type="button">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <strong>There was a problem</strong>
                                </div>
                            @endif


                            <form class="form-horizontal form-label-left" method="post"
                                  action="/designation/save-designation"
                                  enctype="multipart/form-data">


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Choose Department
                                        Name</label>
                                    <div class="col-md-6">
                                        @if(isset($result))
                                            @if(count($result)<=0)
                                                <a href="/department/department-setup" class="btn btn-success">+ Add Department First</a>
                                            @else
                                                <select class="form-control" name="department_id" id="department" required>
                                                    <option value="none">Select one...</option>

                                                    @foreach($result as $res)
                                                        <option value="{{ $res->department_id }}">{{ $res->department_name }}</option>
                                                    @endforeach


                                                </select>
                                            @endif
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="" type="text"
                                               name="designation_name" required="true">
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



@endsection

