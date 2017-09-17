@extends('layouts.master_layout')

@section('title', 'Add Section')


@section('content')
    <section id="main-content">
        <section class="wrapper min-height-fix">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Section
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">
                            @if(session('status')=="success")
                                ok
                            @elseif(session('staus')=='decline')
                                no
                            @endif
                            <form class="form-horizontal form-label-left" method="post" action="/school/save-edited-section"
                                  enctype="multipart/form-data">

                                <div class="form-group">
                                   <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" type="hidden" placeholder="Section Name" type="text"
                                               name="section_id" required="true" value="{{ $result->id }}">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Student Class <span
                                                class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        @include('school_admin_pages.class.all_classes')

                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Section Name</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input class="form-control" placeholder="Section Name" type="text"
                                               name="section_name" required="true" value="{{ $result->section_name }}">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <button type="button" class="btn btn-primary">Cancel</button>
                                        <button type="reset" class="btn btn-primary">Reset</button>
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

