<section class="content">
    <div class="container-fluid">

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="card">
                    <div class="header">
                        <div class="row clearfix" style="margin-bottom:-30px">

                            <!-- Header -->
                            <div class="col-md-6">
                                <h2>
                                    <?php echo strtoupper($header); ?>
                                    <small><?php echo $header_sub; ?></small>
                                </h2>
                            </div>

                            <!-- Pagination & Search Form -->
                            <div class="col-md-6">
                                <div class="row clearfix">
                                    
                                    <!-- Pagination -->
                                    <div class="col-md-2">
                                        <div class="row clearfix">
                                            <select class="form-control show-tick" id="limit" name="" onchange="changeLimit()">
                                                <option value="10">10</option>
                                                <option value="20">20</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Search -->
                                    <div class="col-md-10">
                                        <form method="get" action="<?php echo site_url($current_page)?>">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12" style="margin-bottom:0px!important">
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input type="text" name="key" required class="form-control" placeholder="Pencarian" value="<?php echo ($key) ? $key : '' ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="btn-group">
                                                        <button type="submit" class="btn btn-warning btn-md m-l-15 waves-effect"><i class="material-icons">search</i></button>
                                                    </div>
                                                    <a href="<?php echo site_url($current_page); ?>" type="button" class="btn btn-primary btn-md m-l-15 waves-effect"><i class="material-icons">refresh</i> Refresh</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                 </div>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    if (!empty($for_table)) : //if array data in not empty, show table
                                        $no=$number;
                                        foreach ($for_table as $key => $value) :
                                        $no++;
                                    ?>

                                    <tr>
                                        <th scope="row">
                                            <?php echo $no?>
                                        </th>

                                        <?php foreach ($table_header as $kh => $vh): ?>
                                            <?php if($kh=='active')$value->{$kh} = ($value->{$kh}==1) ? 'Active': 'Non-Active'; ?>
                                            <td><?php echo $value->{$kh}?></td>
                                        <?php endforeach; ?>

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