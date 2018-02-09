<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="row">
        <span><?php echo $this->session->flashdata('message'); ?></span>
    </div>
    <div class="row">
        <a type="button" href="<?php echo site_url('admin/aboutus/create'); ?>" class="btn btn-primary">ADD ABOUT US</a>
        <a type="button" class="btn btn-danger disabled">DELETE ALL SELECTED ABOUT US</a>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<tr>';
            echo '<td><input type="checkbox" class="check-all" id="check-all" /></td>';
            echo '<td><b><a href="#">ID</a></b></td>';
            echo '<td><b><a href="#">Title</a></b></td>';
//            echo '<td><b><a href="#">Image</a></b></td>';
            echo '<td><b><a href="#">Selected</a></b></td>';
            echo '<td><b>Operations</b></td>';
            echo '</tr>';
            if (!empty($aboutus)) {
                foreach ($aboutus as $key => $item):
                    echo '<tr>';
                    echo '<td><input type="checkbox" class="checkbox" name="checkbox[' . $item['aboutus_id'] . ']" value="' . $item['aboutus_id'] . '" /></td>';
                    echo '<td>' . $item['aboutus_id'] . '</td>';
                    echo '<td>' . $item['aboutus_title'] . '</td>';
//                    echo '<td>';
                    ?>
                            <!--<img src="<?php echo base_url('assets/upload/news/thumbs/' . pathinfo($item['article_description_image'])['filename'] . '_thumb.' . pathinfo($item['article_description_image'])['extension']); ?>" />--> 
                    <?php
//                    echo '</td>';
                    echo '<td>' . (($item['aboutus_is_select'] == 1) ? 'Yes' : 'No') . '</td>';
                    echo '<td>' . anchor('admin/aboutus/edit/' . $item['aboutus_id'], '<span class="glyphicon glyphicon-pencil"></span>');
                    echo ' ' . anchor('admin/aboutus/delete/' . $item['aboutus_id'], '<span class="glyphicon glyphicon-remove"></span>') . '</td>';
                    echo '</tr>';
                endforeach;
            }else {
                echo '<tr class="odd"><td colspan="9">No records</td></tr>';
            }
            echo '</table>';
            ?>
            <div class="col-md-6 col-md-offset-5">
                <?php echo $page_links; ?>
            </div>
        </div>
    </div>  
</div>
