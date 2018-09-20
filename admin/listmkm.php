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
       DANH MỤC MÃ KM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục mã KM</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục mã KM</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID Mã giảm giá</th>
                  <th>Mã giảm giá</th>
                  <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                        <?php

                        $sql_loaisp = "select * from magiamgia ";
                        $query = mysqli_query($conn,$sql_loaisp);
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        ?>
                <tr>
                  <td><?php echo $dong_sp['id_giamgia'] ?></td>
                  <td><?php echo $dong_sp['ma_giamgia'] ?></td>
                  <td><?php echo $dong_sp['trangthai'] ?></td>        
                </tr>
                        <?php 
                        }
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
