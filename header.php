<!DOCTYPE html>
<html lang="vi">

    <head>
            <title>Dịch vụ hoa tươi, điện hoa</title>
            <meta name="description" content="Chuyên cung cấp các loại hoa tươi, hoa khai trương, hoa cưới, hoa khai trương, quà tặng sinh nhật - tình yêu, các sản phẩm handmade đẹp, chất lượng.">
            <meta name="keywords" content="<br />hoa tươi, hoa tuoi, dich vu hoa tuoi, dịch vụ hoa tươi, dien hoa, điện hoa, shop hoa tươi, shop hoa tuoi, hoatuoi,hoa tuoi dep,lang hoa dep, hoa cuoi dep, shop hoa<br />">
            <meta name="title" content="dịch vụ hoa tươi, điện hoa">
            <meta http-equiv="Content-Language" content="vi">
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
            <meta name="Language" content="Vietnamese">
            <meta name="author" content="">
            <meta name="copyright" content="">
            <meta name="robots" content="FOLLOW,INDEX">
            <link rel="shortcut icon" href="" type="image/x-icon">           
            <link type="text/css" rel="stylesheet" href="css/bootstrap.css">        
            <link type="text/css" rel="stylesheet" href="css/material-design-iconic-font.css">        
            <link type="text/css" rel="stylesheet" href="css/default.css">        
            <link type="text/css" rel="stylesheet" href="css/global.css">        
            <link type="text/css" rel="stylesheet" href="css/content.css">        
            <link type="text/css" rel="stylesheet" href="css/menu.css">        
            <link type="text/css" rel="stylesheet" href="css/nivo-slider.css">        
            <link type="text/css" rel="stylesheet" href="css/thickbox.css">        
            <link type="text/css" rel="stylesheet" href="css/m-extends.css">        
            <link type="text/css" rel="stylesheet" href="css/main.css">        
            <link type="text/css" rel="stylesheet" href="css/owl.carousel.css">

<script type="text/javascript" src="js/jquery-latest.js"></script>
        
        </head>
            <body cz-shortcut-listen="true">
                    <?php
                    require_once("connect.php"); 
                    ?> 
                  
                    <!-- <script type="text/javascript" src="https://apis.google.com/js/plusone.js">{lang: 'vi'}</script> -->
    <div class="container top-container">
    <div class="container-fluid logo_header no-padding">
        <a href="#" class="logo"><img src=""></a>
        <div class="order">
            <div class="giohang_2"><span>Giỏ hàng: [
                <?php
                session_start();
                if(isset($_SESSION['soluong'])){
                    echo $_SESSION['soluong'];
                }
                else {
                    echo 0;
                }
                 ?>



            ]</span></div>
            <a href="index.php?module=giohang"><div class="dathang"><span>Đặt hàng</span></div></a>
<a href="index.php?module=thanhtoan"><div class="payment"><span>Thanh toán</span></div></a>
        </div>
    </div>
    <div class="container-fluid no-padding menu-full" style="position:relative">
        <div class="wrap_form_search">
        <form action="index.php?module=timkiemsanpham" method="POST" accept-charset="utf-8">
            <input class="timkiemsanpham" name="nhap" style="height: 26px; width: 145px;" value="<?php if(isset($_POST['nhap'])){ echo $_POST['nhap']; } ?>" placeholder="Tìm kiếm!" >
            <input class="nuttim" type="submit" name="tim" style="opacity: -2;">
        </form>        
<!--             <form class="search_top search_form" name="form_search" id="form_search" method="GET" action="index.php?module=timkiemsanpham">
        <!- <input type="hidden" name="sitesearch" value="">
            <!-- <input id="keySearch" name="nhap" type="text" placeholder="Tìm kiếm" class="input_text"> -->
        <!-- <button type="submit" name="seach" value="" class="search_btn" id="submit_form_search"></button> -->
        <!-- <div class="clear_left"></div> -->
            <!-- </form> -->
<!--         <script language="javascript" type="text/javascript">
$(document).ready(function(){
$("#keySearch").keydown(function(e){
        if(e.keyCode==13)
          var str =  $('#keySearch').val();
    if(str=="")return false;
  })
    $('#submit_form_search').click(function()  {
            if($('#keySearch').val()=="") {
                jAlert('Vui lòng nhập thông tin cần search:please!!!!!','Lovely Flowers Dialog');
                return false;
            }
    });
});
</script> -->
</div>
                <nav class="visible-lg" id="max-menu-page">
        <ul class="menu_top">
                    
                <li>
<a title="" href="index.php" class="active selected">Trang Chủ</a>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=thungo" class=""> Giới Thiệu</a>
                    
                        <ul>
                            <li><a href="index.php?module=thungo" title="Thư Ngỏ">Thư Ngỏ</a></li>
                            
                        </ul>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=tatcasanpham" class="">Shop Hoa</a>
                    
                        <ul>
                            <?php
                        $sql_loaisp = "select * from loaisp";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        ?>
                            <li><a href="index.php?module=motloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>" title="<?php echo $dong_sp['tenloaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
                        <?php 
                        }
                        ?>
                            
                        </ul>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=dichvu" class="">Dịch Vụ</a>
                    
                        <ul>
                            <li><a href="index.php?module=dichvu" title="Đặt hoa online ">Đặt hoa online </a></li><li><a href="index.php?module=daycamhoa" title="Dạy học cắm hoa tại Hà Nội">Dạy học cắm hoa tại Hà Nội</a></li>
                            
                        </ul>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=hotrokhachhang" class="">Hỗ trợ khách hàng</a>
                    
                        <ul>
                            <li><a href="index.php?module=hotrokhachhang" title="Chính sách bảo mật thông tin">Chính sách bảo mật thông tin</a></li>
                            <li><a href="index.php?module=chinhsach" title="Chính sách và quy định chung">Chính sách và quy định chung</a></li>
                            <li><a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>
                            <li><a href="#" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                            <li><a href="index.php?module=cauhoithuonggap" title="Các câu hỏi thường gặp">Các câu hỏi thường gặp</a></li>
                            
                        </ul>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=timhieuvehoa" class=""> Tìm Hiểu Về Hoa</a>
                    
                        <ul>
                            <li><a href="index.php?module=timhieuvehoa" title="Tư vấn tặng hoa">Tư vấn tặng hoa</a></li>
                            <li><a href="#" title="Dịch vụ">Dịch vụ</a></li>
                            <li><a href="#" title="Thông điệp các loài hoa">Thông điệp các loài hoa</a></li>
                            <li><a href="#" title="Địa Điểm Hoa Tươi">Địa Điểm Shop Hoa</a></li>
                            
                        </ul>
                    
                </li>
                <span></span>
                    
                <li>
<a title="" href="index.php?module=lienhe" class=""> Liên Hệ</a>
                    
                </li>

                
            
     </ul>
        </nav>
                <!-- #max-menu-page -->
                <nav data-fix-extend="#min-menu-page" class="open-m-extend hidden-lg" id="nav-menu-page">
                    <button class="btn btn-info btn-xs"><i class="zmdi zmdi-hc-3x zmdi-view-headline"></i></button><div class="lbl"></div>
                </nav>
                <div class="m-extend-overlay close-m-extend"></div>
                <nav class="m-extend m-extend-fix-left min-menu-page" id="min-menu-page">
                <div class="title">Menu</div>
                <ul class="lv1">
                            
                        
                            <li><a title="" href="index.php" class="active selected">Trang Chủ</a>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class=""> Giới Thiệu</a>
                            <ul class="lv2">
                                <li><a href="" title="Thư Ngỏ">Thư Ngỏ</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class="">Shop Hoa</a>
                            <ul class="lv2">
                                <li><a href="#" title="Nụ Tầm Xuân">Nụ Tầm Xuân</a></li>
                                <li><a href="#" title="HOA 8/3">Hoa ngày lễ (8/3-20/10)</a></li>
                                <li><a href="#" title="Hoa Bó">Hoa Bó</a></li>
                                <li><a href="#" title="Hoa Cưới">Hoa Cưới</a></li>
                                <li><a href="#" title="Lan hồ điệp">Lan hồ điệp</a></li>
                                <li><a href="#" title="Hoa Giỏ">Hoa Giỏ</a></li>
                                <li><a href="#" title="Hoa xin lỗi">Hoa xin lỗi</a></li>
                                <li><a href="#" title="Hoa đặt hàng nhiều nhất">Hoa đặt hàng nhiều nhất</a></li>
                                <li><a href="#" title="Hoa sinh nhật">Hoa sinh nhật</a></li>
                                <li><a href="#" title="Hoa Hướng Dương">Hoa Hướng Dương</a></li>
                                <li><a href="#" title="Hoa Chuc Mừng">Hoa Chúc Mừng</a></li>
                                <li><a href="#" title="Hoa Khai Trương">Hoa Khai Trương</a></li>
                                <li><a href="#" title="Hoa Chia Buồn">Hoa Chia Buồn</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class=""> Quà Tặng</a>
                            <ul class="lv2">
                                <li><a href="#" title="Quà tết 2015">Quà tết 2015</a></li>
                                <li><a href="#" title="Thiên Nga">Thiên Nga</a></li>
                                <li><a href="#" title="Quà Valentine">Quà Valentine</a></li>
                                <li><a href="#" title="Bánh Sinh Nhật">Bánh Sinh Nhật</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class="">Dịch Vụ</a>
                            <ul class="lv2">
                                <li><a href="#" title="Đặt hoa online ">Đặt hoa online </a></li><li><a href="#" title="Dạy học cắm hoa tại TPHCM">Dạy học cắm hoa tại Hà Nội</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class="">Hỗ trợ khách hàng</a>
                            <ul class="lv2">
                                <li><a href="#" title="Chính sách bảo mật thông tin">Chính sách bảo mật thông tin</a></li>
                                <li><a href="#" title="Chính sách và quy định chung">Chính sách và quy định chung</a></li>
                                <li><a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>
                                <li><a href="#" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                                <li><a href="#" title="Các câu hỏi thường gặp">Các câu hỏi thường gặp</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li class="have-child"><a title="" href="javascript:;" class=""> Tìm Hiểu Về Hoa</a>
                            <ul class="lv2">
                                <li><a href="#" title="Tư vấn tặng hoa">Tư vấn tặng hoa</a></li>
                                <li><a href="#" title="Dịch vụ">Dịch vụ</a></li>
                                <li><a href="#" title="Thông điệp các loài hoa">Thông điệp các loài hoa</a></li>
                                <li><a href="#" title="Địa Điểm Shop Hoa">Địa Điểm Shop Hoa</a></li>
                                
                            </ul>
                        
                        </li>
                            
                        
                            <li><a title="" href="#" class=""> Liên Hệ</a>
                        
                        </li>
                    
                </ul>
                <div data-fix-extend="#min-menu-page" class="exit close-m-extend">
                    <i class="zmdi zmdi-close zmdi-hc-fw"></i>
                </div>
                </nav><!-- #min-menu-page -->
    </div>
    <div class="container-fluid no-padding">
        <div class="option">
            <div class="link_home">
            <a class="l_home link_home_first active" itemscope="" href="index.php">Trang chủ</a>  | <?php
            if (isset($_SESSION["iddn"])) {
                echo "<span>Xin chào : </span> <a href='index.php?module=thongtinkhachhang&id=".$_SESSION["iddn"]." '>".$_SESSION["name"]."</a> | <a href='logout.php'> Thoát</a>";
            } else {
                echo '<a href="index.php?module=new"> Đăng ký</a> | <a href="index.php?module=login"> Đăng nhập</a>';
            }

         ?>
            </div>
            <div class="support pull-right">
                <h3 style="margin-top: 5px;">Hỗ trợ trực tuyến:</h3>
                        
                                <a href="" title="" rel="nofollow">
                <img style="border:none;" alt="" src="images/yahoo_icon.jpg"></a>          
                        
                                <a href="" title="" rel="nofollow">
                <img style="border:none;" alt="" src="images/skype_icon.jpg"></a>            
                
            </div>
        </div>
    </div>

    <div class="container-fluid no-padding slide_top_full">
        <div id="slide_top">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <div id="slider" class="nivoSlider">
                           
                       <img title="" alt="" class="img_full" src="images/anhgioithieu/gioithieu2.jpg" style="width: 658px; visibility: hidden;">
                           
                       <img title="" alt="" class="img_full" src="images/anhgioithieu/gioithieu1.jpg" style="width: 658px; visibility: hidden;">
                   
               </div>
   <div class="hotline">Hotline:<span>0972952691</span></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>



    <div class="content container-fluid no-padding">

        <div class="sidebar_left col-lg-3 col-md-4 col-sm-6 col-xs-12">
          <div class="products-filter-portlet main_cate_left">
<form action="index.php?module=tuvanchonhoa" method="post">
<h3 class="header">Tư vấn chọn hoa</h3>
<div class="body">
<span class="filter-title">Chủ đề</span>
<div class="filter-criteria">
<select name="filter">
<option value="Tất cả"> Tất cả</option>
                        <?php
                        if(isset($_POST['gui'])){
                            echo $_POST['filter[category]'];
                        }
                        $sql_loaisp = "select * from loaisp";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        ?>
        
<option value="<?php echo $dong_sp['tenloaisp'] ?>" <?php if(isset($_POST['filter'])&&($_POST['filter']=== $dong_sp['tenloaisp'])){ ?> selected="selected" <?php } else if(isset($_GET['ketqua'])&&($dong_sp['tenloaisp']===$_GET['ketqua'])) { ?> selected="selected" <?php } ?>><?php echo $dong_sp['tenloaisp'] ?></option>

                        <?php 
                        }

                        ?>

</select>
</div>
<span class="filter-title">Mức giá</span>
<div class="filter-criteria">
<select name="filterprice" value="<?php if(isset($_SESSION['timkiem2'])){ echo $_SESSION['timkiem2'];} ?>">
        
<option value="Tất cả" selected="">Tất cả</option>
        
<option value="200000-500000" <?php if(isset($_POST['filterprice'])&&($_POST['filterprice']==='200000-500000')){ ?> selected="selected" <?php } else { if(isset($_GET['ketqua2'])&&($_GET['ketqua2']==='200000-500000')){ ?> selected="selected" <?php } } ?> >200.000 ~ 500.000</option>
        
<option value="500000-800000" <?php if(isset($_POST['filterprice'])&&($_POST['filterprice']==='500000-800000')){ ?> selected="selected" <?php } else { if(isset($_GET['ketqua2'])&&($_GET['ketqua2']==='500000-800000')){ ?> selected="selected" <?php } } ?> >500.000 ~ 800.000</option>
        
<option value="800000-1200000" <?php if(isset($_POST['filterprice'])&&($_POST['filterprice']==='800000-1200000')){ ?> selected="selected" <?php } else { if(isset($_GET['ketqua2'])&&($_GET['ketqua2']==='800000-1200000')){ ?> selected="selected" <?php } } ?> >800.000 ~ 1.200.000</option>
        
<option value="1200000-1500000" <?php if(isset($_POST['filterprice'])&&($_POST['filterprice']==='1200000-1500000')){ ?> selected="selected" <?php } else { if(isset($_GET['ketqua2'])&&($_GET['ketqua2']==='1200000-1500000')){ ?> selected="selected" <?php } } ?> >1.200.000 ~ 1.500.000</option>
        
<option value="1500000-100000000" <?php if(isset($_POST['filterprice'])&&($_POST['filterprice']==='1500000-100000000')){ ?> selected="selected" <?php }else { if(isset($_GET['ketqua2'])&&($_GET['ketqua2']==='1500000-100000000')){ ?> selected="selected" <?php } } ?> >1.500.000 trở lên</option>

</select>
</div>
<span class="description">* Bạn có thể gọi nhanh cho chúng tôi theo số 0972952691 để đặt hoa theo thiết kế riêng</span>
<div class="button-bar text-center">
<input type="submit" name="gui" class="btn btn-primary" value="Gửi">
</div>
</div>
</form>
</div>
            <div class="cate_left cate_left_top">
                <div class="main_cate_left category-portlet">
                    <ul class="cate_top" id="menu">
                        <?php
                        $sql_loaisp = "select * from loaisp";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) {
                        ?>
                                
                            <li ><a href="index.php?module=motloaisanpham&id=<?php echo $dong_sp['id_loaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></a></li>
                        <?php 
                        }
                        ?>
                        
                    </ul>
                </div>
            </div><!--cate_left-->

            <div class="cate_left cate_left_2">
                <div class="main_cate_left">
                    <h3>Liên kết banner</h3>
                        <?php
                        $sql_kmai = "select * from news";
                        $query1 = mysqli_query($conn,$sql_kmai); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query1)) {
                        ?> 
                        <a title="" href="" target="_blank">
                            <img title="" class="img_full" alt="" src="images/<?php echo $dong_sp['khuyenmai'] ?>">
                        </a>
                        <?php 
                        }
                        ?>
                            
                    
                </div>
            </div><!--cate_left-->
        </div><!--sidebar-->
        <script type="text/javascript">
    $(document).ready( function() {
$('#slider').nivoSlider({
controlNav: false,
prevText: '',
nextText: '',
});
$('.nivo-controlNav').find('.nivo-control:last').addClass('abc');

        $('.cate_top').find('li:first').addClass('cate_top_first');
        $('.cate_top').find('li:last').addClass('cate_top_last');
        $('.link_home').find('a:first').addClass('link_home_first');

        $('.link_home').find('a:last').addClass('active');
        $('.primary').find('.hr:last').remove();
        $('.menu_top').find('span:last').remove();

        $('#top').click(function() {
            $('html, body').animate({scrollTop:0},500);
        });
    });

    $(document).ready(function(){
        $('.video_home .slide_it a').click(function(){
            var option = {width: 818,height:444};
            var id = $(this).attr('ref');
            vsf.popupLightGet('videos/detail_video/'+id, 'chau1233', option);
        });
    });


var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b266dab7f2fd9413d4e67c6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
        
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
</body>
</html>