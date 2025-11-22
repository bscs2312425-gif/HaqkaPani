@extends('layouts.app')

@section('title', 'Edit Tanker Service - Admin Panel')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0">Edit Tanker Service</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.tanker-services.update', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Provider Name</label>
                                <input type="text" class="form-control" name="provider_name" 
                                       value="{{ old('provider_name', $service->provider_name) }}" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Tanker Size</label>
                                <select class="form-select" name="tanker_size" required>
                                    <option value="1,000 Gallons" {{ $service->tanker_size == '1,000 Gallons' ? 'selected' : '' }}>1,000 Gallons</option>
                                    <option value="2,000 Gallons" {{ $service->tanker_size == '2,000 Gallons' ? 'selected' : '' }}>2,000 Gallons</option>
                                    <option value="3,000 Gallons" {{ $service->tanker_size == '3,000 Gallons' ? 'selected' : '' }}>3,000 Gallons</option>
                                    <option value="5,000 Gallons" {{ $service->tanker_size == '5,000 Gallons' ? 'selected' : '' }}>5,000 Gallons</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Price (₨)</label>
                                <input type="number" class="form-control" name="price" 
                                       value="{{ old('price', $service->price) }}" step="0.01" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Delivery Time</label>
                                <select class="form-select" name="delivery_time" required>
                                    <option value="1 hour" {{ $service->delivery_time == '1 hour' ? 'selected' : '' }}>Within 1 hour</option>
                                    <option value="2 hours" {{ $service->delivery_time == '2 hours' ? 'selected' : '' }}>Within 2 hours</option>
                                    <option value="3 hours" {{ $service->delivery_time == '3 hours' ? 'selected' : '' }}>Within 3 hours</option>
                                    <option value="Same day" {{ $service->delivery_time == 'Same day' ? 'selected' : '' }}>Same day delivery</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Coverage Areas</label>
                            <input type="text" class="form-control" name="areas" 
                                   value="{{ old('areas', $service->areas) }}" required>
                            <small class="text-muted">Separate areas with commas</small>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea class="form-control" name="description" rows="3">{{ old('description', $service->description) }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Rating (1-5)</label>
                                <input type="number" class="form-control" name="rating" 
                                       value="{{ old('rating', $service->rating) }}" min="0" max="5" step="0.1">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Availability</label>
                                <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" name="available" 
                                           value="1" {{ $service->available ? 'checked' : '' }}>
                                    <label class="form-check-label">Available for orders</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-custom">Update Service</button>
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