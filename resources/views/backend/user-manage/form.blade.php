@extends('layout.master')

@push('css')
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/plugins/jquery-step/jquery.steps.css') }}">
    <style>
        #formValidate .wizard>.content {
            min-height: 25em;
        }

        #example-vertical.wizard>.content {
            min-height: 24.5em;
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->
@endpush

@section('content')
    <div class="col-lg-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Default</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                    <x-form action="{{ route('admin.user.store') }}" method="POST" class="simple-example">
                    <div id="circle-basic" class="">
                        <h3>Genarel Info</h3>
                        <section>
                            <div class="row">
                                <x-input.text class="col-md-4" label="First Name" name="first_name" value="" id="first_name" placeholder="enter first name" required />

                                <x-input.text class="col-md-4" label="Last Name" name="last_name" value="" id="last_name" placeholder="enter last name" />

                                <x-input.tel class="col-md-4" label="Mobile No" name="mobile" value="" id="mobile" placeholder="enter moble no" required />

                                <x-input.email class="col-md-4" label="Email" name="email" value="" id="email" placeholder="enter email" />

                                <x-input.date class="col-md-4" label="Birth of Date" name="birthday" value="" id="birthday" placeholder="enter birth of date" required />

                                <x-input.select class="col-md-4" label="Religion" name="religion" value="" id="religion" placeholder="Select Religion" required >
                                    <option value="">Islam</option>
                                    <option value="">Hindu</option>
                                    <option value="">Others</option>
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Gender" name="gender" value="" id="gender" placeholder="Select Gender" required >
                                    <option value="">Male</option>
                                    <option value="">Female</option>
                                    <option value="">Others</option>
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Nationality" name="nationality" value="" id="nationality" placeholder="Select Nationality" required >
                                    <option value="">Bangladeshi</option>
                                    <option value="">Others</option>
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Mother Tongue" name="mother_tongue" value="" id="mother_tongue" placeholder="Select Mother Tongue" required >
                                    <option value="">Bangla</option>
                                    <option value="">English</option>
                                    <option value="">Others</option>
                                </x-input.select>

                            </div>
                        </section>

                        <h3>Educational Info</h3>
                        <section>
                            <div class="row">
                                <x-input.text class="col-md-12" label="Institute Name" name="institute_name" value="" id="institute_name" placeholder="enter institute name" required />

                                <x-input.text class="col-md-4" label="Degree" name="degree" value="" id="degree" placeholder="enter Degree" />

                                <x-input.text class="col-md-4" label="Subject" name="subject" value="" id="subject" placeholder="enter Subject" />

                                <x-input.text class="col-md-4" label="Major Subject" name="major_subject" value="" id="major_subject" placeholder="enter Major Subject" />

                                <x-input.select class="col-md-4" label="Board" name="board" value="" id="board" placeholder="Select Board" required >
                                    <option value="">Islam</option>
                                    <option value="">Hindu</option>
                                    <option value="">Others</option>
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Is Government" name="is_government" value="" id="is_government" placeholder="Select One" required >
                                    <option value="">Yes</option>
                                    <option value="">No</option>
                                </x-input.select>

                                <x-input.select class="col-md-4" label="GPA/CGPA" name="gpa_cgpa" value="" id="gpa_cgpa" placeholder="Select GPA/CGPA" required >
                                    <option value="">Bangla</option>
                                    <option value="">English</option>
                                    <option value="">Others</option>
                                </x-input.select>

                                <x-input.text class="col-md-4" label="Admission Year" name="admission_year" value="" id="admission_year" placeholder="enter Admission Year" />

                                <x-input.text class="col-md-4" label="Passing Year" name="passing_year" value="" id="passing_year" placeholder="enter Passing Year" />

                                <x-input.text class="col-md-12" label="Location" name="location" value="" id="location" placeholder="enter location" required />


                            </div>
                        </section>

                        <h3>Experience</h3>
                        <section>
                            <p>The next and previous buttons help you to navigate through your content. Experience</p>
                        </section>

                        <h3>Contact</h3>
                        <section>
                            <p>The next and previous buttons help you to navigate through your content. Experience</p>
                        </section>

                        <h3>Address</h3>
                        <section>
                            <p>The next and previous buttons help you to navigate through your content. Address</p>
                        </section>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection


@push('js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('backend/plugins/jquery-step/jquery.steps.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-step/custom-jquery.steps.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{ asset('backend/assets/js/forms/bootstrap_validation/bs_validation_script.js') }}"></script>
    <!--  END CUSTOM SCRIPTS FILE  -->
@endpush
