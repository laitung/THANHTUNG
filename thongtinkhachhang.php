
<?php
require_once('connect.php');
	$fullname = $email = $password = $phone = $address ="";
	if(isset($_POST['insert'])){
		if ($_POST['fullname'] == null) {
			$errorName = "Vui lòng nhập họ tên";
		}else{
			$fullname = $_POST['fullname'];
		}

		if ($_POST['email'] == null) {
			$errorEmail = "Vui lòng nhập Email";
		}else{
			$email = $_POST['email'];
		}

		if ($_POST['password'] == null) {
			$errorPass = "Vui lòng nhập mật khẩu";
		}else{
			$password = $_POST['password'];
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
    ob_start(); 
    require_once("connect.php");
    $id = $_GET['id'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
    $tenkh = mysqli_query($conn,"SELECT * FROM member WHERE id=$id");
    if(mysqli_num_rows($tenkh)>0){
      $arrtenkh = mysqli_fetch_array($tenkh);
    }


    if(isset($_POST['insert'])){
    // header('location:index.php?module=list_product');
    $hoten = $_POST['fullname'];
    $email = $_POST['email'];
    $matkhau = $_POST['password'];
    $sodienthoai = $_POST['phone'];
    $diachi = $_POST['address'];

    $sql = "SELECT email FROM member WHERE email='".$email."'";
                      $result = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($result);
                      date_default_timezone_set('Asia/Ho_Chi_Minh');
                      $date = date('d/m/Y - H:i:s');
    if($email==$arrtenkh['email']){
    		if(($hoten!=='')&&($email!=='')&&($matkhau!=='')&&($sodienthoai!=='')&&($diachi!=='')){
    		$update = mysqli_query($conn,"UPDATE member SET name='$hoten',email='$email', password='$matkhau', phone='$sodienthoai', address='$diachi', created_update='$date' WHERE id=$id") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
                    } 

      else {
      					if($count==0){
                          if(($hoten!=='')&&($email!=='')&&($matkhau!=='')&&($sodienthoai!=='')&&($diachi!=='')){
                            $update = mysqli_query($conn,"UPDATE member SET name='$hoten',email='$email', password='$matkhau', phone='$sodienthoai', address='$diachi', created_update='$date' WHERE id=$id") or die (mysql_error());}
                            else {
                                  echo "Bạn chưa nhập đủ thông tin!";
                            } 
                        }
                        else {  
                            if(($hoten=='')&&($email=='')&&($matkhau=='')&&($sodienthoai=='')&&($diachi=='')){
                        echo "Bạn chưa nhập vị trí!";
                            }
                            else {
                              echo "Email cập nhật bị trùng!";
                            }
                          }
      }

    if (isset($update)){
      echo "Cập nhật thành công!";
       header('location:index.php');
       session_destroy();
    	}
    else {
      echo "<br>";
      echo "Cập nhật thất bại!";
    	}

    }
    ob_end_flush();

?>
<meta charset = "utf-8" />
<style type="text/css" media="screen">
	input[type='text'], input[type='email'],input[type='password'] {
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
	p {
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
<form action="" method="post" style="width: 600px; border: 1px solid #999; margin-left: 300px;">
	&nbsp;<p>THÔNG TIN KHÁCH HÀNG</p>
	<label>Họ và tên</label><br>
<input type="text" placeholder="Nhập Họ và tên!" name="fullname" value="<?php echo $arrtenkh['name'] ?>" /><br> 
<label class="loi"><?php echo isset($errorName) ? $errorName : ""; ?></label>
<br/>
<label>Email</label><br>
<input type="email" placeholder="Nhập Email :@gmail.com!" name="email" value="<?php echo $arrtenkh['email']  ?>" />
<br>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Mật khẩu</label><br>
<input type="text" placeholder="Nhập mật khẩu!" name="password" value="<?php echo $arrtenkh['password'] ?>" /><br>
<label class="loi"><?php echo isset($errorPass) ? $errorPass : ""; ?><?php echo isset($errorPass1) ? $errorPass1 : ""; ?></label>
<br/>
<label>Số điện thoại</label><br>
<input type="text" placeholder="Nhập số điện thoại!" name="phone" value="<?php echo $arrtenkh['phone'] ?>" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Địa chỉ</label><br>
<input type="text" name="address" placeholder="Nhập địa chỉ!" value="<?php echo $arrtenkh['address'] ?>" /><br> 
<label class="loi"><?php echo isset($errorAddress) ? $errorAddress : ""; ?></label>
<br>
<button style="" type="submit" name="insert" value="Lưu">Lưu </button><br>
<label class="loi">Sửa thông tin vui lòng bạn đăng nhập lại</label>
</form>
</div>
<div id="gt">
</div>
<div id="end"></div>