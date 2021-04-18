<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="admission on Madhyamanchal Regional Engineering College">
    <meta name="author" content="Madhyamanchal Regional Engineering College">
    <meta name="keywords" content="addmission, Madhyamanchal Regional Engineering College, college">

    <!-- Title Page-->
    <title>Admission | Madhyamanchal Regional Engineering College</title>

    <!-- Icons font CSS-->
    <link href="{{ asset('addmission_form/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('addmission_form/font-awesome-4.7/css/font-awesome.min.') }}css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- addmission_form CSS-->
    <link href="{{ asset('addmission_form/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('addmission_form/datepicker/daterangepicker.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('addmission_form/css/main.css') }}" rel="stylesheet" media="all">
</head>
<body>
    <div class="page-wrapper bg-gra-01 p-t-45 p-b-50">
        <div class="wrapper wrapper--wfull ">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #535353;">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('https://mrec.edu.np/assets/njn/info/logo_addmission.png') }}" width="70%" style="padding: 10px;">
                        </div>
                        <div class="col-md-9">

                            <h2 class="title">MADHYAMANCHAL REGIONAL ENGINEERING COLLEGE</h2>
                            <h4 style="text-align: center;color:white; "><b>(Affilited to CTEVT, Nepal)</b></h4>
                            <p style="text-align: center;color:white; ">Ramanand Chock, Janakpur-08, Dhanusha, Nepal<br>
                            Tel.: +977-41-521991, Fax: +977-41-527122<br>
                            Post Box No. : 48, Email: mrec.jnk@gmail.com</p>
                            <h4 style="text-align: center;color:white; "><b>APPLICATION FORM</b></h4>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        {{-- <form action="{{ route('admission.store') }}" method="POST" enctype="multipart/form-data"> --}}
                        @csrf
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <div class="form-row" style="background-color: rgb(221, 103, 103);padding: 13px 13px">
                                    <div class="value">
                                                <span style="color: white">{{$error}}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        @if (session('success'))
                                <div class="form-row" style="background-color: rgb(103, 221, 150);padding: 13px 13px">
                                    <div class="value">
                                                <span style="color: white">{{ session('success') }}</span>
                                    </div>
                                </div>
                        @endif
                        <div class="form-row">
                            <div class="name">Full Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="add_of_corrospondence" @if(isset($view)) value="{{ $view->add_of_corrospondence }}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address For Corrospondence</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="add_of_corrospondence" @if(isset($view)) value="{{ $view->add_of_corrospondence }}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Permanenet Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="add_permanenet" @if(isset($view)) value="{{ $view->add_permanent }}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Address Of Guardian</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="add_of_guardion" @if(isset($view)) value="{{ $view->add_of_guardion }}" @endif>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Date Of Birth</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="dof_bs" @if(isset($view)) value="{{ $view->dof_bs }}" @endif>
                                            <label class="label--desc">B.S.</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="date" name="dof_ad" @if(isset($view)) value="{{ $view->dof_ad }}" @endif>
                                            <label class="label--desc">A.D.(optional)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Contact No.</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="contact_no" @if(isset($view)) value="{{ $view->contact_no }}" @endif>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Parent's detail</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="p_name" @if(isset($view)) value="{{ $view->p_name }}" @endif>
                                            <label class="label--desc">Name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="p_occupation" @if(isset($view)) value="{{ $view->p_occupation }}" @endif>
                                            <label class="label--desc">Occupation</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="p_contact_no" @if(isset($view)) value="{{ $view->p_contact_no }}" @endif>
                                            <label class="label--desc">Telephone No.</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="recidence" @if(isset($view)) value="{{ $view->recidence }}" @endif>
                                            <label class="label--desc">Residence</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Program Of Study</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="cource_study">
                                            @if(isset($view)) <option selected>{{ $view->cource_study }}</option>
                                            @else
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            @endif
                                            <option value="Diploma In Computer Engineering">Diploma In Computer Engineering</option>
                                            <option value="Diploma In Electrical Engineering">Diploma In Electrical Engineering</option>
                                            <option value="Diploma In Electrical & Electronics Engineering">Diploma In Electrical & Electronics Engineering</option>
                                            <option value="Pre-Diploma In Civil Engineering">Pre-Diploma In Civil Engineering</option>
                                            <option value="Pre-Diploma In Electrical Engineering">Pre-Diploma In Electrical Engineering</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Acedemic Information</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="degree" @if(isset($view)) value="{{ $view->degree_ }}" @endif>
                                            <label class="label--desc">Degree</label>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="name_school_clz" @if(isset($view)) value="{{ $view->name_school_clz }}" @endif>
                                            <label class="label--desc">Name Of School/College</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="accemedic_address" @if(isset($view)) value="{{ $view->acedimic_address }}" @endif>
                                            <label class="label--desc">Address</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="passing_year" @if(isset($view)) value="{{ $view->passing_year }}" @endif>
                                            <label class="label--desc">Year Of Passing</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name"></div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="obtained_" @if(isset($view)) value="{{ $view->obtained_ }}" @endif>
                                            <label class="label--desc">Obtained (%)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Attachment</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="attachment_name">
                                                @if(isset($view)) <option selected>{{ $view->attachment_name }}</option>
                                                @else
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                @endif
                                                <option value="Academic Transcripts">Academic Transcripts</option>
                                                <option value="Valid Password">Valid Passport</option>
                                                <option value="Citizenship Certificate">Citizenship Certificate</option>
                                                <option value="Application Fee">Application Fee</option>
                                                <option value="Password Size Photographs">Passport Size Photographs</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="attachment_file">
                                            <label class="label--desc">Document</label>
                                            @if(isset($view)) <a target="_blank" href="{{ asset($view->attachment_file) }}">Click To See Attached File</a> @endif
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="attachment_file2">
                                            <label class="label--desc">Document</label>
                                            @if(isset($view)) <a target="_blank" href="{{ asset($view->attachment_file2) }}">Click To See Attached File</a> @endif
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="attachment_file3">
                                            <label class="label--desc">Document</label>
                                            @if(isset($view)) <a target="_blank" href="{{ asset($view->attachment_file3) }}">Click To See Attached File</a> @endif
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="attachment_file4">
                                            <label class="label--desc">Document</label>
                                            @if(isset($view)) <a target="_blank" href="{{ asset($view->attachment_file4) }}">Click To See Attached File</a> @endif
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="attachment_file5">
                                            <label class="label--desc">Document</label>
                                            @if(isset($view)) <a target="_blank" href="{{ asset($view->attachment_file5) }}">Click To See Attached File</a> @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">How Did You Know About MREC</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="how_you_find">
                                            @if(isset($view)) <option selected>{{ $view->how_you_find }}</option>
                                            @else<option disabled="disabled" selected="selected">Choose option</option>
                                            @endif

                                            <option value="Radio">Radio</option>
                                            <option value="Family / Friends">Family / Friends</option>
                                            <option value="Newspaper">Newspaper</option>
                                            <option value="TV">TV</option>
                                            <option value="Poster / Banner">Poster / Banner</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>

                            @if(isset($view))

                            @else
                                <button class="btn btn--radius-2 btn--red" type="submit">Submit Form</button>

                            @endif
                            <a href="{{ route('home') }}" style="text-decoration: none;" class="btn btn--radius-2 btn--green" type="submit">Back Home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{ asset('addmission_form/jquery/jquery.min.js') }}"></script>
    <!-- addmission_form JS-->
    <script src="{{ asset('addmission_form/select2/select2.min.js') }}"></script>
    <script src="{{ asset('addmission_form/datepicker/moment.min.js') }}"></script>
    <script src="{{ asset('addmission_form/datepicker/daterangepicker.js') }}"></script>

    <!-- Main JS-->
    <script src="{{ asset('addmission_form/js/global.js') }}"></script>

</body>

</html>
<!-- end document-->
