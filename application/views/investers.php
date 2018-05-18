<div class="container_body">
    <div class="container-fluid">
        <!-- InstanceBeginEditable name="content" -->
        <div class="col-md-4 col-sm-4 col-xs-12 content_left">
            <h4 class="title"><?php echo $Post['title']; ?></h4>
            <div class="text fadeinUp">
              <div class="paragraph"><?php echo $Post['content']; ?></div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12 content_right">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <img src="<?php echo site_url('assets/public/img/kinhdo1.jpg'); ?>" alt="...">
                </div>
                <div class="item">
                  <img src="<?php echo site_url('assets/public/img/kinhdo2.jpg'); ?>" alt="...">
                </div>
                <div class="item">
                  <img src="<?php echo site_url('assets/public/img/kinhdo3.jpg'); ?>" alt="...">
                </div>
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