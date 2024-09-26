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
                <form class="simple-example" action="javascript:void(0);" novalidate>
                    <div id="circle-basic" class="">
                        <h3>Genarel Info</h3>
                        <section>
                            <div class="row">
                                <div class="mb-4 col-md-4">
                                    <label for="firstName">First Name</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="enter first name" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill the first name
                                    </div>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label for="lastName">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="enter last name" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill the last name
                                    </div>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label for="mobileNumber">Mobile Number</label>
                                    <input type="text" class="form-control" id="mobileNumber" placeholder="enter mobile number" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill the mobile number
                                    </div>
                                </div>
                                <div class="mb-4 col-md-4">
                                    <label for="email">Email Adress</label>
                                    <input type="text" class="form-control" id="email" placeholder="email adress" value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                    <div class="invalid-feedback">
                                        Please fill the email adress
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h3>Educational Info</h3>
                        <section>
                            <p>Wonderful transition Educational Info.</p>
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
                </form>
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
