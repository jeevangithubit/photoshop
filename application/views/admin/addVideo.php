<?php
include('header.php');
?>
 <!-- Mobile Menu end -->
 
  <div class="container" style="background-color: #9de4f9;">
    <div class="row">
      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Add New Post</h4>
          <a class="btn btn-warning" href="<?php echo site_url('Admin/video'); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>

        <form method="post" action="<?php echo site_url('Admin/view_video'); ?>" enctype="multipart/form-data" style="margin-left: 220px;">
          
          <div class="form-group">
            <label style="font-weight: 700;">Select Video</label>
            <input class="form-control" type="file" name="video" required>
          </div>
          
           <div class="form-group">
            <label style="font-weight: 700;">Category</label>
             <select id="category" name="category" class="form-control">
                <option value="">Select Category</option>
                <?php
                  foreach ($cat as $rows) {
                ?>
                <option value="<?php echo $rows['id'];?>"><?php echo $rows['category'];?></option>
                <?php
                  }
                ?>
            </select>
          </div>

          <div class="form-group">
            <label style="font-weight: 700;">Couple Name</label>
            <input class="form-control" type="text" name="name" required>
          </div>
           <div class="form-group">
            <label style="font-weight: 700;">Wedding Date</label>
            <input class="form-control" type="date" name="date" required>
          </div>

          <div class="form-group">
            <label style="font-weight: 700;">Location</label>
            <textarea class="form-control" name="location" required></textarea>
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