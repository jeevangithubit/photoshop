<?php include 'header.php';?>
  <div class="container">
    <div class="row">

      <div class="col-lg-12" style="margin-top: -46px;">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="d-flex justify-content-between mb-3">
          <h4>Manage Posts</h4>
          <a href="<?php echo site_url('Admin/addVideo');?>" class="btn btn-success"> <i class="fas fa-plus"></i> Add New Post</a>
        </div>

        <table class="table table-bordered table-default">

          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Image</th>
              <th>Category</th>
              <th>Coupel Name</th>
              <th>Location</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; 
            $category=array();
            foreach ($cat as $rows) { $category[$rows['id']]=$rows['category']; }
            foreach ($data as $value) { 
             $cat=$this->model->get_all_record('category');
              ?>

              <tr>
                <td><?php echo $i; ?></td>
                <td><video height="80px" width="140px" controls><source src="<?php echo base_url('assets/video/'.$value['video']);?>" type="">  </video></td>
                <td><?php echo $category[$value['category_id']] ?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['location']?></td>
                <td><?php echo $value['date']?></td>

                <td>
                  <a href="<?php echo site_url('Admin/delete/'.$value['id'].'/video/project') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?');"><i class="fas fa-trash"></i></a>
                  <a href="<?php echo site_url('Admin/editVideo/'.$value['id']);?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                 
                </td>

              </tr>

            <?php $i++; } ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>
    <?php include 'footer.php';?>