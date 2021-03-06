<div class="container_body">
    <div class="container-fluid">
      <!-- InstanceBeginEditable name="content" -->
      <div class="col-md-4 col-sm-4 col-xs-12 content_left download">
          <h4 class="title highlight"><?php  echo $this->lang->line("download_title"); ?></h4>
          <div class="text fadeinUp">
            <p class="paragraph">Brochure</p>
                <table>
                    <tr>
                        <th><img src="<?php echo site_url('assets/public/img/icon.png'); ?>" alt=""></th>
                          <th><a href="<?php echo site_url('assets/public/img/brochure3.pdf'); ?>" download="<?php echo site_url('assets/public/img/brochure3.pdf'); ?>" class="btn btn-default hvr-shutter-out-horizontal" type="submit" id="play_slide">Download</a></th>
                      </tr>
                  </table>
      <!--<p class="paragraph">Video</p>
                <table>
                    <tr>
                        <th><img src="<?php echo site_url('assets/public/img/icon2.png'); ?>" alt=""></th>
                          <th><a target="_blank" class="btn btn-default hvr-shutter-out-horizontal" type="submit" id="play_vid"></a></th>
                      </tr>
                  </table>     -->
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 content_right video">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <a class="example-image-link" href="<?php echo site_url('assets/public/img/brochure-01.jpg'); ?>" data-lightbox="proture" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/public/img/brochure-01.jpg'); ?>" alt=""/></a>
              </div>
              <div class="item">
                <a class="example-image-link" href="<?php echo site_url('assets/public/img/brochure-02.jpg'); ?>" data-lightbox="proture" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/public/img/brochure-02.jpg'); ?>" alt=""/></a>
              </div>
              <div class="item">
                <a class="example-image-link" href="<?php echo site_url('assets/public/img/brochure-03.jpg'); ?>" data-lightbox="proture" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/public/img/brochure-03.jpg'); ?>" alt=""/></a>
              </div>
              <div class="item">
                <a class="example-image-link" href="<?php echo site_url('assets/public/img/brochure-04.jpg'); ?>" data-lightbox="proture" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/public/img/brochure-04.jpg'); ?>" alt=""/></a>
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
          <div class="intro_vid">
            <video width="800" height="451" autobuffer autoplay id="stellar_vid" controls muted autoplay="false">
                <source id="mp4" src="<?php echo site_url('assets/public/stellar.mp4'); ?>" type="video/mp4"></source>
              </video>
          </div>
      </div>
    <!-- InstanceEndEditable -->
      </div>
</div>