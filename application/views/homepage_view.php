<div class="container_body">
    <div class="container-fluid">
    <!-- InstanceBeginEditable name="content" -->
        <div class="content">
            <div class="mask">
                <div class="content_right col-xs-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" style="height: 100%;" role="listbox">
                            <?php $image = json_decode($Post['image']); ?>
                            <?php foreach ($image as $key => $value): ?>
                                <div class="item <?php echo ($key == 0)?'active' : ''; ?>" style="height: 100%;">
                                    <!-- <img src="<?php echo site_url('assets/upload/post/').$Post['image'];?>"/> -->
                                    <img src="<?php echo site_url('assets/upload/post/').$value; ?>" alt="..." style="height: 100%;object-fit: cover;">
                                </div>
                            <?php endforeach ?>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="width: 5%;">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="width: 5%;">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage_intro fadeinUp">
                <h4 class="title"><?php echo $Post['title']; ?></h4>
                <div class="paragraph"><?php echo $Post['content']; ?></div>
            </div>
        </div>
    </div>
    <!-- InstanceEndEditable -->
</div>