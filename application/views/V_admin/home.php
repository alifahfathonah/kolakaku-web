<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2><?php echo strtoupper($page_title); ?></h2>
        </div>

        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">person</i>
                    </div>
                    <div class="content">
                        <div class="text">CONTRIBUTOR</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $count_contributor; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment_late</i>
                    </div>
                    <div class="content">
                        <div class="text">KONFIRMASI</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $count_pending_post; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-amber hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="content">
                        <div class="text">POST</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $count_post; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">library_books</i>
                    </div>
                    <div class="content">
                        <div class="text">KATEGORI</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $count_post_category; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->

    </div>
</section>

