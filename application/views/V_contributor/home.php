    <section class="content">
        <div class="container-fluid">
            
            <div class="block-header">
                <h2><?php echo strtoupper($page_title); ?></h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance_wallet</i>
                        </div>
                        <div class="content">
                            <div class="text">POIN</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $point; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="info-box bg-deep-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <div class="content">
                            <div class="text">BERITA SAYA</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $post; ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->

        </div>
    </section>