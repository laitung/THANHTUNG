                    <?php
                    require_once("connect.php");
                    if(isset($_POST['tim'])){
                        $ketqua = $_POST['nhap'];
                    } 
                     ?>
<script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn xóa danh mục này không?");
  }
</script>
 <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       TÌM KIẾM KHÁCH HÀNG
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách khách hàng</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách khách hàng</h3>
              <form action="index.php?module=timkiemkhachhang" method="POST">
              <input type="text" name="nhap" placeholder="Nhập vào đây!" ><a href="index.php?module=timkiemkhachhang"><button type="submit" name="tim">Tìm kiếm</button></a>
            </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Họ và tên</th>
                  <th>Email</th>
                  <th>Số điện thoại</th>
                  <th>Địa chỉ</th>
                  <th>Ngày lập</th>
                  <th>Cập nhật lần cuối</th>
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
                 $dem = 0;
                $sql_chitiet1 = "select * from member where (name LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (address LIKE N'%".$ketqua."%') OR (created LIKE N'%".$ketqua."%') OR (created_update LIKE N'%".$ketqua."%')  ORDER BY id DESC ";
                $query2 = mysqli_query($conn,$sql_chitiet1);

                ?>
                <?php
                if($ketqua!==''){
                while($dong_chitiet = mysqli_fetch_array($query2)) {
                  $dem += 1;

                 ?>

                 <?php }} } ?>



                <?php
                if(isset($ketqua)){
                  $dem = 0;
                $sql_chitiet = "select * from member where (name LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (address LIKE N'%".$ketqua."%') OR (created LIKE N'%".$ketqua."%') OR (created_update LIKE N'%".$ketqua."%')  ORDER BY id DESC LIMIT $trang1,10";
                $query1 = mysqli_query($conn,$sql_chitiet);

                ?>
                <?php
                if($ketqua!==''){
                while($dong_chitiet = mysqli_fetch_array($query1)) {
                  $dem += 1;
                 ?>
                <tr>
                  <td><?php echo $dong_chitiet['id'] ?></td>                  
                  <td><?php echo $dong_chitiet['name'] ?></td>
                  <td><?php echo $dong_chitiet['email'] ?></td>
                  <td><?php echo $dong_chitiet['phone'] ?> VNĐ</td>
                  <td><?php echo $dong_chitiet['address'] ?></td>
                  <td><?php echo $dong_chitiet['created'] ?></td>
                  <td><?php echo $dong_chitiet['created_update'] ?></td>
                  
                </tr>

                <?php

                }
                echo "Tìm thấy {$dem} kết quả";
                }
                else {
                    if($ketqua==''){
                     $chuacogi = "Vui lòng nhập kết quả cần tìm";
                     echo $chuacogi;}
                }

}
                ?>
                </tbody>
                
              </table>
    <?php
if(!isset($chuacogi)&&isset($ketqua)){
$sql_trang = mysqli_query($conn,"select * from member where (name LIKE N'%".$ketqua."%') OR (email LIKE N'%".$ketqua."%') OR (phone LIKE N'%".$ketqua."%') OR (address LIKE N'%".$ketqua."%') OR (created LIKE N'%".$ketqua."%') OR (created_update LIKE N'%".$ketqua."%')  ORDER BY id DESC ");
$count = mysqli_num_rows($sql_trang);
$a = ceil($count/10);
for($b=1;$b<=$a;$b++){
echo '<a class="active" href="index.php?module=timkiemsanpham&ketqua='.$ketqua.'&trang='.$b.'" >'.' '.$b.' '.'</a>';
}
}

 ?>             </div>
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