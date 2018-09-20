<?php
  require_once("connect.php");

?>
 <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THỐNG KÊ SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thống kê sản phẩm</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thống kê sản phẩm</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Đã bán</th>
                  <th>Còn lại</th>
                  <th>Ghi chú</th>

                </tr>
                </thead>
                <tbody>

                <?php

                $sql_chitiet1 = "SELECT ten_sp,banroi,soluong,banroi FROM chitietsp ORDER BY soluong ASC" ;
                $query1 = mysqli_query($conn,$sql_chitiet1);
                ?>
                <?php
                while($dong_chitiet1 = mysqli_fetch_array($query1)) {
                 ?>
                 <tr>
                 <td><?php echo $dong_chitiet1['ten_sp']; ?></td>
                 <td><?php echo $dong_chitiet1['soluong'] + $dong_chitiet1['banroi']; ?></td>
                 <td><?php echo $dong_chitiet1['banroi']; ?></td>
                 <td><?php echo $dong_chitiet1['soluong']; ?></td>
                 <td><?php if($dong_chitiet1['soluong'] <= 10){ echo 'Cần nhập thêm hàng' ;}
                 else {
                  if($dong_chitiet1['banroi'] == 0){ echo 'Sản phẩm chưa bán được cái nào' ;}
                  else {
                    echo "Mặt hàng OK";
                  }
                 } ?></td>

               </tr>
               <?php 

              } ?>

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
            <div class="control-sidebar-bg"></div>

</div>