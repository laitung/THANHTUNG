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
       DANH SÁCH NHÀ CUNG CẤP
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách NCC</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách NCC</h3>
              <form action="index.php?module=timkiemncc" method="POST">
              <input type="text" name="nhap" placeholder="Nhập vào đây!" ><a href="index.php?module=timkiemncc"><button type="submit" name="tim">Tìm kiếm</button></a>
            </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên NCC</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Địa chỉ</th>
                  <th>Ngày lập</th>
                  <th>Cập nhật lần cuối</th>
                </tr>
                </thead>
                <tbody>
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
                $sql_chitiet = "select * from ncc ORDER BY ma_NCC DESC LIMIT $trang1,10";
                $query = mysqli_query($conn,$sql_chitiet);
                $dem = 0; 
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $dem +=1;
                 ?>
                <tr>
                  <td><?php echo $dong_chitiet['ma_NCC'] ?></td>              
                  <td><?php echo $dong_chitiet['name'] ?></td>
                  <td><?php echo $dong_chitiet['email'] ?></td>
                  <td><?php echo $dong_chitiet['phone'] ?></td>
                  <td><?php echo $dong_chitiet['address'] ?></td>
                  <td><?php echo $dong_chitiet['date_add'] ?></td>
                  <td><?php echo $dong_chitiet['date_update'] ?></td>
                  <td><a href="index.php?module=edit_ncc&id=<?php echo $dong_chitiet['ma_NCC'] ?>">Sửa</a>  |  <a href="index.php?module=delete_ncc&id=<?php echo $dong_chitiet['ma_NCC'] ?>" onclick="return deleteAction();">Xóa</a></td>
                </tr>
                <?php
                }
                ?>
                </tbody>
                
              </table>
              Trang:
               <?php 
$sql_trang = mysqli_query($conn,"SELECT * FROM ncc ");
$count = mysqli_num_rows($sql_trang);
$a = ceil($count/10);
for($b=1;$b<=$a;$b++){
echo '<a href="index.php?module=listncc&trang='.$b.'" >'.' '.$b.' '.'</a>';
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