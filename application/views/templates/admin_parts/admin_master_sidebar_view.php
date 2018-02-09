<?php
if($this->ion_auth->logged_in()) {
?>
<!--sidebar start-->
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="sub-menu">
                <a href="<?php echo site_url('admin/process'); ?>" class="">
                    <i class="icon_document_alt"></i>
                    <span>Process</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="<?php echo site_url('admin/qa'); ?>" class="">
                    <i class="icon_document_alt"></i>
                    <span>Q & A</span>
                </a>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<?php } ?>



