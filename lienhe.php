<?php
if(isset($_POST['insert'])){
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $tieude = $_POST['tieude'];
    $noidung = $_POST['noidung'];
if($fullname && $phone && $address && $email && $tieude && $noidung) {

                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date('d/m/Y - H:i:s');
                        $sql = "INSERT INTO lienhe(name,phone,address,email, tieude, noidung, date_send)
                        VALUES ('".$fullname."', '".$phone."', '".$address."','".$email."','".$tieude."','".$noidung."','".$date."' )";
                        mysqli_query($conn,$sql) or die(mysql_error());
                    }
}
?>
                <div class=" col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="main_info" style="width: 600px;">
                        <h3 class="lienhe_tt">THÔNG TIN LIÊN HỆ</h3>
                        <p></p><p></p><p><strong>Trụ sở: 410 Hoàng Quốc Việt</strong></p>
<p><strong>Chi nhánh: 410 Hoàng Quốc Việt</strong></p>
<p><strong>Điện thoại:  -&nbsp;<strong>0972952691</strong></strong></p>
<p><strong>Mail: LovelyFlower@gmail.com</strong></p>
<p><strong><a href="mailto:info@hoatuoi360.vn" title="info@hoatuoi360.vn">Website: lovelyflower | lovelyflower | lovelyflower | lovelyflower</a> |&nbsp;<a href="https://maccabanme.com/" title="Mac ca Ban Me">LovelyFlower</a></strong></p><p></p>
                        <h3 class="lienhe_tt">Form liên hệ </h3>
                        <div id="contact">
                                    <form name="formContact" class="form_contact" id="formContact" method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" value="0" name="contactType">
            
                <input required="" placeholder="Họ và tên" class="form-control" type="text" id="contactName" value="" name="fullname" title="Họ và tên">
            
            
                <input required="" placeholder="Điện thoại" class="form-control" type="text" value="" id="contactPhone" name="phone" title="Điện thoại">
            
            
                <input required="" placeholder="Địa chỉ" class="form-control" id="contactAddress" value="" name="address" title="Địa chỉ">
            
            
                <input required="" placeholder="Email" class="form-control" type="text" id="contactEmail" value="" name="email" title="Email">
            
            
                <input required="" placeholder="Tiêu đề" class="form-control" type="text" id="contactTitle" value="" name="tieude" title="Tiêu đề">
            
            
                <textarea required="" placeholder="Nội dung" class="form-control" id="contactMessage" name="noidung"></textarea>
         

            <div class="clear_left"></div>
            <p style="color:red;"></p>
            <div class="clear_left"></div>
            <input type="reset" class="input_reset btn btn-success" value="Làm lại" style="width:45%">
            <input type="submit" value="Gửi" name="insert" class="input_submit btn btn-success" style="width:45%">
            <div class="clear_left"></div>
    </form>
                             <div class="clear"></div> 
                        </div>
                    </div>
                    
                </div>