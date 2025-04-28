<?php
require_once('functions/function.php');
get_header();
?>
    <!-- Order-details start -->
  
    <div class="container py-5">
        <h2 class="mb-4">✅ Review Your Order</h2>
      
        <div class="card p-4">
          <div class="row">
            <div class="col-md-2">
              <img src="images/Combine harvester.jpg" class="img-order rounded" alt="Product">
            </div>
            <div class="col-md-10">
              <h5>Combine harvester</h5>
              <p><strong>Quantity:</strong> 1</p>
              <p><strong>Total:</strong> 20000</p>
              <p><strong>Shipping To:</strong> John Doe, 123 Street, Dhaka</p>
            </div>
          </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
          <a href="order-de.php" class="btn btn-secondary">Back</a>
          <a href="payment-card.php" class="btn btn-success">Go to Payment</a>
        </div>
      </div>
    <!--Order-details end -->

   
<?php
    get_footer();
?>