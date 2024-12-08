@extends('layout.master')

@section('content')
    <div id="tableDropdown" class="col-lg-8 col-8 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Court List</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table mb-4 table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>SL.</th>
                                <th>Name </th>
                                <th>Name (bn)</th>
                                <th>Serial</th>
                                <th>Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($courts as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->bn_name }}</td>
                                    <td>{{ $item->serial }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td class="text-center">
                                        <div class="dropdown custom-dropdown">
                                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-more-horizontal">
                                                    <circle cx="12" cy="12" r="1"></circle>
                                                    <circle cx="19" cy="12" r="1"></circle>
                                                    <circle cx="5" cy="12" r="1"></circle>
                                                </svg>
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                <a class="dropdown-item" href="javascript:void(0);">View</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $courts->links('pagination::bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="col-lg-4 layout-spacing">
        <div class="widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Court Type</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <x-form class="row" action="admin.court" data="{{ $court->id ?? '' }}">
                    <x-input.text class="col-md-12" label="Name" name="name" value="{{ $court->name ?? '' }}"
                        id="name" placeholder="Enter Case Type Name" required />

                    <x-input.text class="col-md-12" label="Name (BN)" name="bn_name" value="{{ $court->bn_name ?? '' }}"
                        id="bn_name" placeholder="Enter Case Type Name (bn)" required />

                    <x-input.select class="col-md-6" label="Division" name="division_id" value="" id="division_id"
                        placeholder="Select Division">
                        @foreach ($divisions as $division)
                            <option value="{{ $division->id }}">{{ $division->name }}</option>
                        @endforeach
                    </x-input.select>

                    <x-input.select class="col-md-6" label="District" name="district_id" value="" id="district_id"
                        placeholder="Select District">
                    </x-input.select>

                    <x-input.number class="col-md-12" label="Serial No" name="serial" value="{{ $court->serial ?? '' }}"
                        id="serial" placeholder="Enter Case Type Serial" required />


                    <div class="col-md-12">
                        <button type="submit" class="float-right btn btn-secondary">Submit</button>
                    </div>
                </x-form>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            // Generic function to populate any dropdown based on API response
            function populateDropdown(triggerDropdownId, targetDropdownId, apiUrl, placeholder = "Select Option") {
                $(triggerDropdownId).change(function() {
                    let selectedValue = $(this).val();  

                    // Clear the target dropdown before populating it
                    $(targetDropdownId).html(`<option value="">${placeholder}</option>`);

                    // Check if a value is selected in the trigger dropdown
                    if (selectedValue) {
                        // Construct the URL dynamically with the selected value
                        let url = apiUrl.replace(':id', selectedValue); 

                        // Make the API call
                        $.ajax({
                            url: url, // Dynamically constructed URL
                            method: 'GET',
                            dataType: 'json', // Expecting JSON response
                            success: function(response) { 
                                // Check if response contains data and populate the target dropdown
                                if (Array.isArray(response) && response.length > 0) {
                                    response.forEach(function(option) {
                                        $(targetDropdownId).append(
                                            `<option value="${option.id}">${option.name}</option>`
                                        );
                                    });
                                } else {
                                    $(targetDropdownId).append(
                                        `<option value="">No data available</option>`
                                    );
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error(`Error fetching data for ${targetDropdownId}:`,
                                    error);
                            }
                        });
                    } else {
                        // If no value is selected, clear the target dropdown
                        $(targetDropdownId).html(`<option value="">${placeholder}</option>`);
                    }
                });
            }

            // Example usage:
            // Populate districts based on selected division
            populateDropdown('#division_id', '#district_id', `{{ route('api.districts', ':id') }}`,
                'Select District');

        });
    </script>
@endpush
