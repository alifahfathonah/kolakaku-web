        <!-- START OF NEWS FIRST -->
        <section class="">
            <div class="container">
                <div class="row">
                
                    <div class="col-md-12 col-lg-8">
                        <div class="mb-30 p-30 ptb-sm-25 plr-sm-15 card-view">
                            <h4 class="p-title"><b>BERITA TERBARU</b></h4>
                            <img src="<?php echo base_url(); ?>assets/uploads/posts/<?php echo $latestSingle[0]->image; ?>" alt="Post Image">
                            <h3 class="mt-30">
                                <a href="<?php echo base_url(); ?>post/<?php echo $latestSingle[0]->slug; ?>">
                                    <?php echo $latestSingle[0]->title; ?>
                                </a>
                            </h3>
                            <ul class="mtb-10 list-li-mr-20 color-lite-black">
                                <li><i class="mr-5 font-12 ion-clock"></i><?php echo $latestSingle[0]->date; ?></li>
                                <li><i class="mr-5 font-12 ion-android-person"></i><?php echo $latestSingle[0]->username; ?></li>
                            </ul>
                            <p>
                                <?php echo substr($latestSingle[0]->content, 0, 300)." ..."; ?>
                            </p>
                        </div><!-- bg-white -->

                        <?php foreach ($latest as $key) { ?>

                            <div class="mb-30 sided-250x card-view">
                                <div class="s-left">
                                    <img src="<?php echo base_url(); ?>assets/uploads/posts/<?php echo $key->image; ?>" alt="">
                                </div><!-- left-area -->
                                <div class="s-right ptb-50 p-sm-20 pb-sm-5 plr-30 plr-xs-0">
                                    <h4><a href="<?php echo base_url(); ?>post/<?php echo $key->slug; ?>"><?php echo $key->title; ?></a></h4>
                                    <ul class="mtb-10 list-li-mr-20 color-lite-black">
                                        <li><i class="mr-5 font-12 ion-clock"></i><?php echo $key->date; ?></li>
                                        <li><i class="mr-5 font-12 ion-android-person"></i><?php echo $key->username; ?></li>
                                    </ul>
                                </div><!-- right-area -->
                            </div><!-- sided-250x -->
                        
                        <?php } ?>
                        
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
                                        <h5>
                                            <a href="<?php echo base_url(); ?>post/<?php echo $key->slug; ?>">
                                                <b><?php echo $key->title; ?></b></a>
                                            </h5>
                                        <ul class="mtb-5 list-li-mr-20 color-lite-black">
                                            <li><i class="mr-5 font-12 ion-clock"></i><?php echo $key->date; ?></li>
                                            <!-- <li><i class="mr-5 font-12 ion-eye"></i>105</li> -->
                                        </ul>
                                    </div><!-- s-left -->

                                </div><!-- sided-80x -->
                                
                            <?php } ?>
                            
                        </div><!-- card-view -->

                        <div class="mb-30 mt-md-30 p-30 card-view">
                            <h6><center><b>- Advertisement -</b></center></h6>
                            <div class="mb-15 mt-15">
                                <a href="#">
                                    <img src="https://kolakaku.com/wp-content/uploads/2019/08/WhatsApp-Image-2019-07-30-at-18.46.53.jpeg" alt="">
                                </a>
                            </div>
                        </div>
                        
                    </div><!-- col-sm-4 -->
                </div><!-- row -->
            </div><!-- container -->
        </section>
        <!-- END OF NEWS FIRST -->

        

        