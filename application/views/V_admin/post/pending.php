<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix" style="margin-bottom:-30px">

                            <!-- Header -->
                            <div class="col-md-12">
                                <h2>
                                    <?php echo strtoupper($header); ?>
                                    <small><?php echo $header_sub; ?></small><br>
                                </h2>
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
                                        <td style="text-align:center">   
                                            <button class="btn btn-info btn-bold btn-md" title="Tinjau Berita" onclick="window.location.href='<?php echo site_url($parent_page.'/preview?post_id='.$value->id)?>'">
                                                Tinjau
                                            </button>                                    
                                        </td>
                                    </tr>
                                <?php

                                    endforeach;

                                    else:
                                ?>
                                    <h3>Data Pending Tidak Ditemukan</h3>
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