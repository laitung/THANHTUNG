<?php
  require_once("connect.php");

?>
<script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn xóa danh mục này không?");
  }
</script>
 <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       Tổng doanh thu
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Tổng doanh thu</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tổng doanh thu</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="POST" accept-charset="utf-8">
                <label>Ngày bắt đầu</label>
                <input class="hangbanchay" type="date" name="dau" value="<?php if(isset($_POST['dau'])){ echo $_POST['dau']; } ?>" >
                <label>Ngày kết thúc</label>
                <input class="hangbanchay" type="date" name="cuoi" value="<?php if(isset($_POST['cuoi'])){ echo $_POST['cuoi']; } ?>" >
                <button type="submit" name="submit">Kiểm tra</button>
              </form>
              <br>
              <p>Tổng doanh thu từ: <?php if(isset($_SESSION['dau'])){ echo $_SESSION['dau']; } ?> đến: <?php if(isset($_SESSION['cuoi'])){ echo $_SESSION['cuoi']; } ?> </p>
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng bán được</th>
                  <th>Đơn giá</th>
                  <th>Tổng cộng</th>
                  <th>Ghi chú</th>
 
                </tr>
                </thead>
                <tbody>

                <?php
                if(isset($_POST['submit']) && $_POST['dau'] !== '' && $_POST['cuoi'] !== '' ){
                  $dau = $_POST['dau'];

                  $sau = $_POST['cuoi'];

                $sql_chitiet1 = "SELECT DISTINCT product_id, daban FROM order_detal WHERE (date_xuly BETWEEN '$dau'  AND '$sau' ) ORDER BY daban DESC";
                $query1 = mysqli_query($conn,$sql_chitiet1);
                ?>
                <?php
                $tongdoanhthu = 0;
                while($dong_chitiet1 = mysqli_fetch_array($query1)) {
                  if(isset($dong_chitiet1['product_id'])){
                  $sql_chitiet3 = "SELECT SUM(sl) FROM order_detal WHERE (date_xuly BETWEEN '$dau'  AND '$sau' ) AND (product_id = '".$dong_chitiet1['product_id']."')  ";
                $query3 = mysqli_query($conn,$sql_chitiet3);
                $dong_chitiet3 = mysqli_fetch_array($query3);
                $update = mysqli_query($conn,"UPDATE order_detal SET sl_sau = '$dong_chitiet3[0]'  WHERE (date_xuly BETWEEN '$dau'  AND '$sau' ) AND (product_id='".$dong_chitiet1['product_id']."') ") or die (mysql_error());
              }
                  $sql_chitiet = "select * from chitietsp where ten_sp = '".$dong_chitiet1['product_id']."' ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dong_chitiet2 = mysqli_fetch_array($query);
                $sohang = $dong_chitiet2['soluong'] + $dong_chitiet1['daban'];
                 ?>
                 <tr>
                 <td><?php echo $dong_chitiet1['product_id'] ?></td>
                 <td><?php echo $dong_chitiet3[0]; ?></td>
                 <td><?php if($dong_chitiet2['sale']=='0'){ echo number_format($dong_chitiet2['gia'] , 0, ',', '.');} else {  echo number_format($dong_chitiet2['sale'] , 0, ',', '.'); } ?></td>
                 <td><?php if($dong_chitiet2['sale']=='0'){ echo number_format($dong_chitiet3[0]*$dong_chitiet2['gia'] , 0, ',', '.');} else {
                  echo number_format($dong_chitiet3[0]*$dong_chitiet2['sale'] , 0, ',', '.');
                 } ?> VNĐ</td>
                 <td><?php if($dong_chitiet2['sale']=='0'){ if($dong_chitiet3[0]*$dong_chitiet2['gia'] >= 5000000){ echo 'Đạt doanh thu cao' ;
                 $tongdoanhthu += $dong_chitiet3[0]*$dong_chitiet2['gia']; }
                 else {
                  echo 'Bình thường';
                  $tongdoanhthu += $dong_chitiet3[0]*$dong_chitiet2['gia'];
                 }}
                 else {
                  if($dong_chitiet3[0]*$dong_chitiet2['sale'] >= 5000000){ echo 'Đạt doanh thu cao' ;
                 $tongdoanhthu += $dong_chitiet3[0]*$dong_chitiet2['sale']; }
                 else {
                  echo 'Bình thường';
                  $tongdoanhthu += $dong_chitiet3[0]*$dong_chitiet2['sale'];
                 }
                 }
                  ?></td>

               </tr>
               
               <?php }} ?>
               <tr>
                 <th>Tổng doanh thu bán hàng: <?php if(isset($_POST['submit']) && $_POST['dau'] !== '' && $_POST['cuoi'] !== ''){ echo number_format($tongdoanhthu, 0, ',', '.');} ?> VNĐ </th>
               </tr>

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