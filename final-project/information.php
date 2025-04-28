<?php
require_once('functions/function.php');
get_header();
?>
   <!-- common_heading start -->
   <div class="row">
    <div class="col-12 col-sm-12 col-md-8 col-lg-6 offset-lg-3 offset-md-2">
        <div class="common_heading text-center">
            <h3>Smart Info</h3>
        </div>
    </div>
</div>
<div class="space">
    <textarea class="ber"  cols="120" rows="40" name="massage" placeholder="Answer"></textarea>
</div>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 scarch-info">
    <div class="container">
        <form class="d-flex-info" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit"><i class="fa-brands fa-pagelines"></i>Search</button>
        </form>
    </div>
</div>
<!-- common_heading end -->
 
<?php
 get_footer();
?>