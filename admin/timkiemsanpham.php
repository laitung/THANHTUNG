                    <?php
                    require_once("connect.php");
                    if(isset($_POST['tim']) && isset($_POST['nhap'])){
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
       DANH SÁCH TÌM KIẾM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách tìm kiếm</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách tìm kiếm</h3>
              <form action="index.php?module=timkiemsanpham" method="POST">
              <input type="text" name="nhap" placeholder="Nhập vào đây!" ><a href="index.php?module=timkiemsanpham"><button type="submit" name="tim">Tìm kiếm</button></a>
            </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên sản phẩm</th>
                  <th>Mã SP</th>
                  <th>Giá</th>
                  <th>Hình ảnh</th>
                  <th>Tên danh mục</th>                 
                  <th>Mô tả</th>
                  <th>Số lượng</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                        if(isset($_GET['trang']) && isset($_POST['nhap'])){
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
                $sql_chitiet1 = "select * from chitietsp where (masp LIKE N'%".$ketqua."%') OR (ten_sp LIKE N'%".$ketqua."%') OR (loaisanpham LIKE N'%".$ketqua."%') OR (gia LIKE N'%".$ketqua."%')  ORDER BY masp DESC ";
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
                $sql_chitiet = "select * from chitietsp where (masp LIKE N'%".$ketqua."%') OR (ten_sp LIKE N'%".$ketqua."%') OR (loaisanpham LIKE N'%".$ketqua."%') OR (gia LIKE N'%".$ketqua."%') OR (masp LIKE N'%HT-".$ketqua."%')  ORDER BY masp DESC LIMIT $trang1,10";
                $query1 = mysqli_query($conn,$sql_chitiet);

                ?>
                <?php
                if($ketqua!==''){
                while($dong_chitiet = mysqli_fetch_array($query1)) {
                  $dem += 1;
                 ?>
                <tr>
                  <td><?php echo $dong_chitiet['masp'] ?></td>                  
                  <td><?php echo $dong_chitiet['ten_sp'] ?></td>
                  <td><?php echo $dong_chitiet['masp'] ?></td>
                  <td><?php echo $dong_chitiet['gia'] ?> VNĐ</td>
                  <td><img width="100px" src="../images/sanpham/<?php echo $dong_chitiet['hinhanh'] ?>"/></td>
                  <td><?php echo $dong_chitiet['loaisanpham'] ?></td>
                  <td><?php echo $dong_chitiet['motasp'] ?></td>
                  <td><?php echo $dong_chitiet['soluong'] ?></td>
                  <td><a href="index.php?module=product_edit&masp=<?php echo $dong_chitiet['masp'] ?>">Sửa</a>  |  <a href="index.php?module=delete_product&masp=<?php echo $dong_chitiet['masp'] ?>" onclick="return deleteAction();">Xóa</a></td>
                </tr>

                <?php

                }
              echo "TÌm thấy {$dem} kết quả";
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
if(!isset($chuacogi) && isset($ketqua)){
$sql_trang = mysqli_query($conn,"select * from chitietsp where (ten_sp LIKE N'%".$ketqua."%') OR (loaisanpham LIKE N'%".$ketqua."%') OR (gia LIKE N'%".$ketqua."%')  ORDER BY masp DESC ");
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