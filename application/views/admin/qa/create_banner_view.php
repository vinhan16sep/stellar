<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="row modified-mode">
        <div class="col-lg-10 col-lg-offset-0 add_process">
            <h1>Add Q & A</h1>
            <?php
            echo form_open_multipart('', array('class' => 'form-horizontal'));
            ?>
            <div class="col-sm-6">
                <div class="form-group">
                    <?php
                    echo form_label('Title', 'banner_link');
                    echo form_error('title');
                    echo form_input('title', set_value('title'), 'class="form-control"');
                    ?>
                </div>
                <div class="form-group description">
                    <?php
                    echo form_label('Description', 'banner_description');
                    echo form_error('description');
                    echo form_textarea('description', set_value('description'), 'class="form-control"');
                    ?>
                </div>
            </div>
            <div class="col-sm-6" style="margin-bottom: 20px;">
                <div class="form-group">
                    <?php
                    echo form_label('Title_en', 'banner_link');
                    echo form_error('title');
                    echo form_input('title_en', set_value('title_en'), 'class="form-control"');
                    ?>
                </div>
                <div class="form-group description">
                    <?php
                    echo form_label('Description_en', 'banner_description');
                    echo form_error('description');
                    echo form_textarea('description_en', set_value('description_en'), 'class="form-control"');
                    ?>
                </div>
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
</div>