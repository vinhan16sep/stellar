<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stellar Palace</title>
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/bootstrap-3.3.4-dist/css/bootstrap.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css'); ?>">    
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/css/hover.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/public/style.css'); ?>">
<link href="https://fonts.googleapis.com/css?family=EB+Garamond|Maitree:600" rel="stylesheet">


</head>

<body onLoad="toHome()">
<div class="container_intro center-block clearfix">
    <div class="intro_head">
        <div class="left">
            <a href="index.html" id="logo"><img src="<?php echo site_url('assets/public/img/logo.png') ?>" alt=""></a>
        </div>
        <div class="right">
            <div class="language">
                <ul>
                    <li><a href="<?php echo site_url('/vi') ?>">VI</a></li>
                    <li>|</li>
                    <li><a href="<?php echo site_url('/en') ?>">EN</a></li>
                </ul>
            </div>
        </div>        
    </div>
    <div class="intro_video">
        <video width="500" height="300" autobuffer autoplay id="video" controls>
          <source id="mp4" src="<?php echo site_url('assets/public/latest.mp4'); ?>" type="video/mp4"></source>
        </video>
        <!--<iframe id="video" width="500" height="500" src="https://www.youtube.com/embed/0b1yRMvmEGk?rel=0&autoplay=1&amp;controls=true;showinfo=0" frameborder="0" allowfullscreen></iframe>-->
        <a class="btn btn-default" id="skip" href="<?php echo site_url('homepage'); ?>">Skip video</a>
    </div>
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo site_url('assets/public/bootstrap-3.3.4-dist/js/bootstrap.js'); ?>"></script>
<script src="<?php echo site_url('assets/public/script.js'); ?>"></script>
<script>
function toHome() {
   
    $("#video").on("ended", function() {
        window.location.href = "<?php echo site_url('homepage'); ?>";
    });
}
</script>
</body>
</html>
