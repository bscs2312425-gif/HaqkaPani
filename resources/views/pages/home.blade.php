@extends('layouts.app')

@section('title', 'Home - Haq Paani - Reliable Water Services in Karachi')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 hero-content">
                <h1 class="display-4 fw-bold mb-4">Clean Water. Fair Price. Guaranteed.</h1>
                <p class="lead mb-4">Fight against water tanker mafia with transparent pricing and reliable delivery services across Karachi.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/tankers" class="btn btn-light btn-lg px-4 py-2">
                        🚚 Order Tanker
                    </a>
                    <a href="/schedule" class="btn btn-outline-light btn-lg px-4 py-2">
                        📅 View Schedule
                    </a>
                </div>
                <div class="mt-4">
                    <span class="badge bg-warning text-dark me-2">✓ Real Prices</span>
                    <span class="badge bg-warning text-dark me-2">✓ 24/7 Service</span>
                    <span class="badge bg-warning text-dark">✓ All Areas</span>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/hero-water.jpg') }}" alt="Water Tanker Service" class="img-fluid rounded-3 shadow">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section-spacing bg-light">
    <div class="container">
        <h2 class="section-title">Why Choose Haq Paani?</h2>
        <p class="section-subtitle">Transparent, reliable, and affordable water solutions for Karachi</p>
        
        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        💰
                    </div>
                    <h4>Real Prices</h4>
                    <p>No more mafia rates. We provide transparent pricing with actual market rates for all areas.</p>
                    <div class="mt-3">
                        <span class="text-success fw-bold">Save up to 40%</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        ⏰
                    </div>
                    <h4>Live Schedule</h4>
                    <p>Know exactly when water supply comes to your area. Never miss filling your tanks again.</p>
                    <div class="mt-3">
                        <span class="text-success fw-bold">Real-time updates</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-card">
                    <div class="feature-icon">
                        👥
                    </div>
                    <h4>Collective Orders</h4>
                    <p>Join with neighbors to order large tankers at wholesale prices. Split the cost and save.</p>
                    <div class="mt-3">
                        <span class="text-success fw-bold">30% cheaper</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section-spacing">
    <div class="container">
        <h2 class="section-title">How It Works</h2>
        <p class="section-subtitle">Get clean water in 3 simple steps</p>
        
        <div class="row align-items-center">
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <h3 class="mb-0">1</h3>
                    </div>
                    <h4>Choose Your Tanker</h4>
                    <p>Select from small, medium, or large tankers based on your needs and budget.</p>
                   
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-success text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <h3 class="mb-0">2</h3>
                    </div>
                    <h4>Select Area & Time</h4>
                    <p>Choose your delivery area and preferred time slot for convenient service.</p>

                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text-center">
                    <div class="bg-warning text-dark rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                        <h3 class="mb-0">3</h3>
                    </div>
                    <h4>Get Water Delivery</h4>
                    <p>Receive clean water at your doorstep with professional and reliable service.</p>
                   
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3 class="mb-2">Ready to Get Clean Water?</h3>
                <p class="mb-0">Join thousands of Karachi residents who are saving money with transparent pricing.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="/tankers" class="btn btn-light btn-lg px-4">
                    🚚 Order Now
                </a>
            </div>
        </div>
    </div>
</section>
@endsection