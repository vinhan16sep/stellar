<div class="container_body">
    <div class="container-fluid">
    <!-- InstanceBeginEditable name="content" -->
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 content_left partners">
        <h4 class="title"><?php echo $Post['title']; ?></h4>
        <div class="text fadeinUp">
        <?php echo $Post['content']; ?>
<!--           <table>
    <tr>
        <th><img src="<?php echo site_url('assets/public/img/bidv.jpg'); ?>" alt=""></th>
          <th>&nbsp;</th>
          <th>
            <span class="yellow"><?php echo $this->lang->line('bank_1'); ?></span>
              <br>
              <span class="white"><?php echo $this->lang->line('bank_1_1'); ?></span>
          </th>
  </tr>
  
  <tr>
        <th><img src="<?php echo site_url('assets/public/img/hoabinh.jpg'); ?>" alt=""></th>
          <th>&nbsp;</th>
          <th>
              <span class="yellow">Công ty Cổ phần Xây dựng và Kinh doanh địa ốc Hòa Bình</span>
              <br>
              <span class="white">Đơn vị thi công</span>
      </th>
  </tr> -->
            <!--
            <tr>
                  <th><img src="<?php echo site_url('assets/public/img/delta.jpg'); ?>" alt=""></th>
                    <th>&nbsp;</th>
                    <th>
                        <span class="yellow"><?php echo $this->lang->line('bank_3'); ?></span>
                        <br>
                        <span class="white"><?php echo $this->lang->line('bank_3_1'); ?></span>
                </th>
            </tr>
            <tr>
                  <th><img src="<?php echo site_url('assets/public/img/posco.jpg'); ?>" alt=""></th>
                    <th>&nbsp;</th>
                    <th>
                        <span class="yellow"><?php echo $this->lang->line('bank_4'); ?></span>
                        <br>
                        <span class="white"><?php echo $this->lang->line('bank_4_1'); ?></span>
                </th>
            </tr>
            <tr>
                  <th><img src="<?php echo site_url('assets/public/img/meinhardt.jpg'); ?>" alt=""></th>
                    <th>&nbsp;</th>
                    <th>
                        <span class="yellow"><?php echo $this->lang->line('bank_5'); ?></span>
                        <br>
                        <span class="white"><?php echo $this->lang->line('bank_5_1'); ?></span>
                </th>
            </tr>
            <tr>
                  <th><img src="<?php echo site_url('assets/public/img/savills.jpg'); ?>" alt=""></th>
                    <th>&nbsp;</th>
                    <th>
                        <span class="yellow"><?php echo $this->lang->line('bank_6'); ?></span>
                        <br>
                        <span class="white"><?php echo $this->lang->line('bank_6_1'); ?></span>
                </th>
            </tr>
            -->
            <!-- </table> -->
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