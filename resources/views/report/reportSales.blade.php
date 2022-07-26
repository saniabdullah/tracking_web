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
                    <a href="{{ url('report/searchReport') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            Search
                        </button>
                    </a>
                    <a href="{{ url('contract') }}">
                        <button type="button" class="btn btn-secondary mx-2">
                            Cancel
                        </button>
                    </a>
                    
                    <hr>
    
                    <div class="navbar rounded-pill">
                        <h6 class="mb-0">Selection Report</h6>
                    </div>


                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Monthy
                            </label>
                            </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yearly
                            </label>
                            </div>
                    </div>

                    <hr>


                    <div class="navbar rounded-pill">
                        <h6 class="mb-0">Selection Criteria</h6>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="price" class="col-form-label">Plant</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control">
                        </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="col-sm-2">
                            <label for="product" class="col-form-label">Product</label>
                        </div>
                        <div class="col-sm-5">
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
                            <label for="product" class="col-form-label">Month</label>
                        </div>
                        <div class="col-sm-5">
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
                            <label for="price" class="col-form-label">Year</label>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" id="price" class="form-control">
                        </div>
                    </div>

                    <hr>

                    <div class="navbar rounded-pill">
                        <h6 class="mb-0">Display</h6>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Show with grouped mounth
                            </label>
                            </div>
                    </div>

                    <div class="row g-3 align-items-center px-3 pt-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Show with ALV report
                            </label>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection