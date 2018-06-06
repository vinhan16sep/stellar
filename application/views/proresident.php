<div class="container-fluid">
	<!-- InstanceBeginEditable name="content" -->
	<div class="col-md-4 col-sm-4 col-xs-12 content_left">
		<h4 class="title"><?php echo $Product_category['title']; ?></h4>
		<div class="text fadeinUp">
			<div class="paragraph"><?php echo $Product_category['content']; ?></div>
			<a href="#" data-toggle="modal" data-target="#map_bg"><?php echo $this->lang->line('Tower_view_more'); ?></a>
		</div>
	</div>
	<div class="col-md-8 col-sm-8 col-xs-12 content_right resident">
		<div class="room_select">
			<?php $room = array('a','b','c','d'); ?>
			<?php foreach ($Product as $key => $value): ?>
				<div class="room" id="room_<?php echo $room[$key]; ?>">
					<div class="wrapper">
						<a class="example-image-link" href="<?php echo site_url('assets/upload/product/').$value['avata']; ?>" data-lightbox="example-set-<?php echo $key; ?>" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/upload/product/').$value['avata']; ?>" alt=""/></a>
						<div class="inner">
							<h4 class="title"><?php echo $value['title']; ?><br> <?php echo $value['content']; ?></h4>
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
			<!-- Wrapper for slides -->
		
        <?php foreach ($Product as $key => $value): ?>
            <div id="re_<?php echo $room[$key]; ?>" class="carousel slide" data-ride="carousel">
                <?php $image = json_decode($value['image']); ?>
                <?php foreach ($image as $k => $val): ?>
                    <div class="item <?php echo ($k == 0)? 'active' : ''; ?>">
                        <a class="example-image-link" href="<?php echo site_url('assets/upload/product/').$val; ?>" data-lightbox="example-set-<?php echo $key; ?>" data-title="Click the right half of the image to move forward."><img class="example-image" src="<?php echo site_url('assets/upload/product/').$val; ?>" alt=""/></a>
                    </div>
                <?php endforeach ?>
            </div>
        <?php endforeach; ?>
		<div class="modal fade" id="map_bg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">

					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<img src="<?php echo site_url('assets/upload/product_category/').$Product_category['avata']; ?>" style="width: 98%;" alt="">
					</div>

				</div>
			</div>
		</div>
	</div>
</div>