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
                        <a class="nav-link font-weight-bold {{ $judge?->id ?? 'disabled' }}" id="address-form-tab"
                            data-toggle="tab" href="#address-form" role="tab" aria-controls="address-form"
                            aria-selected="false">Address</a>
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
                        @isset($judge)
                            @foreach ($judge->education as $edu)
                                <x-form class="row" action="admin.education-info" data="{{ $edu->id ?? '' }}">

                                    <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                                    <x-input.text class="mt-2 col-md-12" label="Institute Name" name="institute"
                                        value="{{ $edu->institute ?? '' }}" id="institute"
                                        placeholder="Enter institute name" />

                                    <x-input.select class="col-md-4" label="Education Level" name="education_level_id"
                                        value="" id="education_level_id" placeholder="Select Education Level">
                                        @foreach ($educationLevels as $item)
                                            <option value="{{ $item->id }}"
                                                {{ __select('education_level_id', $item->id, $edu->education_level_id ?? '') }}>
                                                {{ $item->level }}</option>
                                        @endforeach
                                    </x-input.select>

                                    <x-input.text class="col-md-4" label="Degree" name="degree"
                                        value="{{ $edu->degree ?? '' }}" id="degree" placeholder="Enter degree" />

                                    <x-input.text class="col-md-4" label="Major Subject" name="major_subject"
                                        value="{{ $edu->major_subject ?? '' }}" id="major_subject"
                                        placeholder="Enter major subject" />

                                    <x-input.text class="col-md-8" label="Board/University" name="board_university"
                                        value="{{ $edu->board_university ?? '' }}" id="board_university"
                                        placeholder="Enter board/university" />

                                    <x-input.select class="col-md-4" label="Accreditation" name="accreditation"
                                        id="accreditation" placeholder="Select Accreditation">
                                        <option value="Private"
                                            {{ __select('accreditation', 'Private', $edu->accreditation ?? '') }}>Private
                                        </option>
                                        <option value="Public"
                                            {{ __select('accreditation', 'Public', $edu->accreditation ?? '') }}>Public
                                        </option>
                                        <option value="National"
                                            {{ __select('accreditation', 'National', $edu->accreditation ?? '') }}>National
                                        </option>
                                        <option value="International"
                                            {{ __select('accreditation', 'International', $edu->accreditation ?? '') }}>
                                            International</option>
                                        <option value="Others"
                                            {{ __select('accreditation', 'Others', $edu->accreditation ?? '') }}>Others
                                        </option>
                                    </x-input.select>

                                    <x-input.number class="col-md-4" label="GPA/CGPA" name="gpa_cgpa"
                                        value="{{ $edu->gpa_cgpa ?? '' }}" id="gpa_cgpa"
                                        otherattr='min="2.00" max="5.00" step="0.01"'
                                        placeholder="enter GPA/CGPA (2.00 to 5.00)" />

                                    <x-input.years class="col-md-4" label="Admission Year" name="admission_year"
                                        value="{{ $edu->admission_year ?? '' }}" id="admission_year"
                                        placeholder="Enter admission year" />

                                    <x-input.years class="col-md-4" label="Graduation Year" name="graduation_year"
                                        value="{{ $edu->graduation_year ?? '' }}" id="graduation_year"
                                        placeholder="Enter graduation year" />

                                    <x-input.text class="col-md-12" label="Location" name="location"
                                        value="{{ $edu->location ?? '' }}" id="location" placeholder="Enter location" />

                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="float-right btn btn-success">{{ $edu->id ?? '' ? 'Update' : 'Submit' }}</button>
                                    </div>

                                    <div class="col-md-12">
                                        <hr
                                            style="border: none; height: 2px; background: linear-gradient(to right, #2196f3, #4caf50);">
                                    </div>

                                </x-form>
                            @endforeach
                        @endisset

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

                            <x-input.select class="col-md-4" label="Accreditation" name="accreditation"
                                id="accreditation" placeholder="Select Accreditation">
                                <option value="Private">Private</option>
                                <option value="Public">Public</option>
                                <option value="National">National
                                </option>
                                <option value="International">
                                    International</option>
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
                                <button type="submit" class="float-right btn btn-info">Create</button>
                            </div>

                        </x-form>

                    </div>

                    <div class="tab-pane fade" id="experience" role="tabpanel" aria-labelledby="experience-tab">

                        @isset($judge)
                            @foreach ($judge->experience as $exp)
                                <x-form class="row" action="admin.experience" data="{{ $exp->id ?? '' }}">

                                    <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                                    <x-input.text class="col-md-8" label="Company Name" name="company_name"
                                        value="{{ $exp->company_name }}" id="company_name"
                                        placeholder="Enter Company Name" />

                                    <x-input.text class="col-md-4" label="Job Title" name="job_title"
                                        value="{{ $exp->job_title }}" id="job_title" placeholder="Enter Job Title" />

                                    <x-input.text class="col-md-4" label="Supervisor Name" name="supervisor_name"
                                        value="{{ $exp->supervisor_name }}" id="supervisor_name"
                                        placeholder="enter supervisor name" />

                                    <x-input.tel class="col-md-4" label="Supervisor Mobile" name="supervisor_mobile"
                                        value="{{ $exp->supervisor_mobile }}" id="supervisor_mobile"
                                        placeholder="enter supervisor mobile" />

                                    <x-input.email class="col-md-4" label="Supervisor Email" name="supervisor_email"
                                        value="{{ $exp->supervisor_email }}" id="supervisor_email"
                                        placeholder="enter supervisor email" />

                                    <x-input.select class="col-md-4" label="Employment Type" name="employment_type"
                                        value="" id="employment_type" placeholder="Select employment type">
                                        <option value="" disabled selected>Select Employment Type</option>
                                        <option value="Full-time"
                                            {{ __select('employment_type', 'Full-time', $exp->employment_type ?? '') }}>
                                            Full-time</option>
                                        <option value="Part-time"
                                            {{ __select('employment_type', 'Part-time', $exp->employment_type ?? '') }}>
                                            Part-time</option>
                                        <option value="Contract"
                                            {{ __select('employment_type', 'Contract', $exp->employment_type ?? '') }}>Contract
                                        </option>
                                        <option value="Freelance"
                                            {{ __select('employment_type', 'Freelance', $exp->employment_type ?? '') }}>
                                            Freelance</option>
                                        <option value="Temporary"
                                            {{ __select('employment_type', 'Temporary', $exp->employment_type ?? '') }}>
                                            Temporary</option>
                                        <option value="Internship"
                                            {{ __select('employment_type', 'Internship', $exp->employment_type ?? '') }}>
                                            Internship</option>
                                        <option value="Volunteer"
                                            {{ __select('employment_type', 'Volunteer', $exp->employment_type ?? '') }}>
                                            Volunteer</option>
                                    </x-input.select>

                                    <x-input.select class="col-md-2" label="Is Current" name="is_current" value=""
                                        id="is_current" placeholder="Select One">
                                        <option value="1" {{ __select('is_current', 1, $exp->is_current ?? '') }}>Yes
                                        </option>
                                        <option value="0" {{ __select('is_current', 0, $exp->is_current ?? '') }}>No
                                        </option>
                                    </x-input.select>

                                    <x-input.date class="col-md-2" label="Start Date" name="start_date"
                                        value="{{ $exp->start_date ?? '' }}" id="start_date"
                                        placeholder="Enter start date" />

                                    <x-input.date class="col-md-2" label="End Date" name="end_date"
                                        value="{{ $exp->end_date ?? '' }}" id="end_date" placeholder="Enter End Date" />

                                    <x-input.number class="col-md-2" label="Salary" name="salary"
                                        value="{{ $exp->salary }}" id="salary" placeholder="Enter Salary" />

                                    <x-input.textarea class="col-md-12" label="Responsibilities" name="responsibilities"
                                        value="{{ $exp->responsibilities }}" id="responsibilities"
                                        placeholder="enter responsibilities" />

                                    <x-input.number class="col-md-12" label="Location" name="location"
                                        value="{{ $exp->location }}" id="location" placeholder="enter location" />

                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="float-right btn btn-success">{{ $edu->id ?? '' ? 'Update' : 'Submit' }}</button>
                                    </div>

                                    <div class="col-md-12">
                                        <hr
                                            style="border: none; height: 2px; background: linear-gradient(to right, #2196f3, #4caf50);">
                                    </div>

                                </x-form>
                            @endforeach
                        @endisset


                        <x-form class="row" action="admin.experience" data="">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="col-md-8" label="Company Name" name="company_name" value=""
                                id="company_name" placeholder="Enter Company Name" />

                            <x-input.text class="col-md-4" label="Job Title" name="job_title" value=""
                                id="job_title" placeholder="Enter Job Title" />

                            <x-input.text class="col-md-4" label="Supervisor Name" name="supervisor_name" value=""
                                id="supervisor_name" placeholder="enter supervisor name" />

                            <x-input.tel class="col-md-4" label="Supervisor Mobile" name="supervisor_mobile"
                                value="" id="supervisor_mobile" placeholder="enter supervisor mobile" />

                            <x-input.email class="col-md-4" label="Supervisor Email" name="supervisor_email"
                                value="" id="supervisor_email" placeholder="enter supervisor email" />

                            <x-input.select class="col-md-4" label="Employment Type" name="employment_type"
                                value="" id="employment_type" placeholder="Select employment type">
                                <option value="" disabled selected>Select Employment Type</option>
                                <option value="Full-time">Full-time</option>
                                <option value="Part-time">Part-time</option>
                                <option value="Contract">Contract</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Temporary">Temporary</option>
                                <option value="Internship">Internship</option>
                                <option value="Volunteer">Volunteer</option>
                            </x-input.select>

                            <x-input.select class="col-md-2" label="Is Current" name="is_current" value=""
                                id="is_current" placeholder="Select One">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </x-input.select>

                            <x-input.date class="col-md-2" label="Start Date" name="start_date" value=""
                                id="start_date" placeholder="Enter start date" />

                            <x-input.date class="col-md-2" label="End Date" name="end_date" value=""
                                id="end_date" placeholder="Enter End Date" />

                            <x-input.number class="col-md-2" label="Salary" name="salary" value=""
                                id="salary" placeholder="Enter Salary" />

                            <x-input.textarea class="col-md-12" label="Responsibilities" name="responsibilities"
                                value="" id="responsibilities" placeholder="enter responsibilities" />

                            <x-input.number class="col-md-12" label="Location" name="location" value=""
                                id="location" placeholder="enter location" />

                            <div class="col-md-12">
                                <button type="submit" class="float-right btn btn-info">Create</button>
                            </div>

                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="emergency-contact" role="tabpanel"
                        aria-labelledby="emergency-contact-tab">
                        @isset($judge)
                            @foreach ($judge->emergencyContact as $emc)
                                <x-form class="row" action="admin.emergency-contact" data="{{ $emc->id ?? '' }}">

                                    <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                                    <x-input.text class="col-md-4" label="First Name" name="first_name"
                                        value="{{ $emc->first_name ?? '' }}" id="first_name"
                                        placeholder="enter first name" />

                                    <x-input.text class="col-md-4" label="Last Name" name="last_name"
                                        value="{{ $emc->last_name ?? '' }}" id="last_name" placeholder="enter last name" />

                                    <x-input.tel class="col-md-4" label="Mobile No" name="mobile"
                                        value="{{ $emc->mobile ?? '' }}" id="mobile" placeholder="enter moble no" />

                                    <x-input.email class="col-md-4" label="Email" name="email"
                                        value="{{ $emc->email ?? '' }}" id="email" placeholder="enter email" />

                                    <x-input.select class="col-md-4" label="Relationship" name="relationship"
                                        id="relationship" placeholder="Select Relationship">
                                        <option value="Father"
                                            {{ __select('relationship', 'Father', $emc->relationship ?? '') }}>Father</option>
                                        <option value="Mother"
                                            {{ __select('relationship', 'Mother', $emc->relationship ?? '') }}>Mother</option>
                                        <option value="Brother"
                                            {{ __select('relationship', 'Brother', $emc->relationship ?? '') }}>Brother
                                        </option>
                                        <option value="Sister"
                                            {{ __select('relationship', 'Sister', $emc->relationship ?? '') }}>Sister</option>
                                        <option value="Spouse"
                                            {{ __select('relationship', 'Spouse', $emc->relationship ?? '') }}>Spouse</option>
                                        <option value="Uncle"
                                            {{ __select('relationship', 'Uncle', $emc->relationship ?? '') }}>Uncle</option>
                                        <option value="Aunty"
                                            {{ __select('relationship', 'Aunty', $emc->relationship ?? '') }}>Aunty</option>
                                        <option value="Cousin"
                                            {{ __select('relationship', 'Cousin', $emc->relationship ?? '') }}>Cousin</option>
                                        <option value="Friend"
                                            {{ __select('relationship', 'Friend', $emc->relationship ?? '') }}>Friend</option>
                                        <option value="Neighbor"
                                            {{ __select('relationship', 'Neighbor', $emc->relationship ?? '') }}>Neighbor
                                        </option>
                                        <option value="Colleague"
                                            {{ __select('relationship', 'Colleague', $emc->relationship ?? '') }}>Colleague
                                        </option>
                                        <option value="Guardian"
                                            {{ __select('relationship', 'Guardian', $emc->relationship ?? '') }}>Guardian
                                        </option>
                                        <option value="Other"
                                            {{ __select('relationship', 'Other', $emc->relationship ?? '') }}>Other</option>
                                    </x-input.select>

                                    <x-input.select class="col-md-4" label="Gender" name="gender"
                                        value="{{ $emc->first_name ?? '' }}" id="gender" placeholder="Select Gender">
                                        <option value="Male" {{ __select('gender', 'Male', $emc->gender ?? '') }}>Male
                                        </option>
                                        <option value="Female" {{ __select('gender', 'Female', $emc->gender ?? '') }}>Female
                                        </option>
                                        <option value="Others" {{ __select('gender', 'Others', $emc->gender ?? '') }}>Others
                                        </option>
                                    </x-input.select>

                                    <x-input.text class="col-md-12" label="Address" name="address"
                                        value="{{ $emc->address ?? '' }}" id="address" placeholder="enter address" />

                                    <div class="col-md-12">
                                        <button type="submit"
                                            class="float-right btn btn-success">{{ $emc->id ?? '' ? 'Update' : 'Submit' }}</button>
                                    </div>

                                    <div class="col-md-12">
                                        <hr
                                            style="border: none; height: 2px; background: linear-gradient(to right, #2196f3, #4caf50);">
                                    </div>

                                </x-form>
                            @endforeach
                        @endisset


                        <x-form class="row" action="admin.emergency-contact" data="">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.text class="col-md-4" label="First Name" name="first_name" value=""
                                id="first_name" placeholder="enter first name" />

                            <x-input.text class="col-md-4" label="Last Name" name="last_name" value=""
                                id="last_name" placeholder="enter last name" />

                            <x-input.tel class="col-md-4" label="Mobile No" name="mobile" value=""
                                id="mobile" placeholder="enter moble no" />

                            <x-input.email class="col-md-4" label="Email" name="email" value="" id="email"
                                placeholder="enter email" />

                            <x-input.select class="col-md-4" label="Relationship" name="relationship" value=""
                                id="relationship" placeholder="Select Relationship">
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Brother">Brother</option>
                                <option value="Sister">Sister</option>
                                <option value="Spouse">Spouse</option>
                                <option value="Uncle">Uncle</option>
                                <option value="Aunty">Aunty</option>
                                <option value="Cousin">Cousin</option>
                                <option value="Friend">Friend</option>
                                <option value="Neighbor">Neighbor</option>
                                <option value="Colleague">Colleague</option>
                                <option value="Guardian">Guardian</option>
                                <option value="Other">Other</option>
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Gender" name="gender" value=""
                                id="gender" placeholder="Select Gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </x-input.select>

                            <x-input.text class="col-md-12" label="Address" name="address" value=""
                                id="address" placeholder="enter address" />

                            <div class="col-md-12">
                                <button type="submit" class="float-right btn btn-info">Create</button>
                            </div>

                        </x-form>
                    </div>

                    <div class="tab-pane fade" id="address-form" role="tabpanel" aria-labelledby="address-form-tab">
                        @foreach ($judge->address as $address)
                            <x-form class="row" action="admin.address" data="{{ $address->id ?? '' }}">

                                <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                                <x-input.select class="col-md-4" label="Division" name="division_id" value=""
                                    id="division_id" placeholder="Select Division">
                                    @foreach ($divisions as $division)
                                        <option value="{{ $division->id }}"
                                            {{ __select('division_id', $division->id, $address->division_id ?? '') }}>
                                            {{ $division->name }}</option>
                                    @endforeach
                                </x-input.select>

                                <x-input.select class="col-md-4" label="District" name="district_id" value=""
                                    id="district_id" placeholder="Select District">
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Upazila" name="upazila_id" value=""
                                    id="upazila_id" placeholder="Select Upazila">
                                </x-input.select>

                                <x-input.select class="col-md-4" label="Union" name="union_id" value=""
                                    id="union_id" placeholder="Select Union">
                                </x-input.select>

                                <x-input.text class="col-md-8" label="Location" name="location"
                                    value="{{ $address->location }}" id="location" placeholder="enter location" />

                                <div class="col-md-12">
                                    <button type="submit"
                                        class="float-right btn btn-success">{{ $address->id ?? '' ? 'Update' : 'Submit' }}</button>
                                </div>
                            </x-form>
                        @endforeach
                        <x-form class="row" action="admin.address" data="{{ $address->id ?? '' }}">

                            <input type="hidden" name="user_id" value="{{ $judge->id ?? '' }}">

                            <x-input.select class="col-md-4" label="Division" name="division_id" value=""
                                id="division_id" placeholder="Select Division">
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}">{{ $division->name??'N/A' }}</option>
                                @endforeach
                            </x-input.select>

                            <x-input.select class="col-md-4" label="District" name="district_id" value=""
                                id="district_id" placeholder="Select District">
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Upazila" name="upazila_id" value=""
                                id="upazila_id" placeholder="Select Upazila">
                            </x-input.select>

                            <x-input.select class="col-md-4" label="Union" name="union_id" value=""
                                id="union_id" placeholder="Select Union">
                            </x-input.select>

                            <x-input.text class="col-md-8" label="Location" name="location"
                                value="" id="location" placeholder="enter location" />

                            <div class="col-md-12">
                                <button type="submit"
                                    class="float-right btn btn-info">Create</button>
                            </div>
                        </x-form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $(document).ready(function() {
            /**
             * Populate a target dropdown dynamically and pre-select a value if provided.
             *
             * @param {string} triggerDropdownId - ID of the dropdown triggering the event.
             * @param {string} targetDropdownId - ID of the dropdown to populate with data.
             * @param {string} apiUrl - API URL with ":id" as a placeholder.
             * @param {string} placeholder - Placeholder text for the target dropdown.
             * @param {string|null} preSelectedValue - Value to pre-select in the target dropdown.
             * @param {function|null} callback - Optional callback to trigger after populating the dropdown.
             */
            function populateDropdown(triggerDropdownId, targetDropdownId, apiUrl, placeholder = "Select Option",
                preSelectedValue = null, callback = null) {
                $(triggerDropdownId).change(function() {
                    let selectedTriggerValue = $(this).val();
                    $(targetDropdownId).html(
                        `<option value="">${placeholder}</option>`); // Clear target dropdown

                    if (selectedTriggerValue) {
                        let url = apiUrl.replace(':id',
                            selectedTriggerValue); // Replace ":id" in the API URL
                        // console.log(`API Request URL: ${url}`);

                        $.ajax({
                            url: url,
                            method: 'GET',
                            dataType: 'json',
                            success: function(response) {
                                // console.log(`API Response for ${targetDropdownId}:`, response);

                                if (Array.isArray(response) && response.length > 0) {
                                    response.forEach(function(option) {
                                        let isSelected = preSelectedValue == option.id ?
                                            'selected' : '';
                                        $(targetDropdownId).append(
                                            `<option value="${option.id}" ${isSelected}>${option.name}</option>`
                                        );
                                    });
                                } else {
                                    $(targetDropdownId).append(
                                        `<option value="">No data available</option>`
                                    );
                                }

                                // Trigger callback after populating dropdown
                                if (callback) callback();
                            },
                            error: function(xhr, status, error) {
                                // console.error(`Error fetching data for ${targetDropdownId}:`,
                                //     error);
                                $(targetDropdownId).append(
                                    `<option value="">Error loading data</option>`
                                );
                            }
                        });
                    }
                });

                // Trigger the change event to populate on page load if there's a pre-selected value
                if (preSelectedValue) {
                    $(triggerDropdownId).trigger('change');
                }
            }

            // Populate districts based on the selected division
            populateDropdown(
                '#division_id',
                '#district_id',
                `{{ route('api.districts', ':id') }}`,
                'Select District',
                `{{ $judge->address[0]->district_id ?? '' }}`,
                function() {
                    // Populate upazilas after districts are populated
                    populateDropdown(
                        '#district_id',
                        '#upazila_id',
                        `{{ route('api.upazilas', ':id') }}`,
                        'Select Upazila',
                        `{{ $judge->address[0]->upazila_id ?? '' }}`,
                        function() {
                            // Populate unions after upazilas are populated
                            populateDropdown(
                                '#upazila_id',
                                '#union_id',
                                `{{ route('api.unions', ':id') }}`,
                                'Select Union',
                                `{{ $judge->address[0]->union_id ?? '' }}`
                            );
                        }
                    );
                }
            );
        });
    </script>
@endpush
