@extends('layout.master')

@section('content')
    <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h4>User List</h4>
                    </div>
                </div>
            </div>
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table mb-4 table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Sale</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-2 usr-img-frame">
                                            <img alt="avatar" class="img-fluid" src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                        </div>
                                        <p class="mb-0 align-self-center">Shaun</p>
                                    </div>
                                </td>
                                <td>10/08/2020</td>
                                <td>320</td>
                                <td class="text-center">...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-2 usr-img-frame">
                                            <img alt="avatar" class="img-fluid" src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                        </div>
                                        <p  class="mb-0 align-self-center">Alma</p>
                                    </div>
                                </td>
                                <td>11/08/2020</td>
                                <td>420</td>
                                <td class="text-center">...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-2 usr-img-frame">
                                            <img alt="avatar" class="img-fluid" src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                        </div>
                                        <p  class="mb-0 align-self-center">Kelly</p>
                                    </div>
                                </td>
                                <td>12/08/2020</td>
                                <td>130</td>
                                <td class="text-center">...</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <div class="mr-2 usr-img-frame">
                                            <img alt="avatar" class="img-fluid" src="{{ asset('backend/assets/img/90x90.jpg') }}">
                                        </div>
                                        <p  class="mb-0 align-self-center">Vincent</p>
                                    </div>
                                </td>
                                <td>13/08/2020</td>
                                <td>260</td>
                                <td class="text-center">...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
