<style type="text/css" media="screen">
   .ribbon-wrapper {
   width: 85px;
   height: 88px;
   overflow: hidden;
   position: absolute;
   top: -3px;
   right: -3px;
}

.ribbon-red {
   font-weight: bold;
   font-size:13px;
   text-transform:uppercase;
   color: #fff;
   text-align: center;
   -webkit-transform: rotate(45deg);
   -moz-transform: rotate(45deg);
   -ms-transform: rotate(45deg);
   -o-transform: rotate(45deg);
   position: relative;
   padding: 7px 0;
   left: -5px;
   top: 15px;
   width: 120px;
   background-color: #f53838;
   background-image: -webkit-gradient(linear, left top, left bottom, from(#f53838), to(#e10808));
   background-image: -webkit-linear-gradient(top, #f53838, #e10808);
   background-image: -moz-linear-gradient(top, #f53838, #e10808);
   background-image: -ms-linear-gradient(top, #f53838, #e10808);
   background-image: -o-linear-gradient(top, #f53838, #e10808);
   color: #fff;
   -webkit-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
   -moz-box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
   box-shadow: 0px 0px 3px rgba(0,0,0,0.3);
}

.ribbon-red:before, .ribbon-red:after {
   content: "";
   border-top: 3px solid #6e8900;
   border-left: 3px solid transparent;
   border-right: 3px solid transparent;
   position:absolute;
   bottom: -3px;
}

.ribbon-red:before {
   left: 0;
}

.ribbon-red:after {
   right: 0;
} 
</style> 
<div class="primary1 col-lg-9 col-md-12 col-sm-12 col-xs-12">
<div class="item_home">
                        <?php
                        $chitiet = $_GET['id'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
                        $tenchitiet = mysqli_query($conn,"SELECT masp, ten_sp, gia, hinhanh, loaisanpham, motasp , soluong, sale FROM chitietsp WHERE masp=$chitiet");
                        if(mysqli_num_rows($tenchitiet)>0){
                        $arrtenchitiet = mysqli_fetch_array($tenchitiet);
                        }
                        ?>

                        <h3 class="title_cate"><?php echo $arrtenchitiet['loaisanpham']; ?></h3>
                <div class="main_item main_detail_h">
                    


                        <div class="img_pro">
                            <?php if($arrtenchitiet['sale']!== '0'){
        ?>
    <div class="ribbon-wrapper"><div class="ribbon-red">Giảm giá</div></div>  <?php } ?>
                            <a tittle="Hoa bó 110" class="thickbox" href="<?php echo $arrtenchitiet['hinhanh']; ?>"><img title="Hoa bó 110" alt="Hoa bó 110" class="img_full" src="images/sanpham/<?php echo $arrtenchitiet['hinhanh']; ?>"></a></div>



                    <h3 class="title_pro_detail"><?php echo $arrtenchitiet['ten_sp']; ?></h3>
                    <div class="price">Mã: <span><?php echo "HT-".$arrtenchitiet['masp']." "; ?></span><br>
                     Giá :    <span class="product-price">Giá: <?php if($arrtenchitiet['sale']!== '0' ){ $chiara = number_format($arrtenchitiet['gia'] , 0, ',', '.'); echo "<strike>" ; echo $chiara; echo " VNĐ"; echo "</strike>"; } else { $chiara = number_format($arrtenchitiet['gia'] , 0, ',', '.'); echo $chiara; echo " VNĐ";   } ?>  <?php if($arrtenchitiet['sale'] !== '0'){ echo number_format($arrtenchitiet['sale'] , 0, ',', '.'); echo " VNĐ"; } ?> </span><br>

                     Tình trạng:<span class="product-price"><?php if($arrtenchitiet['soluong'] > 0){ echo 'Còn hàng('.$arrtenchitiet['soluong'].')';} else { echo 'Hết hàng'; } ?></span></div>
                    <div class="order_chi"><a onclick="<?php if($dong_chitiet['soluong'] == 0){ ?> alert('Sản phẩm <?php echo $arrtenchitiet['ten_sp']  ?> hết hàng ')      <?php } else { ?> alert('Sản phẩm <?php echo $arrtenchitiet['ten_sp']  ?> được thêm vào giỏ hàng ') <?php } ?>" href="index.php?module=giohang&add=<?php echo $arrtenchitiet['masp'] ?>&soluong=<?php echo $arrtenchitiet['soluong'] ?>">+ Đặt hàng</a></div>
                    <p class="content_pro"> </p><p style="text-align: justify;"><span style="font-size: small;"><?php echo $arrtenchitiet['motasp']; ?></span></p>
                    <ol class="benefit" style="list-style-type: decimal;float: left; margin-top: 20px; margin-left: 20px;font-weight: bold;" >
<li style="color: #f26560;">Để đặt hoa một cách nhanh chóng và tiện lợi quý khách có thể đăng kí tài khoản thành viên <a href="index.php?module=new">tại đây</a>. Ngoài ra là thành viên sẽ được nhận nhiều ưu đãi hơn</li>
<li style="color: #f26560;">Tặng banner, thiệp (trị giá 20.000đ) miễn phí</li>
<li style="color: #f26560;">Giảm ngay 20.000đ khi Bạn tạo đơn hàng online</li>
<li style="color: #f26560;">Giao gấp trong vòng 2 giờ</li>
<li style="color: #f26560;">Cam kết 100% hoàn lại tiền nếu bạn không hài lòng</li>
<li style="color: #f26560;">Cam kết hoa tươi trên 3 ngày</li>
</ol>

<p style="text-align: justify;"><span style="font-size: small;"><strong>Tag: </strong><strong>
    <?php
                $sql_chitiet = "select * from loaisp ORDER BY RAND() LIMIT 6";
                $query = mysqli_query($conn,$sql_chitiet);
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                 ?>
                 <a href="index.php?module=motloaisanpham&id=<?php echo $dong_chitiet['id_loaisp'];  ?>" title="<?php echo $dong_chitiet['tenloaisp'];  ?>"><?php echo $dong_chitiet['tenloaisp'];  ?></a>,&nbsp;
                <?php
                } 
                ?></strong> </span></p><p></p>
                </div>
                <div class="clear"></div>

                <h3 class="title_cate">Sản phẩm khác</h3>
<div class="main_item">
                <?php
                $sql_chitiet = "select * from chitietsp where (loaisanpham LIKE N'%".$arrtenchitiet['loaisanpham']."%') AND (ten_sp != '".$arrtenchitiet['ten_sp']."')   ORDER BY RAND() LIMIT 6";
                $query = mysqli_query($conn,$sql_chitiet);
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query)) {
                 ?>
        <div class="item-list col-lg-4 col-md-4 col-sm-6 col-xs-6">
<div class="item">
    <?php if($dong_chitiet['sale']!== '0'){
        ?>
    <div class="ribbon-wrapper"><div class="ribbon-red">Giảm giá</div></div>  <?php } ?>
<h3><a class="title" title="" href=""><?php echo $dong_chitiet['ten_sp'] ?></a></h3>

<a title="" class="thickbox" href="">

<img style="height: 250px;" title="" alt="" class="img_full" src="images/sanpham/<?php echo $dong_chitiet['hinhanh'] ?>">
</a>
<span class="product-price">Giá: <?php if($dong_chitiet['sale']!== '0' ){ $chiara = number_format($dong_chitiet['gia'] , 0, ',', '.'); echo "<strike>" ; echo $chiara; echo " VNĐ"; echo "</strike>"; } else { $chiara = number_format($dong_chitiet['gia'] , 0, ',', '.'); echo $chiara; echo " VNĐ";   } ?>  <?php if($dong_chitiet['sale'] !== '0'){ echo $dong_chitiet['sale']; echo " VNĐ"; } ?> </span>
<a onclick="<?php if($dong_chitiet['soluong'] == 0){ ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> hết hàng ')      <?php } else { ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> được thêm vào giỏ hàng ') <?php } ?>" title="" href="index.php?module=giohang&add=<?php echo $dong_chitiet['masp'] ?>&soluong=<?php echo $dong_chitiet['soluong'] ?>" class="order_item">+ Giỏ hàng</a>
<a title="" href="index.php?module=chitietsanpham&id=<?php echo $dong_chitiet['masp'] ?>" class="views_item">Chi tiết</a>
</div>
</div>
                <?php
                } 
                ?>

<div class="clear"></div>
</div>
                </div>
            </div>