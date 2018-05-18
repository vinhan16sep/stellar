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
                <img src="<?php echo site_url('assets/upload/post/').$Post['image'];?>"/>
            </div>
        </div>
        <!-- InstanceEndEditable -->
    </div>
</div>
