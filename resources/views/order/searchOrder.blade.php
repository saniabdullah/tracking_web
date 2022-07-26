@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">Report Delivery Order</h5>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4"> 
                    <div class="card-body pt-4 p-3">      

                        <a href="{{ url('report/searchReport') }}">
                            <button type="button" class="btn btn-secondary mx-2">
                                Search
                            </button>
                        </a>
                        <a href="{{ url('contract') }}">
                            <button type="button" class="btn btn-secondary mx-2">
                                print
                            </button>
                        </a>
                        <a href="{{ url('contract') }}">
                            <button type="button" class="btn btn-secondary mx-2">
                                filter
                            </button>
                        </a>

                        <hr>

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Contract No.</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Customer Code</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Type</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Product</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Tax Type</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Quantity</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Price</th>
                                            <th class="text-uppercase text-secondary text-sm font-weight-bolder ps-2">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">John Michael</h6>
                                                </div>
                                                </div>
                                            </td>
                                        
                                        </tr>
                                    </tbody>
                                </table>

                                <hr>

                                <a href="{{ url('order') }}">
                                    <button type="button" class="btn btn-secondary mx-2">
                                        Cancel
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection