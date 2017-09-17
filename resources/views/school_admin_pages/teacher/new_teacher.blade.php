@extends('layouts/super_admin_layouts')

@section('title', 'Add Institute')


@section('content')


    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Add Institute
                            <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                </span>
                        </header>
                        <div class="panel-body">
                            <form class="form-horizontal form-label-left" method="post" action="/save-institute" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Institute Name" type="text" name="institute_name"required="true">
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Phone</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Institute Phone" type="text" name="institute_phone">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Address</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Institute Address" type="text" name="institute_address">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Institute Email" type="text" name="institute_email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute EIIN Number</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Institute EIIN Number" type="text" name="institute_eiiin_number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Institute Type</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="select2_multiple form-control" name="institute_type">
                                            <option value="1">Primary</option>
                                            <option value="2">High School</option>
                                            <option value="3">College</option>
                                            <option value="4">High School & College</option>
                                            <option value="5">Primary, High School & College</option>
                                            <option value="6">Madrasha</option>
                                        </select>
                                    </div>
                                </div>
                                <h4>Admin Registration</h4><hr>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Admin Full Name</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Admin Full Name" type="text" name="user_full_name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Designation</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <select class="select2_multiple form-control" name="user_designation">
                                            <option selected="true">School Admin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Date Of Birth" type="date" name="user_date_of_birth" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone (Login Id)</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Phone" type="number" name="user_phone_number" required="true">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Email" type="email" name="user_email" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <input class="form-control" placeholder="Password" type="password" name="user_password" >
                                    </div>
                                </div>


                                <div class="form-group last">
                                    <label class="control-label col-md-3">Image Upload</label>
                                    <div class="col-md-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                            </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default">
                                                   </span>
                                                <a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-danger">NOTE!</span>

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

