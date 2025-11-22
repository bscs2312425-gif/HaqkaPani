@extends('layouts.app')

@section('title', 'About Us - Haq Paani')

@section('content')
<div class="container py-5">
    <h2 class="text-center mb-5">About Us</h2>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-primary">Our Mission</h4>
                    <p>We are committed to providing Karachi citizens with fair water prices and reliable services. We present a digital solution against the tanker mafia.</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="text-primary">Our Services</h4>
                    <ul>
                        <li>Real tanker prices</li>
                        <li>Water supply schedule</li>
                        <li>Collective tanker orders</li>
                        <li>Area-wise price comparison</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body text-center">
                    <h4>Contact Us</h4>
                    <p class="mb-1">Phone: 021-XXXXXXX</p>
                    <p class="mb-1">Email: info@haqpaani.com</p>
                    <p class="mb-0">Address: Karachi, Pakistan</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection