<?php include 'header.php';?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="d-flex justify-content-between mb-3">
          <h4>Manage Posts</h4>
          <a href="<?php echo site_url('Admin/addCategory');?>" class="btn btn-success"> <i class="fas fa-plus"></i> Add Category</a>
        </div>

        <table class="table table-bordered table-default">

          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Category</th>
              <th>Date</th>        
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; foreach ($cat as $value) { ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['category']?></td>
                <td><?php echo $value['date']?></td>

                <td>
                  <a href="<?php echo site_url('Admin/delete/'.$value['id'].'/category/category') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?');"><i class="fas fa-trash"></i></a>
                  <a href="<?php echo site_url('Admin/editPhotos/'.$value['id']);?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                 
                </td>

              </tr>

            <?php $i++; } ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
 
    <?php include 'footer.php';?>
