<?php
include('header.php');
?>
  <div class="container">
    <div class="row">
      <div class="col-lg-12"  style="background-color: #9de4f9;">

        <div class="d-flex justify-content-between ">
          <h4>Add New Catrgory</h4>
          <a class="btn btn-warning" href="<?php echo site_url('Admin/category'); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo site_url('Admin/view_category'); ?>" style="margin-left: 220px;" >

          <div class="form-group">
            <label style="font-weight: 700;">Category</label>
            <input class="form-control" type="text" name="category" required>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>
<?php
include('footer.php');

?>