
    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       SỬA TT HÀNG NHẬP
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa tt hàng nhập</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa thông tin hàng nhập</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <?php
    ob_start(); 
    require_once("connect.php");
    $id = $_GET['id'];
    $tenhang = mysqli_query($conn,"SELECT *  FROM nguyenlieu WHERE ma_NL=$id");
    $arrhang = mysqli_fetch_array($tenhang);

    if(isset($_POST['insert'])){
    // header('location:index.php?module=list_product');
    $name = $_POST['email'];
    $email = $_POST['ncc'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $tongtien = $phone * $address;
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('d/m/Y - H:i:s');
        if(($name!=='')&&($email!=='')&&($phone!=='')&&($address!=='')){
            $update = mysqli_query($conn,"UPDATE nguyenlieu SET ncc='$email', ten_NL='$name', dongia='$phone', soluong='$address', tongtien= '$tongtien', date_add='$date' WHERE ma_NL='$id'") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
    if (isset($update)){
      echo "Cập nhật thành công!";
       header('location:index.php?module=nhaphang');
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
<form action="" method="post" style="width: 600px; border: 1px solid #999; margin-left: 300px;" enctype="multipart/form-data">
  &nbsp;<h4>THÊM NGUYÊN PHỤ LIỆU</h4>
<label>Tên Nguyên Liệu</label><br>
<input class="thongtin"  type="text" placeholder="Nhập tên nguyên liệu" name="email" value="<?php echo $arrhang['ten_NL']; ?>" /><br>
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
                  <option selected="selected" value="<?php echo $arrhang['ncc'] ?>"><?php echo $arrhang['ncc'] ?></option>
                        <?php 
                        }
                        ?>
                </select>
<br/>
<label class="loi"><?php echo isset($errorEmail) ? $errorEmail : ""; ?></label>
<br/>
<label>Đơn giá</label><br>
<input class="thongtin" type="text" placeholder="Nhập đơn giá!" name="phone" value="<?php echo $arrhang['dongia'] ?>" /><br> 
<label class="loi"><?php echo isset($errorPhone) ? $errorPhone : ""; ?></label>
<br/><label>Số lượng</label><br>
<input class="thongtin" type="text" name="address" placeholder="Số lượng" value="<?php echo $arrhang['soluong'] ?>" /><br> 
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