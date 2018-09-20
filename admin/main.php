 <div class="content-wrapper">   
    <section class="content-header">
      <h1>
        Chào mừng bạn đến với trang quản trị website
       <?php require_once("connect.php");
                $sql_chitiet = "select * from member ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dem = 0; 
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $dem +=1;
                }
                setcookie('khachhang',$dem, time() + 90000000,'/','',0);
                 ?>
          <?php require_once("connect.php");
                $sql_chitiet1 = "select * from oder ";
                $query1 = mysqli_query($conn,$sql_chitiet1);
                $dem1 = 0; 
                ?>
                <?php
                while($dong_chitiet1 = mysqli_fetch_array($query1)) {
                  $dem1 +=1;
                }
                setcookie('donhang1',$dem1, time() + 90000000,'/','',0);
                 ?>
            <?php require_once("connect.php");
                $sql_chitiet2 = "select * from chitietsp ";
                $query2 = mysqli_query($conn,$sql_chitiet2);
                $dem2 = 0; 
                ?>
                <?php
                while($dong_chitiet2 = mysqli_fetch_array($query2)) {
                  $dem2 +=1;
                }
                setcookie('sanpham',$dem2, time() + 90000000,'/','',0);
                 ?>
          <?php require_once("connect.php");
                $sql_chitiet3 = "select * from admin ";
                $query3 = mysqli_query($conn,$sql_chitiet3);
                $dem3 = 0; 
                ?>
                <?php
                while($dong_chitiet3 = mysqli_fetch_array($query3)) {
                  $dem3 +=1;
                }
                setcookie('admin',$dem3, time() + 90000000,'/','',0);
                 ?>
            <?php require_once("connect.php");
                $sql_chitiet4 = "select * from ncc ";
                $query4 = mysqli_query($conn,$sql_chitiet4);
                $dem4 = 0; 
                ?>
                <?php
                while($dong_chitiet4 = mysqli_fetch_array($query4)) {
                  $dem4 +=1;
                }
                setcookie('ncc',$dem4, time() + 90000000,'/','',0);
                 ?>
          <?php require_once("connect.php");
                $sql_chitiet5 = "select * from loaisp ";
                $query5 = mysqli_query($conn,$sql_chitiet5);
                $dem5 = 0; 
                ?>
                <?php
                while($dong_chitiet5 = mysqli_fetch_array($query5)) {
                  $dem5 +=1;
                }
                setcookie('danhmuc',$dem5, time() + 90000000,'/','',0);
                 ?>
          <?php require_once("connect.php");
                $sql_chitiet6 = "select * from news ";
                $query6 = mysqli_query($conn,$sql_chitiet6);
                $dem6 = 0; 
                ?>
                <?php
                while($dong_chitiet6 = mysqli_fetch_array($query6)) {
                  $dem6 +=1;
                }
                setcookie('khuyenmai',$dem6, time() + 90000000,'/','',0);
                 ?>

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-street-view"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Số lượt truy cập</span>
              <span class="info-box-number"><small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-paw"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Thành viên</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['khachhang'])) { echo $_COOKIE['khachhang']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Admin</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['admin'])) { echo $_COOKIE['admin']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-reorder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Danh mục sản phẩm</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['danhmuc'])) { echo $_COOKIE['danhmuc']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sản phẩm</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['sanpham'])) { echo $_COOKIE['sanpham']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Đơn hàng</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['donhang1'])) { echo $_COOKIE['donhang1']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-ship"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Nhà cung cấp</span>
              <span class="info-box-number"><?php if (isset($_COOKIE['ncc'])) { echo $_COOKIE['ncc']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
         <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-fw fa-reorder"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Danh mục khuyến mãi </span>
              <span class="info-box-number"><?php if (isset($_COOKIE['khuyenmai'])) { echo $_COOKIE['khuyenmai']; } ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

        

        <div class="clearfix visible-sm-block"></div>

     
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    <div class="control-sidebar-bg"></div>

</div>