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
