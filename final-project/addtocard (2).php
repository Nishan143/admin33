<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Process</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
  <h2 class="mb-4 text-center">Order Process</h2>

  <!-- Tabs Navigation -->
  <ul class="nav nav-tabs mb-4" id="orderTabs" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="cart-tab" data-bs-toggle="tab" data-bs-target="#cart" type="button">1. Add to Cart</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button">2. Order Details</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="confirm-tab" data-bs-toggle="tab" data-bs-target="#confirm" type="button">3. Confirm Order</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="payment-tab" data-bs-toggle="tab" data-bs-target="#payment" type="button">4. Payment</button>
    </li>
  </ul>

  <!-- Tabs Content -->
  <div class="tab-content">
    <!-- Cart Tab -->
    <div class="tab-pane fade show active" id="cart" role="tabpanel">
      <h4>Add to Cart</h4>
      <table class="table">
        <thead>
          <tr><th>Product</th><th>Price</th><th>Quantity</th><th>Total</th></tr>
        </thead>
        <tbody>
          <tr>
            <td>Product A</td>
            <td>$10</td>
            <td><input type="number" value="1" class="form-control" style="width: 80px;"></td>
            <td>$10</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-primary mt-3" data-bs-target="#details" data-bs-toggle="tab">Next: Order Details</button>
    </div>

    <!-- Order Details Tab -->
    <div class="tab-pane fade" id="details" role="tabpanel">
      <h4>Order Details</h4>
      <form>
        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Full Name">
        </div>
        <div class="mb-3">
          <label>Shipping Address</label>
          <input type="text" class="form-control" placeholder="123 Street, City">
        </div>
        <div class="mb-3">
          <label>Phone</label>
          <input type="tel" class="form-control" placeholder="123-456-7890">
        </div>
        <button class="btn btn-secondary" data-bs-target="#cart" data-bs-toggle="tab">Back</button>
        <button class="btn btn-primary" data-bs-target="#confirm" data-bs-toggle="tab">Next: Confirm</button>
      </form>
    </div>

    <!-- Confirm Order Tab -->
    <div class="tab-pane fade" id="confirm" role="tabpanel">
      <h4>Confirm Your Order</h4>
      <p><strong>Product:</strong> Product A</p>
      <p><strong>Total:</strong> $10</p>
      <p><strong>Shipping To:</strong> 123 Street, City</p>
      <button class="btn btn-secondary" data-bs-target="#details" data-bs-toggle="tab">Back</button>
      <button class="btn btn-success" data-bs-target="#payment" data-bs-toggle="tab">Proceed to Payment</button>
    </div>

    <!-- Payment Tab -->
    <div class="tab-pane fade" id="payment" role="tabpanel">
      <h4>Payment</h4>
      <form>
        <div class="mb-3">
          <label>Card Number</label>
          <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX">
        </div>
        <div class="mb-3">
          <label>Expiry</label>
          <input type="text" class="form-control" placeholder="MM/YY">
        </div>
        <div class="mb-3">
          <label>CVV</label>
          <input type="text" class="form-control" placeholder="123">
        </div>
        <button class="btn btn-secondary" data-bs-target="#confirm" data-bs-toggle="tab">Back</button>
        <button class="btn btn-success">Pay Now</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
