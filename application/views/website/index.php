<!-- Header start -->
    <div class="container hero-header bg-light py-5 mb-5" style="max-width:1400px; margin-top: 100px;">
        <div class="container" style="max-width:1400px;">
            <div class="breadcumb-content" style="background-image:url('<?php echo base_url('assets/img/photo1.jpg')?>'); height:400px;">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12">
                    
                    <p class="text-light text-uppercase mb-2 font animated slideInDown font">Welcome To Weddingfilmz</p>
                    <h1 class=" text-light display-4 mb-3 animated slideInDown">Wedding And Portrait Studio Based in India</h1>
                    <p class=" text-light animated slideInDown">Imagine waking up to a job that lifts you up and transports you to a different world. A world populated with a billion heartfelt feelings and stories etched ceremoniously in magic, love and joie de vivre. Perfect with its Disney-like happy endings, sworn vows and the promises of forever. This is our world. The Wedding Story world!</p>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-light py-3 px-4 me-5">Explore More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- Header End --> 

<!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

   <!-- Service Start -->
    <div class="container-fluid1 page-top">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-4">Stories from WeddingFilmz | Wedding Photos</h1>
            <p class="text-dark text-uppercase mb-2 font">We try to explain the story of each wedding through our creativity and vision.</p>
           
          </div>
	 <div class="row no-gutters">
	    <?php foreach ($data as $services){ ?>
		<div class="col-lg-4 col-md-4 col-xs-6 thumb">
            <div class="service-item d-flex flex-column bg-light">
                <div class="position-relative">
                    <img class="img-fluid" src="<?php echo base_url('assets/uploads/'.$services['image']);?>" alt="" style="width:100%;     aspect-ratio: 3/2;">
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
    <!-- Service End -->
    
    
        <!-- Background video -->
    <div class="container-fluid1 page-top">
      <div class="breadcumb-content" style="background-image:url('<?php echo base_url('assets/img/photo1.jpg')?>'); height:400px; ">
	    <div class="row no-gutters">
		    <div class="col-lg-12 col-md-12 col-xs-6 thumb">
            </div>
		</div>
      </div>
    </div>
       
        <!-- End -->

    

  
