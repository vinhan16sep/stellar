<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo form_open('', array('method'=>'post','class' => 'form-horizontal')); ?>
<div class="container">
    <div class="row">
        <span><?php echo $this->session->flashdata('message'); ?></span>
    </div>
    <div class="row">
        <a type="button" href="<?php echo site_url('admin/qa/create'); ?>" class="btn btn-primary">ADD Q & A</a>
        <?php echo form_submit('submit', 'DELETE ALL SELECTED Q & A', 'class="btn btn-danger"'); ?>
    </div>
    <div class="row">
        <div class="col-lg-12" style="margin-top: 10px;">
            <?php
            echo '<table class="table table-hover table-bordered table-condensed">';
            echo '<tr>';
            echo '<td><input type="checkbox" class="check-all" id="check-all" /></td>';
            echo '<td><b><a href="#">ID</a></b></td>';
            echo '<td><b><a href="#">Title</a></b></td>';
            echo '<td><b><a href="#">Description</a></b></td>';
            echo '<td><b><a href="#">Title EN</a></b></td>';
            echo '<td><b><a href="#">Description EN</a></b></td>';
            echo '<td><b><a href="#">Action</a></b></td>';
            echo '</tr>';
            if (!empty($Process)) {
                foreach ($Process as $item):
                    echo '<tr>';
                    echo '<td>' . form_checkbox("checkbox[$item[id]]", $item['id'], false,'type="checkbox" class="checkbox"') . '</td>';
                    echo '<td>' . $item['id'] . '</td>';
                    echo '<td>' . $item['title'] . '</td>';
                    echo '<td>' . $item['content'] . '</td>';
                    echo '<td>' . $item['title_en'] . '</td>';
                    echo '<td>' . $item['content_en'] . '</td>';
                    echo  '<td>' .'<a class="btn btn-primary" href="'.site_url('admin/qa/edit/'.$item['id']).'"> Edit </a>'. '</td>';
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
<?php echo form_close(); ?>