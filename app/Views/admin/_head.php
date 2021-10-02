<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <title>Preskool - Dashboard</title>
		
		<!-- Favicon -->
        <link rel="shortcut icon" href="<?= base_url() ?>/public/admin/assets/img/favicon.png">
	
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">
		
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/bootstrap/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/fontawesome/css/all.min.css">
		
        <!-- Datatables CSS -->
		<link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/plugins/datatables/datatables.min.css">

		<!-- Main CSS -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/admin/assets/css/style.css">
        <script src="https://cdn.ckeditor.com/ckeditor5/29.2.0/classic/ckeditor.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.2.1/lightgallery.min.js"></script>

    </head>

<body>
    <?php session_start();?>
    <!-- Main Wrapper -->
    <div class="main-wrapper">
		
        <!-- Header -->
        <div class="header">
        
            <!-- Logo -->
            <div class="header-left">
                <a href="/index.html" class="logo">
                    <img src="<?= base_url() ?>/public/admin/assets/img/logo-123.png" alt="Logo" wdith="90" height="90">
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="<?= base_url() ?>/public/admin/assets/img/logonhanam.png" alt="Logo" width="30" height="30">
                </a>
            </div>
            <!-- /Logo -->
            
            <a href="javascript:void(0);" id="toggle_btn">
                <i class="fas fa-align-left"></i>
            </a>
            
            <!-- Mobile Menu Toggle -->
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>
            <!-- /Mobile Menu Toggle -->
            
            <!-- Header Right Menu -->
            <ul class="nav user-menu">

                <!-- Notifications -->
                <li class="nav-item dropdown noti-dropdown">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Thông báo</span>
                            <a href="javascript:void(0)" class="clear-noti"> Xoá hết </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?= base_url() ?>/public/admin/assets/img/profiles/avatar-02.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?= base_url() ?>/public/admin/assets/img/profiles/avatar-11.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?= base_url() ?>/public/admin/assets/img/profiles/avatar-17.jpg">
                                            </span>
                                            <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media">
                                            <span class="avatar avatar-sm">
                                                <img class="avatar-img rounded-circle" alt="User Image" src="<?= base_url() ?>/public/admin/assets/img/profiles/avatar-13.jpg">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <!-- /Notifications -->
                
                <!-- User Menu -->
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="<?= base_url() ?>/public/admin/assets/img/download.png" width="31" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="<?= base_url() ?>/public/admin/assets/img/download.png" alt="User Image" class="avatar-img rounded-circle">
                            </div>
                            <div class="user-text">
                                <h6><?= $_SESSION['user']['username'] ?></h6>
                                <p class="text-muted mb-0">
                                    <?php if($_SESSION['user']['role'] == 'admin'){
                                        echo 'Quản trị viên';
                                    } elseif ($_SESSION['user']['role'] == 'employee'){
                                        echo 'Nhân viên';
                                    }?>
                            </div>
                        </div>
                        <a class="dropdown-item" href="profile.html">Hồ sơ cá nhân</a>
                        <a class="dropdown-item" href="inbox.html">Tin nhắn</a>
                        <a class="dropdown-item" href="<?= base_url().'/public/admin/account/logout'?>">Đăng xuất</a>
                    </div>
                </li>
                <!-- /User Menu -->
                
            </ul>
            <!-- /Header Right Menu -->
            
        </div>
        <!-- /Header -->
        
        <!-- Sidebar -->
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title"> 
                            <span>Management</span>
                        </li>
                        <li> 
                            <a href="<?= base_url() ?>/public/admin/index"><i class="fas fa-th-large"></i> <span>Quản lý</span></a>
                        </li>
                        <li class="submenu">
                            <a href="<?= base_url() ?>/public/admin/book/account"><i class="far fa-user"></i> <span> Tài khoản</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/account">Danh sách tài khoản</a></li>
                                <!-- <li><a href="<?= base_url() ?>/public/admin/account/detail">Xem tài khoản</a></li> -->
                                <li><a href="<?= base_url() ?>/public/admin/account/add">Thêm tài khoản</a></li>
                                <!-- <li><a href="<?= base_url() ?>/public/admin/account/edit">Sửa tài khoản</a></li> -->
                            </ul>
                        </li>
                        
                        <li class="submenu">
                            <a href="<?= base_url() ?>/public/book"><i class="fas fa-book"></i> <span> Sách</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/book">Danh sách </a></li>
                                <li><a href="<?= base_url() ?>/public/admin/book/add">Thêm sách</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="<?= base_url() ?>/public/admin/order"><i class="fas fa-receipt"></i> <span>Đơn hàng</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/order">Danh sách đơn hàng</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/order/add">Thêm đơn hàng</a></li>
                                
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/public/admin/category"><i class="fas fa-book-open"></i> <span> Danh mục</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/category">Danh mục sách</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/category/add">Thêm danh mục</a></li>
                            </ul>
                        </li>
                        <?php if($_SESSION['user']['role']=='admin'):?>
                        <li class="submenu">
                            <a href="/public/admin/shipping"><i class="fas fa-shipping-fast"></i> <span>Nhà vận chuyển</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/shipping">Danh sách nhà vận chuyển</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/shipping/add">Thêm nhà vận chuyển</a></li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <?php if($_SESSION['user']['role']=='admin'):?>
                        <li class="submenu">
                            <a href="/public/admin/supplier"><i class="fas fa-dolly"></i> <span>Nhà cung cấp</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/supplier">Danh sách nhà cung cấp</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/supplier/add">Thêm</a></li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <?php if($_SESSION['user']['role']=='admin'):?>
                        <li class="submenu">
                            <a href="/public/admin/imports"><i class="fas fa-archive"></i> <span>Nhập hàng</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/imports">Danh sách đơn nhập hàng</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/imports/add">Thêm</a></li>
                            </ul>
                        </li>
                        <?php endif;?>
                        <li class="submenu">
                            <a href="/public/admin/discount"><i class="fas fa-percent"></i> <span>Mã giảm giá</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="<?= base_url() ?>/public/admin/discount">Danh sách mã giảm giá</a></li>
                                <li><a href="<?= base_url() ?>/public/admin/discount/add">Thêm</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->
    <?= $this->renderSection('content') ?>
    <!-- Footer -->
        <footer>
            <p>Copyright © 2021 Nhóm 1: Đồ án xây dựng và phát triển phần mềm - 69DCTT21 - UTT</p>					
        </footer>
        <!-- /Footer -->
</div>
    </div>
    <!-- jQuery -->
    <script src="<?= base_url() ?>/public/admin/assets/js/jquery-3.5.1.min.js"></script>
    
    <!-- Bootstrap Core JS -->
    <script src="<?= base_url() ?>/public/admin/assets/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <!-- Slimscroll JS -->
    <script src="<?= base_url() ?>/public/admin/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <!-- Chart JS -->
    <script src="<?= base_url() ?>/public/admin/assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>/public/admin/assets/plugins/apexchart/chart-data.js"></script>
    
    <!-- Datatables JS -->
		<script src="assets/plugins/datatables/datatables.min.js"></script>
    <!-- Custom JS -->
    <script  src="<?= base_url() ?>/public/admin/assets/js/script.js"></script>
</body>

</html>