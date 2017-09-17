@extends('layouts.master_layout')

@section('title', 'School Homepage')


@section('content')


    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <section class="panel">
                        <header class="panel-heading">
                            Student Acadamic Details
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


                            <form class="form-horizontal form-label-left" method="post" action="/student/save-student"
                                  enctype="multipart/form-data">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Class <span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            @include('school_admin_pages.class.all_classes')

                                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Section<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_section">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>F</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="item form-group">
                                        <label class="control-label col-md-6" for="std_roll">Student Roll
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="std_roll" class="form-control col-md-7 col-xs-12" name="std_roll"
                                                   placeholder="" required="required" type="number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Shift<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_shift">
                                                <option>N/A</option>
                                                <option>Day</option>
                                                <option>Evening</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Student Group</label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_group">
                                                <option>N/A</option>
                                                <option>Science</option>
                                                <option>Commerce</option>
                                                <option>Arts</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label col-md-6">Current
                                            Session<span class="required">*</span></label>
                                        <div class="col-md-6">
                                            <select class="form-control" name="std_session">
                                                <option>{{date('Y')+1}}</option>
                                                <option>{{date('Y')}}</option>
                                                <option>{{date('Y')-1}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <!--Academic Details End-->

                                <header class="panel-heading">
                                    Student Personal Detail

                                </header>
                                <br>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="std_full_name">Name
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="std_full_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="std_full_name" placeholder="" required="required"
                                                   type="text">
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
                                                         <input class="default" type="file" name="std_image">
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
                                            <input id="std_birthday" class="date-picker form-control col-md-7 col-xs-12"
                                                   required="required" name="std_birthday" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender :</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <p>
                                                <input type="radio" class="flat" name="gender" id="std_genderM"
                                                       value="M"
                                                       checked="" required/> Male
                                                <input type="radio" class="flat" name="gender" id="std_genderF"
                                                       value="F"/>Female
                                            </p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion<span
                                                    class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="std_religion">
                                                <option>Islam</option>
                                                <option>Hinduism</option>
                                                <option>Christianity</option>
                                                <option>Buddhism</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Special Quota</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="std_quota">
                                                <option>N/A</option>
                                                <option>Freedom Fighter</option>
                                                <option>Physical Disablities</option>
                                                <option>Tribe</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                               for="std_extra_curricular">Student
                                            Extra Curricular </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="std_extra_curricular" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="std_extra_curricular" placeholder=""
                                                   type="text">
                                        </div>
                                    </div>
                                    <!--from instriute_id to password-->

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="std_f_name">Father
                                            Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="std_f_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="std_f_name"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Father
                                            Profession</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="std_f_profession">
                                                <option>-</option>
                                                <option>Teacher</option>
                                                <option>Farmer</option>
                                                <option>Engineer</option>
                                                <option>Doctor</option>
                                                <option>Business</option>
                                                <option>Shopkeeper</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="std_m_name">Mother
                                            Name <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="std_m_name" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="std_m_name"
                                                   placeholder="" required="required" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Mother
                                            Profession</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <select class="form-control" name="std_m_profession">
                                                <option>-</option>
                                                <option>Housewife</option>
                                                <option>Teacher</option>
                                                <option>Farmer</option>
                                                <option>Engineer</option>
                                                <option>Doctor</option>
                                                <option>Business</option>
                                                <option>Shopkeeper</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                               for="std_gurdian_phone">Guardian
                                            Phone Number <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                            <input id="std_gurdian_phone" class="form-control col-md-7 col-xs-12"
                                                   data-validate-length-range="6" data-validate-words="2"
                                                   name="std_gurdian_phone" placeholder=""
                                                   required="required" type="number">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="std_p_adderss">Parents
                                            Address <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6">
                                        <textarea id="std_p_adderss" required="required" name="std_p_adderss"
                                                  class="form-control col-md-7 col-xs-12"></textarea>
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
                                </div>


                            </form>

                        </div>
                    </section>
                </div>
            </div>

        </section>
    </section>








@endsection
