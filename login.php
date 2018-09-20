<?php
    ob_start();
    if (isset($_POST["ok"])) {
        $mail = $pass = "";
        if ($_POST["email"] == null) {
            $erorrEmail = "Bạn chưa điền email đăng nhập";
        } else {
            $mail = $_POST["email"];
        }

        if ($_POST["password"] == null) {
            $erorrPass = "Bạn chưa điền mật khẩu";
        } else {
            $pass = $_POST["password"];
        }

        if ($mail && $pass) {

            require_once("connect.php");
            $sql = "SELECT * FROM member WHERE email = '".$mail."' AND password = '".$pass."' ";
            $query = mysqli_query($conn,$sql);
            $rows = mysqli_num_rows($query);
            if($rows > 0) {
                $data = mysqli_fetch_assoc($query);
                header("location:index.php");
                $_SESSION["iddn"] = $data["id"];
                $_SESSION["name"] = $data["name"];
            } else {
                $erorrPass = "Sai thông tin đăng nhập";
            }
        }
    }
    ob_end_flush();
 ?>
 <style type="text/css" media="screen">
     h4 {
        font-size: 16px;
        margin-left: 100px;
        color: #a0bf07;
     }
     input[type='email'], input[type='password'] {
        margin-left: 100px;
        width: 250px;
        height: 30px;
        border-radius: 5px;
     }
     label {
        padding-left: 100px;
     }
     button {
        width: 80px;
        height: 30px;
        background-color: ;
        margin-left: 100px;
        border-radius: 5px;
     }
     .loi {
        color: red;
     }
 </style>
    <div >
            <img src="" id="anhlogo">
            
            <form action="" method="post" style="width: 500px; border: 1px solid #999; margin-left: 300px;">
                <h4 >KHÁCH HÀNG LOVELYFLOWERS</h4><br>
                <label>Email đăng nhập:</label><br>
                <input type="email" name="email"  value="" /><br>
                <label class="loi"><?php echo isset($erorrEmail) && $erorrEmail != null ? $erorrEmail : ""; ?></label>
                <br>
                <label>Mật khẩu:</label><br>
                <input type="password" name="password"  value="" /><br>
                <label class="loi"><?php echo isset($erorrPass) && $erorrPass != null ? $erorrPass : ""; ?></label>
                <br/>
                <button name="rs" type="reset">Hủy bỏ</button>
                <button name="ok" style="margin-left: 85px;" >Đăng nhập</button>&nbsp;
                <br>
                <br>
                <p style="margin-left: 180px;"><a href="index.php?module=new">Đăng kí tài khoản!</a></p>
                
            </form> 
            </div>