<div class="container_body">
    <div class="container-fluid">
        <!-- InstanceBeginEditable name="content" -->
        <div class="content_left col-md-4 col-sm-4 col-xs-12">
            <h4 class="title"><?php echo $Product_category['title']; ?></h4>
            <div class="text fadeinUp paragraph">
                <p class="paragraph"><?php echo $Product_category['content']; ?></p>
            </div>
        </div>
        <div class="content_right col-md-8 col-sm-8 col-xs-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php $image = json_decode($Product_category['image']); ?>
                    <?php foreach ($image as $key => $value): ?>
                        <div class="item <?php echo ($key == 0)?'active' : ''; ?>">
                            <img src="<?php echo site_url('assets/upload/product_category/').$value; ?>" alt="...">
                        </div>
                    <?php endforeach ?>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- InstanceEndEditable -->
    </div>
</div>