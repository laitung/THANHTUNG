<div class="primary1 col-lg-9 col-md-12 col-sm-12 col-xs-12">
<div class="item_home">

 <div class="div_orders" style="width:100%">
                                <div class="primary">
     <h3 class="title_cate">Đơn Hàng</h3>

    <div id="cart" class="giohang_form">
         
                            
    
<div class="table-responsive">
    <form id="addEditForm" name="addEditForm" method="post" action="" enctype="multipart/form-data">
            <table id="grvSanPham" border="0" cellpadding="8" cellspacing="0" rules="all" class="table table-bordered">
            <tbody>
                <h3>Thông tin giỏ hàng</h3>
                               Đơn hàng của bạn gồm <?php if(isset($_SESSION['soluong'])) { echo $_SESSION['soluong'];} else { echo 0;} ?> sản phẩm! 
            <tr>
           <th class="col-xs-1"></th>
             <th class="col-xs-6">Tên sản phẩm</th>
             <th class="col-xs-1">Số lượng</th>
               <th class="col-xs-2">Đơn giá</th>
              <th class="col-xs-2">Thành tiền</th>
            </tr>
            <?php
                        // session_start();
                        // require_once('connect.php');
                            if(isset($_GET['add'])&& !empty($_GET['add'])){
                                $id = $_GET['add'];
                                $_SESSION['cart_'.$id] +=1;
                                header('location: index.php?module=giohang');
                                
                            }


                            $thanhtien = 0;
                            foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        $arrchitietdonhang = array();
                                        while($dong=mysqli_fetch_array($query)){

                                            if(isset($_POST['huy'])){
                                            unset($_SESSION['cart_'.$id]);
                                            unset($_SESSION['tongcongtien']);
                                            unset($_SESSION['sohang_'.$id.'']);
                                            unset($_SESSION['soluong']);
                                            header('location:index.php?module=giohang');
                                            }
                                            if(isset($_SESSION['sohang_'.$id.''])){
                                                if($dong['sale']=='0'){
                                            $tongtien = $dong['gia'] * $_SESSION['sohang_'.$id.''];}
                                            else {
                                               $tongtien = $dong['sale'] * $_SESSION['sohang_'.$id.'']; 
                                            }
                                        }
                                            else {
                                                if($dong['sale']=='0'){
                                            $tongtien = $dong['gia'] * $_SESSION['cart_'.$id];}
                                            else {
                                                $tongtien = $dong['sale'] * $_SESSION['cart_'.$id];
                                            }
                                        }
                                            ?>
    <tr>

        <td></td>
                <td>

                <img title="undefined" style="width: 50px;" alt="undefined" src="images/sanpham/<?php echo $dong['hinhanh'] ?> ">

                    <span id="grvSanPham_ctl01_lblTenSanPham"><?php echo $dong['ten_sp']; ?> </span>
           </td>
<td>
                 <input name="soluong_<?php echo $id  ?>" readonly value="<?php if(isset($_SESSION['sohang_'.$id.''])){echo $_SESSION['sohang_'.$id.''];} else echo $_SESSION['cart_'.$id]; ?>" id="grvSanPham_ctl01_txtSoLuong_<?php echo $id ?>" tabindex="3" onkeyup="TinhTong(this);" onblur="TinhTong(this);" type="text" class="numeric quantity">
          </td>
                <td>
                     <input type="hidden" value="<?php if($dong['sale'] =='0' ){ $chiara = number_format($dong['gia'] , 0, ',', '.'); echo $chiara; } else { echo number_format($dong['sale'] , 0, ',', '.'); } ?>" id="grvSanPham_ctl01_txtDonGia" class="unit-price">
                     <?php if($dong['sale'] =='0' ){ $chiara = number_format($dong['gia'] , 0, ',', '.'); echo $chiara; } else { echo number_format($dong['sale'] , 0, ',', '.'); } ?>
                </td>
                <td>
<span id="grvSanPham_ctl01_txtThanhTien" class="thanhtien sub-total"><?php $chiara = number_format($tongtien , 0, ',', '.'); echo $chiara; ?></span>

            </tr>
            <?php
                                       }

                                }
                                if(isset($id)&&!isset($_SESSION['iddn'])){
                                $thanhtien += $tongtien;
                                $tongtien = 0;
                                }
                                else {
                                    if(isset($id)&&isset($_SESSION['iddn'])){
                                    $thanhtien += $tongtien;
                                    $tongtien = 0;
                                }
                                }
                                }          
                                
                            }
                            if(!isset($id)){
                            echo "Giỏ hàng của bạn có 0 sản phẩm";
                            echo '</tbody></table>
            </div>
<a href="index.php"><button id="cont_sel" class="muatiep" type="button">Mua tiếp</button></a>'
         ;

                        }


                            else {
echo '</tbody></table>
            <input style="float:left; height:30px;" type="text" name="giamgia" placeholder="Nhập mã giảm giá..." ><button type="submit" name="apdung" style="float:left; width:60px; color:#333; margin-top:1px;">Áp dụng</button>
            </form></div>
            
         <p class="total" id="Label1">
                Tổng cộng : 
         <span id="lblTong">'.number_format($thanhtien , 0, ',', '.').'</span> VNĐ
         </p>
         '
         ;
                            }

                        ?>
                <?php
                if(isset($_POST['giamgia'])){
                    $_SESSION['magiamgia'] = $_POST['giamgia'];}
                    if(isset($_POST['apdung'])&&($_POST['giamgia'])!==''){
                        $sql = "SELECT * FROM magiamgia WHERE ma_giamgia = '".$_SESSION['magiamgia']."' ";
                        $query = mysqli_query($conn,$sql);
                        $number = mysqli_num_rows($query);
                        $_SESSION['number'] = $number;
                    if ($number>0) {
                    $giamgia = $thanhtien * 10/100;
                    }
                    else {
                        echo "<h4 style=color:red;>Mã không đúng hoặc đã được sử dụng</h4>";
                    }
                }
                ?>
        <p class="total" id="Label1">
            Giảm giá : 
         <span id="lblTong"><?php if(isset($giamgia)){ echo "".number_format($giamgia , 0, ',', '.')."(~10%)";; } else { echo 0; } ?></span> VNĐ
         </p>
         <p class="total" id="Label1">
                Tổng tiền thanh toán : 
         <span id="lblTong"><?php if(!isset($giamgia)){
         echo number_format($thanhtien , 0, ',', '.'); 
          }
          else {
             $thanhtien = $thanhtien - ($thanhtien *10/100);
            echo number_format($thanhtien , 0, ',', '.');
            $_SESSION['tongcongtien'] = $thanhtien;
          }
           ?></span> VNĐ
         </p>
                <form method="POST"><button id="cancel_sel" name="huy" type="resert" class="huy" type="button">Hủy</button>
       <a href="index.php?module=giohang"><button id="orders_sel" class="thanhtoan" type="button">Trở về</button></a></form>

            
            


