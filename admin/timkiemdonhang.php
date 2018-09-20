<?php
  require_once("connect.php");
  if(isset($_POST['tim']) && isset($_POST['nhap'])){
  $ketqua = $_POST['nhap'];
   }

?>
<script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn hủy đơn hàng này không?");
  }
</script>
<?php 
if(isset($loihetsachhang)){
  echo $loihetsachhang;
}
?>
 <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       DANH SÁCH ĐƠN HÀNG
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách đơn hàng</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách đơn hàng</h3>
              <form action="index.php?module=timkiemdonhang" method="POST">
              <input type="text" name="nhap" placeholder="Nhập vào đây!" ><a href="index.php?module=timkiemdonhang"><button type="submit" name="tim">Tìm kiếm</button></a>
            </form>

            <?php
            if(isset($ketqua)){
                $sql_chitiet1 = "select * from oder where (order_id LIKE N'%".$ketqua."%') OR (makh LIKE N'%".$ketqua."%') OR (fullname LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (date_order LIKE N'%".$ketqua."%') OR (status LIKE N'%".$ketqua."%')  ORDER BY order_id DESC ";
                $query1 = mysqli_query($conn,$sql_chitiet1);
                $dem1 = 0; 
                while($dong_chitiet1 = mysqli_fetch_array($query1)) {
                  $dem1 +=1;
                  }
                  echo '<br>';
                  echo "Tìm thấy ".$dem1." đơn đặt hàng!";
                }
                 ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Mã đơn hàng</th>
                  <th>Mã khách hàng</th>
                  <th>Họ và tên</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Email</th>
                  <th>Nội dung</th>
                  <th>Tổng tiền<br> thanh toán</th>
                  <th>Ngày mua</th>
                  <th>Ngày yêu cầu</th>
                  <th>Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                        if(isset($_GET['trang'])){
                            $get_trang=$_GET['trang'];
                            $ketqua = $_GET['ketqua'];
                        }
                        else {
                            $get_trang='';
                        }
                        if($get_trang=='' || $get_trang==1){
                            $trang1=0;
                        }
                        else {
                            $trang1=($get_trang*10)-10;
                        }


                        ?>
                <?php
                if(isset($ketqua)){
                $sql_chitiet = "select * from oder where (order_id LIKE N'%".$ketqua."%') OR (makh LIKE N'%".$ketqua."%') OR (fullname LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (date_order LIKE N'%".$ketqua."%') OR (status LIKE N'%".$ketqua."%')  ORDER BY order_id DESC ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dem = 0; 
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $dem +=1;
                  
                 ?>
                 <form action="" method="POST">
                <tr>
                  <td><?php echo "DH-".$dong_chitiet['order_id']."" ?></td>
                  <td><?php echo "KH".$dong_chitiet['makh']."" ?></td>                  
                  <td><?php echo $dong_chitiet['fullname'] ?></td>
                  <td><?php echo $dong_chitiet['address'] ?></td>
                  <td><?php echo $dong_chitiet['phone'] ?></td>
                  <td><?php echo $dong_chitiet['email'] ?></td>
                  <td><?php echo $dong_chitiet['noidung'] ?></td>
                  <td><?php $chiara = number_format($dong_chitiet['total'] , 0, ',', '.'); echo $chiara; ?> VNĐ</td>
                  <td><?php echo $dong_chitiet['date_order'] ?></td>
                  <td><?php echo $dong_chitiet['datesau'] ?></td>
                  <td>
                <select class="form-control select2 select2-hidden-accessible" name="trangthai_<?php echo $dong_chitiet['order_id'] ?>" style="width: 120px;" >
                  <option value="<?php if(($dong_chitiet['status'])=='Đang xử lý'){
                    echo "Đang xử lý";
                  } else {
                    echo "Đã xử lý";
                  }
                   ?>"><?php if(($dong_chitiet['status'])=='Đang xử lý'){
                    echo $dong_chitiet['status'];
                  } else {
                    echo "Đã xử lý";
                  }
                   ?></option>
                  <option value="<?php if(($dong_chitiet['status'])=='Đang xử lý'){
                    echo "Đã xử lý";
                  } else {
                    echo "Đang xử lý";
                  }
                   ?>"><?php if(($dong_chitiet['status'])=='Đang xử lý'){
                    echo "Đã xử lý";
                  } else {
                    echo "Đang xử lý";
                  }
                   ?></option>
                  
                  
                </select></td>
                  <td><a href="index.php?module=chitietdonhang&id=<?php echo $dong_chitiet['order_id'] ?>&ten=<?php echo $dong_chitiet['fullname'] ?>&sdt=<?php echo $dong_chitiet['phone'] ?>&makh=<?php echo $dong_chitiet['makh'] ?> ">C.tiết</a>|<a href="index.php?module=huydonhang&id=<?php echo $dong_chitiet['order_id'] ?>" onclick="return deleteAction();">Hủy</a>
                  <button type="submit" name="luu">Lưu</button></td>

                </tr>
              <?php } ?>
              </form>
                <?php
                if(isset($_POST['trangthai_'.$dong_chitiet['order_id'].''])&& isset($_POST['luu'])&&($_POST['trangthai_'.$dong_chitiet['order_id'].'']) !== $dong_chitiet['status'] ){
                  $_SESSION['luu'] = $_POST['luu'];
                  $giatri = $_POST['trangthai_'.$dong_chitiet['order_id'].''];
                  $trangthai = $dong_chitiet['order_id'];
                  $update = mysqli_query($conn,"UPDATE oder SET status='$giatri' WHERE order_id='$trangthai' ") or die (mysql_error());
                  if(isset($_GET['trang'])){
                  header('location:index.php?module=listdonhang&trang='.$_GET['trang'].'');}
                  else {
                    header('location:index.php?module=listdonhang');
                  }
                  if($_POST['trangthai_'.$dong_chitiet['order_id'].''] == 'Đã xử lý'){     
                    $sql_chitiet = "select * from order_detal where order_id='".$dong_chitiet['order_id']."'  ORDER BY id DESC ";
                    $query = mysqli_query($conn,$sql_chitiet);
                     if(isset($_SESSION['luu'])){
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('dmY');

                    $update2 = mysqli_query($conn,"UPDATE order_detal SET date_xuly='$date' WHERE order_id='".$dong_chitiet['order_id']."'") or die (mysql_error());
                  }
                    while($dong_chitiet = mysqli_fetch_array($query)) {
                  $sql = "SELECT * FROM chitietsp where ten_sp='".$dong_chitiet['product_id']."' ";
                $query1 = mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($query1);
                $tensp = $dong['ten_sp'];
                $daxuly = $dong['soluong'] - $dong_chitiet['sl'];
                if($daxuly >= 0){
                $dong_chitiet['daban'] += $dong_chitiet['sl'];
                $update3 = mysqli_query($conn,"UPDATE chitietsp SET soluong='$daxuly',banroi='".$dong_chitiet['daban']."',date_xuly='$date' WHERE ten_sp='".$dong_chitiet['product_id']."' ") or die (mysql_error());
                $update4 = mysqli_query($conn,"UPDATE order_detal SET daban='".$dong_chitiet['daban']."' WHERE product_id='$tensp' ") or die (mysql_error()); }
                else {
                  if($daxuly < 0){
                    header('location: index.php?module=loihetsachhang');
                    $update = mysqli_query($conn,"UPDATE oder SET status='Đang xử lý' WHERE order_id='$trangthai' ") or die (mysql_error());

                }
              }
              }
                
                  }
                  else {
                    if($_POST['trangthai_'.$dong_chitiet['order_id'].''] == 'Đang xử lý'){     
                    $sql_chitiet = "select * from order_detal where order_id='".$dong_chitiet['order_id']."'  ORDER BY id DESC ";
                    $query = mysqli_query($conn,$sql_chitiet);
                     if(isset($_SESSION['luu'])){
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('dmY');
                    $update2 = mysqli_query($conn,"UPDATE order_detal SET date_xuly='$date' WHERE order_id='".$dong_chitiet['order_id']."'") or die (mysql_error());
                  }
                    while($dong_chitiet = mysqli_fetch_array($query)) {
                  $sql = "SELECT * FROM chitietsp where ten_sp='".$dong_chitiet['product_id']."' ";
                $query1 = mysqli_query($conn,$sql);
                $dong=mysqli_fetch_array($query1);
                $tensp = $dong['ten_sp'];
                $daxuly = $dong['soluong'] + $dong_chitiet['sl'];
                $dong_chitiet['daban'] -= $dong_chitiet['sl'];
                $update3 = mysqli_query($conn,"UPDATE chitietsp SET soluong='$daxuly',banroi='".$dong_chitiet['daban']."',date_xuly='$date' WHERE ten_sp='".$dong_chitiet['product_id']."' ") or die (mysql_error());
                $update4 = mysqli_query($conn,"UPDATE order_detal SET daban='".$dong_chitiet['daban']."' WHERE product_id='$tensp' ") or die (mysql_error()); 
              }
                
                  }
                     
                }
                }
                }
                ?>

                </tbody>
                
              </table>
              Trang:
               <?php
               if(isset($ketqua)){ 
$sql_trang = mysqli_query($conn,"select * from oder where (order_id LIKE N'%".$ketqua."%') OR (makh LIKE N'%".$ketqua."%') OR (fullname LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (date_order LIKE N'%".$ketqua."%') OR (status LIKE N'%".$ketqua."%')  ORDER BY order_id DESC ");
$count = mysqli_num_rows($sql_trang);
$a = ceil($count/10);
for($b=1;$b<=$a;$b++){
echo '<a href="index.php?module=listdonhang&trang='.$b.'" >'.' '.$b.' '.'</a>';
}
}
 ?>
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