<?php
require_once('functions/function.php');
get_header();
?>
    <!-- Order-details start -->
  
    <div class="container py-5">
        <h2 class="mb-4">📦 Order Details</h2>
        <form>
          <div class="mb-3">
            <label>Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Address</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Phone</label>
            <input type="tel" class="form-control" required>
          </div>
      
          <div class="d-flex justify-content-between">
            <a href="add-to-card.php" class="btn btn-secondary">Back to Cart</a>
            <a href="order-conf.php" class="btn btn-primary">Confirm Order</a>
          </div>
        </form>
      </div>>
    <!--Order-details end -->

   
<?php
    get_footer();
?>