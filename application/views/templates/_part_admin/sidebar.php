<body class="theme-blue">

    <!--------------------------------- Beginning Page Loader --------------------------------->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
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
                    <img src="<?php echo base_url();?>assets/uploads/profile/<?php echo $this->session->userdata('user_image'); ?>" width="48" height="48" alt="User" />
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
                        <a href="<?php echo base_url(); ?>admin">
                            <i class="material-icons">home</i>
                            <span>Beranda</span>
                        </a>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='users'){echo "active";}?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Pengguna</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if($this->uri->segment(3)=='add'){if($this->uri->segment(2)=='users') echo "active"; else echo "";} ?>">
                                <a href="<?php echo base_url(); ?>admin/users/add">
                                    <span>Tambah Pengguna Baru</span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->segment(3)=='contributor'){echo "active";}?>">
                                <a href="<?php echo base_url(); ?>admin/users/contributor">
                                    <span>Contributor</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="<?php if($this->uri->segment(2)=='posts'){echo "active";}?>">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Post</span>
                            <?php if ($count_pending_post) { ?>
                                <span style="color: white; border-radius: 25px;" class="float-right label label-danger"><?php echo $count_pending_post; ?></span>
                            <?php } ?>
                        </a>
                        <ul class="ml-menu">
                            <li class="<?php if($this->uri->segment(3)=='pending' || $this->uri->segment(3)=='preview'){echo "active";}?>">
                                <a href="<?php echo base_url(); ?>admin/posts/pending">
                                    <span>Konfimasi</span>
                                    <?php if ($count_pending_post) { ?>
                                        <span style="color: white; border-radius: 25px;" class="float-right label label-danger"><?php echo $count_pending_post; ?></span>
                                    <?php } ?>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->segment(3)==''){if($this->uri->segment(2)=='posts') echo "active"; else echo "";} ?>">
                                <a href="<?php echo base_url(); ?>admin/posts">
                                    <span>List</span>
                                </a>
                            </li>
                            <li class="<?php if($this->uri->segment(3)=='category'){echo "active";}?>">
                                <a href="<?php echo base_url(); ?>admin/posts/category">
                                    <span>Ketegori</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="header">OTHER</li>
                    <li class="<?php if($this->uri->segment(2)=='settings'){echo "active";}?>">
                        <a href="<?php echo base_url(); ?>admin/settings">
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
