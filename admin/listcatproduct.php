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
       DANH MỤC SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh mục sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh mục sản phẩm</h3>
            </div>
            <?php 
            if(isset($_SESSION['themdanhmuc'])){
              echo "Thêm danh mục mới thành công!";
              unset($_SESSION['themdanhmuc']);
            }

            ?>
            <?php 
            if(isset($_SESSION['capnhatdanhmuc'])){
              echo "Cập nhật danh mục thành công!";
              unset($_SESSION['capnhatdanhmuc']);
            }

            ?>
            <?php 
            if(isset($_SESSION['xoadanhmuc'])){
              echo "Xóa danh mục thành công!";
              unset($_SESSION['xoadanhmuc']);
            }

            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên danh mục</th>
                  <th>Vị trí</th>
                  <th>Trạng thái</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                        <?php
                        $sql_loaisp = "select * from loaisp ORDER BY id_loaisp DESC";
                        $query = mysqli_query($conn,$sql_loaisp);
                        $dem = 0;
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        $dem +=1; 
                        ?>
                <tr>
                  <td><?php echo $dong_sp['id_loaisp'] ?></td>       
                  <td><?php echo $dong_sp['tenloaisp'] ?></td>
                  <td><?php echo $dong_sp['thutu'] ?></td>
                  <td><?php echo $dong_sp['trangthai'] ?></td>
                  <td><a href="index.php?module=edit_cat_product&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>">Sửa</a>  |  <a href="index.php?module=delete_cat_product&id_loaisp=<?php echo $dong_sp['id_loaisp'] ?>" onclick="return deleteAction();">Xóa</a></td>
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
<!-- ./wrapper -->

<!-- jQuery 3.1.1 -->
<!-- page script -->