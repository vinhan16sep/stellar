<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="row modified-mode">
            <div class="col-lg-10 col-lg-offset-0 add_process">
                <h1>Edit Process</h1>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal'));
                ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?php
                        echo form_label('Title', 'banner_link');
                        echo form_error('title');
                        echo form_input('title', set_value('title0',$Process['title']), 'class="form-control"');
                        ?>
                    </div>
                    <div class="form-group description">
                        <?php
                        echo form_label('Description', 'banner_description');
                        echo form_error('description');
                        echo form_textarea('description', set_value('description',$Process['content']), 'class="form-control"');
                        ?>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-bottom: 20px;">
                    <div class="form-group">
                        <?php
                        echo form_label('Title_en', 'banner_link');
                        echo form_error('title');
                        echo form_input('title_en', set_value('title_en',$Process['title_en']), 'class="form-control"');
                        ?>
                    </div>
                    <div class="form-group description">
                        <?php
                        echo form_label('Description_en', 'banner_description');
                        echo form_error('description');
                        echo form_textarea('description_en', set_value('description_en',$Process['content_en']), 'class="form-control"');
                        ?>
                    </div>
                </div>
                <br>
                <div class="form-group col-sm-12" style="overflow: hidden">
                    <input class="form-control" type="file" name="img[]" multiple />
                </div>
                <br>
                <div class="form-group col-sm-12 img-box" style="overflow: hidden">

                    <?php
                        foreach ($imgs as $key => $row){
                            echo '<div class="col-sm-3 col-xs-6"><a href="'. site_url('admin/process/deleteimage/'.$row['id']) . '">Delete</a><img src="/assets/upload/process/' . $row['content'] . '" /></div>';
                        }
                    ?>
                </div>
                <br>
                <div class="form-group col-sm-12 text-right button_add_process">
                    <?php
                    echo form_submit('submit', 'OK', 'class="btn btn-primary"');
                    echo form_close();
                    ?>
                    <a class="btn btn-default cancel" href="javascript:window.history.go(-1);">Go back</a>
                </div>
            </div>
        </div>
    </section>
</div>