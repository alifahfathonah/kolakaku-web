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