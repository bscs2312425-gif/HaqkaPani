@extends('layouts.app')

@section('title', 'Add New Tanker Service - Admin Panel')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Add New Tanker Service</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tanker-services.store') }}" method="POST">
                        @csrf
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Provider Name</label>
                                <input type="text" class="form-control" name="provider_name" 
                                       value="{{ old('provider_name') }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tanker Size</label>
                                <select class="form-select" name="tanker_size" required>
                                    <option value="">Select Size</option>
                                    <option value="1,000 Gallons">1,000 Gallons</option>
                                    <option value="2,000 Gallons">2,000 Gallons</option>
                                    <option value="3,000 Gallons">3,000 Gallons</option>
                                    <option value="5,000 Gallons">5,000 Gallons</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price (₨)</label>
                                <input type="number" class="form-control" name="price" 
                                       value="{{ old('price') }}" step="0.01" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Delivery Time</label>
                                <select class="form-select" name="delivery_time" required>
                                    <option value="">Select Time</option>
                                    <option value="1 hour">Within 1 hour</option>
                                    <option value="2 hours">Within 2 hours</option>
                                    <option value="3 hours">Within 3 hours</option>
                                    <option value="Same day">Same day delivery</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Coverage Areas</label>
                            <input type="text" class="form-control" name="areas" 
                                   value="{{ old('areas') }}" 
                                   placeholder="e.g., Nazimabad, Gulshan, North Karachi" required>
                            <small class="text-muted">Separate areas with commas</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea class="form-control" name="description" rows="3" 
                                      placeholder="Service description...">{{ old('description') }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Rating (1-5)</label>
                                <input type="number" class="form-control" name="rating" 
                                       value="{{ old('rating', 4.5) }}" min="0" max="5" step="0.1">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Availability</label>
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" name="available" 
                                           value="1" checked>
                                    <label class="form-check-label">Available for orders</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-custom">Add Service</button>
                            <a href="{{ route('admin.tanker-services.index') }}" class="btn btn-outline-secondary">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection