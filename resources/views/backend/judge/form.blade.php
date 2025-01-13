@extends('layout.master')

@push('css')
    <link href="{{ asset('backend/assets/css/components/tabs-accordian/custom-tabs.css') }}"
        rel="stylesheet"type="text/css" />
@endpush

@section('content')
    <div id="tabsSimple" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Judge Create</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area simple-tab">
                <ul class="mt-3 mb-3 nav nav-tabs" id="simpletab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" id="general-info-tab" data-toggle="tab"
                            href="#general-info" role="tab" aria-controls="general-info" aria-selected="true">General
                            Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold {{ $judge?->id ?? 'disabled' }}" id="educational-info-tab"
                            data-toggle="tab" href="#educational-info" role="tab" aria-controls="educational-info"
                            aria-selected="false">Educational Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold {{ $judge?->id ?? 'disabled' }}" id="experience-tab"
                            data-toggle="tab" href="#experience" role="tab" aria-controls="experience"
                            aria-selected="false">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold {{ $judge?->id ?? 'disabled' }}" id="emergency-contact-tab"
                            data-toggle="tab" href="#emergency-contact" role="tab" aria-controls="emergency-contact"
                            aria-selected="false">Emergency Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold {{ $judge?->id ?? 'disabled' }}" id="address-tab"
                            data-toggle="tab" href="#address" role="tab" aria-controls="address"
                            aria-selected="false">Address</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold disabled" href="#" tabindex="-1"
                            aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <div class="tab-content" id="simpletabContent">
                    <div class="tab-pane fade show active" id="general-info" role="tabpanel"
                        aria-labelledby="general-info-tab">
                        <x-form class="row" action="admin.judge" data="{{ $judge->id ?? '' }}">
                            <x-input.text class="col-md-4" label="First Name" name="first_name"
                                value="{{ $judge->first_name ?? '' }}" id="first_name" placeholder="enter first name" />

                            <x-input.text class="col-md-4" label="Last Name" name="last_name"
                                value="{{ $judge->last_name ?? '' }}" id="last_name" placeholder="enter last name" />

                            <x-input.tel class="col-md-4" label="Mobile No" name="mobile"
                                value="{{ $judge->mobile ?? '' }}" id="mobile" placeholder="enter mobile no" />

                            <x-input.email class="col-md-4" label="Email" name="email" value="{{ $judge->email ?? '' }}"
                                id="email" placeholder="enter email" />

                            <x-input.date class="col-md-4" label="Birth of Date" name="birthday"
                                value="{{ $judge->birthday ?? '' }}" id="birthday" placeholder="enter birth of date" />

                            <x-input.select class="col-md-2" label="Blood Group" name="blood_group" value=""
                                id="blood_group" placeholder="Select Blood Group">
                                <option value="A+" {{ __select('blood_group', 'A+', $judge->blood_group ?? '') }}> A+
                                </option>
                                <option value="A-" {{ __select('blood_group', 'A-', $judge->blood_group ?? '') }}>A-
                                </option>
                                <option value="B+" {{ __select('blood_group', 'B+', $judge->blood_group ?? '') }}>B+
                                </option>
                                <option value="B-" {{ __select('blood_group', 'B-', $judge->blood_group ?? '') }}>B-
                                </option>
                                <option value="AB+" {{ __select('blood_group', 'AB+', $judge->blood_group ?? '') }}>AB+
                                </option>
                                <option value="AB-" {{ __select('blood_group', 'AB-', $judge->blood_group ?? '') }}>AB-
                                </option>
                                <option value="O+" {{ __select('blood_group', 'O+', $judge->blood_group ?? '') }}>O+
                                </option>
                                <option value="O-" {{ __select('blood_group', 'O-', $judge->blood_group ?? '') }}>O-
                                </option>
                            </x-input.select>

                            <x-input.select class="col-md-2" label="Religion" name="religion" value=""
                                id="religion" placeholder="Select Religion">
                                <option value="Islam" {{ __select('religion', 'Islam', $judge->religion ?? '') }}>Islam
                                </option>
                                <option value="Christianity"
                                    {{ __select('religion', 'Christianity', $judge->religion ?? '') }}>
                                    Christianity</option>
                                <option value="Hinduism" {{ __select('religion', 'Hinduism', $judge->religion ?? '') }}>
                                    Hinduism</option>
                                <option value="Buddhism" {{ __select('religion', 'Buddhism', $judge->religion ?? '') }}>
                                    Buddhism</option>
                                <option value="Judaism" {{ __select('religion', 'Judaism', $judge->religion ?? '') }}>
                                    Judaism</option>
                                <option value="Sikhism" {{ __select('religion', 'Sikhism', $judge->religion ?? '') }}>
                                    Sikhism</option>
                                <option value="Other" {{ __select('religion', 'Other', $judge->religion ?? '') }}>Other
                                </option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Gender" name="gender" value=""
                                id="gender" placeholder="Select Gender">
                                <option value="Male" {{ __select('gender', 'Male', $judge->gender ?? '') }}>Male
                                </option>
                                <option value="Female" {{ __select('gender', 'Female', $judge->gender ?? '') }}>Female
                                </option>
                                <option value="Others" {{ __select('gender', 'Others', $judge->gender ?? '') }}>Others
                                </option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Nationality" name="nationality" value=""
                                id="nationality" placeholder="Select Nationality">
                                <option value="0" {{ __select('nationality', 0, $judge->nationality ?? '') }}>
                                    Bangladeshi</option>
                                <option value="1" {{ __select('nationality', 1, $judge->nationality ?? '') }}>Others
                                </option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Mother Tongue" name="mother_tongue" value=""
                                id="mother_tongue" placeholder="Select Mother Tongue">
                                <option value="Bangla"
                                    {{ __select('mother_tongue', 'Bangla', $judge->mother_tongue ?? '') }}>Bangla</option>
                                <option
                                    value="English"{{ __select('mother_tongue', 'English', $judge->mother_tongue ?? '') }}>
                                    English</option>
                                <option
                                    value="Others"{{ __select('mother_tongue', 'Others', $judge->mother_tongue ?? '') }}>
                                    Others</option>
                            </x-input.select>

                            <div class="col-md-12">
                                <button type="submit"
                                    class="float-right btn btn-info">{{ $judge->id ?? '' ? 'Update' : 'Create' }}</button>
                            </div>
                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="educational-info" role="tabpanel"
                        aria-labelledby="educational-info-tab">
                        <x-form class="row" action="admin.education-info" data="">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="mt-2 col-md-12" label="Institute Name" name="institute" value=""
                                id="institute" placeholder="Enter institute name" />

                            <x-input.select class="col-md-4" label="Education Level" name="education_level_id"
                                value="" id="education_level_id" placeholder="Select Education Level">
                                @foreach ($educationLevels as $item)
                                    <option value="{{ $item->id }}">{{ $item->level }}</option>
                                @endforeach
                            </x-input.select>

                            <x-input.text class="col-md-4" label="Degree" name="degree" value="" id="degree"
                                placeholder="Enter degree" />

                            <x-input.text class="col-md-4" label="Major Subject" name="major_subject" value=""
                                id="major_subject" placeholder="Enter major subject" />

                            <x-input.text class="col-md-8" label="Board/University" name="board_university"
                                value="" id="board_university" placeholder="Enter board/university" />

                            <x-input.select class="col-md-4" label="Accreditation" name="accreditation" value=""
                                id="accreditation" placeholder="Select Accreditation">
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                                <option value="National">National</option>
                                <option value="International">International</option>
                                <option value="Others">Others</option>
                            </x-input.select>

                            <x-input.number class="col-md-4" label="GPA/CGPA" name="gpa_cgpa" value=""
                                id="gpa_cgpa" otherattr='min="2.00" max="5.00" step="0.01"'
                                placeholder="enter GPA/CGPA (2.00 to 5.00)" />

                            <x-input.years class="col-md-4" label="Admission Year" name="admission_year" value=""
                                id="admission_year" placeholder="Enter admission year" />

                            <x-input.years class="col-md-4" label="Graduation Year" name="graduation_year"
                                value="" id="graduation_year" placeholder="Enter graduation year" />

                            <x-input.text class="col-md-12" label="Location" name="location" value=""
                                id="location" placeholder="Enter location" />

                            <div class="col-md-12">
                                <button type="submit"
                                    class="float-right btn btn-info">{{ $judge->id ?? '' ? 'Update' : 'Submit' }}</button>
                            </div>

                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">
                        <x-form class="row" action="admin.judge" data="{{ $judge->id ?? '' }}">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="col-md-4" label="First Name" name="first_name" value=""
                                id="first_name" placeholder="enter first name" />

                            <x-input.text class="col-md-4" label="Last Name" name="last_name" value=""
                                id="last_name" placeholder="enter last name" />

                            <x-input.tel class="col-md-4" label="Mobile No" name="mobile" value=""
                                id="mobile" placeholder="enter moble no" />

                            <x-input.email class="col-md-4" label="Email" name="email" value="" id="email"
                                placeholder="enter email" />

                            <x-input.date class="col-md-4" label="Birth of Date" name="birthday" value=""
                                id="birthday" placeholder="enter birth of date" />

                            <x-input.select class="col-md-2" label="Blood Group" name="blood_group" value=""
                                id="blood_group" placeholder="Select Blood Group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </x-input.select>

                            <x-input.select class="col-md-2" label="Religion" name="religion" value=""
                                id="religion" placeholder="Select Religion">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Other">Other</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Gender" name="gender" value=""
                                id="gender" placeholder="Select Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Nationality" name="nationality" value=""
                                id="nationality" placeholder="Select Nationality">
                                <option value="0">Bangladeshi</option>
                                <option value="1">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Mother Tongue" name="mother_tongue" value=""
                                id="mother_tongue" placeholder="Select Mother Tongue">
                                <option value="Bangla">Bangla</option>
                                <option value="English">English</option>
                                <option value="Others">Others</option>
                            </x-input.select>
                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="emergency-contact" role="tabpanel"
                        aria-labelledby="emergency-contact-tab">
                        <x-form class="row" action="admin.judge" data="{{ $judge->id ?? '' }}">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="col-md-4" label="First Name" name="first_name" value=""
                                id="first_name" placeholder="enter first name" />

                            <x-input.text class="col-md-4" label="Last Name" name="last_name" value=""
                                id="last_name" placeholder="enter last name" />

                            <x-input.tel class="col-md-4" label="Mobile No" name="mobile" value=""
                                id="mobile" placeholder="enter moble no" />

                            <x-input.email class="col-md-4" label="Email" name="email" value="" id="email"
                                placeholder="enter email" />

                            <x-input.date class="col-md-4" label="Birth of Date" name="birthday" value=""
                                id="birthday" placeholder="enter birth of date" />

                            <x-input.select class="col-md-2" label="Blood Group" name="blood_group" value=""
                                id="blood_group" placeholder="Select Blood Group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </x-input.select>

                            <x-input.select class="col-md-2" label="Religion" name="religion" value=""
                                id="religion" placeholder="Select Religion">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Other">Other</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Gender" name="gender" value=""
                                id="gender" placeholder="Select Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Nationality" name="nationality" value=""
                                id="nationality" placeholder="Select Nationality">
                                <option value="0">Bangladeshi</option>
                                <option value="1">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Mother Tongue" name="mother_tongue" value=""
                                id="mother_tongue" placeholder="Select Mother Tongue">
                                <option value="Bangla">Bangla</option>
                                <option value="English">English</option>
                                <option value="Others">Others</option>
                            </x-input.select>
                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                        <x-form class="row" action="admin.judge" data="{{ $judge->id ?? '' }}">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="col-md-4" label="First Name" name="first_name" value=""
                                id="first_name" placeholder="enter first name" />

                            <x-input.text class="col-md-4" label="Last Name" name="last_name" value=""
                                id="last_name" placeholder="enter last name" />

                            <x-input.tel class="col-md-4" label="Mobile No" name="mobile" value=""
                                id="mobile" placeholder="enter moble no" />

                            <x-input.email class="col-md-4" label="Email" name="email" value="" id="email"
                                placeholder="enter email" />

                            <x-input.date class="col-md-4" label="Birth of Date" name="birthday" value=""
                                id="birthday" placeholder="enter birth of date" />

                            <x-input.select class="col-md-2" label="Blood Group" name="blood_group" value=""
                                id="blood_group" placeholder="Select Blood Group">
                                <option value="A+">A+</option>
                                <option value="A-">A-</option>
                                <option value="B+">B+</option>
                                <option value="B-">B-</option>
                                <option value="AB+">AB+</option>
                                <option value="AB-">AB-</option>
                                <option value="O+">O+</option>
                                <option value="O-">O-</option>
                            </x-input.select>

                            <x-input.select class="col-md-2" label="Religion" name="religion" value=""
                                id="religion" placeholder="Select Religion">
                                <option value="Islam">Islam</option>
                                <option value="Christianity">Christianity</option>
                                <option value="Hinduism">Hinduism</option>
                                <option value="Buddhism">Buddhism</option>
                                <option value="Judaism">Judaism</option>
                                <option value="Sikhism">Sikhism</option>
                                <option value="Other">Other</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Gender" name="gender" value=""
                                id="gender" placeholder="Select Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Nationality" name="nationality" value=""
                                id="nationality" placeholder="Select Nationality">
                                <option value="0">Bangladeshi</option>
                                <option value="1">Others</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Mother Tongue" name="mother_tongue" value=""
                                id="mother_tongue" placeholder="Select Mother Tongue">
                                <option value="Bangla">Bangla</option>
                                <option value="English">English</option>
                                <option value="Others">Others</option>
                            </x-input.select>
                        </x-form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
