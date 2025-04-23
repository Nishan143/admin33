<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
?>
                    <div class="row">
                        <div class="col-md-12 ">
                            <form method="" action="">
                                <div class="card mb-3">
                                  <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-8 card_title_part">
                                            <i class="fab fa-gg-circle"></i>Product-uplode
                                        </div>  
                                        <div class="col-md-4 card_button_part">
                                            <a href="all-product.php" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Product</a>
                                        </div>  
                                    </div>
                                  </div>
                                  <div class="card-body">
                                    <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Date<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="datetime-local" class="form-control form_control" id="" name="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Product-Name<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Price<span class="req_star">*</span>:</label>
                                        <div class="col-sm-7">
                                          <input type="text" class="form-control form_control" id="" name="">
                                        </div>
                                      </div>
                                      <div class="row mb-3">
                                        <label class="col-sm-3 col-form-label col_form_label">Photo:</label>
                                        <div class="col-sm-4">
                                          <input type="file" class="form-control form_control" id="" name="">
                                        </div>
                                      </div>
                                  </div>
                                  <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-sm btn-dark">Uplode</button>
                                  </div>  
                                </div>
                            </form>
                        </div>
                    </div>
   <?php
      get_footer();
   ?>