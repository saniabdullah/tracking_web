@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="col-auto my-auto">
        <div class="h-100">
            <h5 class="mb-1">MASTER CONTACT - PRICE CP0</h5>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <form action="/user-profile" method="POST" role="form text-left"> 
                    <a href="{{ url('contract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            Save
                        </button>
                    </a>
                    <a href="{{ url('contract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            Cancel
                        </button>
                    </a>
    
                    <div class="navbar rounded-pill">
                        <h6 class="mb-0">Contract & Price Profile</h6>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="contractNo" class="col-form-label">Contract No.</label>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" id="contractNo" class="form-control">
                        </div>
                
                        <div class="col-sm-2">
                            <label for="type" class="col-form-label">Type :</label>
                        </div>
                        <div class="col-sm-2">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="customer" class="col-form-label">Customer</label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="customer" class="form-control">
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="price" class="col-form-label">Price (Rp/Kg)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control">
                        </div>
                
                        <div class="col-sm-2">
                            <label for="quantity" class="col-form-label">Quantity</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="quantity" class="form-control">
                        </div>
                        <p class="col-sm-1 pt-4 px-0">Kg</p>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="bursaMalay" class="col-form-label">Price Bursa Index Malaysia</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="bursaMalay" class="form-control">
                        </div>
                
                        <div class="col-sm-2">
                            <label for="product" class="col-form-label">Product</label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="bursaIndo" class="col-form-label">Price Bursa Index Indonesia</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="bursaIndo" class="form-control">
                        </div>
                
                        <div class="col-sm-2">
                            <label for="taxType" class="col-form-label">Tax Type</label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="contactDate" class="col-form-label">Contract Date</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="contactDate" class="form-control">
                        </div>
                
                        <div class="col-sm-2">
                            <label for="status" class="col-form-label">Status</label>
                        </div>
                        <div class="col-sm-3">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>select</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="delivery" class="col-form-label">Delivery End Date</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="delivery" class="form-control">
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="totalDespatch" class="col-form-label">Total Despatch</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="totalDespatch" class="form-control">
                        </div>
                        <p class="col-sm-1 px-0">MT</p>
                
                        <div class="col-sm-2">
                            <label for="totalDelivery" class="col-form-label">Total Delivery</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="totalDelivery" class="form-control">
                        </div>
                        <p class="col-sm-1 px-0">MT</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection