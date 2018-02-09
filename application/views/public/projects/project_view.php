<section class="content col-lg-12 col-md-12 col-sm-12">
    <div id="carousel-example-generic_t" class="carousel slide top_slide" data-ride="carousel">
        <?php if ($project_banner): ?>
            <div class="carousel-inner banner" role="listbox">
                <?php foreach ($project_banner as $key => $banner): ?>
                    <div <?php echo $key == 0 ? ' class="item active"' : ' class="item"'; ?>>
                        <img src="<?php echo base_url('assets/upload/projects/' . $banner); ?>" alt="...">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
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
    <div class="project_details col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading"><?php echo $project['project_title']; ?></h1>
        <div class="line col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <i class="fa fa-cog"></i>
        </div>        
        <div class="project_descriptions">
            <p><?php echo $project['project_description']; ?></p>
        </div>
    </div>
    <?php foreach ($articles as $key => $article): ?>
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php if ($key % 2 == 0): ?>
                <div class="blog_news col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_news_img col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>"><img src="<?php echo base_url('assets/upload/articles/' . $article['article_description_image']); ?>" alt=""></a>
                    </div>
                    <div class="blog_news_article col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>"><h2 class="blog_news_title"><?php echo $article['article_title']; ?></h2></a>
                        <p class="paragraph"><?php echo $article['article_description']; ?></p>
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>" class="hvr-sweep-to-top">Chi tiết</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php if ($key % 2 != 0): ?>
                <div class="blog_news col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="blog_news_img col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>"><img src="<?php echo base_url('assets/upload/articles/' . $article['article_description_image']); ?>" alt=""></a>
                    </div>
                    <div class="blog_news_article col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>"><h2 class="blog_news_title"><?php echo $article['article_title']; ?></h2></a>
                        <p class="paragraph"><?php echo $article['article_description']; ?></p>
                        <a href="<?php echo base_url('projects/article/' . $article['article_id']); ?>" class="hvr-sweep-to-top">Chi tiết</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
</section>