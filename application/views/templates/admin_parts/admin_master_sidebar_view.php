<?php
if($this->ion_auth->logged_in()) {
?>
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image" style="background:gray;">
                    <img src="<?php echo site_url('assets/public/img/logo.png') ?>" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php echo ($this->session->userdata() && $this->ion_auth->logged_in())? $this->session->userdata('identity') : "Alexander Pierce"; ?>
                    </p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="header">MAIN NAVIGATION</li>
                <li class="active">
                    <a href="<?php echo base_url('admin') ?>">
                        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin/process') ?>">
                        <i class="fa fa-inbox"></i> <span>Process</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/qa'); ?>">
                        <i class="fa fa-inbox"></i> <span>Q & A</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/post'); ?>">
                        <i class="fa fa-inbox"></i> <span>Post</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/product'); ?>">
                        <i class="fa fa-inbox"></i> <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/product_category'); ?>">
                        <i class="fa fa-inbox"></i> <span>Product Category</span>
                    </a>
                </li>
                <li class="header">DOCUMENTATION</li>
                <li>
                    <a href="<?php echo base_url('admin/user/change_password') ?>">
                        <i class="fa fa-refresh" aria-hidden="true"></i> <span>Change Password</span>
                    </a>
                </li>
                <?php if ($this->ion_auth->is_admin()===TRUE): ?>
                    <li>
                        <a href="<?php echo base_url('admin/user/register') ?>">
                            <i class="fa fa-registered" aria-hidden="true"></i> <span>Register</span>
                        </a>
                    </li>
                <?php endif ?>

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
<?php } ?>



