<body class="hold-transition skin-blue sidebar-mini">

    <!--  -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="?action=trangchu" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b></b>ADMIN</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu" style="margin-right:2%">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="hidden-xs"> 
                                <?php
                                    if (isset($_SESSION['tendangnhap'])) { ?>
                                        <img src="/images/edubirdie.png" alt="Logo" style="width: 50px;">
                                        <?php echo "Xin chào " . htmlspecialchars($_SESSION['tendangnhap']); ?>
                                    <?php } else { ?>
                                        <?php echo "Xin Chào ..."; ?>
                                    <?php }
                                ?>
                            </span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/index.php" class="<?php echo (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) == '' && $_GET['action'] == 'trangchu') ? 'active' : ''; ?>">
                                    Trang chủ
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">

                    </div>
                    <div class="pull-left info">

                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">LAOYOUT ADMIN</li>

                    <li>
                        <a href="?action=loaisanpham">
                            <i class="fa fa-th"></i> <span>List danh mục</span>
                        </a>
                    </li>
                    <li>
                        <a href="?action=banner">
                            <i class="fa fa-th"></i> <span>List Banner</span>
                        </a>
                    </li>
                    <li>
                        <a href="?action=hoadon">
                            <i class="fa fa-th"></i> <span>List hóa đơn</span>
                        </a>
                    </li>
                    <li>
                        <a href="?action=sanpham"">
                            <i class=" fa fa-th"></i> <span>List sản phẩm</span>
                        </a>
                    </li>
                    <li>
                        <a href="?action=khuyenmai">
                            <i class="fa fa-th"></i> <span>List khuyến mãi</span>
                        </a>
                    </li>
                    <li>
                        <a href="?action=taikhoan">
                            <i class="fa fa-th"></i> <span>List Tài khoản</span>
                            <span class="pull-right-container">
                                <!--<small class="label pull-right bg-green">new</small>-->
                            </span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <!-- Main content -->
            <section class="content">

                <!-- ./wrapper -->
<style>
    .dropdown-menu .active a {
    background-color: #f0f0f0; /* Màu nền cho mục đang hoạt động */
    color: #333; /* Màu chữ cho mục đang hoạt động */
}
</style>