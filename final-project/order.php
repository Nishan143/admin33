<?php
require_once('functions/function.php');
get_header();
?>
    <!-- Order-details start -->

<div class="container py-5">
  <h2 class="mb-4">💳 Select Payment Method</h2>
  <form>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="bkash" value="bkash" required>
        <label class="form-check-label" for="bkash">
          bKash (Merchant No: 01XXXXXXXXX)
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="nagad" value="nagad">
        <label class="form-check-label" for="nagad">
          Nagad (Merchant No: 01XXXXXXXXX)
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="radio" name="paymentMethod" id="cod" value="cod">
        <label class="form-check-label" for="cod">
          Cash on Delivery
        </label>
      </div>
    </div>

    <div class="mb-3">
      <label>Transaction ID (if bKash or Nagad)</label>
      <input type="text" class="form-control" placeholder="Optional unless paid by bKash/Nagad">
    </div>

    <div class="d-flex justify-content-between">
      <a href="confirm.php" class="btn btn-secondary">Back</a>
      <button type="submit" class="btn btn-success">Complete Order</button>
    </div>
  </form>
</div>

    <!--Order-details end -->

   
<?php
    get_footer();
?>