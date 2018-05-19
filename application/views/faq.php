<div class="container_body">
<div class="container-fluid">
    <!-- InstanceBeginEditable name="content" -->
    <div class="col-md-4 col-sm-4 col-xs-12 content_left progress_part">
        <h4 class="title"><?php echo $this->lang->line('FREQUENTLY_ASK_QUESTIONS'); ?></h4>
        <div class="text fadeinUp">
            <div class="text process-content">
                <?php
                if($Process) {
                    foreach ($Process as $key =>  $row){
                        if($key == 0){
                            ?>
                            <h4 class=" title  paragraph-title  show paragraph-<?php echo $row['id']; ?>"><?php echo $row['title']; ?></h4>
                            <p id="paragraph-<?php echo $row['id']; ?>" class="paragraph show"><?php echo $row['content']; ?></p>
                            <?php
                        }else{
                            ?>
                            <h4 class="title paragraph-title hide paragraph-<?php echo $row['id']; ?>"><?php echo $row['title']; ?></h4>
                            <p id="paragraph-<?php echo $row['id']; ?>" class="paragraph hide"><?php echo $row['content']; ?></p>
                            <?php
                        }
                    }
                }
                ?>

            </div>
      </div>
        <div class="list">
            <ul>
                <?php
                if($Process) {
                    foreach ($Process as  $row){
                        echo "<li><a class='pocess-title' href='#'  data-id='".$row['id']."'>".$row['title']."</a></li>";
                    }
                }
                ?>
            </ul>
        </div>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12 content_right">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="<?php echo site_url('assets/public/img/nt_001.jpg'); ?>" alt="...">
            </div>
            <div class="item">
              <img src="<?php echo site_url('assets/public/img/nt_001.jpg'); ?>" alt="...">
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