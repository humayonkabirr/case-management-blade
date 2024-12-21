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
                    <x-input.text class="col-md-12" label="Name" name="title" value="{{ $case->title ?? '' }}"
                        id="name" placeholder="Enter Case Type Name" required />

                    <x-input.text class="col-md-12" label="title (BN)" name="bn_title"
                        value="{{ $case->bn_title ?? '' }}" id="bn_title" placeholder="Enter Case Type Name (bn)"
                        required />

                    <x-input.select class="col-md-8" label="Case Type" name="type" id="type"
                        placeholder="Select Case Type">
                        <option value="0" {{ ($case->type ?? '')==0 ? 'selected' : '' }}>Privet</option>
                        <option value="1" {{ ($case->type ?? '')==1 ? 'selected' : '' }}>Government</option>
                    </x-input.select>

                    <x-input.number class="col-md-4" label="Serial No" name="serial"
                        value="{{ $case->serial ?? '' }}" id="serial" placeholder="Enter Case Type Serial"
                        required />


                    <div class="col-md-12">
                        <button type="submit" class="float-right btn btn-secondary">Submit</button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection

 