<?php 

if(isset($_SESSION['iddn'])){
    $iddn = $_SESSION['iddn'];
            require_once("connect.php");
            $sql = "SELECT * FROM member WHERE id = $iddn ";
            $query = mysqli_query($conn,$sql);
            $rows = mysqli_num_rows($query);
            if($rows > 0) {
                $data = mysqli_fetch_assoc($query);
            }

if (isset($_POST["ok"])) {
 
        $ten = $phone = $address = $email = $noidung = $datesau = "";
        if ($_POST["orderName"] == null) {
            $loiten = "Vui lòng nhập Tên";
        } else {
            $ten = $_POST["orderName"];
            $_SESSION['orderName'] = $ten;
        }

        if ($_POST["orderPhone"] == null) {
            $loisdt = "Vui lòng nhập SĐT";
        } else {
            $phone = $_POST["orderPhone"];
            $_SESSION['phone'] = $phone;
        }
        if ($_POST["orderEmail"] == null) {
            $loiemail = "Vui lòng nhập Email";
        } else {
            $email = $_POST["orderEmail"];
            $_SESSION['guiemail'] = $email;
        }

        if ($_POST["orderAddress"] == null) {
            $loiaddress = "Vui lòng nhập Địa chỉ";
        } else {
            $address = $_POST["orderAddress"];
            $_SESSION['address'] = $address;
        }
        if ($_POST["datesau"] == null) {
            $loidatesau = "Vui lòng chọn ngày cần hàng";
        } else {
            $datesau = $_POST["datesau"];
            $_SESSION['datesau'] = $datesau;
        }

        if ($_POST["orderNoidung"] == null) {
            $loind = "Vui lòng nhập Nội dung";
        } else {
            $noidung = $_POST["orderNoidung"];
            $_SESSION['noidung'] = $noidung;
        }


        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('d/m/Y - H:i:s');
        foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($dong=mysqli_fetch_array($query)){
                                            
                                            
                                        
            if(isset($_SESSION['sohang_'.$id.''])){
                $tam = $_SESSION['sohang_'.$id.''];
            }
            else {
                $tam = 1;
            }                              // }
            $soluongsau = $dong['soluong'] - $tam;
            if($soluongsau < 0){
                $baoloi =  ' '.$dong['ten_sp'].' chỉ còn '.$dong['soluong'].' sản phẩm ';
                $_SESSION['baoloi'] = $baoloi;
            }
        }}}  
    }
       foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($dong=mysqli_fetch_array($query)){
                                            
                                            
                                        
            if(isset($_SESSION['sohang_'.$id.''])){
                $tam = $_SESSION['sohang_'.$id.''];
            }
            else {
                $tam = 1;
            }                              // }
            $soluongsau = $dong['soluong'] - $tam;
            if($soluongsau < 0){
                $baoloi =  ' '.$dong['ten_sp'].' chỉ còn '.$dong['soluong'].' sản phẩm ';
                $_SESSION['baoloi'] = $baoloi;
            }
            else {
                if($soluongsau >=0 ){
                    $_SESSION['product_id'] = $dong['ten_sp'];
                    $_SESSION['price'] = $dong['gia'];
                }
            }
            
    }

            if($soluongsau < 0){ 

                echo '<p style="color:red">';
                echo $baoloi;
                echo '<br>';
                echo 'Vui lòng nhập lại...Xin cảm ơn!' ;
                echo '<br>';
                echo '</p>';
            }
                                            
    }

    }
}          }

    }




 

else {
if (isset($_POST["ok"])) {
 
        $ten = $phone = $address = $email = $noidung = $datesau = "";
        if ($_POST["orderName"] == null) {
            $loiten = "Vui lòng nhập Tên";
        } else {
            $ten = $_POST["orderName"];
            $_SESSION['orderName'] = $ten;
        }

        if ($_POST["orderPhone"] == null) {
            $loisdt = "Vui lòng nhập SĐT";
        } else {
            $phone = $_POST["orderPhone"];
            $_SESSION['phone'] = $phone;
        }
        if ($_POST["orderEmail"] == null) {
            $loiemail = "Vui lòng nhập Email";
        } else {
            $email = $_POST["orderEmail"];
            $_SESSION['guiemail'] = $email;
        }

        if ($_POST["orderAddress"] == null) {
            $loiaddress = "Vui lòng nhập Địa chỉ";
        } else {
            $address = $_POST["orderAddress"];
            $_SESSION['address'] = $address;
        }
        if ($_POST["datesau"] == null) {
            $loidatesau = "Vui lòng chọn ngày cần hàng";
        } else {
            $datesau = $_POST["datesau"];
            $_SESSION['datesau'] = $datesau;
        }

        if ($_POST["orderNoidung"] == null) {
            $loind = "Vui lòng nhập Nội dung";
        } else {
            $noidung = $_POST["orderNoidung"];
            $_SESSION['noidung'] = $noidung;
        }


        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('d/m/Y - H:i:s');
        foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($dong=mysqli_fetch_array($query)){
                                            
                                            
                                        
            if(isset($_SESSION['sohang_'.$id.''])){
                $tam = $_SESSION['sohang_'.$id.''];
            }
            else {
                $tam = 1;
            }                              // }
            $soluongsau = $dong['soluong'] - $tam;
            if($soluongsau < 0){
                $baoloi =  ' '.$dong['ten_sp'].' chỉ còn '.$dong['soluong'].' sản phẩm ';
                $_SESSION['baoloi'] = $baoloi;
            }
        }}}  
    }
       foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($dong=mysqli_fetch_array($query)){
                                            
                                            
                                        
            if(isset($_SESSION['sohang_'.$id.''])){
                $tam = $_SESSION['sohang_'.$id.''];
            }
            else {
                $tam = 1;
            }                              // }
            $soluongsau = $dong['soluong'] - $tam;
            if($soluongsau < 0){
                $baoloi =  ' '.$dong['ten_sp'].' chỉ còn '.$dong['soluong'].' sản phẩm ';
                $_SESSION['baoloi'] = $baoloi;
            }
            else {
                if($soluongsau >=0 ){
                    $_SESSION['product_id'] = $dong['ten_sp'];
                    $_SESSION['price'] = $dong['gia'];
                }
            }
            
    }

            if($soluongsau < 0){ 

                echo '<p style="color:red">';
                echo $baoloi;
                echo '<br>';
                echo 'Vui lòng nhập lại...Xin cảm ơn!' ;
                echo '<br>';
                echo '</p>';
            }
                                            
    }

    }
} 
if(isset($baoloi)){
                    echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=dathang";
            }
            alert("Đặt hàng thất bại!\nVui lòng kiểm tra lại...");
</script>';
}        





}
}
?>




            <div class="clear"></div>
            <div class="thongtinkh">
    <h3 style="text-transform:uppercase; padding:18px 0px 0px 0px;">thông tin đặt hàng</h3>

     <form id="user-form" class="register form-horizontal" name="user-form" method="POST" action="" enctype="multipart/form-data">

<div class="form-group">
<label class="col-sm-2 control-label">Tên người đặt hàng <span class="required">(*)</span>:</label>
<div class="col-sm-6">
<input type="text" name="orderName" class="obj_number form-control" id="order-fullname" value="<?php if(isset($data)){ echo $data['name'];   } else { if(isset($_POST['orderName'])){ echo $_POST['orderName']; } } ?>">
</div><br>
<label style="color:red;"><?php if(isset($loiten)){ echo $loiten;} ?></label>
</div>
<div class="form-group">
<label class="col-sm-2 control-label">Điện thoại người đặt hàng <span class="required">(*)</span>:</label>
<div class="col-sm-6">
<input type="text" name="orderPhone" class="obj_number form-control" id="order-phone" value="<?php if(isset($data)){ echo $data['phone'];  } else { if(isset($_POST['orderPhone'])){ echo $_POST['orderPhone']; } } ?>">
</div><br>
<label style="color:red;"><?php if(isset($loisdt)){ echo $loisdt;} ?></label>
</div>
                <div class="form-group">
           <label class="col-sm-2 control-label">Email<span class="required">(*)</span>:</label>
<div class="col-sm-6">
<input type="email" name="orderEmail" class="obj_number form-control" id="order-email" value="<?php if(isset($data)){ echo $data['email'];  } else { if(isset($_POST['orderEmail'])){ echo $_POST['orderEmail']; } } ?>">
            </div><br>
            <label style="color:red;"><?php if(isset($loiemail)){ echo $loiemail;} ?></label>
</div>
            <div class="form-group">
              <label class="col-sm-2 control-label">Địa chỉ người nhận <span class="required">(*)</span>:</label>
