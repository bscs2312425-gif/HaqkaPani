@extends('layouts.app')

@section('title', 'Provider Dashboard - Haq Paani')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-lg-3 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <div class="mb-3">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Provider" 
                             class="rounded-circle" width="80" height="80">
                    </div>
                    <h5 class="mb-1">Al-Madina Water Services</h5>
                    <p class="text-muted mb-2">⭐ 4.5 (128 reviews)</p>
                    <div class="badge bg-success mb-3">Verified Provider</div>
                    
                    <div class="list-group list-group-flush">
                        <a href="#services" class="list-group-item list-group-item-action active">
                            🚚 My Services
                        </a>
                        <a href="#orders" class="list-group-item list-group-item-action">
                            📦 Orders
                        </a>
                        <a href="#earnings" class="list-group-item list-group-item-action">
                            💰 Earnings
                        </a>
                        <a href="#profile" class="list-group-item list-group-item-action">
                            👤 Profile
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Quick Stats -->
            <div class="card shadow-sm border-0 mt-3">
                <div class="card-body">
                    <h6 class="card-title">Quick Stats</h6>
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="border rounded p-2">
                                <h5 class="text-primary mb-0">24</h5>
                                <small>Active Orders</small>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="border rounded p-2">
                                <h5 class="text-success mb-0">₨ 85,200</h5>
                                <small>Total Earnings</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-2">
                                <h5 class="text-warning mb-0">4.5</h5>
                                <small>Rating</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="border rounded p-2">
                                <h5 class="text-info mb-0">156</h5>
                                <small>Completed</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="col-lg-9">
            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-1">Service Provider Dashboard</h3>
                    <p class="text-muted mb-0">Manage your water tanker services and orders</p>
                </div>
                <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                    + Add New Service
                </button>
            </div>

            <!-- My Services Section -->
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0">🚚 My Tanker Services</h5>
                </div>
                <div class="card-body">
                    <div class="row" id="servicesContainer">
                        <!-- Services will be dynamically added here -->
                        <div class="col-12 text-center py-5" id="noServicesMessage">
                            <img src="{{ asset('images/logo.jpg') }}" alt="No Services" height="100" class="mb-3">
                            <h5>No Services Added Yet</h5>
                            <p class="text-muted">Start by adding your first water tanker service</p>
                            <button class="btn btn-custom" data-bs-toggle="modal" data-bs-target="#addServiceModal">
                                Add Your First Service
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">📦 Recent Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Service</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="ordersTable">
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <p class="text-muted mb-0">No orders yet. Services will appear here when customers order.</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Service Modal -->
<div class="modal fade" id="addServiceModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title">Add New Tanker Service</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="addServiceForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Tanker Size</label>
                            <select class="form-select" id="tankerSize" required>
                                <option value="">Select tanker size</option>
                                <option value="1,000 Gallons">1,000 Gallons</option>
                                <option value="2,000 Gallons">2,000 Gallons</option>
                                <option value="3,000 Gallons">3,000 Gallons</option>
                                <option value="5,000 Gallons">5,000 Gallons</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Price (₨)</label>
                            <input type="number" class="form-control" id="servicePrice" 
                                   placeholder="Enter price in PKR" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Coverage Areas</label>
                            <select class="form-select" id="coverageAreas" multiple required>
                                <option value="nazimabad">Nazimabad</option>
                                <option value="gulshan">Gulshan-e-Iqbal</option>
                                <option value="liaquatabad">Liaquatabad</option>
                                <option value="north">North Karachi</option>
                                <option value="defence">Defence/Clifton</option>
                                <option value="korangi">Korangi</option>
                                <option value="saddar">Saddar</option>
                            </select>
                            <small class="text-muted">Hold Ctrl to select multiple areas</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Delivery Time</label>
                            <select class="form-select" id="deliveryTime" required>
                                <option value="">Select delivery time</option>
                                <option value="1 hour">Within 1 hour</option>
                                <option value="2 hours">Within 2 hours</option>
                                <option value="3 hours">Within 3 hours</option>
                                <option value="4 hours">Within 4 hours</option>
                                <option value="Same day">Same day delivery</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Service Description</label>
                        <textarea class="form-control" id="serviceDescription" rows="3" 
                                  placeholder="Describe your service, water quality, any special features..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Upload Tanker Image</label>
                        <input type="file" class="form-control" id="tankerImage" accept="image/*">
                        <small class="text-muted">Upload a clear photo of your water tanker</small>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="availableNow" checked>
                        <label class="form-check-label" for="availableNow">
                            Available for immediate delivery
                        </label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-custom" onclick="addNewService()">Add Service</button>
            </div>
        </div>
    </div>
</div>

<style>
    .service-card {
        transition: all 0.3s ease;
        border: 1px solid #e9ecef;
    }
    
    .service-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }
    
    .status-badge {
        font-size: 0.75rem;
    }
    
    .list-group-item.active {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        border-color: var(--primary);
    }
</style>


@endsection