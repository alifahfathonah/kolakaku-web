<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix" style="margin-bottom:1px">
                            <div class="col-md-12">

                                <!-- Header -->
                                <div class="col-md-8">
                                    <h2>
                                        <?php echo strtoupper($header); ?>
                                        <small><?php echo $header_sub; ?></small>
                                    </h2>
                                </div>

                                <!-- Add -->
                                <div class="col-md-4">
                                    <div class="row clearfix">
                                        <div class="col-md-12">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" style="margin-bottom:0px!important"></div>
                                                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                                    <a href="javascript:void(0);" data-target="#myModalAdd" data-toggle="modal" title="Tambah Kategori" class="btn btn-primary btn-md waves-effect">
                                                        TAMBAH KATEGORI
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal Add -->
                                <div class="modal fade" id="myModalAdd" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title"><b>Tambah Kategori Baru</b></h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo form_open_multipart("admin/posts/add_category");?>
                                                    <div class="box-body">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <span class="text-danger"> *</span>
                                                            <div class="panel panel-default">
                                                                <div class="panel-body">
                                                                    <input type="text" class="form-control" placeholder="Masukkan Nama Kategori" name="name_category" required="required" autofocus>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>                                
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn bg-blue">
                                                            Tambah
                                                        </button>
                                                    </div>
                                                <?php echo form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Of Modal -->

                            </div>
                        </div>
                    </div>

                    <div class="body table-responsive">

                        <?php echo $alert ?>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <?php foreach ($table_header as $kh => $vh): ?>
                                        <th><?php echo $vh ?></th>
                                    <?php endforeach; ?>
                                    <th>Pilihan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    if (!empty($for_table)) : //if array data in not empty, show table
                                        $no=0;
                                        foreach ($for_table as $key => $value) :
                                        $no++;
                                    ?>

                                    <tr>
                                        <th scope="row">
                                            <?php echo $no?>
                                        </th>

                                        <?php foreach ($table_header as $kh => $vh): ?>
                                            <?php if($kh=='level')$value->{$kh} = ($value->{$kh}==1) ? '<span class="label label-success"> Diterima </span>' : '<span class="label label-info"> Proses </span>'; ?>
                                            <td><?php echo $value->{$kh}?></td>
                                        <?php endforeach; ?>
                                        <td>   

                                            <button class="btn btn-info btn-bold btn-md" data-target="#myModalEdit<?php echo $value->id; ?>" data-toggle="modal" title="Ubah Kategori">
                                                <i class="material-icons">mode_edit</i>
                                            </button>  
                                            
                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="myModalEdit<?php echo $value->id; ?>" role="dialog">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title"><b>Ubah Kategori</b></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?php echo form_open_multipart("admin/posts/edit_category");?>
                                                                <div class="box-body">
                                                                    <div class="form-group">
                                                                        <label>Nama</label>
                                                                        <span class="text-danger"> *</span>
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-body">
                                                                                <input type="hidden" class="form-control" value="<?php echo $value->id; ?>" name="category_id" required="required">
                                                                                <input type="text" class="form-control" value="<?php echo $value->name; ?>" placeholder="Masukkan Nama Kategori" name="name_category" required="required">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>                                
                                                                <div class="modal-footer">
                                                                    <button type="submit" class="btn btn-info">
                                                                        Ubah
                                                                    </button>
                                                                </div>
                                                            <?php echo form_close(); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Of Modal -->

                                            <button class="btn btn-danger btn-bold btn-md" data-target="#myModalDelete<?php echo $value->id; ?>" data-toggle="modal" title="Hapus Kategori">
                                                <i class="material-icons">delete</i>
                                            </button>       
                                            
                                            <!-- Modal Delete-->
                                            <div class="modal fade" id="myModalDelete<?php echo $value->id;?>" role="dialog">
                                                <div class="modal-dialog">
                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                        <?php echo form_open("admin/posts/delete_category");?>
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                <h4 class="modal-title">Hapus Kategori</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="alert alert-danger">
                                                                    Apakah anda yakin ingin menghapus Kategori
                                                                    "<b><?php echo $value->name; ?></b>" 
                                                                    ?
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <input type="hidden" class="form-control" value="<?php echo $value->id; ?>" name="category_id" required="required">
                                                                <input type="hidden" class="form-control" value="<?php echo $value->name?>" name="category_name" required="required">
                                                                <button type="submit" class="btn btn-danger">
                                                                    Ya
                                                                </button>
                                                            </div>
                                                        <?php echo form_close(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Modal Delete  -->
                                            
                                        </td>
                                    </tr>
                                <?php

                                    endforeach;

                                    else:
                                ?>
                                    <h3>Data Tidak Ditemukan</h3>
                                <?php endif; ?>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <?php if (isset($links)) echo $links?>
                        </div>
                    </div>

                </div>

            </div>
        </div>

    </div>
</section>