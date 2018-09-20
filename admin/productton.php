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
       DANH SÁCH SẢN PHẨM LÂU KHÔNG BÁN ĐƯỢC
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Danh sách sản phẩm lâu không bán được</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách sản phẩm lâu không bán được</h3>
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

              <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Tên sản phẩm</th>
                  <th>Số lượng</th>
                  <th>Đã bán</th>
                  <th>Ghi chú</th>

                </tr>
                </thead>
                <tbody>

                <?php
                if(isset($_POST['submit']) && $_POST['dau'] !== '' && $_POST['cuoi'] !== '' ){
                  $dau = $_POST['dau'];

                  $sau = $_POST['cuoi'];

                $sql_chitiet1 = "SELECT * from chitietsp where (banroi < 4) AND (date_xuly BETWEEN '$dau'  AND '$sau' )  ORDER BY masp DESC LIMIT 15  ";
                $query1 = mysqli_query($conn,$sql_chitiet1);
                ?>
                <?php
                while($dong_chitiet1 = mysqli_fetch_array($query1)) {
                //   $sql_chitiet = "select * from chitietsp where ten_sp = '".$dong_chitiet1['product_id']."' ";
                // $query = mysqli_query($conn,$sql_chitiet);
                // $dong_chitiet2 = mysqli_fetch_array($query);
                // $sohang = $dong_chitiet2['soluong'] + $dong_chitiet1['daban'];
                 ?>
                 <tr>
                 <td><?php echo $dong_chitiet1['ten_sp'] ?></td>
                 <td><?php echo $dong_chitiet1['soluong'] ?></td>
                 <td><?php echo $dong_chitiet1['banroi'] ?></td>
                 <td>Mặt hàng lâu chưa bán được hàng</td>

               </tr>
               <?php } } ?>

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