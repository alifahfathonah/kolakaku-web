<!DOCTYPE html>
<html>
<head>

    <!--------- Title --------->
    <title>Login | <?php echo $about[0]->title; ?></title>

    <!--------- Meta --------->
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="<?php echo base_url(); ?>assets/uploads/about/<?php echo $about[0]->logo; ?>"/>

    <!--------- CSS --------->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tamplates/login-page/css/main.css">
    <style>
        .focus-input100 {
            border: 1px solid #1683e9;
        }
        .btn-show-pass:hover {
            color: #1683e9;
        }
        .login100-form-btn {
            background-color: #1683e9;
        }
        .input-checkbox100:checked + .label-checkbox100::before {
            color: #1683e9;
        }
        .login100-form-btn:hover {
            background-color: #7eaad3;
        }
        a:hover {
            color: #7eaad3;
        }
		.validation > p {
			color: #ff0000;
		}
    </style>

</head>

<body>