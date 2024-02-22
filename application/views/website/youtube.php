<?php
// API config 
$API_Key    = 'AIzaSyAdryK1Vy-ICp_aRxLGPnw1hjVHdXNAevk'; 
$Channel_ID = 'UC7ZbmldcUo8VV8RRi4-41fg'; 
$Max_Results = 10; 
 
// Get videos from channel by YouTube Data API 
$apiError ='video notfound!';
    try{
       $apiData = @file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$Channel_ID.'&maxResults='.$Max_Results.'&key='.$API_Key.''); 
    if($apiData){ 
        $videoList = json_decode($apiData); 
    }else{ 
        echo 'Invalid API key or channel ID.'; 
    } 

    }catch (Exception $e){
        $apiError = $e->getMessage();
}




?>

<?php include 'header.php';?>

    <!-- Service Start -->
    <div class="container-xxl py-5" style="background-color: #fff;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2 font">Our Photography</p>
                <h1 class="display-6 mb-4">We Provide Best Professional Photography</h1>
            </div>
            <div class="row g-3">
               <?php
                if(!empty($videoList->items)){ 
                  foreach($videoList->items as $item){ 
                    // Embed video 
                    if(isset($item->id->videoId)){ 
              ?>
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column bg-light p-3 pb-0">
                        <div class="position-relative">
                          <iframe width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $item->id->videoId; ?>" frameborder="0" allowfullscreen></iframe> 
                        </div>
                        <!--<div class="text-center p-4">-->
                        <!-- <h4><?php //echo $item->snippet->title; ?></h4> -->
                        <!--</div>-->
                   </div>
                </div>
                <?php
                      } 
                   } 
                    }else{ 
                        echo '<p class="error">'.$apiError.'</p>'; 
                   }
                ?>
            </div>
        </div>
    </div>
    <!-- Service End -->

<?php include 'footer.php';?>