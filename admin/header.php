<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TRANG CHỦ</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">0</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 0 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">

                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/<?php if(isset($_SESSION["hinhanh"])){ echo $_SESSION["hinhanh"];} ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php if(isset($_SESSION["user_iddn"])){ echo $_SESSION["user_name"]; } ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/<?php if(isset($_SESSION["hinhanh"])){ echo $_SESSION["hinhanh"];} ?>" class="img-circle" alt="User Image">

                <p>
                  
                  <small><?php echo date('Y-m-d H:i:s') ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="index.php?module=thongtinadmin&id=<?php if(isset($_SESSION["user_iddn"])){ echo $_SESSION["user_iddn"]; } ?> " class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="index.php?module=logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="images/<?php if(isset($_SESSION["hinhanh"])){ echo $_SESSION["hinhanh"];} ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php if(isset($_SESSION["user_iddn"])){ echo $_SESSION["user_name"]; } ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="index.php">
            <i class="fa fa-dashboard"></i> <span>Trang chủ</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
        </li>
        <li class="treeview">
          <a href="cat_product.php">
            <i class="fa fa-fw fa-bars"></i>
            <span>Danh mục sản phẩm</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="index.php?module=listcatproduct"><i class="fa fa-circle-o"></i>Danh sách danh mục</a></li>
            <li><a href="index.php?module=catproductnew"><i class="fa fa-circle-o"></i>Thêm danh mục</a></li>
          
          </ul>
        </li>
        <li class="treeview">
          <a href="cat_product.php">
            <i class="ion ion-ios-gear-outline"></i>
            <span>Sản phẩm</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="index.php?module=list_product"><i class="fa fa-circle-o"></i>Danh sách sản phẩm</a></li>
            <li><a href="index.php?module=product_new"><i class="fa fa-circle-o"></i>Thêm sản phẩm</a></li>
            
          </ul>
        </li>
         <li>
          <a href="index.php?module=listdonhang">
            <i class="ion ion-ios-cart-outline"></i>
            <span>Đơn hàng</span>
           
          </a>
         
        </li>
        <li>
           <li class="treeview">
          <a href="cat_product.php">
            <i class="fa fa-fw fa-bars"></i>
            <span>Danh mục khuyến mãi</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="index.php?module=list_news"><i class="fa fa-circle-o"></i>Danh sách khuyến mãi</a></li>
            <li><a href="index.php?module=addlist_news"><i class="fa fa-circle-o"></i>Thêm khuyến mãi</a></li>
            
          </ul>
        </li>
        <li>
           <li class="treeview">
          <a href="cat_product.php">
            <i class="fa fa-fw fa-bullhorn"></i>
            <span>Thông tin NCC</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="index.php?module=listncc"><i class="fa fa-circle-o"></i>Danh sách NCC</a></li>
          <li><a href="index.php?module=newncc"><i class="fa fa-circle-o"></i>Thêm NCC</a></li>
            
          </ul>
        </li>
         <li>
           <li class="treeview">
          <a href="cat_product.php">
            <i class="fa fa-fw fa-refresh"></i>
            <span>Báo cáo</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="index.php?module=thongkesanpham"><i class="fa fa-circle-o"></i>Thống kê sản phẩm</a></li>
          <li><a href="index.php?module=producthot"><i class="fa fa-circle-o"></i>Mặt hàng bán chạy</a></li>
          <li><a href="index.php?module=productton"><i class="fa fa-circle-o"></i>Mặt hàng lâu không bán được</a></li>
          <li><a href="index.php?module=doanhthu"><i class="fa fa-circle-o"></i>Báo cáo doanh thu</a></li>
            
          </ul>
        </li>
        <li>
           <li class="treeview">
          <a href="cat_product.php">
            <i class="fa fa-fw fa-user"></i>
            <span>Admin</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">2</span>
            </span>
          </a>
          <ul class="treeview-menu">
          <li><a href="index.php?module=listadmin"><i class="fa fa-circle-o"></i>Quản lý Admin</a></li>
            <li><a href="index.php?module=newadmin"><i class="fa fa-circle-o"></i>Thêm mới Admin</a></li>
            
          </ul>
        </li>
       <li>
           <a href="index.php?module=listkhachhang">
            <i class="fa fa-fw fa-user"></i>
            <span>Khách hàng</span>
            <span class="pull-right-container">
            </span>
          </a> 
        </li>
        <li>
          <a href="index.php?module=nhaphang">
            <i class="ion ion-ios-cart-outline"></i>
            <span>Nhập hàng</span>
           
          </a>
         
        </li>
        <li>
           <a href="index.php?module=lienhe">
            <i class="fa fa-fw fa-user"></i>
            <span>Liên Hệ</span>
            <span class="pull-right-container">
            </span>
          </a> 
        </li>
        <li>
           <a href="index.php?module=listmkm">
            <i class="fa fa-fw fa-user"></i>
            <span>Mã Khuyến Mãi</span>
            <span class="pull-right-container">
            </span>
          </a> 
        </li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<script src="dist/js/adminlte.min.js"></script>


<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>