<div class="col-sm-6">
               <input type="text" name="orderAddress" class="obj_number form-control" id="order-recipient-address" value="<?php if(isset($data)){ echo $data['address']; } else { if(isset($_POST['orderAddress'])){ echo $_POST['orderAddress']; } } ?>">
</div><br>
<label style="color:red;"><?php if(isset($loiaddress)){ echo $loiaddress;} ?></label>
               </div>
               <div class="form-group">
              <label class="col-sm-2 control-label">Ngày giao hàng <span class="required">(*)</span>:</label>
<div class="col-sm-6">
               <input type="date" name="datesau" class="obj_number form-control" id="order-recipient-address" value="<?php if(isset($_POST['datesau'])){ echo $_POST['datesau']; } ?>">
</div><br>
<label style="color:red;"><?php if(isset($loidatesau)){ echo $loidatesau;} ?></label>
               </div>
              <div class="form-group">
              <label class="col-sm-2 control-label">Nội dung<span class="required">(*)</span>:</label>
<div class="col-sm-6">
            <textarea id="order-message" name="orderNoidung" class="form-control"><?php  if(isset($_POST['orderNoidung'])){ echo $_POST['orderNoidung']; }  ?></textarea>
</div><br>
<label style="color:red;"><?php if(isset($loind)){ echo $loind;} ?></label>
            </div>
        <div class="clear"></div>
          <div class="bt_abc">
<p style="color:red;margin-left: 100px;"></p>
<div class="clear_left"></div>

              <input  type="submit" name="ok" class="dathang_btn" id="bt_submit" value="Đặt hàng">
               <input type="reset" class="reset_btn" name="reset" value="Làm lại">
               <a href="index.php?module=giohang"><button id="back-id2" class="back" type="button">Trở về</button></a>
                </div>
              <div class="clear"></div>
            </form>
<?php $sql_chitiet4 = "select * from oder ORDER BY order_id DESC LIMIT 1";
                        $query1 = mysqli_query($conn,$sql_chitiet4);
                        $dong_chitiet = mysqli_fetch_array($query1);
                        $congthem = $dong_chitiet['order_id']+1;
 ?>
            <?php
