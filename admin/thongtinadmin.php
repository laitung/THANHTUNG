
    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       HỒ SƠ
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Hồ sơ admin</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hồ sơ admin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <?php
    ob_start(); 
    require_once("connect.php");
    $id = $_GET['id'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
    $tenadmin = mysqli_query($conn,"SELECT id, name,username, email, phone,password  ,address,hinhanh FROM admin WHERE id=$id");
    if(mysqli_num_rows($tenadmin)>0){
      $arradmin = mysqli_fetch_array($tenadmin);
    }
    if(isset($_POST['insert'])){
    // header('location:index.php?module=list_product');
    $username = $_POST['username'];
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if(($_POST['hinhanh'])==''){
      $hinhanh = $_POST['anhcodinh'];
    }
    else {
      $hinhanh = $_POST['hinhanh'];
    }
    $address = $_POST['address'];

                      $sql = "SELECT username FROM admin WHERE username='".$username."' ";
                      $sql1 = "SELECT email FROM admin WHERE email='".$email."' ";
                      $result = mysqli_query($conn,$sql);
                      $result1 = mysqli_query($conn,$sql1);
                      $count = mysqli_num_rows($result);
                      $count1 = mysqli_num_rows($result1);
      if(($username==$arradmin['username'])&&($email==$arradmin['email'])){
        if(($username!=='')&&($name!=='')&&($email!=='')&&($phone!=='')&&($password!=='')&&($address!=='')){
            $update = mysqli_query($conn,"UPDATE admin SET name='$name', username='$username', password='$password', email='$email', phone='$phone', address='$address', hinhanh='$hinhanh' WHERE id=$id") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
                    }
        else {  if(($count==0)||($count1==0)){  
                        if(($username!=='')&&($name!=='')&&($email!=='')&&($phone!=='')&&($password!=='')&&($address!=='')){
                      $update = mysqli_query($conn,"UPDATE admin SET username='$tusername',name='$name', email='$email', phone='$phone', hinhanh='$hinhanh', password='$password', address='$address' WHERE id=$id") or die (mysql_error());}
                        else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                        }
                      }
                      else {
                        if(($username=='')||($name=='')||($email=='')||($phone=='')||($password=='')||($address=='')){
                        echo "Bạn chưa nhập đủ thông tin!";
                            }
                            else {
                              echo "Tên user or email bị trùng!";
                            }
                      }

        }




    if (isset($update)){
      echo "Cập nhật thành công!";
       header('location:index.php?module=listadmin');
    }
    else {
      echo "<br>";
      echo "Cập nhật thất bại!";
    }
    
    }
    ob_end_flush();
    ?>

<style type="text/css">
  h4 {
    font-size: 25px;
  }
</style>
  <img style="float: left;width: 200px; height: 200px;" src="../admin/images/<?php echo $arradmin['hinhanh'] ?>">
  <div style="width: 500px; height: 400px; float: left; margin-left: 20px;">
    <h4 >Họ và tên: <?php echo $arradmin['name']; ?></h4>
    <h4 >Tên Đăng Nhập: <?php echo $arradmin['username']; ?></h4>
    <h4 >Email: <?php echo $arradmin['email']; ?></h4>
    <h4 >Số điện thoại: <?php echo $arradmin['phone']; ?></h4>
    <h4 >Địa chỉ: <?php echo $arradmin['address']; ?></h4>
  </div>

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