<?php
require_once('functions/function.php');
get_header();
?>
    <!-- conform-massage start -->
    <div class="container py-5">
        <h2 class="mb-4">💳 Payment</h2>
        <form>
          <div class="mb-3">
            <label>Card Number</label>
            <input type="text" class="form-control" placeholder="XXXX XXXX XXXX XXXX" required>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label>Expiry Date</label>
              <input type="text" class="form-control" placeholder="MM/YY" required>
            </div>
            <div class="col-md-6 mb-3">
              <label>CVV</label>
              <input type="text" class="form-control" placeholder="123" required>
            </div>
          </div>
      
          <div class="d-flex justify-content-between">
            <a href="order-conf.php" class="btn btn-secondary">Back</a>
            <button type="submit" class="btn btn-success"> <a href="confrom-massage.php">Pay Now</a></button>
          </div>
    <!--conform-massage end -->

<?php
    get_footer();
?>