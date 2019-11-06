<body class="theme-teal">

    <!--------------------------------- Beginning Page Loader --------------------------------->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-teal">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please Wait...</p>
        </div>
    </div>
    <!--------------------------------- End Page Loader --------------------------------->

    <!--------------------------------- Beginning Overlay For Sidebars --------------------------------->
    <div class="overlay"></div>
    <!--------------------------------- End Overlay For Sidebars --------------------------------->

    <!--------------------------------- Beginning Search Bar --------------------------------->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!--------------------------------- End Search Bar --------------------------------->

    <!--------------------------------- Beginning Side Bar --------------------------------->

    <section>

        <!--------------------------------- Beginning Left Sidebar --------------------------------->

        <aside id="leftsidebar" class="sidebar">

            <!-- Beginning User Info -->
            <div class="user-info">
                <div class="image">
                    <?php if ($this->session->userdata('user_image')) { ?>
                        <img src="<?php echo base_url();?>assets/uploads/profile/<?php echo $this->session->userdata('user_image'); ?>" width="48" height="48" alt="User" />
                    <?php } else { ?>
                        <img src="<?php echo base_url();?>assets/uploads/profile/user-default.png" width="48" height="48" alt="User" />
                    <?php } ?>
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo ucwords($this->session->userdata('user_profile_name')); ?></div>
                    <div class="email"><?php echo $this->session->userdata('email'); ?></div>
                </div>
            </div>
            <!-- End User Info -->
            
            <!-- Beginning Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="<?php if($this->uri->segment(2)==''){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>contributor">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='posts'){echo "active";}?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Post</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if($this->uri->segment(3)=='add'){echo "active";}?>">
                                <a href="<?php echo base_url(); ?>contributor/posts/add">
                                    <span>Kirim Berita Baru</span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->segment(3)==''){if($this->uri->segment(2)=='posts') echo "active"; else echo "";} ?>">
                                <a href="<?php echo base_url(); ?>contributor/posts">
                                    <span>Berita Saya</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">OTHER</li>
                    <li class="<?php if($this->uri->segment(2)=='settings'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>contributor/settings">
                            <i class="material-icons">settings</i>
                            <span>Pengaturan</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>logout">
                            <i class="material-icons">logout</i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- End Menu -->

            <!-- Beginning Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="<?php echo base_url(); ?>" target="_blank"><?php echo $about[0]->company; ?></a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- End Footer -->

        </aside>

        <!--------------------------------- End Left Sidebar --------------------------------->

    </section>

    <!--------------------------------- End Side Bar --------------------------------->
