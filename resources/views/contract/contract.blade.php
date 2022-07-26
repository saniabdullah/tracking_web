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

                    <a href="{{ url('contract/searchContract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            <i class="fas fa-md fa-search">
                            
                            </i>
                        </button>
                    </a>
                    <a href="{{ url('contract/addContract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            <i class="fa fa-md fa-plus">
                                
                            </i>
                        </button>
                    </a>
                    <a href="{{ url('contract/editContract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            <i class="fa fa-md fa-pencil">
                                
                            </i>
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
                            <input type="text" id="contractNo" class="form-control" value="1234ER" disabled>
                        </div>
                
                        <div class="col-sm-2">
                            <label for="type" class="col-form-label">Type :</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="type" class="form-control" value="2F" disabled>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="customer" class="col-form-label">Customer</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="customer" class="form-control" value="JFSA12" disabled>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="customer" class="form-control" value="Bagas" disabled>
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="price" class="col-form-label">Price (Rp/Kg)</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control" value="50" disabled>
                        </div>
                
                        <div class="col-sm-2">
                            <label for="quantity" class="col-form-label">Quantity</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" id="quantity" class="form-control" value="150" disabled>
                        </div>
                        <p class="col-sm-1 pt-4 px-0">Kg</p>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="bursaMalay" class="col-form-label">Price Bursa Index Malaysia</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="bursaMalay" class="form-control" value="200" disabled>
                        </div>
                
                        <div class="col-sm-2">
                            <label for="product" class="col-form-label">Product</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="product" class="form-control" value="Minyak" disabled>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="bursaIndo" class="col-form-label">Price Bursa Index Indonesia</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="bursaIndo" class="form-control" value="300" disabled>
                        </div>
                
                        <div class="col-sm-2">
                            <label for="taxType" class="col-form-label">Tax Type</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="taxType" class="form-control" value="Permanen" disabled>
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="contactDate" class="col-form-label">Contract Date</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="contactDate" class="form-control" value="20-10-2023" disabled>
                        </div>
                
                        <div class="col-sm-2">
                            <label for="status" class="col-form-label">Status</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="status" class="form-control" value="Aktif" disabled>
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="delivery" class="col-form-label">Delivery End Date</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="delivery" class="form-control" value="30-10-2023" disabled>
                        </div>
                    </div>

                    <hr>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="totalDespatch" class="col-form-label">Total Despatch</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="totalDespatch" class="form-control" value="20" disabled>
                        </div>
                        <p class="col-sm-1 px-0">MT</p>
                
                        <div class="col-sm-2">
                            <label for="totalDelivery" class="col-form-label">Total Delivery</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" id="totalDelivery" class="form-control" value="350" disabled>
                        </div>
                        <p class="col-sm-1 px-0">MT</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection