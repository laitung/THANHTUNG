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
                    <?php
                    require_once("connect.php"); 
                     ?>
                     <div class="primary1 col-lg-9 col-md-12 col-sm-12 col-xs-12">
<div class="item_home">    

    <h3 class="title_cate">Sản phẩm mới</h3>
<div class="main_item">
                <?php
                $sql_chitiet = "select * from chitietsp where date_add  ORDER BY date_add DESC LIMIT 6";
                $query1 = mysqli_query($conn,$sql_chitiet);
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query1)) {
                 ?>
        <div class="item-list col-lg-4 col-md-4 col-sm-6 col-xs-6">
<div class="item">
    <!-- <div class="ribbon-wrapper"><div class="ribbon-red">NEW</div></div> -->
<h3><a class="title" title="" href=""><?php echo $dong_chitiet['ten_sp'] ?></a></h3>

<a title="" class="thickbox" href="index.php?module=chitietsanpham&id=<?php echo $dong_chitiet['masp'] ?>">
<img style="height: 250px;" title="" alt="" class="img_full" src="images/sanpham/<?php echo $dong_chitiet['hinhanh'] ?>">
</a>
<span class="product-price"><?php $chiara = number_format($dong_chitiet['gia'] , 0, ',', '.'); echo $chiara; ?> VNĐ  </span>
<span class="product-price">Tình trạng: <?php if($dong_chitiet['soluong'] > 0){ echo 'Còn hàng('.$dong_chitiet['soluong'].')';} else { echo 'Hết hàng'; } ?></span>
<a onclick="<?php if($dong_chitiet['soluong'] == 0){ ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> hết hàng ');       <?php  } else { ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> được thêm vào giỏ hàng '); <?php } ?>" title="" href="index.php?module=giohang&add=<?php echo $dong_chitiet['masp'] ?>&soluong=<?php echo $dong_chitiet['soluong'] ?>" class="order_item">+ Giỏ hàng</a>
<a title="" href="index.php?module=chitietsanpham&id=<?php echo $dong_chitiet['masp'] ?>" class="views_item">Chi tiết</a>
</div>
</div>
                <?php
                } 
                ?> 

<div class="clear"></div>
</div> 
                        <?php
                        $sql_loaisp = "select * from loaisp ORDER BY id_loaisp DESC";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        if(($dong_sp['trangthai'])=='Hiển thị'){ 
                        ?>
   
<h3 class="title_cate"><?php echo $dong_sp['tenloaisp'] ?></h3>
<div class="main_item">
                <?php
                $sql_chitiet = "select * from chitietsp where loaisanpham LIKE N'%".$dong_sp['tenloaisp']."%' ORDER BY masp DESC LIMIT 6";
                $query1 = mysqli_query($conn,$sql_chitiet);
                ?>
                <?php
                while($dong_chitiet = mysqli_fetch_array($query1)) {
                 ?>
        <div class="item-list col-lg-4 col-md-4 col-sm-6 col-xs-6">
<div class="item">
    <?php if($dong_chitiet['sale']!== '0'){
        ?>
    <div class="ribbon-wrapper"><div class="ribbon-red">Giảm giá</div></div>  <?php } ?>
<h3><a class="title" title="" href=""><?php echo $dong_chitiet['ten_sp'] ?></a></h3>

<a title="" class="thickbox" href="index.php?module=chitietsanpham&id=<?php echo $dong_chitiet['masp'] ?>">
<img style="height: 250px;" title="" alt="" class="img_full" src="images/sanpham/<?php echo $dong_chitiet['hinhanh'] ?>">
</a>
<span class="product-price">Giá: <?php if($dong_chitiet['sale']!== '0' ){ $chiara = number_format($dong_chitiet['gia'] , 0, ',', '.'); echo "<strike>" ; echo $chiara; echo " VNĐ"; echo "</strike>"; } else { $chiara = number_format($dong_chitiet['gia'] , 0, ',', '.'); echo $chiara; echo " VNĐ";   } ?>  <?php if($dong_chitiet['sale'] !== '0'){ echo number_format($dong_chitiet['sale'] , 0, ',', '.'); echo " VNĐ"; } ?> </span>
<span class="product-price">Tình trạng: <?php if($dong_chitiet['soluong'] > 0){ echo 'Còn hàng('.$dong_chitiet['soluong'].')';} else { echo 'Hết hàng'; } ?></span>
<a onclick="<?php if($dong_chitiet['soluong'] == 0){ ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> hết hàng ')      <?php } else { ?> alert('Sản phẩm <?php echo $dong_chitiet['ten_sp']  ?> được thêm vào giỏ hàng ') <?php } ?>" title="" href="index.php?module=giohang&add=<?php echo $dong_chitiet['masp'] ?>&soluong=<?php echo $dong_chitiet['soluong'] ?>" class="order_item">+ Giỏ hàng</a>
<a title="" href="index.php?module=chitietsanpham&id=<?php echo $dong_chitiet['masp'] ?>" class="views_item">Chi tiết</a>
</div>
</div>
                <?php
                } 
                ?> 

<div class="clear"></div>
<div class="views_all"><a href="index.php?module=motloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>">..Xem tất cả</a></div>
</div>
    <?php 
}}
?>
 
        
            </div>
        </div>