if(isset($_POST['ok'])&&($soluongsau>=0)&& !isset($baoloi)&&($ten !='')&&($phone !='')&&($email !='')&&($address !='')&&($datesau !='')&&($noidung !='')){

if(isset($_SESSION['tongcongtien'])){
    $thanhtien = $_SESSION['tongcongtien'];
}
else{
    $thanhtien = $thanhtien;
}
    $email1 = "{$_SESSION['guiemail']}";


    $subject = "Order Information";

    $content = "<h1>THÔNG TIN ĐẶT HÀNG</h1>
<h3>Chào Quý khách ".$_SESSION['orderName']."!</h3>

Mã đơn hàng: DH-".$congthem."<br>
Tên khách hàng: ".$_SESSION['orderName']." <br>
Số điện thoại: ".$_SESSION['phone']."<br>
Email: ".$_SESSION['guiemail']."<br>
Địa chỉ: ".$_SESSION['address']."<br>
Ngày đặt hàng : ".$date."<br>
Ngày giao hàng theo yêu cầu: ".$datesau."<br>
Tổng tiền thanh toán: ".number_format($thanhtien , 0, ',', '.')." VNĐ<br><br>

Lưu ý: Quý khách muốn hủy đơn hàng xin vui lòng liên hệ cửa hàng qua hotline: 0972952691";
    if($email1 === '' OR $subject ==='' OR $content === ''){
        header('location:../email.php');
    }
    else {
        if(filter_var($email1,FILTER_VALIDATE_EMAIL)){
            //xu ly send mail
            if(sendmail($email1,$subject,$content)){
                if(($ten !== '')&&($phone !== '')&&($email !== '')&&($address !== '')&&($noidung !== '')&&($datesau !== '')&&(isset($_SESSION['tongcongtien']))&&(!isset($baoloi))){
        $thanhtien = $_SESSION['tongcongtien'];
        $insert = mysqli_query($conn,"INSERT INTO oder (makh, fullname, phone, email, address, noidung, total ,date_order, datesau, status) values ('VL','$ten', '$phone', '$email', '$address', '$noidung', '$thanhtien' ,'$date', '$datesau' ,'Đang xử lý' )") or die (mysql_error());

        }
        else {
            if(($ten !== '')&&($phone !== '')&&($email !== '')&&($address !== '')&&($noidung !== '')&&($datesau !== '')&&(!isset($_SESSION['tongcongtien']))&&(!isset($baoloi))){

        $insert = mysqli_query($conn,"INSERT INTO oder (makh, fullname, phone, email, address, noidung, total ,date_order, datesau, status) values ('VL','$ten', '$phone', '$email', '$address', '$noidung', '$thanhtien' ,'$date', '$datesau' ,'Đang xử lý' )") or die (mysql_error());

    }
        }

        $last_id = mysqli_insert_id($conn);
                foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($dong=mysqli_fetch_array($query)){
                                            
                                            
                                        
            if(isset($_SESSION['sohang_'.$id.''])){
                $tam = $_SESSION['sohang_'.$id.''];
            }
            else {
                $tam = 1;
            }                              // }
            $soluongsau = $dong['soluong'] - $tam;
            if($soluongsau < 0){
                $baoloi =  ' '.$dong['ten_sp'].' chỉ còn '.$dong['soluong'].' sản phẩm ';
                $_SESSION['baoloi'] = $baoloi;
            }
            else {
                if($soluongsau >=0 ){
                    $_SESSION['product_id'] = $dong['ten_sp'];
                    if($dong['sale']=='0'){
                    $_SESSION['price'] = $dong['gia'];}
                    else {
                    $_SESSION['price'] = $dong['sale'];    
                    }
                }
            }
            
    }
    if(($soluongsau >= 0)&&!isset($baoloi)){
            if(($ten !== '')&&($phone !== '')&&($email !== '')&&($address !== '')&&($noidung !== '')&&($datesau !== '')){
            $insert2 = mysqli_query($conn,"INSERT INTO order_detal 
            (order_id, product_id, price, sl, date_order) values 
            ('".$last_id."', '".$_SESSION['product_id']."', '".$_SESSION['price']."', '".$tam."', '$date')") or die (mysql_error());
             unset($_SESSION['cart_'.$id]);
             unset($_SESSION['sohang_'.$id.'']);
            }

            }
                                            
    }

    }
}
                                            if(isset($insert)&&isset($insert2)){
                                            unset($_SESSION['cart_'.$id]);
                                            unset($_SESSION['tongcongtien']);
                                            unset($_SESSION['sohang_'.$id.'']);
                                            $_SESSION['soluong'] = 0; 
  $ma = $_SESSION['magiamgia'];
  $delete = mysqli_query($conn,"DELETE FROM magiamgia WHERE ma_giamgia='$ma'");


                                            echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php";
            }
            alert("Đặt hàng thành công!\nThông tin đơn hàng được gửi tới email của bạn...");
            setTimeout("Redirect()", 100);
</script>';

                                        }
                                        else {
                                            echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=giohang";
            }
            alert("Đặt hàng thất bại!\nVui lòng kiểm tra lại...");
</script>';

                                        }
            }
            else {
                echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=dathang";
            }
            alert("Lỗi mạng!\nVui lòng kiểm tra kết nối Internet!");
            setTimeout("Redirect()", 100);
</script>';
            }
        }
        else{
            echo '<script type="text/javascript">
            function Redirect() {
               window.location="index.php?module=dathang";
            }
            alert("Đặt hàng thất bại!\nVui lòng kiểm tra lại...");
</script>';
        }
    }
}
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
        </div>
               </div>
        <!-- STOP CONTENT CENTER -->


                 </div>
                </div>
            </div>