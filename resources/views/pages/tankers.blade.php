@extends('layouts.app')

@section('title', 'Water Tanker Prices - Haq Paani')

@section('content')
<!-- Hero Section -->
<section class="bg-primary text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-5 fw-bold">Transparent Tanker Prices</h1>
                <p class="lead">Real market prices from verified providers. No mafia rates.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <img src="{{ asset('images/water-tanker.jpg') }}" alt="Water Tanker" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<!-- Tanker Services Section -->
<section class="section-spacing">
    <div class="container">
        <h2 class="section-title">Available Tanker Services</h2>
        <p class="section-subtitle">Choose from verified water service providers</p>
        
        <!-- Dynamic Services from Database -->
        <div class="row" id="servicesContainer">
            @forelse($services as $service)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card price-card h-100">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h5 class="mb-0">{{ $service->tanker_size }}</h5>
                        <small>{{ $service->provider_name }}</small>
                    </div>
                    <div class="card-body text-center">
                        <div class="mb-3">
                            <span style="font-size: 3rem;">🚚</span>
                        </div>
                        <h3 class="text-primary mb-2">₨ {{ number_format($service->price) }}</h3>
                        
                        <div class="mb-3">
                            <span class="badge bg-warning text-dark">⭐ {{ $service->rating }}</span>
                            <span class="badge bg-info">{{ $service->delivery_time }}</span>
                        </div>
                        
                        <div class="mb-3">
                            <small class="text-muted d-block">
                                <strong>Areas:</strong> {{ $service->areas }}
                            </small>
                            @if($service->description)
                            <small class="text-muted d-block mt-1">
                                {{ Str::limit($service->description, 100) }}
                            </small>
                            @endif
                        </div>
                        
                        <div class="d-flex gap-2">
                            <button class="btn btn-custom btn-sm w-100" 
                                    onclick="addToCart({{ $service->id }}, '{{ $service->tanker_size }}', {{ $service->price }})">
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center py-5">
                <img src="{{ asset('images/no-services.png') }}" alt="No Services" height="100" class="mb-3">
                <h5>No Tanker Services Available</h5>
                <p class="text-muted">Check back later for available water tanker services.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Admin Panel Link (Visible only for admin users) -->
@if(Auth::check() && Auth::user()->is_admin)
<section class="bg-light py-4">
    <div class="container text-center">
        <a href="{{ route('admin.tanker-services.index') }}" class="btn btn-outline-primary">
            🛠️ Manage Tanker Services (Admin Panel)
        </a>
    </div>
</section>
@endif

<script>
    function addToCart(serviceId, tankerSize, price) {
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        cart.push({
            id: serviceId,
            name: tankerSize + ' Tanker',
            price: price,
            type: 'tanker_service'
        });
        localStorage.setItem('cart', JSON.stringify(cart));
        
        alert('Service added to cart!');
        updateCartCount();
    }

    function updateCartCount() {
        const cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartCounts = document.querySelectorAll('.cart-count');
        cartCounts.forEach(count => {
            count.textContent = cart.length;
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        updateCartCount();
    });
</script>
@endsection