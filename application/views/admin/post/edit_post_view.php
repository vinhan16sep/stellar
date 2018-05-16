<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="content-wrapper">
    <section class="content">
        <div class="row modified-mode">
            <div class="col-lg-12 add_process">
                <h1>Add Q & A</h1>
                <?php
                echo form_open_multipart('', array('class' => 'form-horizontal'));
                ?>
                <div class="col-sm-6">
                    <div class="form-group">
                        <?php
                        echo form_label('Title', 'post_link');
                        echo form_error('title');
                        echo form_input('title', set_value('title',$Post['title']), 'class="form-control"');
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                        echo form_label('content', 'post_content');
                        echo form_error('content');
                        echo form_textarea('content', set_value('content',$Post['content']), 'class="tinymce-area form-control"');
                        ?>
                    </div>
                </div>
                <div class="col-sm-6" style="margin-bottom: 20px;">
                    <div class="form-group">
                        <?php
                        echo form_label('Title_en', 'post_link');
                        echo form_error('title');
                        echo form_input('title_en', set_value('title_en',$Post['title_en']), 'class="form-control"');
                        ?>
                    </div>
                    <div class="form-group">
                        <?php
                        echo form_label('content_en', 'post_content');
                        echo form_error('content');
                        echo form_textarea('content_en', set_value('content_en',$Post['content_en']), 'class="tinymce-area form-control"');
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
    </section>
</div>