<?php include 'header.php';?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <?php echo $this->session->flashdata('message'); ?>

        <div class="d-flex justify-content-between mb-3">
          <h4>Manage Enquiry</h4>
        </div>

        <table class="table table-bordered table-default">

          <thead class="thead-light">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>Wedding Dates</th>        
              <th>Event Details</th>
               <th>Action</th>
            </tr>
          </thead>

          <tbody>

            <?php $i = 1; foreach ($data as $value) { ?>
              
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['email']?></td>
                <td><?php echo $value['phone']?></td>
                <td><?php echo $value['date']?></td>
                <td><?php echo $value['details']?></td>

                <td>
                  <a href="<?php echo site_url('Admin/delete/'.$value['id'].'/contact/contact') ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this entry?');"><i class="fas fa-trash"></i></a>
                </td>

              </tr>

            <?php $i++; } ?>

          </tbody>
        </table>

      </div>
    </div>
  </div>
 
    <?php include 'footer.php';?>
