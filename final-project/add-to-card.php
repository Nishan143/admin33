<?php
require_once('functions/function.php');
get_header();
?>
    <!-- add-to-card start -->
    <div class="container py-5">
        <div class="row">
          <div class="col-md-6">
            <img src="images/Combine harvester.jpg" class="img-fluid" alt="Product Image">
          </div>
          <div class="col-md-6">
            <h2>Product Name</h2>
            <p class="text-muted">$49.99</p>
            <p>Product description goes here. It's a great item!</p>
      
            <form>
              <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" value="1" min="1">
              </div>
              <button type="submit" class="btn btn-primary"><a href="order-de.php">Add to Cart</a></button>
            </form>
          </div>
        </div>
      </div>
    <!-- add-to-card end -->

   
<?php
  get_footer();
?>