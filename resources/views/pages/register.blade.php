@extends('layouts.app')

@section('title', 'Register - Haq Paani')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-success text-white text-center py-4">
                    <h3 class="mb-0">Join Haq Paani</h3>
                    <p class="mb-0">Create your account and choose your role</p>
                </div>
                
                <div class="card-body p-5">
                    <form id="registerForm">
                        <!-- Personal Information -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="fullName" class="form-label fw-bold">Full Name</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        👤
                                    </span>
                                    <input type="text" class="form-control border-start-0" id="fullName" 
                                           placeholder="Enter your full name" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="phone" class="form-label fw-bold">Phone Number</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        📞
                                    </span>
                                    <input type="tel" class="form-control border-start-0" id="phone" 
                                           placeholder="03XX-XXXXXXX" required>
                                </div>
                            </div>
                        </div>

                        <!-- Email & Password -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="email" class="form-label fw-bold">Email Address</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        📧
                                    </span>
                                    <input type="email" class="form-control border-start-0" id="email" 
                                           placeholder="Enter your email" required>
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-4">
                                <label for="password" class="form-label fw-bold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-end-0">
                                        🔒
                                    </span>
                                    <input type="password" class="form-control border-start-0" id="password" 
                                           placeholder="Create a password" required>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-4">
                            <label for="address" class="form-label fw-bold">Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    🏠
                                </span>
                                <textarea class="form-control border-start-0" id="address" 
                                          placeholder="Enter your complete address" rows="2" required></textarea>
                            </div>
                        </div>

                        <!-- Area Selection -->
                        <div class="mb-4">
                            <label for="area" class="form-label fw-bold">Select Your Area</label>
                            <select class="form-select" id="area" required>
                                <option value="">Choose your area...</option>
                                <option value="nazimabad">Nazimabad</option>
                                <option value="gulshan">Gulshan-e-Iqbal</option>
                                <option value="liaquatabad">Liaquatabad</option>
                                <option value="north">North Karachi</option>
                                <option value="defence">Defence/Clifton</option>
                                <option value="korangi">Korangi</option>
                                <option value="saddar">Saddar</li>
                                <option value="other">Other Area</option>
                            </select>
                        </div>

                        <!-- Role Selection -->
                        <div class="mb-4">
                            <label class="form-label fw-bold">I want to:</label>
                            <div class="row g-3">
                                <!-- Service Provider -->
                                <div class="col-md-6">
                                    <div class="card role-card h-100 border-2" id="providerCard" 
                                         onclick="selectRole('provider')" style="cursor: pointer;">
                                        <div class="card-body text-center p-4">
                                            <div class="role-icon mb-3">
                                                🚚
                                            </div>
                                            <h5>Provide Water Service</h5>
                                            <p class="text-muted small mb-3">
                                                Register as a water tanker service provider and reach more customers
                                            </p>
                                            <div class="benefits text-start">
                                                <small>✅ List your tankers</small><br>
                                                <small>✅ Get more orders</small><br>
                                                <small>✅ Manage deliveries</small><br>
                                                <small>✅ Earn more income</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Service Consumer -->
                                <div class="col-md-6">
                                    <div class="card role-card h-100 border-2" id="consumerCard" 
                                         onclick="selectRole('consumer')" style="cursor: pointer;">
                                        <div class="card-body text-center p-4">
                                            <div class="role-icon mb-3">
                                                💧
                                            </div>
                                            <h5>Get Water Service</h5>
                                            <p class="text-muted small mb-3">
                                                Register as a customer to order water tankers for your home or business
                                            </p>
                                            <div class="benefits text-start">
                                                <small>✅ Order tankers</small><br>
                                                <small>✅ Track deliveries</small><br>
                                                <small>✅ Collective orders</small><br>
                                                <small>✅ Save money</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="selectedRole" name="role" required>
                        </div>

                        <!-- Terms and Conditions -->
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms" required>
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-primary">Terms of Service</a> 
                                    and <a href="#" class="text-primary">Privacy Policy</a>
                                </label>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-custom w-100 py-3 mb-3">
                            Create Account
                        </button>

                        <!-- Login Link -->
                        <div class="text-center">
                            <p class="mb-0">Already have an account? 
                                <a href="/login" class="text-primary fw-bold text-decoration-none">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .role-card {
        transition: all 0.3s ease;
        border: 2px solid #e9ecef;
    }
    
    .role-card:hover {
        transform: translateY(-5px);
        border-color: #007bff;
    }
    
    .role-card.selected {
        border-color: #28a745;
        background-color: #f8fff9;
    }
    
    .role-icon {
        font-size: 2.5rem;
    }
    
    .benefits {
        font-size: 0.85rem;
    }
</style>


@endsection