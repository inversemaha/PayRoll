@extends('layouts.master_layout')
@section('title', 'Add Employee')
@section('content')
    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Personal Details
                            </details>
                            <span class="tools pull-right">
                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                        <a href="javascript:;" class="fa fa-times"></a>
                        </span>
                        </header>
                        <div class="panel-body">

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form-horizontal form-label-left" method="post" action="/employee/save-employee"
                                  enctype="multipart/form-data">
                                <br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_full_name">Name
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emp_full_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="emp_full_name" placeholder="" required="required"
                                                   type="text">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_father_name">Father
                                            Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emp_father_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="emp_father_name"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">Image Upload</label>
                                        <div class="col-md-9">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                     style="width: 200px; height: 150px;">
                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                         alt="">
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"
                                                     style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                                <div>
                                                <span class="btn btn-white btn-file">
                                                <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input class="default" type="file" name="emp_image">
                                                </span>
                                                    <a href="#" class="btn btn-danger fileupload-exists"
                                                       data-dismiss="fileupload"><i class="fa fa-trash"></i> Remove</a>
                                                </div>
                                            </div>
                                            <!--<span class="label label-danger">NOTE!</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span
                                                    class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emp_birthday" class="date-picker form-control col-md-7 col-xs-12"
                                                   required="required" name="emp_birthday" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender :</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <p>
                                                <input type="radio" class="flat" name="gender" id="gender"
                                                       value="M"
                                                       checked="" required/> Male
                                                <input type="radio" class="flat" name="gender" id="gender"
                                                       value="F"/>Female
                                            </p>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_phn">Phone
                                            Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emp_phn" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="emp_phn"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                               for="emp_local_address">Local
                                            Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                        <textarea id="emp_local_address" required="required" name="emp_local_address"
                                                  class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_p_address">Present
                                            Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                        <textarea id="emp_p_address" required="required" name="emp_p_address"
                                                  class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationality">
                                            Nationality
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nationality" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="nationality"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Martial Status<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="emp_martial_status">
                                                <option>Married</option>
                                                <option>Unmarried</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--
                                     <div class="form-group" style="padding-bottom: 0px;">
                                         <label for="field-1" class="col-sm-3 control-label">Resume File</label>
                                         <div class="col-sm-7">
                                             <div class="fileinput fileinput-new" data-provides="fileinput"><input
                                                         type="hidden">
                                                 <span class="btn btn-primary btn-file">
                                             <span class="fileinput-new">Choose</span>
                                             <span class="fileinput-exists">Change</span>
                                             <input name="resume" type="file">
                                             </span>
                                                 <span class="fileinput-filename"></span>
                                                 <a href="#" class="close fileinput-exists" data-dismiss="fileinput"
                                                    style="float: none">×</a>
                                             </div>
                                         </div>
                                     </div>-->
                                    <header class="panel-heading">
                                        Account Login
                                        </details>

                                    </header>
                                    <br>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">
                                            Email
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="email" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="email"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">
                                            Password
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="password" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="password"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <header class="panel-heading">
                                        Company Details
                                        </details>

                                    </header>
                                    <br>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Employee Id</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="emp_id" type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Department</label>
                                        <div class="col-sm-7">
                                            <select name="department" class="form-control"
                                                    onchange="get_designation_val(this.value)" required="">

                                                <option>
                                                    Technology
                                                </option>
                                                <option value="3">
                                                    HR
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Designation</label>
                                        <div class="col-sm-7">
                                            <select name="designation" class="form-control">
                                                <option>Select A Department First</option>
                                                <option>Back-End Developer</option>
                                                <option>Font-End Developer</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Date Of Joining</label>
                                        <div class="col-sm-7">
                                            <input class="form-control datepicker" name="date_of_joining" value=""
                                                   data-start-view="2" required="" data-format="dd-mm-yyyy" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Joining Salary</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="joining_salary" value="" type="number">
                                        </div>
                                    </div>

                                    <header class="panel-heading">
                                        Bank Account Details
                                        </details>

                                    </header>
                                    <br>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Account Holder Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="account_holder_name" value="" required=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Account Number</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="account_number" value="" required=""
                                                   type="number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Bank Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="bank_name" value="" required=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Branch</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="branch" value="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3 col-md-6">
                                        <button type="submit" class="btn btn-info"
                                        >
                                            Save Details
                                        </button>
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

