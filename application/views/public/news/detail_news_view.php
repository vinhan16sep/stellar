<section class="container">

    <div class="blog_content col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3 class="title"><?php echo $news['news_title']; ?></h3>
        <p class="timeline">Bài được viết lúc <?php echo $news['new_created']; ?> bởi <?php echo $news['news_created_by']; ?></p>
        <!--<img class="blog_image" src="<?php echo base_url('assets/upload/news/' . $news['picture']); ?>">-->
        <span class="content"><?php echo $news['news_content']; ?></span>
        <div class="share col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <h5>Share:</h5>
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-pinterest"></i>
            <i class="fa fa-tumblr"></i>
        </div>
        <?php if ($list_news): ?>
            <div class="related_links col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h3>Bài viết liên quan</h3>
                <ul>
                    <?php foreach ($list_news as $key => $news): ?>
                        <?php if ($news['news_id'] != $current_news_id): ?>
                            <li><a href="<?php echo base_url('news/detail/' . $news['news_id']); ?>"><?php echo $news['news_title']; ?></a></li>
                        <?php endif; ?>
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