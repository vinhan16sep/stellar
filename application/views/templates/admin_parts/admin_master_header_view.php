<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
        <meta name="author" content="GeeksLabs">
        <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
        <link rel="shortcut icon" href="img/favicon.png">

        <title><?php echo $page_title; ?></title>

        <!-- Bootstrap CSS -->    
        <link type="text/css" rel="stylesheet" href="<?php echo site_url('assets/admin/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css') ?>/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css') ?>/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css') ?>/AdminLTE.css">
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css') ?>/blue.css">
        <link rel="stylesheet" href="<?php echo site_url('assets/admin/css') ?>/skin-black-light.css">



        <!-- Custom styles -->
        <link href="<?php echo site_url('assets/admin/css/style-responsive.css'); ?>" rel="stylesheet" />	
        <link href="<?php echo site_url('assets/admin/css/jquery-ui-1.10.4.min.css'); ?>" rel="stylesheet">
    </head>

<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">
<!-- <?php if ($this->ion_auth->logged_in()): ?> -->
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url('admin/dashboard')?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>A</b>C</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b>Controller</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo site_url('assets/public/img/logo.png') ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo ($this->session->userdata() && $this->ion_auth->logged_in())? $this->session->userdata('identity') : "Alexander Pierce"; ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="<?php echo site_url('assets/public/img/logo.png') ?>" class="img-circle" alt="User Image">
                                <p class="hidden-xs"><?php echo ($this->session->userdata() && $this->ion_auth->logged_in())? $this->session->userdata('identity') : "Alexander Pierce"; ?>
                                    <small>Member since Nov. 2012</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo base_url("admin/user/logout"); ?>" class="btn btn-default btn-flat" >Sign out</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
<!-- <?php endif ?> -->
    <!-- Left side column. contains the logo and sidebar -->

