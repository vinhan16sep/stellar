<div class="container_body">
    <div class="container-fluid">
    <!-- InstanceBeginEditable name="content" -->
    <div class="col-md-4 col-sm-4 col-xs-12 content_left progress_part">
        <div class="text process-content">
            <?php
            if($Process) {
                foreach ($Process as $key =>  $row){
                    if($row['id'] && $row['id'] == $id){
            ?>
                <h4 class=" title  paragraph-title  show paragraph-<?php echo $row['id']; ?>"><?php echo $row['title']; ?></h4>
                <div id="paragraph-<?php echo $row['id']; ?>" class="paragraph show"><?php echo $row['content']; ?></div>
            <?php
                    }
                }
            }
            ?>

      </div>
        <div class="list">
          <ul>
              <?php
              if($Process) {
                  foreach ($Process as  $row){
              echo "<li><a class='pocess-title' href='" .  site_url('progress/index/'.$row['id']) . "'  data-id='".$row['id']."'>".$row['title']."</a></li>";
                  }
              }
              ?>
            </ul>
        </div>
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12 content_right">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <?php if($images){
                  foreach ($images as $key => $value){
                      if($key == 0)
                      {
                          echo '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'" class="active"></li>';
                      }else{
                          echo '<li data-target="#carousel-example-generic" data-slide-to="'.$key.'" class=""></li>';
                      }
                  }
              } ?>
          </ol>
        
          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
              <?php if($images){
                  foreach ($images as $key => $value){
                      if($key == 0)
                      {
                         echo ' <div class="item active">';
                      }else{
                          echo ' <div class="item">';
                      }
                      echo '<img src="'.base_url().'assets/upload/process/' . $value["content"] .'" alt="...">';
                      echo ' </div>';
                  }
              } ?>
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
</div>