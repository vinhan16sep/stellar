<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//echo $location;die;
?>
<?php

$action = explode('/',$_SERVER['REQUEST_URI']);
$action = isset($action[3]) ? explode('?',$action[3]) : '' ;
$action = isset($action[0]) ? explode('&',$action[0]) : '';
$action = isset($action[0]) ? $action[0] : '';
 ?>
    <!doctype html>
    <html><!-- InstanceBegin template="/Templates/temp.dwt" codeOutsideHTMLIsLocked="false" -->
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="35 Lê Văn Thiêm, Chủ đầu tư, Nơi khởi nguồn hạnh phúc">
	<meta name="description" content="35 Lê Văn Thiêm - Chủ đầu tư - Nơi khởi nguồn hạnh phúc">

	<title>Stellar Garden</title>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <!-- <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE"> -->
    <!-- InstanceBeginEditable name="doctitle" -->
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/bootstrap-3.3.4-dist/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css'); ?>">    
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/css/hover.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/style.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Maitree:600" rel="stylesheet">

<body>

<section class="container-fluid">
    <div class="container">
        <div class="container_head">
            <div class="row">
                <div class="left col-md-6 col-sm-6 col-xs-12">
                    <a href="<?php echo site_url('index'); ?>" id="logo">
                        <img src="<?php echo site_url('assets/public/img/logo.png'); ?>" alt="logo website">
                    </a>
                </div>
                <div class="right col-md-6 col-sm-6 col-xs-12">
                    <div class="language">
                        <ul>
                            <li><a href="<?php echo site_url('/vi'); ?>">Tiếng Việt</a></li>
                            <li>|</li>
                            <li><a href="<?php echo site_url('/en'); ?>">English</a></li>
                        </ul>
                    </div>
                    <div class="register">
                        <button class="btn btn-default hvr-shutter-out-horizontal" type="submit" data-toggle="modal" data-target="#register"><?php echo $this->lang->line('Apartment_Registration'); ?></button>
                    </div>
                </div>
                <div class="main_nav col-md-12 col-sm-12 col-xs-12">
                    <button class="mobile_nav_btn hidden-lg">
                        <i class="fa fa-bars" aria-hidden="true"></i> <span>Menu</span>
                    </button>
                    <ul class="nav">
                        <li class="sub_nav <?php echo ($action == 'homepage') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/homepage') : site_url('en/homepage'); ?>"><?php echo $this->lang->line('home'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'overview') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/overview') : site_url('en/overview'); ?>"><?php echo $this->lang->line('Project_Overview'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'location') ? 'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/location') : site_url('en/location'); ?>"><?php echo $this->lang->line('Location'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'proresident' || $action == 'promall') ?  'nav_active' : ''; ?>">
                            <a href="javascript:void(0);" class="disabled"><?php echo $this->lang->line('Product'); ?> <span class="badge">2</span> </a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo ($lang == 'vi') ? site_url('vi/proresident') : site_url('en/proresident'); ?>"><?php echo $this->lang->line('Apartment'); ?></a></li>
                                <li><a href="<?php echo ($lang == 'vi') ? site_url('vi/promall') : site_url('en/promall'); ?>"><?php echo $this->lang->line('Trade_Center'); ?></a></li>
                            </ul>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'utilities') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/utilities') : site_url('en/utilities'); ?>"><?php echo $this->lang->line('Utilities'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'progress') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/progress') : site_url('en/progress'); ?>"><?php echo $this->lang->line('Update_Project'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'investers' || $action == 'partners') ? 'nav_active' : ''; ?>">
                            <a href="javascript:void(0);" class="disabled"><?php echo $this->lang->line('Owner_Partner'); ?> <span class="badge">2</span></a>
                            <ul class="list-unstyled">
                                <li><a href="<?php echo ($lang == 'vi') ? site_url('vi/investers') : site_url('en/investers'); ?>"><?php echo $this->lang->line('Owner'); ?></a></li>
                                <li><a href="<?php echo ($lang == 'vi') ? site_url('vi/partners') : site_url('en/partners'); ?>"><?php echo $this->lang->line('Partner'); ?></a></li>
                            </ul>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'faq') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/faq') : site_url('en/faq'); ?>"><?php echo $this->lang->line('qa'); ?></a>
                        </li>
                        <li class="sub_nav <?php echo ($action == 'download') ?  'nav_active' : ''; ?>">
                            <a href="<?php echo ($lang == 'vi') ? site_url('vi/download') : site_url('en/download'); ?>"><?php echo $this->lang->line('download'); ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>



<!--
<div class="container center-block clearfix">
    <div class="container_head">
        <div class="left">
            <a href="<?php echo site_url('index'); ?>" id="logo"><img src="<?php echo site_url('assets/public/img/logo.png'); ?>" alt=""></a>
        </div>
        <div class="right">
            <div class="language">
                <ul>
                    <li><a href="<?php echo site_url('/vi'); ?>">Tiếng Việt</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('/en'); ?>">English</a></li>
                </ul>
            </div>
            <div class="register">
                <button class="btn btn-default hvr-shutter-out-horizontal" type="submit" data-toggle="modal" data-target="#register"><?php echo $this->lang->line('Apartment_Registration'); ?></button>
            </div>
        </div>
        
    </div>
    <div class="container_body">
        <div class="nav">
            <ul>

                <li class="nav_li <?php echo ($action == 'homepage') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('homepage'); ?>"><?php echo $this->lang->line('home'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'overview') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('overview'); ?>"><?php echo $this->lang->line('Project_Overview'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'location') ? 'nav_active' : ''; ?>"><a href="<?php echo site_url('location'); ?>"><?php echo $this->lang->line('Location'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'proresident' || $action == 'promall') ?  'nav_active' : ''; ?>">
                    <a href="#" class="disabled"><?php echo $this->lang->line('Product'); ?></a>
                    <ul>
                        <li><a href="<?php echo site_url('proresident'); ?>"><?php echo $this->lang->line('Apartment'); ?></a></li>
                        <li><a href="<?php echo site_url('promall'); ?>"><?php echo $this->lang->line('Trade_Center'); ?></a></li>
                    </ul>
                </li>
                <li class="nav_li <?php echo ($action == 'utilities') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('utilities'); ?>"><?php echo $this->lang->line('Utilities'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'progress') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('progress'); ?>"><?php echo $this->lang->line('Update_Project'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'investers' || $action == 'partners') ? 'nav_active' : ''; ?>">
                    <a href="#" class="disabled"><?php echo $this->lang->line('Owner_Partner'); ?></a>
                    <ul>
                        <li><a href="<?php echo site_url('investers'); ?>"><?php echo $this->lang->line('Owner'); ?></a></li>
                        <li><a href="<?php echo site_url('partners'); ?>"><?php echo $this->lang->line('Partner'); ?></a></li>
                    </ul>
                </li>
                <li class="nav_li <?php echo ($action == 'faq') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('faq'); ?>"><?php echo $this->lang->line('qa'); ?></a></li>
                <li class="nav_li <?php echo ($action == 'download') ?  'nav_active' : ''; ?>"><a href="<?php echo site_url('download'); ?>"><?php echo $this->lang->line('download'); ?></a></li>

            </ul>
        </div>
-->