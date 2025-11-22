<!-- Payment Options -->
<div class="mb-4">
    <h5 class="fw-bold mb-3">Select Payment Method</h5>
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="payment-option" onclick="selectPayment('cash')">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" value="cash">
                    <label class="form-check-label fw-bold">
                        💵 Cash on Delivery
                    </label>
                    <p class="mb-0 text-muted small">Pay when you receive the tanker</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <div class="payment-option" onclick="selectPayment('bank')">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" value="bank">
                    <label class="form-check-label fw-bold">
                        🏦 Bank Transfer
                    </label>
                    <p class="mb-0 text-muted small">Transfer directly to our bank account</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <div class="payment-option" onclick="selectPayment('easypaisa')">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" value="easypaisa">
                    <label class="form-check-label fw-bold">
                        📱 Easypaisa
                    </label>
                    <p class="mb-0 text-muted small">Send payment via Easypaisa</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <div class="payment-option" onclick="selectPayment('jazzcash')">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" value="jazzcash">
                    <label class="form-check-label fw-bold">
                        📲 JazzCash
                    </label>
                    <p class="mb-0 text-muted small">Send payment via JazzCash</p>
                </div>
            </div>
        </div>
    </div>
    
    <input type="hidden" id="selectedPayment" name="selectedPayment">
</div>

