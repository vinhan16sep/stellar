<div class="container_body">
    <div class="container-fluid">
      <!-- InstanceBeginEditable name="content" -->
      <div class="col-md-4 col-sm-4 col-xs-12 content_left download">
          <h4 class="title highlight"><?php echo $this->lang->line('download_title'); ?></h4>
          <div class="text fadeinUp">
            <p class="paragraph">Brochure</p>
                <table>
                    <tr>
                        <th><img src="<?php echo site_url('assets/public/img/icon.png'); ?>" alt=""></th>
                          <th><a href="<?php echo site_url('assets/public/img/brochure3.pdf'); ?>" target="_blank" class="btn btn-default hvr-shutter-out-horizontal" type="submit" id="play_slide"><?php echo $this->lang->line('download_view_online'); ?></a></th>
                      </tr>
                  </table>
      <!--<p class="paragraph">Video</p>
                <table>
                    <tr>
                        <th><img src="<?php echo site_url('assets/public/img/icon2.png'); ?>" alt=""></th>
                          <th><a target="_blank" class="btn btn-default hvr-shutter-out-horizontal" type="submit" id="play_vid"><?php echo $this->lang->line('download_view_online'); ?></a></th>
                      </tr>
                  </table>     -->
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-xs-12 content_right video">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="<?php echo site_url('assets/public/img/b_001.jpg'); ?>" alt="...">
              </div>
              <div class="item">
                <img src="<?php echo site_url('assets/public/img/b_002.jpg'); ?>" alt="...">
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