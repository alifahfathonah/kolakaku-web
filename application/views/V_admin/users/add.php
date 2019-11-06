<section class="content">
    <div class="container-fluid">
        
        <!-- Input -->
        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <?php
                    if($this->session->flashdata('alert')) {
                        echo $this->session->flashdata('alert');
                    }
                ?>

                <div class="card">

                    <div class="header bg-blue">
                        <h2>
                            <?php echo strtoupper($page_title); ?>
                            <!-- <small>Masukkan Data Yang Valid (Sesuai Dengan Kartu Tanda Penduduk)</small> -->
                        </h2>
                    </div>
                    <div class="body">
                        <?php echo form_open_multipart(''); ?>
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <!-- Role -->
                                    <div class="col-md-12">
                                        <label for="role">Hak Akses</label>
                                        <span class='text-danger'> *</span>
                                        <select class="form-control show-tick" name="role">
                                            <option value="3" selected>Contributor</option>
                                        </select>
                                    </div>

                                    <!-- First and Last Name -->
                                    <div class="col-md-6">
                                        <label for="first_name">Nama Depan</label>
                                        <span class='text-danger'> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Masukkan Nama Depan" value="<?php echo set_value('first_name'); ?>">
                                            </div>
                                            <span class='text-danger'>
                                                <?php echo form_error('first_name'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="last_name">Nama Belakang</label>
                                        <span class='text-danger'> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Masukkan Nama Belakang" value="<?php echo set_value('last_name'); ?>">
                                            </div>
                                            <span class='text-danger'>
                                                <?php echo form_error('last_name'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <span class='text-danger'> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="email" class="form-control" name="email" placeholder="Masukkan Alamat Email" value="<?php echo set_value('email'); ?>">
                                            </div>
                                            <span class='text-danger'><?php echo form_error('email'); ?></span>
                                        </div>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-12">
                                        <label for="phone">Nomor Handphone</label>
                                        <span> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="phone" class="form-control" name="phone" placeholder="Masukkan Nomor Handphone" value="<?php echo set_value('phone'); ?>">
                                            </div>
                                            <span class='text-danger'><?php echo form_error('phone'); ?></span>
                                        </div>
                                    </div>

                                    <!-- Password adn Re-Password -->
                                    <div class="col-md-6">
                                        <label for="password">Kata Sandi</label>
                                        <span class='text-danger'> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi" value="<?php echo set_value('password'); ?>">
                                            </div>
                                            <span class='text-danger'><?php echo form_error('password'); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="password_confirm">Ulang Kata Sandi</label>
                                        <span class='text-danger'> *</span>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" id="password_confirm" class="form-control" name="password_confirm" placeholder="Masukkan Ulang Kata Sandi" value="<?php echo set_value('password_confirm'); ?>">
                                            </div>
                                            <span class='text-danger'><?php echo form_error('password_confirm'); ?></span>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn bg-blue btn-lg waves-effect">Tambah</button>
                                    <!-- <button type="reset" onclick="window.location.href='<?php //echo base_url();?>admin/patient'" class="btn btn-default btn-lg waves-effect">Kembali</button> -->
                                </div>
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Input -->

    </div>
</section>