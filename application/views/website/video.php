<?php include 'header.php';?>
    <!-- Project Start -->
  
  <section>
      <div class="container">
        <div class="row">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="text-primary text-uppercase mb-2 font">Select Category</h3>
                <div class="list-group list-group-flush">
                            <?php
                            if(!empty($catt)){
                                foreach ($catt as $rowss) { ?>
                                <a href="<?php echo site_url('Video/films_details/'.encode_id($rowss['id'],'id'))?>" class="list-group-item list-group-item-action d-flex justify-content-between p15px-tb">
                                    <div><?php echo ucwords($rowss['category'])?></div>
                                    <div><i class="ti-angle-right"></i></div>
                                </a>
                            <?php } } ?>
                        </div>
        </div>
      </div>
  </section>
    <div class="container-xxl py-5"style="background-color: #fff;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2 font">Our Works</p>
                <h1 class="display-6 mb-0">Discover Our Unique And Creative Photoshoot</h1>
            </div>
            <div class="row g-3">
              <?php  foreach ($data as $video){ ?>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                   <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                            <div class="project-item">
                                <!-- <img class="img-fluid" src="<?php //echo base_url('assets/img/project-5.jpg')?>" alt=""> -->
                                <video class="video-fluid"><source src="<?php echo base_url('assets/video/'.$video['video']);?>" type="">  </video>
                                <a class="sqs-video-icon" href="<?php echo base_url('assets/video/'.$video['video']);?>" aria-label="play" tabindex="0" role="button" style><i class="fa fa-play" aria-hidden="true" style="font-size: 50px;"></i></a>
                            </div>
                            <div class="text-center p-4">
                                    <h4><?php echo $video['name']?></h4>
                                    <h5><?php echo $video['date']?></h5>
                                    <p><?php echo $video['location']?></p>
                           </div>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <!-- Project End -->
<?php include 'footer.php';?>