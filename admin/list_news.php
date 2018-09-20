<?php
  require_once("connect.php");

?>
<script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn xóa danh mục này không?");
  }
</script>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       DANH MỤC KHUYẾN MÃI
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục khuyến mãi</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục khuyến mãi</h3>
            </div>
            <?php 
            if(isset($_SESSION['themkhuyenmai'])){
              echo "Thêm khuyến mãi mới thành công!";
              unset($_SESSION['themkhuyenmai']);
            }

            ?>
            <?php 
            if(isset($_SESSION['capnhatkhuyenmai'])){
              echo "Cập nhật khuyến mãi thành công!";
              unset($_SESSION['capnhatkhuyenmai']);
            }

            ?>
            <?php 
            if(isset($_SESSION['xoakhuyenmai'])){
              echo "Xóa khuyến mãi thành công!";
              unset($_SESSION['xoakhuyenmai']);
            }

            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Ảnh khuyến mãi</th>
                  <th>Vị trí</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                        <?php

                        $sql_loaisp = "select * from news ORDER BY id DESC";
                        $query = mysqli_query($conn,$sql_loaisp);
                        $dem = 0;
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        $dem +=1; 
                        ?>
                <tr>
                  <td><?php echo $dong_sp['id'] ?></td>       
                  <td><img style="width: 100px" src="../images/<?php echo $dong_sp['khuyenmai'] ?>"></td>
                  <td><?php echo $dong_sp['thutu'] ?></td>
                  <td><?php echo $dong_sp['trangthai'] ?></td>
                  <td><a href="index.php?module=edit_news&id=<?php echo $dong_sp['id'] ?>">Sửa</a>  |  <a href="index.php?module=delete_news&id=<?php echo $dong_sp['id'] ?>" onclick="return deleteAction();">Xóa</a></td>
                </tr>
                        <?php 
                        }
                        setcookie('khuyenmai', $dem, time() + 90000000);
                        ?>
              
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
