<?php 
ob_start();
session_start();
    if (isset($_POST["ok"])) {
        $username = "";
        $password = "";
        if ($_POST["username"] == null) {
            $erorrUser = "Ban chua nhap ten dang nhap";
        } else {
            $username = $_POST["username"];
        }

        if ($_POST["password"] == null) {
            $erorrPass = "Ban chua nhap mat khau dang nhap";
        } else {
            $password = $_POST["password"];
        }

        if($username && $password) {

            require_once("connect.php");
            $sql = "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."' ";
            $query = mysqli_query($conn,$sql);
            $rows = mysqli_num_rows($query);

            if($rows > 0) {
                $data = mysqli_fetch_assoc($query);
                $_SESSION["user_iddn"] = $data["id"];
                $_SESSION["user_name"] = $data["name"];
                $_SESSION["hinhanh"] = $data["hinhanh"];

                header('location: index.php');
            } else {
                echo "Sai thong tin dang nhap";
            }
        }
    }
    ob_end_flush();
 ?>

  <style type="text/css" media="screen">
h4 {
    color: #a0bf07;
}
input {
    height: 30px;
    width: 200px;
    margin: 10px 0px;
    border-radius: 5px;
}
button {
    height: 30px;
    border-radius: 5px;
    margin-left:40px 
}
label {
    font-weight: bold;
}

 </style>

	<div style="width: 500px; border: 1px solid #999; margin: 50px auto; text-align: center;">
			<h4>ĐĂNG NHẬP HỆ THỐNG</h4>
			<form action="" method="post">
				<label>Username:</label>
				<input type="text" name="username"  value="" />
				<span class="erorr"><?php echo isset($erorrUser) && $erorrUser != null ? $erorrUser : ""; ?></span>
				<br/>
				<label>Mật khẩu:</label>
				<input type="password" name="password"  value="" />
				<span class="erorr"><?php echo isset($erorrPass) && $erorrPass != null ? $erorrPass : ""; ?></span>
				<br/>
				<label>&nbsp;</label>
				<button name="rs" type="reset">Hủy bỏ</button>
				<button type="submit" name="ok" >Đăng nhập</button>&nbsp;
				<br/>
				
			</form>	
			</div>