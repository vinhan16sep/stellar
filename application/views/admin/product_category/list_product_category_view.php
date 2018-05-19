<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php echo form_open('', array('method'=>'post','class' => 'form-horizontal')); ?>
<div class="content-wrapper">
    <section class="content">
        <div class="row">
            <span><?php echo $this->session->flashdata('message'); ?></span>
        </div>
        <div class="row">
            <div class="col-lg-12" style="margin-top: 10px;">
                <table class="table table-hover table-bordered table-condensed">
                <tr>
                <td><b><a href="#">ID</a></b></td>
                <td><b><a href="#">Menu</a></b></td>
                <td><b><a href="#">Title</a></b></td>
                <td><b><a href="#">Content</a></b></td>
                <td><b><a href="#">Menu EN</a></b></td>
                <td><b><a href="#">Title EN</a></b></td>
                <td><b><a href="#">Content EN</a></b></td>
                <td><b><a href="#">Image</a></b></td>
                <td><b><a href="#">Action</a></b></td>
                </tr>
                <?php
                if (!empty($product_category)) {
                    foreach ($product_category as $key => $item):
                        echo '<tr>';
                        echo '<td>' . ($key+1) . '</td>';
                        echo '<td>' . $item['menu'] . '</td>';
                        echo '<td>' . $item['title'] . '</td>';
                        echo '<td class="description-content">' . $item['content'] . '</td>';
                        echo '<td>' . $item['menu_en'] . '</td>';
                        echo '<td>' . $item['title_en'] . '</td>';
                        echo '<td class="description-content">' . $item['content_en'] . '</td>';
                        if(empty($item['avata'])){
                            $image = json_decode($item['image']);
                            echo '<td><img src = "'.base_url('assets/upload/').$controller.'/'.$image[0].'" width="150px" /></td>';
                        }else{
                            echo '<td><img src = "'.base_url('assets/upload/').$controller.'/'.$item['avata'].'" width="150px" /></td>';
                        }
                        echo  '<td>' .'<a class="btn btn-primary" href="'.site_url('admin/'.$controller.'/edit/'.$item['id']).'"> Edit </a>'. '</td>';
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
    </section>
</div>
<?php echo form_close(); ?>