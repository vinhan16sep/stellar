<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Stellar Palace</title>
<style>
    body, html{
        width:100%;
        height:100%;
        background:#3b2a27;
    }
    
    *{
        padding:0;
        margin:0;
    }
    
    .bg{
        width:50%;
        padding-top:50px;
        margin:0 auto 0;
    }
    
    .logo{
        width:100%;
        text-align:center;
    }
    
    .intro_video{
        width:100%;
        text-align:center;
        margin-top:50px;
    }
    
    .note{
        font-family: "webfont";
        color:#c9a868;
        text-align:center;
        margin-top:50px;
    }
    
    @font-face{
        font-family: "webfont";
        src:url(font/Maitree-SemiBold.ttf);
    }
    
</style>
</head>

<body>
    <div class="bg">
        <div class="logo">
            <img src="<?php echo site_url('assets/public/img/logo.gif'); ?>" alt="">
        </div>
        <div class="intro_video">
            <video autobuffer autoplay id="video" controls>
              <source id="mp4" src="<?php echo site_url('assets/public/stellar.mp4'); ?>" type="video/mp4"></source>
            </video>
        </div>  
        <div class="note">
            <h3>
                Website đang trong quá trình hoàn thiện,
                <br>
                mọi thông tin quan tâm tới dự án xin vui lòng liên hệ qua:            
            </h3>
            <h2>Hotline: (84-4) 668.00.886</h2>
        </div>
    </div>
</body>
</html>
