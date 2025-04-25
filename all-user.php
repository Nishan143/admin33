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
                                        <i class="fab fa-gg-circle"></i>All User Information
                                    </div>  
                                    <div class="col-md-4 card_button_part">
                                        <a href="add-user.php" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i>Add User</a>
                                    </div>  
                                </div>
                              </div>
                              <div class="card-body">
                                <table class="table table-bordered table-striped table-hover custom_table">
                                  <thead class="table-dark">
                                    <tr>
                                      <th>Name</th>
                                      <th>Phone</th>
                                      <th>Nid</th>
                                      <th>Role</th>
                                      <th>Manage</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                  <?php
      $sel="SELECT * FROM farmer NATURAL JOIN roles ORDER BY farmer_id ASC";
      $Q=mysqli_query($con,$sel);
      while($data=mysqli_fetch_assoc($Q)){
    ?>
    <tr>
      <td><?= $data['farmer_name']; ?></td>
      <td><?= $data['phone']; ?></td>
      <td><?= $data['nid']; ?></td>
      <td><?= $data['role_name']; ?></td>
      <td>
        <?php if($data['photo']!=''){ ?>
          <img height="40" src="uploads/<?= $data['photo']; ?>" alt=""/>
        <?php } else{ ?>
          <img height="40" src="uploads/avatar.png" alt=""/>
        <?php } ?>
        </td>
                                      <td>
                                          <div class="btn-group btn_group_manage" role="group">
                                            <button type="button" class="btn btn-sm btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Manage</button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="view-user.php?v=<?= $data['farmer_id']; ?>">View</a></li>
                                              <li><a class="dropdown-item" href="edit-user.php?e=<?= $data['farmer_id']; ?>">Edit</a></li>
                                              <li><a class="dropdown-item" href="delete.php?d=<?= $data['farmer_id']; ?>">Delete</a></li>
                                            </ul>   
                                          </div>
                                      </td>
                                    </tr>
                                    <?php } ?>
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