@extends('layouts.app')

@section('title', 'Manage Tanker Services - Admin Panel')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Manage Tanker Services</h2>
        <a href="{{ route('admin.tanker-services.create') }}" class="btn btn-custom">
            + Add New Service
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Provider</th>
                            <th>Tanker Size</th>
                            <th>Price</th>
                            <th>Areas</th>
                            <th>Delivery Time</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($services as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->provider_name }}</td>
                            <td>{{ $service->tanker_size }}</td>
                            <td>₨ {{ number_format($service->price) }}</td>
                            <td>{{ $service->areas }}</td>
                            <td>{{ $service->delivery_time }}</td>
                            <td>
                                <span class="badge {{ $service->available ? 'bg-success' : 'bg-danger' }}">
                                    {{ $service->available ? 'Available' : 'Not Available' }}
                                </span>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.tanker-services.edit', $service->id) }}" 
                                       class="btn btn-outline-primary btn-sm">Edit</a>
                                    <form action="{{ route('admin.tanker-services.destroy', $service->id) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm" 
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8" class="text-center py-4">
                                <p class="text-muted">No tanker services found.</p>
                                <a href="{{ route('admin.tanker-services.create') }}" class="btn btn-custom">
                                    Add First Service
                                </a>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection