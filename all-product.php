<?php
  require_once('functions/function.php');
  get_header();
  get_sidebar();
?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                              <div class="card-header">
                                <div class="row">
                                    <div class="col-md-8 card_title_part">
                                        <i class="fab fa-gg-circle"></i>All Product Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="product.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add Product</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                      <th>Date & Time</th>
                                      <th>Product-Name</th>
                                      <th>Price</th>
                                      <th>Photo</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>12-04-2025 / 8.9Pm</td>
                                      <td>Capicum</td>
                                      <td>20 Taka BDT/1kg </td>
                                      <td>Photo</td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-user.html">View</a></li>
                                              <li><a class="dropdown-item" href="edit-user.html">Edit</a></li>
                                              <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                          </div>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td>12-04-2025 / 8.9Pm</td>
                                        <td>Capicum</td>
                                        <td>20 Taka BDT/1kg </td>
                                        <td>Photo</td>
                                      
                                        <td>
                                            <div class="btn-group btn_group_manage" role="group">
                                              <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="view-user.html">View</a></li>
                                                <li><a class="dropdown-item" href="edit-user.html">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                              </ul>
                                            </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>12-04-2025 / 8.9Pm</td>
                                        <td>Capicum</td>
                                        <td>20 Taka BDT/1kg </td>
                                        <td>Photo</td>
                                      
                                        <td>
                                            <div class="btn-group btn_group_manage" role="group">
                                              <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                              <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="view-user.html">View</a></li>
                                                <li><a class="dropdown-item" href="edit-user.html">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                              </ul>
                                            </div>
                                        </td>
                                      </tr>
                                 
                                
                                  </tbody>
                                </table>
                              </div>
                              <div class="card-footer">
                                <div class="btn-group" role="group" aria-label="Button group">
                                  <button type="button" class="btn btn-sm btn-dark">Print</button>
                                  <button type="button" class="btn btn-sm btn-secondary">PDF</button>
                                  <button type="button" class="btn btn-sm btn-dark">Excel</button>
                                </div>
                              </div>  
                            </div>
                        </div>
                    </div>
<?php
  get_footer();
?>