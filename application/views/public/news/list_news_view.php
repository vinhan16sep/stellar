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
    <div class="blog_overview col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading">blog</h1>
        <div class="line col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <i class="fa fa-cog"></i>
        </div>
        <p class="description col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $description['description_content']; ?>
        </p>
        <?php foreach ($news as $key => $item): ?>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php if ($key % 2 == 0): ?>
                    <div class="blog_news col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog_news_img col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>">
                                <img src="<?php echo base_url('assets/upload/news/' . $item['news_description_image']); ?>" alt="">
                            </a>
                        </div>
                        <div class="blog_news_article col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>">
                                <h2 class="blog_news_title"><?php echo $item['news_title']; ?></h2>
                            </a>
                            <p class="paragraph"><?php echo $item['news_description']; ?></p>
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>" class="hvr-sweep-to-top">Xem thêm</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <?php if ($key % 2 != 0): ?>
                    <div class="blog_news col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog_news_img col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>">
                                <img src="<?php echo base_url('assets/upload/news/' . $item['news_description_image']); ?>" alt="">
                            </a>
                        </div>
                        <div class="blog_news_article col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>">
                                <h2 class="blog_news_title"><?php echo $item['news_title']; ?></h2>
                            </a>
                            <p class="paragraph"><?php echo $item['news_description']; ?></p>
                            <a href="<?php echo base_url('news/detail/' . $item['news_id']); ?>" class="hvr-sweep-to-top">Xem thêm</a>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
        <div class="col-md-6 col-md-offset-5">
            <?php echo $page_links; ?>
        </div>
    </div>
</section>