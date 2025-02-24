@extends('layout.master')

@section('content')
    <div class="col-lg-12 layout-spacing">
        <div class="widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Case Form</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <x-form class="row" action="admin.case" data="{{ $case->id ?? '' }}">
                    
                    <x-input.text class="col-md-6" label="Name" name="title" value="{{ $case->title ?? '' }}"
                        id="name" placeholder="Enter Case Type Name" />

                    <x-input.text class="col-md-6" label="Title (BN)" name="bn_title" value="{{ $case->bn_title ?? '' }}"
                        id="bn_title" placeholder="Enter Case Name (BN)" />

                    <x-input.select class="col-md-4" label="Court Name" name="court_id" id="court_id"
                        placeholder="Select Court Name">
                        @foreach ($courts as $court)
                            <option value="{{ $court->court_id ?? '' }}">{{ $court->name ?? '' }}
                            </option>
                        @endforeach
                    </x-input.select>

                    <x-input.select class="col-md-4" label="Case Type" name="type" id="type"
                        placeholder="Select Case Type">
                        @foreach ($caseTypes as $caseType)
                            <option value="{{ $caseType->id ?? '' }}">
                                {{ $caseType->name ?? '' }}</option>
                        @endforeach
                    </x-input.select>

                    <x-input.select class="col-md-4" label="Case State" name="state" id="state"
                        placeholder="Select Case state">
                        <option value="Closed">Closed</option>
                        <option value="In Process">In Process </option>
                        <option value="Open">Open</option>
                    </x-input.select>

                    <x-input.text class="col-md-4" label="Case No" name="case_no" value="{{ $case->case_no ?? '' }}"
                        id="case_no" placeholder="Enter Case No" />

                    <x-input.text class="col-md-4" label="Tender No" name="tender_no" value="{{ $case->tender_no ?? '' }}"
                        id="tender_no" placeholder="Enter Tender No" />

                    <x-input.number class="col-md-4" label="Serial No" name="serial" value="{{ $case->serial ?? '' }}"
                        id="serial" placeholder="Enter Case Serial" />

                    <x-input.textarea class="col-md-12" label="Description" otherattr="rows=10" name="description"
                        value="{{ $case->description ?? '' }}" id="description" placeholder="Enter description" />

                    <div class="col-md-12">
                        <button type="submit" class="float-right btn btn-secondary">Submit</button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection
