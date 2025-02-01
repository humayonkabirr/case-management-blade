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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <x-form class="row" action="admin.case" data="{{ $case->id ?? '' }}">

                    <x-input.text class="col-md-6" label="Name" name="title" value="{{ $case->title ?? '' }}"
                        id="name" placeholder="Enter case title" />

                    <x-input.text class="col-md-6" label="Title (BN)" name="bn_title" value="{{ $case->bn_title ?? '' }}"
                        id="bn_title" placeholder="Enter case title (BN)" />

                    <x-input.select class="col-md-4" label="Court Name" name="court_id" id="court_id"
                        placeholder="Select Court Name">
                        @foreach ($courts as $court)
                            <option value="{{ $court->id ?? '' }}">{{ $court->name ?? '' }}
                            </option>
                        @endforeach
                    </x-input.select>

                    <x-input.select class="col-md-4" label="Case Type" name="type" id="type"
                        placeholder="Select case type">
                        @foreach ($caseTypes as $caseType)
                            <option value="{{ $caseType->id ?? '' }}">
                                {{ $caseType->name ?? '' }}</option>
                        @endforeach
                    </x-input.select>

                    <x-input.select class="col-md-4" label="Case State" name="state" id="state"
                        placeholder="Select case state">
                        <option value="Closed">Closed</option>
                        <option value="In Process">In Process </option>
                        <option value="Open">Open</option>
                    </x-input.select>

                    <x-input.text class="col-md-4" label="Case No" name="case_no" value="{{ $case->case_no ?? '' }}"
                        id="case_no" placeholder="Enter case no" />

                    <x-input.text class="col-md-4" label="Tender No" name="tender_no" value="{{ $case->tender_no ?? '' }}"
                        id="tender_no" placeholder="Enter tender no" />

                    <x-input.number class="col-md-4" label="Serial No" name="serial" value="{{ $case->serial ?? '' }}"
                        id="serial" placeholder="Enter case serial" />

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
