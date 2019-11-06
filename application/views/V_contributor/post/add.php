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

                        <div class="header bg-teal">
                            <h2>
                                <?php echo strtoupper($page_title); ?>
                                <small>Masukkan Data Yang Valid </small>
                            </h2>
                        </div>
                        <div class="body">
                            <?php echo form_open_multipart(''); ?>
                                <div class="row clearfix">
                                    <div class="col-md-12">

                                        <!-- Post Title -->
                                        <div class="col-md-12">
                                            <label for="post_title">Judul</label>
                                            <span class='text-danger'> *</span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" id="post_title" class="form-control" name="post_title" placeholder="Masukkan Judul Berita" value="<?php echo set_value('post_title'); ?>">
                                                </div>
                                                <span class='text-danger'>
                                                    <?php echo form_error('post_title'); ?>
                                                </span>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="post_content">Isi</label>
                                            <span class='text-danger'> *</span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <textarea name="post_content" class="form-control" id="ckeditor" cols="30" rows="20"><?php echo set_value('post_content'); ?></textarea>
                                                </div>
                                                <span class='text-danger'><?php echo form_error('post_content'); ?></span>
                                            </div>
                                        </div>

                                        <script>
                                            var ckeditor = CKEDITOR.replace('ckeditor');
                                        </script>

                                        <!-- Category -->
                                        <div class="col-md-12">
                                            <label for="post_category_id">Kategori</label>
                                            <span class='text-danger'> *</span>
                                            <select class="form-control show-tick" name="post_category_id">
                                                <?php foreach ($post_category as $key) { ?>
                                                    <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>                                         

                                        <!-- Cover -->
                                        <div class="col-md-12">
                                            <label for="post_image">Sampul (Cover)</label>
                                            <span class='text-danger'> *</span>
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="file" id="post_image" class="form-control" name="userfile">
                                                </div>
                                                <span class='text-danger'><?php echo form_error('userfile'); ?></span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-teal btn-lg waves-effect">Tambah</button>
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