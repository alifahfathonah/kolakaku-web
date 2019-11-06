<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title><?php echo $page; ?> | <?php echo $about[0]->title; ?></title>
        
        <!-- Meta Data -->
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <meta name="author" content="A.N Author">
        <meta name="description" content="Portal Berita">
        <meta name="keywords" content="Berita, Tren, Kolaka, Informasi">
        <meta name="robots" content="noindex,nofollow">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600,700" rel="stylesheet">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/uploads/about/<?php echo $about[0]->logo; ?>"/>

        <!-- Css -->
        <link href="<?php echo base_url(); ?>assets/tamplates/landing-page/plugin-frameworks/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/tamplates/landing-page/fonts/ionicons.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/tamplates/landing-page/common/styles.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/tamplates/landing-page/css/custom.css" rel="stylesheet">

        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>assets/tamplates/landing-page/js/datetime.js"></script>

    </head>
    <body onload="startTime()">

        <!-- START OF NAVBAR -->
        <header>
            <div class="top-header">
                <div class="container">	
                    <div class="oflow-hidden font-9 text-sm-center ptb-sm-5">
                    
                        <ul class="float-left float-sm-none list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-10 list-a-ptb-xs-5">
                            <li><a href="#" id="date"></a></li>
                            <li><a href="#" id="time"></a></li>
                        </ul>
                        <ul class="float-right float-sm-none font-13 list-a-plr-10 list-a-plr-sm-5 list-a-ptb-15 list-a-ptb-sm-5 color-ash">
                            <li><a class="pl-0 pl-sm-10" href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-pinterest"></i></a></li>
                            <li><a href="#"><i class="ion-social-google"></i></a></li>
                            <li><a href="#"><i class="ion-social-rss"></i></a></li>
                        </ul>
                        
                    </div><!-- top-menu -->
                </div><!-- container -->
            </div><!-- top-header -->
            
            <div class="middle-header mtb-20 mt-xs-0">
                <div class="container">	
                    <div class="row">
                    
                        <div class="col-sm-4">
                            <a class="logo" href="#"><img src="<?php echo base_url(); ?>assets/uploads/about/<?php echo $about[0]->logo; ?>" alt="Logo"></a>
                        </div><!-- col-sm-4 -->
                        
                        <div class="col-sm-8">
                            <!-- Bannner bg -->
                            <div class="banner-area dplay-tbl plr-30 plr-md-10 color-white">
                                <div class="ptb-sm-15 dplay-tbl-cell">
                                    <h5>kolakaku.com</h5>
                                    <h6>Media Online Terpercaya Kolaka</h6>
                                </div><!-- left-area -->
                                
                                <div class="dplay-tbl-cell text-right min-w-100x">
                                    <a class="btn-fill-white btn-b-sm plr-10" href="#">READ MORE</a>
                                </div><!-- right-area -->
                            </div><!-- banner-area -->
                        </div><!-- col-sm-4 -->
                        
                    </div><!-- row -->
                </div><!-- container -->
            </div><!-- top-header -->
            
            <div class="bottom-menu">
                <div class="container">
                    
                    <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>
                    
                    <ul class="main-menu" id="main-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>">BERANDA</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>learn_journalist">BELAJAR JURNALIS</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>contact">KONTAK</a>
                        </li>
                        <li class="float-right">
                            <a href="<?php echo base_url(); ?>login">MASUK</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div><!-- container -->
            </div><!-- bottom-menu -->
        </header>
        <!-- END OF NAVBAR -->