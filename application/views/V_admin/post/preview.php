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
                                <small><?php echo $sub_header; ?></small>
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">

                                    <div class="col-md-12">
                                        <img src="<?php echo base_url(); ?>assets/uploads/posts/<?php echo $post[0]->image; ?>" class="img-resposive center" width="50%"> 
                                    </div>

                                    <!-- Post Title -->
                                    <div class="col-md-12">
                                        <label for="post_title">Judul</label>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <?php echo $post[0]->title; ?>
                                            </div>
                                        </div>
                                        <label for="post_content">Isi</label>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <?php echo $post[0]->content; ?>
                                            </div>
                                        </div>
                                        <label for="post_content">Kategori</label>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <?php

                                                    foreach ($post_category as $key) {
                                                        if ($key->id === $post[0]->id_category) {
                                                            echo $key->name;
                                                        }
                                                    }
                    
                                                ?>
                                            </div>
                                        </div>
                                    </div>                                   

                                </div>
                                <div class="col-md-12">
                                    <button type="reset" onclick="window.location.href='<?php echo base_url();?>admin/posts/pending'" class="btn btn-default btn-lg waves-effect">Kembali</button>
                                    <button class="btn bg-red btn-lg waves-effect" data-target="#myModalReject" data-toggle="modal" title="Tolak Berita">Tolak</button>
                                    <button class="btn bg-blue btn-lg waves-effect" data-target="#myModalAccept" data-toggle="modal" title="Setujui Berita">Setujui</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->

            <!-- Modal Accept -->
            <div class="modal fade" id="myModalAccept" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>Terima Post (Berita)</b></h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart("admin/posts/accept");?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <input type="hidden" class="form-control"  value='<?php echo $post[0]->id_contributor; ?>' name="id_contributor" required="required" readonly>
                                        <input type="hidden" class="form-control"  value='<?php echo $post[0]->id; ?>' name="id_post" required="required" readonly>
                                        <label>Poin</label>
                                        <span class="text-danger"> *</span>
                                        <select class="form-control show-tick" name="point">
                                            <option value="50000">Rp. 50.000</option>
                                            <option value="75000">Rp. 75.000</option>
                                            <option value="100000">Rp. 100.000</option>
                                            <option value="150000">Rp. 150.000</option>
                                            <option value="250000">Rp. 250.000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <span class="text-danger"> *</span>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <textarea class="form-control" name="message" placeholder="Masukkan Pesan Buat Contributor" rows="5" required="required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn bg-blue">
                                        Terima
                                    </button>
                                    <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">
                                        &nbsp;Batal
                                    </button> -->
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Modal -->

            <!-- Modal Reject -->
            <div class="modal fade" id="myModalReject" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><b>Tolak Post (Berita)</b></h4>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart("admin/posts/reject");?>
                                <div class="box-body">
                                    <div class="form-group">
                                        <label>Pesan</label>
                                        <span class="text-danger"> *</span>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <input type="hidden" class="form-control"  value='<?php echo $post[0]->id; ?>' name="id_post" required="required" readonly>
                                                <textarea class="form-control" name="message" placeholder="Masukkan Pesan Buat Contributor" rows="5" required="required"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="modal-footer">
                                    <button type="submit" class="btn bg-red">
                                        Tolak
                                    </button>
                                    <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">
                                        &nbsp;Batal
                                    </button> -->
                                </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Modal -->

        </div>
    </section>