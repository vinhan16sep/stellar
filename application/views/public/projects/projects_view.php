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
    <div class="project_overview col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="heading">CÁC DỰ ÁN ĐANG TRIỂN KHAI</h1>
        <div class="line col-lg-2 col-md-2 col-sm-2 col-xs-6">
            <i class="fa fa-cog"></i>
        </div>
        <p class="description col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <?php echo $description['description_content']; ?>
        </p>
        <?php if($projects): ?>
        <?php foreach($projects as $key => $project): ?>
        <div class="project col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <div class="project_img">
                <a href="<?php echo site_url('projects/detail_project/' . $project['project_id']); ?>"><img src="<?php echo base_url('assets/upload/projects/description/' . $project['project_description_image']); ?>" alt=""></a>
            </div>
            <div class="project_title">
                <a href="<?php echo site_url('projects/detail_project/' . $project['project_id']); ?>"><?php echo $project['project_title']; ?></a>               
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        
    </div>      
</section>