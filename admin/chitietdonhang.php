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
       CHI TIẾT ĐƠN HÀNG
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Chi tiết đơn hàng</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title" style="margin-top: 0px;">TÊN CỬA HÀNG</h3>
              <h3 class="box-title" style="margin-left: 400px;">HÓA ĐƠN BÁN HÀNG</h3>
            </div>
            <div class="box-header">
              <h3 class="box-title" >LOVELY FLOWERS</h3>
              <h3 class="box-title" style="margin-left: 380px;">MẶT HÀNG HOA TƯƠI</h3>
            </div>
            <div class="box-header">
              <h4 class="box-title" >Địa chỉ: 411-Hoàng Quốc Việt-Quận Cầu Giấy-Hà Nội</h4>
            </div>
            <div class="box-header">
              <h4 class="box-title" >Điện thoại: 0963256761</h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>TT</th>
                  <th>TÊN HÀNG</th>
                  <th>SỐ LƯỢNG</th>
                  <th>ĐƠN GIÁ</th>
                  <th>THÀNH TIỀN</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_GET['id'])&&isset($_GET['ten'])&&isset($_GET['sdt'])&&isset($_GET['diachi'])){
                  $iddh = $_GET['id'];
                  $tenkh = $_GET['ten'];
                  $sdtkh = $_GET['sdt'];
                  $ad = $_GET['diachi'];
                  echo "Đơn hàng số: {$iddh}";
                  echo "<br>";
                  echo "Tên khách hàng: {$tenkh}";
                  echo "<br>";
                  echo "Số điện thoại: {$sdtkh}";
                  echo "<br>";
                  echo "Địa chỉ: {$ad}";

                $sql_chitiet = "select * from order_detal where order_id=$iddh  ORDER BY id DESC ";
                $query = mysqli_query($conn,$sql_chitiet); 
                ?>

                <?php
                $dem =0;
                $tongcong = 0;
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $sql = "SELECT * FROM chitietsp where ten_sp='".$dong_chitiet['product_id']."' ";
                $query1 = mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($query1);
                $daxuly = $dong['soluong'] - $dong_chitiet['sl'];
                $chuaxuly = $dong['soluong'] + $dong_chitiet['sl'];
                 ?>
                <tr>
                  <td><?php $dem += 1; echo $dem; ?></td>
                  <td><?php echo $dong_chitiet['product_id'] ?></td>
                  <td><?php echo $dong_chitiet['sl'] ?></td>
                  <td><?php $chiara = number_format($dong_chitiet['price'] , 0, ',', '.'); echo $chiara; ?> VNĐ</td>           
                  <td><?php echo number_format($dong_chitiet['price']*$dong_chitiet['sl'], 0, ',', '.'); ?> VNĐ</td>

                </tr>
                
                <?php
                $tongcong += $dong_chitiet['price']*$dong_chitiet['sl']; 
                }}
                ?>
                <tr>
                  <th colspan="5">Tổng cộng: <?php echo number_format($tongcong , 0, ',', '.'); ?> VNĐ </th>

                </tr>

                </tbody>
                
              </table>

            </div>
            
            <div class="box-header">
              <h4 class="box-title" style="margin-left: 400px;" >Ngày <?php date_default_timezone_set('Asia/Ho_Chi_Minh');
                      $date = date('d/m/Y - H:i:s');  echo substr( $date,  0, 2);  ?> tháng <?php echo substr( $date,  3, 2);  ?> năm <?php echo substr( $date,  6, 4);  ?></h4>
            </div>
            <!-- /.box-body -->
            <div class="box-header">
              <h3 class="box-title" style="margin-left: 40px;" >KHÁCH HÀNG</h3>
              <h3 class="box-title" style="margin-left: 340px;">CỬA HÀNG</h3>
            </div>
            <div class="box-header">
              <h3 class="box-title" style="margin-left: 30px;" ><?php echo "{$tenkh}"; ?></h3>
              <h3 class="box-title" style="margin-left: 310px;">LOVELY FLOWERS</h3>
            </div>
          </div>
          <!-- /.box -->
<div style="margin-left: 350px;"><span class="glyphicon glyphicon-print" aria-hidden="true"></span><input style="border: none; width: 60px; height: 30px;"  type="button" id="print_button"  value="PRINT" onclick="this.style.display ='none'; window.print()" /></div>
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
            <div class="control-sidebar-bg"></div>

</div>
