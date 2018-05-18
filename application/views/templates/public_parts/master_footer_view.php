        <div class="container_foot container-fluid">
                <div class="left col-md-3 col-sm-6 col-xs-12">
                    <h4>Hotline : <span class="tel highlight">(84-4) 668.00.886</span></h4>
                    <span><?php echo $this->lang->line('Sales_office_and_project_address'); ?>
                        <br>
                        <?php echo $this->lang->line('footer_address'); ?></span>
                </div>
                <div class="center col-md-6 col-sm-6 col-xs-12">
                    <p><?php echo $this->lang->line('coppy_right_1'); ?></p>
                    <!--<p><?php echo $this->lang->line('coppy_right_2'); ?></p>-->
                </div>

            </div>
        </div>

    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="registerLabel">Thông tin đăng ký</h4>
      </div>
      <div class="modal-body">
          <?php echo form_open("/homepage/register", array('method'=>'post','class' => 'form-horizontal','id'=>'register-from')); ?>
        <table class="table">
            <tr>
                <th colspan="3"><h4 class="title"><?php echo $this->lang->line('CUSTOMER_INFORMATION'); ?></h4></th>
            </tr>
            <tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_name'); ?></th>
                <th>&nbsp;</th>
                <th><input type="text" class="form-control" id="InputName" name="name" placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_name'); ?> (* bắt buộc)"></th>
            </tr>
            <!--
			<tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_Workplace'); ?></th>
                <th>&nbsp;</th>
                <th><input type="text" class="form-control" id="InputWorkplace" name="workplace"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_Workplace'); ?>"></th>
            </tr>
            <tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_grade'); ?></th>
                <th>&nbsp;</th>
                <th><input type="text" class="form-control" id="InputGrade" name="grade"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_grade'); ?>"></th>
            </tr>
            -->
            <tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_address'); ?></th>
                <th>&nbsp;</th>
                <th><input type="text" class="form-control" id="InputAddress" name="address"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_address'); ?>"></th>
            </tr>
            <tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_phone'); ?></th>
                <th>&nbsp;</th>
                <th><input type="number" class="form-control" id="InputTel"  name="tel"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_phone'); ?> (* bắt buộc)"></th>
            </tr>
            <tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_email'); ?></th>
                <th>&nbsp;</th>
                <th><input type="text" class="form-control" id="InputMail"  name="mail"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_email'); ?>"></th>
            </tr>
            <!--<tr>
                <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_Fax'); ?></th>
                <th>&nbsp;</th>
                <th><input type="number" class="form-control" id="InputFax"  name="fax"  placeholder="<?php echo $this->lang->line('CUSTOMER_INFORMATION_Fax'); ?>"></th>
            </tr>-->
        </table>
        <div class="table-mobile">
            <table class="table">
                <tr>
                    <th colspan="5"><h4 class="title"><?php echo $this->lang->line('CUSTOMER_INFORMATION_CONCERN'); ?></h4></th>
                </tr>
                <tr>
                    <th><?php echo $this->lang->line('CUSTOMER_INFORMATION_Acreage'); ?></th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="select_a" name="acreage" value=" 113,6m2 (3 phòng ngủ) ">
                            113,6m2 <br> (3 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Bedroom'); ?>)
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="select_b" name="acreage" value="92,2m2 (2 phòng ngủ + 1 phòng đa năng)">
                            92,2m2 <br> (2 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Bedroom');?> + 1 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Multipurpose_room'); ?>)
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="select_c" name="acreage" value=" 94,1m2 (2 phòng ngủ + 1 phòng đa năng)">
                            94,1m2 <br> (2 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Bedroom');?> + 1 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Multipurpose_room'); ?>)
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="select_d" name="acreage" value=" 151,5m2 (3 - 5 phòng ngủ)">
                            151,5m2 <br> (3 - 5 <?php echo $this->lang->line('CUSTOMER_INFORMATION_Bedroom'); ?>)
                        </label>
                    </th>
                </tr>
            </table>
        </div>

        <div class="table-mobile">
            <table class="table">
                <tr>
                    <th colspan="4"><h4 class="title"><?php echo $this->lang->line('CUSTOMER_INFORMATION_Know_STELLAR'); ?></h4></th>
                </tr>
                <tr>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="ads_1" name="ads" value=" Quảng cáo trên báo chí">
                            <?php echo $this->lang->line('CUSTOMER_INFORMATION_Know_pape'); ?>
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="ads_2" name="ads" value="Biển quảng cáo ngoài trời">
                            <?php echo $this->lang->line('CUSTOMER_INFORMATION_Know_qc'); ?>
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="ads_3" name="ads" value="Quảng cáo trên Tivi">
                            <?php echo $this->lang->line('CUSTOMER_INFORMATION_Know_tv'); ?>
                        </label>
                    </th>
                    <th>
                        <label class="checkbox-inline">
                            <input type="radio" id="ads_4"  name="ads" value="Quảng cáo trên mạng">
                            <?php echo $this->lang->line('CUSTOMER_INFORMATION_Know_inter_net'); ?>
                        </label>
                    </th>
                </tr>
                <tr>
                    <th>
                        <?php echo $this->lang->line('CUSTOMER_INFORMATION_qa_add'); ?>
                    </th>
                    <th colspan="3">
                        <textarea class="form-control" name="add_question"></textarea>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="bank_check" name="bank_check" value="Tôi quan tâm tới dịch vụ cho vay của ngân hàng">
                            <?php echo $this->lang->line('CUSTOMER_INFORMATION_bank'); ?>
                        </label>
                    </th>
                </tr>
            </table>
        </div>

          <?php echo form_close(); ?>
      </div>
      <div class="modal-footer">
          <?php echo form_button('submit', $this->lang->line('CUSTOMER_INFORMATION_Send'), 'id="send" class="btn btn-default hvr-shutter-out-horizontal"'); ?>
      </div>
    </div>
  </div>
</div>
</body>
<!-- InstanceEnd --></html>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?php echo site_url('assets/public/lightbox-plus-jquery.min.js'); ?>"></script>
<script src="<?php echo site_url('assets/public/bootstrap-3.3.4-dist/js/bootstrap.js'); ?>"></script>
<script src="<?php echo site_url('assets/public/responsive_nav.js'); ?>"></script>
<script src="<?php echo site_url('assets/public/script.js'); ?>"></script>
<script>
    $('.pocess-title').click(function() {
        $('.paragraph').removeClass('show');
        $('.paragraph').addClass('hide');
        $('.paragraph-title').removeClass('show');
        $('.paragraph-title').addClass('hide');
        var id = $(this).data('id');
        $('#paragraph-'+id).removeClass('hide');
        $('#paragraph-'+id).addClass('show');
        $('.paragraph-'+id).removeClass('hide');
        $('.paragraph-'+id).addClass('show');
    });
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104520321-1', 'auto');
  ga('send', 'pageview');

</script>
</html>