@extends('layout.master')

@section('content')
    <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Judge List</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table mb-4 table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name / Type</th>
                                <th>Mobile / Email</th>
                                <th>Sale</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($judges as $key => $judge)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-2 usr-img-frame">
                                                <img alt="avatar" class="img-fluid"
                                                    src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                            </div>
                                            <div class="line-height-none">
                                                <p class="mb-0 font-weight-bold text-nowrap">
                                                    {{ $judge->first_name . ' ' . $judge->last_name }}
                                                </p>
                                                <small class="text-muted">
                                                    {{ $judge->type ?? 'N/A' }}
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="line-height-none">
                                        <p class="mb-0 font-weight-bold text-nowrap">
                                            {{ $judge->mobile ?? 'N/A' }}
                                        </p>
                                        <small class="text-muted">
                                            {{ $judge->email ?? 'N/A' }}
                                        </small>
                                    </td>
                                    <td>320</td>
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
                        {{ $judges->links('pagination::bootstrap-5') }}
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
