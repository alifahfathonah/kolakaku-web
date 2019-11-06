<section class="ptb-30">
    <div class="container">
        <div class="row">
        
            <div class="col-md-12 col-lg-8">
                
                <div class="p-30 mb-30 card-view">
                    <img src="<?php echo base_url(); ?>assets/uploads/posts/<?php echo $detail[0]->image; ?>" alt="Post Image">
                    <h3 class="mt-30 mb-5"><b><?php echo $detail[0]->title; ?></b></h3>
                    <ul class="list-li-mr-10 color-lite-black">
                        <li><i class="mr-5 font-12 ion-clock"></i>Jan 25, 2018</li>
                        <li><i class="mr-5 font-12 ion-android-person"></i>John Dowson</li>
                        <li><i class="mr-5 font-12 ion-ios-chatbubble-outline"></i>15</li>
                        <li><i class="mr-5 font-12 ion-eye"></i>105</li>
                    </ul>
                    
                    <p class="mtb-15">
                        <?php echo $detail[0]->content; ?>
                    </p>
                    
                </div><!-- card-view -->               

            </div><!-- col-sm-8 -->
            
            <div class="col-md-12 col-lg-4">
                
                <div class="mb-30 p-30 card-view">
                    <h4 class="p-title"><b>TREN</b></h4>

                    <?php foreach ($trending as $key) { ?>
                        <div class="sided-80x mb-20">
                            <div class="s-left">
                                <img src="<?php echo base_url(); ?>assets/uploads/posts/<?php echo $key->image; ?>" alt="">
                            </div><!-- s-left -->
                        
                            <div class="s-right">
                                <h5><a href="<?php echo base_url(); ?>post/<?php echo $key->slug; ?>">
                                    <b><?php echo $key->title; ?></b></a></h5>
                                <ul class="mtb-5 list-li-mr-20 color-lite-black">
                                    <li><i class="mr-5 font-12 ion-clock"></i><?php echo $key->date; ?></li>
                                    <!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
                                </ul>
                            </div><!-- s-left -->

                        </div><!-- sided-80x -->
                    <?php } ?>

                </div><!-- card-view -->
                
            </div><!-- col-sm-4 -->
        </div><!-- row -->
    </div><!-- container -->
</section>