@extends('layout.master')

@section('title', 'Add a New Advocate')

@section('content')
    <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Advocate List</h4>
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
                                <th>Gender / Religion</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($advocates as $key => $advocate)
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                            <div class="mr-2 usr-img-frame">
                                                <img alt="avatar" class="img-fluid"
                                                    src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                            </div>
                                            <div class="line-height-none">
                                                <p class="mb-0 font-weight-bold text-nowrap">
                                                    {{ $advocate->first_name . ' ' . $advocate->last_name }}
                                                </p>
                                                <small class="text-muted">
                                                    {{ $advocate->type ?? 'N/A' }}
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="line-height-none">
                                        <p class="mb-0 font-weight-bold text-nowrap">
                                            {{ $advocate->mobile ?? 'N/A' }}
                                        </p>
                                        <small class="text-muted">
                                            {{ $advocate->email ?? 'N/A' }}
                                        </small>
                                    </td>
                                    <td>
                                        <p class="mb-0 font-weight-bold text-nowrap">
                                            {{ $advocate->gender ?? 'N/A' }}
                                        </p>
                                        <small class="text-muted">
                                            {{ $advocate->religion ?? 'N/A' }}
                                        </small>
                                    </td>
                                    <td class="text-center">
                                        <x-action-btn url="admin.advocate" :id="$advocate->id" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        {{ $advocates->links('pagination::bootstrap-5') }}
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
