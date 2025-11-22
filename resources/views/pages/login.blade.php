@extends('layouts.app')

@section('title', 'Login - Haq Paani')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg border-0">
                <div class="card-header bg-primary text-white text-center py-4">
                    <h3 class="mb-0">Welcome Back</h3>
                    <p class="mb-0">Sign in to your Haq Paani account</p>
                </div>
                
                <div class="card-body p-5">
                    <form id="loginForm">
                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Email Address</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    📧
                                </span>
                                <input type="email" class="form-control border-start-0" id="email" 
                                       placeholder="Enter your email" required>
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0">
                                    🔒
                                </span>
                                <input type="password" class="form-control border-start-0" id="password" 
                                       placeholder="Enter your password" required>
                            </div>
                        </div>

                        <!-- Remember Me & Forgot Password -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div>
                            <a href="#" class="text-primary text-decoration-none">Forgot Password?</a>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-custom w-100 py-3 mb-3">
                            Sign In
                        </button>

                        <!-- Divider -->
                        <div class="text-center mb-3">
                            <span class="bg-white px-3 text-muted">Or continue with</span>
                        </div>

                        <!-- Social Login -->
                        <div class="row g-2 mb-4">
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-dark w-100">
                                    📘 Facebook
                                </button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-outline-danger w-100">
                                    📷 Google
                                </button>
                            </div>
                        </div>

                        <!-- Register Link -->
                        <div class="text-center">
                            <p class="mb-0">Don't have an account? 
                                <a href="/register" class="text-primary fw-bold text-decoration-none">Sign Up</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Features -->
            <div class="row mt-4 text-center">
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="text-success me-2">✓</span>
                        <small>Secure Login</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="text-success me-2">✓</span>
                        <small>24/7 Access</small>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center justify-content-center">
                        <span class="text-success me-2">✓</span>
                        <small>Quick Orders</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection