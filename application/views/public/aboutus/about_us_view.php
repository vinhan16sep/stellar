<section class="content col-lg-12 col-md-12 col-sm-12">
    <div id="carousel-example-generic_t" class="carousel slide top_slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <?php if ($banners): ?>
            <div class="carousel-inner banner" role="listbox">
                <?php foreach ($banners as $key => $banner): ?>
                    <div <?php echo $key == 0 ? ' class="item active"' : ' class="item"'; ?>>
                        <a href="<?php echo $banner['banner_article_url']; ?>"><img src="<?php echo base_url('assets/upload/banner/' . $banner['banner_image_name']); ?>" alt="..."></a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic_t" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic_t" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>
<section class="container">

    <div class="blog_content col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3 class="title"><?php echo $aboutus['aboutus_title']; ?></h3>
        <span><?php echo $aboutus['aboutus_content']; ?></span>
        <div class="share col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h5>Share:</h5>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-pinterest"></i>
            <i class="fa fa-tumblr"></i>
        </div>
        <?php if($list_news): ?>
        <div class="related_links col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>Bài viết liên quan</h3>
            <ul>
                <?php foreach($list_news as $key => $news): ?>
                <li><a href="<?php echo base_url('news/detail/' . $news['news_id']); ?>"><?php echo $news['news_title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>
        <div class="comment col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h3>0 Nhận xét</h3>
            <p>Gửi nhận xét của bạn</p>
            <div class="form-group">
                <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="text" class="form-control" id="InputName" placeholder="Họ&tên">
                <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="email" class="form-control" id="InputMail" placeholder="Email">
                <input class="col-lg-12 col-md-12 col-sm-12 col-xs-12" type="number" class="form-control" id="InputPhone" placeholder="Số điện thoại">
                <textarea class="col-lg-12 col-md-12 col-sm-12 col-xs-12" rows="5" placeholder="Viết nhận xét của bạn..."></textarea>
            </div>
            <a href="#" class="hvr-sweep-to-top">Xem them</a>
        </div>
    </div>
    <div class="blog_side col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="blog_side_content">
            <div class="blog_side_content_heading">
                <h4>Tin bài nổi bật</h4>
            </div>
            <div class="blog_side_content_body">
                <?php foreach($hot_news as $key => $news): ?>
                <div class="popular_links">
                    <div class="popular_link_img">
                        <img src="<?php echo base_url('assets/upload/news/' . $news['news_description_image']); ?>">
                    </div>
                    <div class="popular_link_content">
                        <a href="#"><?php echo $news['news_title']; ?></a>
                        <p class="timeline"><?php echo $news['news_created']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="blog_side_content_footer">
            </div>
        </div>
    </div>

</section>