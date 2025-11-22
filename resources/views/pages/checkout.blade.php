@extends('layouts.app')

@section('title', 'Checkout - Haq Paani')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Checkout</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Delivery Details</h5>
                    <form id="deliveryForm">
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control" name="full_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <textarea class="form-control" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Area</label>
                            <select class="form-select" name="area" id="areaField" required>
                                <option value="">Select Area</option>
                                <option value="nazimabad">Nazimabad</option>
                                <option value="gulshan">Gulshan-e-Iqbal</option>
                                <option value="liaquatabad">Liaquatabad</option>
                                <option value="north">North Karachi</option>
                                <option value="defence">Defence/Clifton</option>
                                <option value="korangi">Korangi</option>
                            </select>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <!-- Order Summary - Dynamic -->
            <div class="card mb-4">
                <div class="card-body">
                    <h5>Order Summary</h5>
                    <div id="individualOrder">
                        <table class="table">
                            <tr>
                                <td>2,000 Gallon Tanker</td>
                                <td>₨ 4,000</td>
                            </tr>
                            <tr>
                                <td>Total Amount:</td>
                                <td><strong>₨ 4,000</strong></td>
                            </tr>
                        </table>
                    </div>
                    
                    <div id="collectiveOrder" style="display: none;">
                        <table class="table">
                            <tr>
                                <td>Large Tanker (Collective Order)</td>
                                <td>₨ <span id="collectiveTankerPrice">5,500</span></td>
                            </tr>
                            <tr>
                                <td>People Sharing:</td>
                                <td><span id="peopleSharing">5</span> people</td>
                            </tr>
                            <tr>
                                <td>Your Share:</td>
                                <td><strong>₨ <span id="yourShare">1,100</span></strong></td>
                            </tr>
                            <tr class="table-success">
                                <td>Your Savings:</td>
                                <td><strong>₨ <span id="checkoutSavings">4,900</span></strong></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Payment Options -->
            @include('partials.payment-options')
            
            <button class="btn btn-success w-100 btn-custom" onclick="confirmOrder()">Confirm Order</button>
        </div>
    </div>
</div>


@endsection