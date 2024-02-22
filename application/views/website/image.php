
<?php include 'header.php';?>
  <section>
      <div class="container">
        <div class="row">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="text-primary text-uppercase mb-2 font">Select Category</h3>
                <div class="list-group list-group-flush">
                            <?php
                            if(!empty($catt)){
                                foreach ($catt as $rowss) { ?>
                                <a href="<?php echo site_url('Images/image_details/'.encode_id($rowss['id'],'id'))?>" class="list-group-item list-group-item-action d-flex justify-content-between p15px-tb">
                                    <div><span><?php echo ucwords($rowss['category'])?></span></div>
                                    <div><i class="ti-angle-right"></i></div>
                                </a>
                            <?php } } ?>
                        </div>
        </div>
      </div>
  </section>
    <!-- Service Start -->
    <div class="container-fluid page-top">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-4">Stories from WeddingFilmz | Wedding Photos</h1>
            <p class="text-dark text-uppercase mb-2 font">We try to explain the story of each wedding through our creativity and vision.</p>
           
          </div>
	<div class="row no-gutters">
	    <?php foreach ($data as $services){ ?>
		<div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <div class="service-item d-flex flex-column bg-light">
                <div class="position-relative">
                    <img class="img-fluid1" src="<?php echo base_url('assets/uploads/'.$services['image']);?>" alt="" style="width:100%; ">
                    <div class="service-overlay">
                         <div class="text-center p-4">
                            <h4 class="text-light"><?php echo $services['name']?></h4>
                            <h5 class="text-light"><?php echo $services['date']?></h5>
                            <p class="text-light"><?php echo $services['location']?></p>
                          </div>
                    </div>
                </div>
            </div>
		  </div>
	  <?php }?>
	</div>

</div>
    <!--<div class="container-xxl py-5">-->
    <!--    <div class="container">-->
    <!--        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">-->
    <!--            <p class="text-primary text-uppercase mb-2 font">Our Photography</p>-->
    <!--            <h1 class="display-6 mb-4">We Provide Best Professional Photography</h1>-->
    <!--        </div>-->
    <!--        <div class="row g-3">-->
    <!--            <?php foreach ($data as $services){ ?>-->
               
    <!--            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">-->
    <!--                <div class="service-item d-flex flex-column bg-light p-3 pb-0">-->
    <!--                    <div class="position-relative">-->
    <!--                        <img class="img-fluid" src="<?php echo base_url('assets/uploads/'.$services['image']);?>" alt="">-->
    <!--                        <div class="service-overlay">-->
    <!--                            <a class="btn btn-lg-square btn-outline-light rounded-circle" href="<?php echo base_url('assets/uploads/'.$services['image']);?>"><i class="fa fa-link text-primary"></i></a>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                    <div class="text-center p-4">-->
    <!--                        <h4><?php echo $services['name']?></h4>-->
    <!--                        <h5><?php echo $services['date']?></h5>-->
    <!--                        <p><?php echo $services['location']?></p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        <?php }?>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!-- Service End -->

<?php include 'footer.php';?>
    


    