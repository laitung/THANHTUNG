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
       DANH SÁCH SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách sản phẩm</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách sản phẩm</h3>
              <form action="index.php?module=timkiemsanpham" method="POST">
              <input type="text" name="nhap" placeholder="Nhập vào đây!" ><a href="index.php?module=timkiemsanpham"><button type="submit" name="tim">Tìm kiếm</button></a>
            </form>
            </div>
            <?php 
            if(isset($_SESSION['themsanpham'])){
              echo "Thêm sản phẩm mới thành công!";
              unset($_SESSION['themsanpham']);
            }

            ?>
            <?php 
            if(isset($_SESSION['capnhatsanpham'])){
              echo "Cập nhật sản phẩm thành công!";
              unset($_SESSION['capnhatsanpham']);
            }

            ?>
            <?php 
            if(isset($_SESSION['xoasanpham'])){
              echo "Xóa sản phẩm thành công!";
              unset($_SESSION['xoasanpham']);
            }

            ?>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Mã sản phẩm</th>
                  <th>Tên sản phẩm</th>
                  <th>Giá</th>
                  <th>Sale</th>
                  <th>Hình ảnh</th>
                  <th>Tên danh mục</th>                 
                  <th>Mô tả</th>
                  <th>Số lượng</th>
                  <th>Ngày thêm</th>
                  <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $sql_chitiet = "select * from chitietsp ORDER BY masp DESC ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dem = 0; 
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $dem +=1;
                 ?>
                 <?php
                  }
                  ?>
                  <?php 
                        if(isset($_GET['trang'])){
                            $get_trang=$_GET['trang'];
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
                $sql_chitiet = "select * from chitietsp ORDER BY masp DESC LIMIT $trang1,10";
                $query = mysqli_query($conn,$sql_chitiet);
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                 ?>
                <tr>
                  <td><?php echo " HT-".$dong_chitiet['masp']." " ?></td>                  
                  <td><?php echo $dong_chitiet['ten_sp'] ?></td>
                  <td><?php echo number_format($dong_chitiet['gia'] , 0, ',', '.') ?> VNĐ</td>
                  <td><?php echo number_format($dong_chitiet['sale'] , 0, ',', '.'); if($dong_chitiet['sale']!=='0'){ echo "VNĐ"; } ?></td>
                  <td><img width="100px" src="../images/sanpham/<?php echo $dong_chitiet['hinhanh'] ?>"/></td>
                  <td><?php echo $dong_chitiet['loaisanpham'] ?></td>
                  <td><?php echo $dong_chitiet['motasp'] ?></td>
                  <td><?php echo $dong_chitiet['soluong'] ?></td>
                  <td><?php echo $dong_chitiet['date_add'] ?></td>
                  <td><a href="index.php?module=product_edit&trang=<?php if(isset($_GET['trang'])){ echo $_GET['trang']; } ?>&masp=<?php echo $dong_chitiet['masp'] ?>">Sửa</a>  |  <a href="index.php?module=delete_product&trang=<?php if(isset($_GET['trang'])){ echo $_GET['trang']; } ?>&masp=<?php echo $dong_chitiet['masp'] ?>" onclick="return deleteAction();">Xóa</a></td>
                </tr>
                <?php
                }  
                ?>
                </tbody>
                
              </table>
              Trang:
               <?php 
$sql_trang = mysqli_query($conn,"SELECT * FROM chitietsp ");
$count = mysqli_num_rows($sql_trang);
$a = ceil($count/10);
for($b=1;$b<=$a;$b++){
echo '<a href="index.php?module=list_product&trang='.$b.'" >'.' '.$b.' '.'</a>';
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