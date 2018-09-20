<div class="primary1 col-lg-9 col-md-12 col-sm-12 col-xs-12">
<div class="item_home">

 <div class="div_orders" style="width:100%">
                                <div class="primary">
     <h3 class="title_cate">Giỏ Hàng</h3>

    <div id="cart" class="giohang_form">    
                Giỏ hàng của bạn có <?php if(isset($_SESSION['soluong'])) { echo $_SESSION['soluong'];} else { echo 0;} ?> sản phẩm!            
    
<div class="table-responsive">
    <form id="addEditForm" name="addEditForm" method="post" action="" enctype="multipart/form-data">
            <table id="grvSanPham" border="0" cellpadding="8" cellspacing="0" rules="all" class="table table-bordered">
            <tbody>
            <tr>
           <th class="col-xs-1"></th>
             <th class="col-xs-6">Tên sản phẩm</th>
             <th class="col-xs-1">Số lượng</th>
               <th class="col-xs-2">Đơn giá</th>
              <th class="col-xs-2">Thành tiền</th>
            </tr>
            <?php
            

                            if(isset($_GET['add']) && !empty($_GET['add']) && ($_GET['soluong'] > 0)){
                                $id = $_GET['add'];
                                $_SESSION['cart_'.$id] +=1;
                                
                                if(isset($_GET['tu']) && $_GET['tu'] == 'tatcasanpham' ){
                            header('location:index.php?module=tatcasanpham');}
                            else {
                              if(isset($_GET['tu']) && $_GET['tu'] == 'motloaisanpham' && isset($_GET['id']) && isset($_GET['trang']) ){
                            header('location:index.php?module=motloaisanpham&id='.$_GET['id'].'&trang='.$_GET['trang'].'');}
                              else {
                                if(isset($_GET['tu']) && $_GET['tu'] == 'motloaisanpham' && isset($_GET['id']) && !isset($_GET['trang']) ){
                            header('location:index.php?module=motloaisanpham&id='.$_GET['id'].' ');}
                                else {
                                    if(isset($_GET['tu']) && $_GET['tu'] == 'tuvanchonhoa' && isset($_GET['trang']) ){
                            header('location:index.php?module=tuvanchonhoa&ketqua='.$_SESSION['timkiem1'].'&ketqua2='.$_SESSION['timkiem2'].'&trang='.$_GET['trang'].'');}
                                    else{
                                      if(isset($_GET['tu']) && $_GET['tu'] == 'tuvanchonhoa' && !isset($_GET['trang']) ){
                            header('location:index.php?module=tuvanchonhoa&ketqua='.$_SESSION['timkiem1'].'&ketqua2='.$_SESSION['timkiem2'].'');}
                            else {
                              if(isset($_GET['tu']) && $_GET['tu'] == 'timkiemsanpham' && isset($_GET['trang']) ){
                            header('location:index.php?module=timkiemsanpham&ketqua='.$_SESSION['timkiem'].'&trang='.$_GET['trang'].'');}
                                    else{
                                      if(isset($_GET['tu']) && $_GET['tu'] == 'timkimsanpham' && !isset($_GET['trang']) ){
                            header('location:index.php?module=timkimsanpham&ketqua='.$_SESSION['timkiem'].' ');}
                            else {
                            header('location:index.php');
                          }
                          }
                             }
                             }}
                            }
                            }

                                $_SESSION['sohang'] = $_POST['soluong'];
                                
                            }
                            
                            if(isset($_GET['xoa'])){
                                $_SESSION['cart_'.$_GET['xoa']]=0;                             
                                $_SESSION['soluong'] -= $_SESSION['so'];
                                header('location: index.php?module=giohang');
                            }

                              $dem = 0;

                            $thanhtien = 0;
                            $tongtien = 0;
                            foreach($_SESSION as $name => $value){
                                if($value>0){
                                    if(substr($name,0,5)=='cart_'){
                                        $tatca = 0;
                                        $id = substr($name,5);
                                        $sql = "SELECT * FROM chitietsp where masp='".$id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        
                                        while($dong=mysqli_fetch_array($query)){
                                          $dem +=1;
                                          $_SESSION['soluong'] = $dem;
                                          if(isset($_POST['huy'])){
                                            unset($_SESSION['cart_'.$id]);
                                            unset($_SESSION['sohang_'.$id.'']);
                                            unset($_SESSION['soluong']);
                                            header('location:index.php?module=giohang');
                                          }
                                            if(isset($_POST['soluong_'.$id.''])){
                                             $tien = $_POST['soluong_'.$id.''];
                                             if($dong['sale']=='0'){ 
                                            $tongtien = $dong['gia'] * $tien;}
                                            else {
                                              $tongtien = $dong['sale'] * $tien;
                                            }
                                          }

                                            else {
                                              if(isset($_SESSION['sohang_'.$id.''])){
                                                $tien = $_SESSION['sohang_'.$id.''];
                                                if($dong['sale']=='0'){
                                                $tongtien = $dong['gia'] * $tien;}
                                                else {
                                                  $tongtien = $dong['sale'] * $tien;
                                                }
                                              }
                                                else {
                                                  if($dong['sale']=='0'){
                                                $tongtien = $dong['gia'] * $_SESSION['cart_'.$id];}
                                                else {
                                                  $tongtien = $dong['sale'] * $_SESSION['cart_'.$id];
                                                }
                                              }
                                                $_SESSION['so'] = $value;
                                              }
 ?>
                <tr>

        <td><a href="index.php?module=giohang&xoa=<?php echo $id ?>" >Xóa</a></td>
                <td>

                <img title="undefined" style="width: 50px;" alt="undefined" src="images/sanpham/<?php echo $dong['hinhanh'] ?> ">

                    <span id="grvSanPham_ctl01_lblTenSanPham"><?php echo $dong['ten_sp'] ?></span>
           </td>
<td>
                 <input name="soluong_<?php echo $id  ?>" value="<?php 
                 if(isset($_SESSION['sohang_'.$id.''])){
                  echo $_SESSION['sohang_'.$id.''];
                } 
                else {
                        if(isset($_POST['soluong_'.$id.''])){
                          echo $_POST['soluong_'.$id.''];
                        }
                        else {
                          echo $_SESSION['cart_'.$id];
                        }
                      }


                  ?>" id="grvSanPham_ctl01_txtSoLuong" tabindex="3" onkeyup="TinhTong(this);" onblur="TinhTong(this);" type="text" class="numeric quantity"><button style="color: blue; width: 45px; margin-left: -4px; margin-top: 0px;" type="submit" name="okanhday">Update</button>
          </td>
                <td>
                     <input type="hidden" value="<?php if($dong['sale'] =='0' ){ $chiara = number_format($dong['gia'] , 0, ',', '.'); echo $chiara; } else { echo $dong['sale']; } ?>" id="grvSanPham_ctl01_txtDonGia" class="unit-price">
                     <?php if($dong['sale'] =='0' ){ $chiara = number_format($dong['gia'] , 0, ',', '.'); echo $chiara; } else { echo number_format($dong['sale'] , 0, ',', '.'); } ?>
                </td>
                <td>
<span id="grvSanPham_ctl01_txtThanhTien" class="thanhtien sub-total"><?php $chiara = number_format($tongtien , 0, ',', '.'); echo $chiara; ?></span>

            </tr>


                                <?php       }
                                       
                                }

                                if(isset($id)&&!isset($_SESSION['iddn'])){
                                $thanhtien += $tongtien;
                                $tongtien = 0;
                                  if(isset($_POST['okanhday'])&&isset($_POST['soluong_'.$id.''])){
                               $_SESSION['sohang_'.$id.''] = $_POST['soluong_'.$id.''];
                               header('location:index.php?module=giohang');
                                 }
                                 if((isset($_POST['soluong_'.$id.'']))&&$_POST['soluong_'.$id.'']==0){
                                  $_SESSION['sohang_'.$id.'']=1;
                                 }
                                }

                                if(isset($id)&&isset($_SESSION['iddn'])){
                                $thanhtien += $tongtien;
                                $tongtien = 0;
                                if(isset($_POST['okanhday'])){
                                  $_SESSION['sohang_'.$id.''] = $_POST['soluong_'.$id.''];
                                  header('location:index.php?module=giohang');
                                }
                                if((isset($_POST['soluong_'.$id.'']))&&$_POST['soluong_'.$id.'']==0){
                                  $_SESSION['sohang_'.$id.'']=1;
                                 }
                                }
                                }       
                                
                            }
                            if(!isset($id)){

                            echo '</tbody></table>
            </form></div>
<a href="index.php"><button id="cont_sel" class="muatiep" type="button">Mua tiếp</button></a>'
         ;
                              }


                            else {
echo '</tbody></table>
            </form></div>
            
         <p class="total" id="Label1">
                Tổng thành tiền : 
         <span id="lblTong">'.number_format($thanhtien , 0, ',', '.').'</span> VNĐ
         </p> 
        <form method="POST"><button id="cancel_sel" name="huy" type="resert" class="huy" type="button">Hủy</button>
       <a href="index.php?module=dathang"><button id="orders_sel" class="thanhtoan" type="button">Đặt hàng</button></a>
<a href="index.php"><button id="cont_sel" class="muatiep" type="button">Mua tiếp</button></a></form>'
         ;
                            }

            
                        ?>          
         
            
            



            <div class="clear"></div>
        </div>
               </div>
        <!-- STOP CONTENT CENTER -->


                 </div>

                </div>
            </div>