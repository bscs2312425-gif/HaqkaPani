<header>
    <!-- Top Bar -->
    <div class="bg-primary text-white py-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <small>📞 Call Us: 021-XXXXXXX | ✉️ info@haqpaani.com</small>
                </div>
                <div class="col-md-6 text-md-end">
                    <small>🚚 Free Delivery in Karachi | ⏰ 24/7 Service</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo.jpg') }}" alt="Haq Paani" height="40" class="me-2">
            <span class="fw-bold">Haq Paani</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('tankers') ? 'active' : '' }}" href="/tankers">Tankers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('schedule') ? 'active' : '' }}" href="/schedule">Schedule</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('provider-dashboard') ? 'active' : '' }}" href="/admin/tanker-services">Admin</a>
                </li>

                
            </ul>
            
            <div class="d-flex align-items-center">
                @if(isset($user) && $user)
                    <div class="dropdown">
                        <button class="btn btn-outline-primary dropdown-toggle me-2" type="button" 
                                data-bs-toggle="dropdown">
                            👤 My Account
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">My Orders</a></li>
                            <li><a class="dropdown-item" href="/provider-dashboard">Provider Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </div>
                @else
                    <a href="/login" class="btn btn-outline-custom me-2">
                        Sign In
                    </a>
                    <a href="/register" class="btn btn-custom">
                        Sign Up
                    </a>
                @endif
                
                <a href="/cart" class="btn btn-outline-custom ms-2 position-relative">
                    🛒 Cart
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger cart-count">
                        0
                    </span>
                </a>
            </div>
        </div>
    </div>
</nav>

</header>