    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THÊM NHÀ CUNG CẤP
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thêm NCC</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm NCC</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
require_once('connect.php');
 $fullname = $email = $phone = $address = "";
	if(isset($_POST['insert'])){


		if ($_POST['fullname'] == null) {
			$errorName = "Vui lòng nhập tên đăng nhập";
		}else{
			$fullname = $_POST['fullname'];
		}
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

		if ($_POST['address'] == null) {
			$errorAddress = "Vui lòng nhập địa chỉ";
		}else{
			$address = $_POST['address'];
		}
	}
?>
<?php
if($fullname && $email && $phone && $address) {
	$sql = "SELECT * FROM ncc WHERE email = '".$email."' ";
		$query = mysqli_query($conn,$sql);
        $number = mysqli_num_rows($query);
        		if ($number>0) {
            	echo "Email đã tồn tại";
            		}
            	else { 
            			date_default_timezone_set('Asia/Ho_Chi_Minh');
            			$date = date('d/m/Y - H:i:s');
						$sql = "INSERT INTO ncc (name,email,phone,address,date_add) 
						VALUES ('".$fullname."','".$email."','".$phone."','".$address."','".$date."' )";
						mysqli_query($conn,$sql) or die(mysql_error());
						$_COOKIE['ncc'] +1;
						header('location:index.php?module=listncc');}
				}
?>
<meta charset = "utf-8" />
<style type="text/css" media="screen">
input[type='email'],input[type='password'] {
		width: 250px;
		height: 30px;
		margin-left: 100px;
		border-radius: 5px;
	}
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
	&nbsp;<h4>THÔNG TIN NHÀ CUNG CẤP</h4>
	<label>Tên Nhà Cung Cấp</label><br>
<input class="thongtin" type="text" placeholder="Nhập Tên NCC!" name="fullname" value="" /><br> 
<label class="loi"><?php echo isset($errorName) ? $errorName : ""; ?></label>
<br/>
<label>Email</label><br>
<input  type="email" placeholder="Nhập Email :@gmail.com!" name="email" value="" />
<br>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Số điện thoại</label><br>
<input class="thongtin" type="text" placeholder="Nhập số điện thoại!" name="phone" value="" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Địa chỉ</label><br>
<input class="thongtin" type="text" name="address" placeholder="Nhập địa chỉ!" value="" /><br> 
<label class="loi"><?php echo isset($errorAddress) ? $errorAddress : ""; ?></label>
<br>

<button style="" type="submit" name="insert" value="Đăng kí">Thêm </button>
</form>
</div>
<div id="gt">
</div>
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