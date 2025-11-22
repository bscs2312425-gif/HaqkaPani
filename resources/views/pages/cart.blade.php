@extends('layouts.app')

@section('title', 'Cart - Haq Paani')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">Your Cart</h2>
    
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h5>Order Details</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tanker</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2,000 Gallon Tanker</td>
                                <td>₨ 4,000</td>
                                <td>1</td>
                                <td>₨ 4,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5>Order Summary</h5>
                    <table class="table">
                        <tr>
                            <td>Subtotal:</td>
                            <td>₨ 4,000</td>
                        </tr>
                        <tr>
                            <td>Tax:</td>
                            <td>₨ 0</td>
                        </tr>
                        <tr>
                            <td>Total:</td>
                            <td><strong>₨ 4,000</strong></td>
                        </tr>
                    </table>
                    <a href="/checkout" class="btn btn-success w-100">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection