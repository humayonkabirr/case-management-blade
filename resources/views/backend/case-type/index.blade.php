@extends('layout.master')

@section('content')
    <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>Case Type List</h4>
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
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($caseTypes as $key => $type)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $type->name }}</td>
                                    <td>{{ $type->bn_name }}</td>
                                    <td>{{ $type->serial }}</td>
                                    <td class="text-center"><x-status :status="$type->status" /></td>
                                    <td class="text-center">
                                        <x-action-btn url="admin.case-type" :id="$type->id" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $caseTypes->links('pagination::bootstrap-5') }}
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
