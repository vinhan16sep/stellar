<div class="container_body">
    <div class="container-fluid">
        <!-- InstanceBeginEditable name="content" -->
        <div class="content_left col-md-4 col-sm-4 col-xs-12">
            <h4 class="title"><?php echo $Post['title']; ?></h4>
            <div class="text fadeinUp">
                <div class="paragraph"><?php echo $Post['content']; ?></div>
            </div>
        </div>

        <div class="content_right col-md-8 col-sm-8 col-xs-12">
            <div class="mask">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <?php $image = json_decode($Post['image']); ?>
                        <?php foreach ($image as $key => $value): ?>
                            <div class="item <?php echo ($key == 0)?'active' : ''; ?>">
                                <img src="<?php echo site_url('assets/upload/post/').$value; ?>" alt="...">
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
        </div>
        <!-- InstanceEndEditable -->
    </div>
</div>
