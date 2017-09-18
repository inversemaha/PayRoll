

@extends('layouts.master_layout')
@section('title', 'employee')
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
                            <form class="form-horizontal form-label-left" method="post" action="/employee/save-edited-employee"
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
                                                   name="emp_id" placeholder="" required="required"
                                                   type="text" value=" {{$result->emp_id}}">
                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_full_name">Name
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="emp_full_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="emp_full_name" placeholder="" required="required"
                                                   type="text" value=" {{$result->employee_name}}">
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
                                                   name="emp_father_name" placeholder="" required="required"
                                                   placeholder="" required="required" type="text" value="{{$result->employee_father_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">Image Upload</label>
                                        <div class="col-md-9">
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"
                                                     style="width: 200px; height: 150px;">
                                                    <img src="/employe_image/{{ $result->emp_image }}"
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
                                                   required="required" name="emp_birthday" type="date" value="{{ $result->employee_birthday }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender :</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <p>
                                                <input type="radio" class="flat" name="gender" id="gender"
                                                       value="M"
                                                       @if($result->gender=="Male") checked="true" @endif /> Male
                                                <input type="radio" class="flat" name="gender" id="gender"
                                                       value="F"
                                                       @if($result->gender=="Female") checked="true" @endif />Female
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
                                                   placeholder="" required="required" type="text"
                                                   value="{{ $result->employee_phone }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_local_address">Local
                                            Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                        <textarea id="emp_local_address" required="required" name="emp_local_address"
                                                  class="form-control col-md-7 col-xs-12">{{ $result->employee_local_address}}</textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="emp_p_address">Present
                                            Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                        <textarea id="emp_p_address" required="required" name="emp_p_address"
                                                  class="form-control col-md-7 col-xs-12">{{ $result->employee_permanent_address}}</textarea>
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
                                                   placeholder="" required="required" type="text"
                                                   value="{{$result->nationality}}}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Martial Status<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="emp_martial_status">
                                                <option @if($result->employee_martial_status=="Married") selected @endif >Married</option>
                                                <option @if($result->employee_martial_status=="Unmarried") selected @endif >Unmarried</option>
                                                <option @if($result->employee_martial_status=="Other") selected @endif >sOther</option>
                                            </select>
                                        </div>
                                    </div>
                                    <header class="panel-heading">
                                        Documents
                                        </details>

                                    </header>
                                    <br>
                                    <div class="form-group" style="padding-bottom: 0px;">
                                        <label for="field-1" class="col-sm-3 control-label">Resume File</label>
                                        <div class="col-sm-7">
                                            <div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                                                <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">Choose</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input name="resume" type="file">
                                            </span>
                                                <span class="fileinput-filename"></span>
                                                <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                            </div>
                                        </div>
                                    </div>
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
                                                   placeholder="" required="required" type="text"
                                                   value="{{$result->email}}"
                                            >
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
                                                   name="password" type="password"
                                                   placeholder="" required="required" type="text"
                                                   value="{{$result->password}}}"
                                            >
                                        </div>
                                    </div>
                                    <header class="panel-heading">
                                        Company Details
                                        </details>
                                        <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                    </header>
                                    <br>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Employee Id</label>
                                        <div class="col-sm-7">
                                                <input class="form-control" name="emp_id" type="text"
                                                value="{{$result->employee_id}}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Department</label>
                                        <div class="col-sm-7">
                                            <select name="department" class="form-control"  required="">
                                                <option value="">Select A Department</option>
                                                <option @if($result->employee_department=="Marketing") selected @endif >Marketing</option >
                                                <option @if($result->employee_department=="Technology") selected @endif>Technology</option>
                                                <option @if($result->employee_department=="HR") selected @endif>HR</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Designation</label>
                                        <div class="col-sm-7">
                                            <select name="designation" class="form-control">
                                                <option value="">Select A Designation First</option>
                                                <option @if($result->employee_designation=="Back-End Developer") selected @endif>Back-End Developer </option>
                                                <option @if($result->employee_designation=="Font-End Developer") selected @endif>Font-End Developer </option>
                                                <option @if($result->employee_designation=="Hr Manager") selected @endif>Hr Manager </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Date Of Joining</label>
                                        <div class="col-sm-7">
                                            <input class="form-control datepicker"
                                                   name="date_of_joining"
                                                   data-start-view="2" required=""
                                                   data-format="dd-mm-yyyy"
                                                   type="text"
                                                   value="{{ $result-> employee_date_of_joining}}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Joining Salary</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="joining_salary" value="{{ $result->employee_joining_salary }}" type="text">
                                        </div>
                                    </div>

                                    <header class="panel-heading">
                                        Bank Account Details
                                        </details>
                                        <span class="tools pull-right">
                                    <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    <a href="javascript:;" class="fa fa-times"></a>
                                    </span>
                                    </header>
                                    <br>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Account Holder Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="account_holder_name" value="{{ $result->employee_account_holder_name }}" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-1" class="col-sm-3 control-label">Account Number</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="account_number" value="{{ $result->employee_account_number }}" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Bank Name</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="bank_name" value="{{ $result->employee_bank_name }}" required="" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="field-2" class="col-sm-3 control-label">Branch</label>
                                        <div class="col-sm-7">
                                            <input class="form-control" name="branch" value="{{ $result->employee_bank_branch }}" type="text">
                                        </div>
                                    </div>
                                    <div style="text-align: center; height: 184px;" class="col-md-offset-3 col-md-6">
                                        <button type="submit" class="btn btn-lg btn-info" style="width: 100%; margin-top: 70px;">
                                            Save Details                </button>
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

