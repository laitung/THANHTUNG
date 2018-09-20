
<?php
require_once('connect.php');
	$fullname = $email = $password = $phone = $address ="";
	if(isset($_POST['insert'])){
		if ($_POST['fullname'] == null) {
			$errorName = "Vui lòng nhập họ tên";
		}else{
			$fullname = $_POST['fullname'];
			$_SESSION['fullname'] = $fullname;
		}

		if ($_POST['email'] == null) {
			$errorEmail = "Vui lòng nhập Email";
		}else{
			$email = $_POST['email'];
			$_SESSION['email'] = $email;
		}

		if ($_POST['password'] == null) {
			$errorPass = "Vui lòng nhập mật khẩu";
			$_SESSION['password'] = '';
		}else{
			$password = $_POST['password'];
			$_SESSION['password'] = $password;
		}
		
		if ($_POST['phone'] == null) {
			$errorPhone = "Vui lòng nhập số điện thoại";
		}else{
			$phone = $_POST['phone'];
			$_SESSION['phone'] = $phone;
		}

		if ($_POST['address'] == null) {
			$errorAddress = "Vui lòng nhập địa chỉ";
		}else{
			$address = $_POST['address'];
			$_SESSION['address'] = $address;
		}
		if ($_POST['password1'] == null) {
			$errorPass2 = "Vui lòng nhập lại mật khẩu";
			$_SESSION['password1'] = '';
		}else{
			$password1 = $_POST['password1'];
			$_SESSION['password1'] = $password1;
		}
	}
?>
<?php
if($fullname && $email && $password && $phone && $address) {
	$sql = "SELECT * FROM member WHERE email = '".$email."' ";
		$query = mysqli_query($conn,$sql);
        $number = mysqli_num_rows($query);
        $_SESSION['number'] = $number;
        		if ($number>0) {
            	echo "<p style=color:red; >Email đã tồn tại</p>";
            		}
            	else { 
            			if(($_POST['password'])==($_POST['password1'])){
            			date_default_timezone_set('Asia/Ho_Chi_Minh');
            			$date = date('d/m/Y - H:i:s');

					}
						else {
							$errorPass2 = "Mật khẩu không trùng nhau!";
						}
				}
        	}

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
	&nbsp;<p>THÔNG TIN ĐĂNG KÝ</p>
	<label>Họ và tên</label><br>
<input type="text" placeholder="Nhập Họ và tên!" name="fullname" value="<?php if(isset($_SESSION['fullname'])){ echo $_SESSION['fullname']; } else { echo ''; } ?>" /><br> 
<label class="loi"><?php echo isset($errorName) ? $errorName : ""; ?></label>
<br/>
<label>Email</label><br>
<input type="email" placeholder="Nhập Email :@gmail.com!" name="email" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email']; } else { echo ''; } ?>" />
<br>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Mật khẩu</label><br>
<input type="password" placeholder="Nhập mật khẩu!" name="password" value="" /><br>
<label class="loi"><?php echo isset($errorPass) ? $errorPass : ""; ?><?php echo isset($errorPass1) ? $errorPass1 : ""; ?></label>
<br/>
<label>Nhập lại mật khẩu</label><br>
<input type="password" placeholder="Nhập lại mật khẩu!" name="password1" value="" /><br>
<label class="loi"><?php echo isset($errorPass2) ? $errorPass2 : ""; ?><?php echo isset($errorPass1) ? $errorPass1 : ""; ?></label>
<br/>
<label>Số điện thoại</label><br>
<input type="text" placeholder="Nhập số điện thoại!" name="phone" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone']; } else { echo ''; } ?>" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Địa chỉ</label><br>
<input type="text" name="address" placeholder="Nhập địa chỉ!" value="<?php if(isset($_SESSION['address'])){ echo $_SESSION['address']; } else { echo ''; } ?>" /><br> 
<label class="loi"><?php echo isset($errorAddress) ? $errorAddress : ""; ?></label>
<br>
<button style="" type="submit" name="insert" value="Đăng kí">Đăng kí </button>
</form>

<?php
if(isset($_SESSION['number'])){
if(isset($_POST['insert'])&&(($_SESSION['number'])==0) &&($_SESSION['password'] === $_SESSION['password1'])&&($fullname !='')&&($email !='')&&($password !='')&&($password1 !='')&&($phone !='')&&($address !='')){
$sql = "SELECT * FROM magiamgia where id_giamgia ";
$query = mysqli_query($conn,$sql);
function rand_string( $length ) {

$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

$size = strlen( $chars );

for( $i = 0; $i < $length; $i++ ) {

$str .= $chars[rand(0, $size - 1 )];

 }

return $str;

}

 $my_string = rand_string( 5 );

$sql1 = "INSERT INTO magiamgia (ma_giamgia,trangthai) VALUES ('".$my_string."','1')";
mysqli_query($conn,$sql1) or die(mysql_error());

	$email = "{$_SESSION['email']}";


	$subject = "Register Account";

	$content = "<h1>VOUCHER TẶNG GIẢM GIÁ</h1>
<h3>Chào Quý khách ".$_SESSION['fullname']."!</h3>

Chúc mừng Quý khách đã nhận được mã giảm giá tại LoverlyFlowers với mức giá 10%.<br>

Mã giảm giá của Quý khách: {$my_string}<br><br>

Lưu ý: Mã giảm giá này chỉ sử dụng duy nhất 1 lần.";
	if($email === '' OR $subject ==='' OR $content === ''){
		header('location:../email.php');
	}
	else {
		if(filter_var($email,FILTER_VALIDATE_EMAIL)){
			//xu ly send mail
			if(sendmail($email,$subject,$content)){
				$khongloi = '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=login";
            }
            alert("Đặt kí thành công!\nTrở về trang đăng nhập...");
            setTimeout("Redirect()", 50);
</script>';
			echo $khongloi;
						$sql = "INSERT INTO member(name,email,password,phone,address, created) 
						VALUES ('".$fullname."', '".$email."', '".$password."','".$phone."','".$address."','".$date."' )";
						mysqli_query($conn,$sql) or die(mysql_error());
						unset($_SESSION['fullname']);
						unset($_SESSION['email']);
						unset($_SESSION['phone']);
						unset($_SESSION['address']);
		
	 
			}
			else {
				$loimang = '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=new";
            }
            alert("Lỗi mạng!\nVui lòng kiểm tra kết nối Internet!...");
            setTimeout("Redirect()", 50);
</script>';
			echo $loimang;
			}
		}
		else{
			header('location:../email.php');
		}
	}
}}
function sendmail($email,$subject,$content){
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n"; 
if(mail($email, $subject, $content, $header)){
	return TRUE;
}
else {
	return FALSE;
}

}

 ?>
</div>
<div id="gt">
</div>
<div id="end"></div>