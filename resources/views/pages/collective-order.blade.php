@extends('layouts.app')

@section('title', 'Collective Order - Haq Paani')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Start Collective Order</h3>
                </div>
                
                <div class="card-body">
                    <!-- Area Selection -->
                    <div class="mb-4">
                        <label class="form-label fw-bold">Select Your Area</label>
                        <select class="form-select" id="areaSelect">
                            <option value="">Choose your area...</option>
                            <option value="nazimabad">Nazimabad</option>
                            <option value="gulshan">Gulshan-e-Iqbal</option>
                            <option value="liaquatabad">Liaquatabad</option>
                            <option value="north">North Karachi</option>
                            <option value="defence">Defence/Clifton</option>
                            <option value="korangi">Korangi</option>
                        </select>
                    </div>

                    <!-- People Counter -->
                    <div class="mb-4 text-center">
                        <label class="form-label fw-bold">How many people are sharing this tanker?</label>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <button class="btn btn-outline-primary rounded-circle" onclick="updatePeopleCounter(-1)">-</button>
                            <span class="people-counter mx-4 fs-3" id="peopleCounter">5</span>
                            <button class="btn btn-outline-primary rounded-circle" onclick="updatePeopleCounter(1)">+</button>
                        </div>
                        <small class="text-muted">Minimum 2, Maximum 20 people</small>
                    </div>

                    <!-- Price Calculation -->
                    <div class="calculation-box">
                        <h5 class="text-center mb-3">Price Breakdown</h5>
                        <div class="row text-center">
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6>Large Tanker Price</h6>
                                    <h4 class="text-success">₨ <span id="tankerPrice">5,500</span></h4>
                                    <small class="text-muted">Mafia Price: ₨ 8,500</small>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="border rounded p-3">
                                    <h6>Your Share</h6>
                                    <h4 class="text-primary" id="perHeadPrice">₨ 1,100</h4>
                                    <small class="text-muted">Per Person</small>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="fw-bold">Total Savings: ₨ <span id="totalSavings">4,900</span></p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="text-center mt-4">
                        <button class="btn btn-success btn-custom me-3" onclick="proceedToPayment()">Proceed to Payment</button>
                        <a href="/tankers" class="btn btn-outline-secondary">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection