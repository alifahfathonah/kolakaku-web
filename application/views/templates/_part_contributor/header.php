<!DOCTYPE html>
<html>
<head>

    <!--------- Title --------->
    <title>Contributor | <?php echo $about[0]->title; ?></title>

    <!--------- Meta --------->
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!--------- Google Fonts ---------->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!--------- Beginning CSS --------->

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url(); ?>assets/tamplates/dashboard/css/themes/all-themes.css" rel="stylesheet" />

    <!-- CKEDITOR -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/ckeditor/styles.js"></script>

    <!--------- End CSS --------->

    <!--------- Javascript --------->

    <style>
        .form-group .form-line:after {
            border-bottom: 2px solid #009688;
        }
    </style>

</head>
