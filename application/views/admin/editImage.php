
<?php
include('header.php');
?>
 <!-- Mobile Menu end -->
 
  <div class="container" style="background-color: #9de4f9;">
    <div class="row">

      <div class="col-lg-12 my-5">
        <!-- <h2 class="text-center mb-3">Codeigniter 3 CRUD (Create-Read-Update-Delete) Application</h2> -->
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Update post</h4>
          <a class="btn btn-warning" href="<?php echo site_url('Admin/image'); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div>
 
        <form method="post" action="<?php echo site_url('Admin/updateImage'); ?>" enctype="multipart/form-data" style="margin-left: 220px;">
          <?php
            foreach ($data as $value) {
          ?>
            <input type="hidden" name="id" value="<?php echo $value['id'];?>">
          <div class="form-group">
            <label style="font-weight: 700;">Image</label>
            <input class="form-control" id="image" type="file" name="image" value="<?php echo $value['image'];?>">
          </div>

          <div class="form-group">
            <label style="font-weight: 700;">Couple Name</label>
            <input class="form-control" type="text" id="name" name="name" value="<?php echo $value['name'];?>">
          </div>

          <div class="form-group">
            <label style="font-weight: 700;">Location</label>
            <textarea class="form-control" id="location"  name="location"><?php echo $value['location'];?></textarea>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>
         <?php }?>
        </form>
      </div>
    </div>
  </div>
<?php
include('footer.php');

?>
