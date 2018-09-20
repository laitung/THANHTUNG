  <script type="text/javascript">
  function deleteAction(){
    return confirm("Bạn có muốn xóa danh mục này không?");
  }
</script>
    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THÊM NGUYÊN PHỤ LIỆU
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thêm NPL</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm MPL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
require_once('connect.php');
$email = $phone = $address = "";
	if(isset($_POST['insert'])){

		if ($_POST['email'] == null) {
			$errorEmail = "Vui lòng nhập Email";
		}else{
			$email = $_POST['email'];
		}
		
		if ($_POST['phone'] == null) {
			$errorPhone = "Vui lòng nhập số điện thoại";
		}else{
			$phone = $_POST['phone'];
		}
    $ncc = $_POST['ncc'];
		if ($_POST['address'] == null) {
			$errorAddress = "Vui lòng nhập địa chỉ";
		}else{
			$address = $_POST['address'];
		}
	}
?>
<?php
if($email && $phone && $address) {
	$tongtien = $phone * $address;

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('d/m/Y - H:i:s');
						$sql = "INSERT INTO nguyenlieu (ten_NL,ncc,dongia,soluong,tongtien,date_add ) 
						VALUES ('".$email."','".$ncc."','".$phone."','".$address."','".$tongtien."','".$date."' )";
						mysqli_query($conn,$sql) or die(mysql_error());
						$_COOKIE['ncc'] +1;
						header('location:index.php?module=nhaphang');
					}
?>
<meta charset = "utf-8" />
<style type="text/css" media="screen">

	.thongtin {
		width: 250px;
		height: 30px;
		margin-left: 100px;
		border-radius: 5px;
	}
	label {
		padding-left: 100px;
	}
	button {
		margin-left: 100px;
	}
	h4 {
		margin-left: 100px;
		font-size: 24px;
		color: #a0bf07;
	}
	.loi {
		color: red;
	}
	button {
		margin-bottom: 10px;
		width: 80px;
		height: 30px;
		background-color: ;
		border-radius: 5px;
	}
</style>
<div id="dangki">
<form action="" method="post" style="width: 600px; border: 1px solid #999; margin-left: 300px;" enctype="multipart/form-data">
	&nbsp;<h4>THÊM NGUYÊN PHỤ LIỆU</h4>
<label>Tên Nguyên Liệu</label><br>
<input class="thongtin"  type="text" placeholder="Nhập tên nguyên liệu" name="email" value="" /><br>
<br>
<label>Nhà cung cấp</label><br>
<select name="ncc" class="form-control select2 select2-hidden-accessible" style="width: 250px; margin-left: 100px; " tabindex="-1" aria-hidden="true">
                        <?php
                        $ncc = "select * from ncc";
                        $query = mysqli_query($conn,$ncc); 
                        ?>
                        <?php
                        while($dong = mysqli_fetch_array($query)) { 
                        ?>
                  <option selected="selected" value="<?php echo $dong['name'] ?>"><?php echo $dong['name'] ?></option>
                        <?php 
                        }
                        ?>
                </select>
<br/>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Đơn giá</label><br>
<input class="thongtin" type="text" placeholder="Nhập đơn giá!" name="phone" value="" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Số lượng</label><br>
<input class="thongtin" type="text" name="address" placeholder="Số lượng" value="" /><br> 
<label class="loi"><?php echo isset($errorAddress) ? $errorAddress : ""; ?></label>
<br>

<button style="" type="submit" name="insert" value="Đăng kí">Thêm </button>
</form>
</div>
<div id="gt">
</div>
<table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Mã nguyên liệu</th>
                  <th>Nhà cung cấp</th>
                  <th>Tên nguyên liệu</th>
                  <th>Đơn giá</th>
                  <th>Số lượng</th>
                  <th>Tổng tiền</th>
                  <th>Ngày nhập</th>

                </tr>
                </thead>
                <tbody>

                <?php
                $tongcong = 0;
                $sql_chitiet = "select * from nguyenlieu ORDER BY ma_NL ASC ";
                $query = mysqli_query($conn,$sql_chitiet);
                $dem = 0;

                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                  $dem +=1;
                  $tongcong += $dong_chitiet['tongtien'];
                 ?>
                <tr>
                  <td><?php echo $dong_chitiet['ma_NL'] ?></td>
                  <td><?php echo $dong_chitiet['ncc'] ?></td>                
                  <td><?php echo $dong_chitiet['ten_NL'] ?></td>
                  <td><?php echo number_format($dong_chitiet['dongia'] , 0, ',', '.') ?></td>
                  <td><?php echo $dong_chitiet['soluong'] ?></td>
                  <td><?php echo number_format($dong_chitiet['tongtien'] , 0, ',', '.') ?></td>
                  <td><?php echo $dong_chitiet['date_add'] ?></td>
                  <td><a href="index.php?module=edit_nhaphang&id=<?php echo $dong_chitiet['ma_NL'] ?>">Sửa</a>  |  <a href="index.php?module=delete_nhaphang&id=<?php echo $dong_chitiet['ma_NL'] ?>" onclick="return deleteAction();">Xóa</a></td>
                </tr>
                <?php
                }
               
                ?>
                <tr>
                  <th>Tổng cộng: <?php echo number_format($tongcong, 0, ',', '.') ?> VNĐ</th>
                </tr>
                </tbody>
                
              </table>
<div id="end"></div>
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