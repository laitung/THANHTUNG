
    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       SỬA TT NCC
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa tt NCC</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa thông tin NCC</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <?php
    ob_start(); 
    require_once("connect.php");
    $id = $_GET['id'];
    $tenadmin = mysqli_query($conn,"SELECT ma_NCC, name, email, phone, address  FROM ncc WHERE ma_NCC=$id");
    if(mysqli_num_rows($tenadmin)>0){
      $arradmin = mysqli_fetch_array($tenadmin);
    }
    if(isset($_POST['insert'])){
    // header('location:index.php?module=list_product');
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

                      $sql = "SELECT name FROM admin WHERE name='".$name."' ";
                      $sql1 = "SELECT email FROM admin WHERE email='".$email."' ";
                      $result = mysqli_query($conn,$sql);
                      $result1 = mysqli_query($conn,$sql1);
                      $count = mysqli_num_rows($result);
                      $count1 = mysqli_num_rows($result1);
                      date_default_timezone_set('Asia/Ho_Chi_Minh');
                      $date = date('d/m/Y - H:i:s');
      if(($name==$arradmin['name'])&&($email==$arradmin['email'])){
        if(($name!=='')&&($email!=='')&&($phone!=='')&&($address!=='')){
            $update = mysqli_query($conn,"UPDATE ncc SET name='$name', email='$email', phone='$phone', address='$address', date_update='$date' WHERE ma_NCC=$id") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
                    }
        else {  if(($count==0)||($count1==0)){  
                        if(($name!=='')&&($email!=='')&&($phone!=='')&&($address!=='')){
                      $update = mysqli_query($conn,"UPDATE ncc SET name='$name', email='$email', phone='$phone', address='$address', date_update='$date' WHERE id=$id") or die (mysql_error());}
                        else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                        }
                      }
                      else {
                        if(($name=='')||($email=='')||($phone=='')||($address=='')){
                        echo "Bạn chưa nhập đủ thông tin!";
                            }
                            else {
                              echo "Tên NCC or email bị trùng!";
                            }
                      }

        }




    if (isset($update)){
      echo "Cập nhật thành công!";
       header('location:index.php?module=listncc');
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
<form action="" method="post" style="width: 600px; border: 1px solid #999; margin-left: 300px;">
  &nbsp;<h4>THÔNG TIN NHÀ CUNG CẤP</h4>

  <label>Tên Nhà Cung Cấp</label><br>
<input class="thongtin" type="text" placeholder="Nhập Tên NCC!" name="fullname" value="<?php echo $arradmin['name']; ?>" /><br> 
<label class="loi"><?php echo isset($errorName) ? $errorName : ""; ?></label>
<br/>
<label>Email</label><br>
<input type="email" placeholder="Nhập Email :@gmail.com!" name="email" value="<?php echo $arradmin['email']; ?>" />
<br>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Số điện thoại</label><br>
<input class="thongtin" type="text" placeholder="Nhập số điện thoại!" name="phone" value="<?php echo $arradmin['phone']; ?>" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Địa chỉ</label><br>
<input class="thongtin" type="text" name="address" placeholder="Nhập địa chỉ!" value="<?php echo $arradmin['address']; ?>" /><br> 
<label class="loi"><?php echo isset($errorAddress) ? $errorAddress : ""; ?></label>
<br>
<button style="" type="submit" name="insert" value="Đăng kí">Sửa</button>
</form>
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