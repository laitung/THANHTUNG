    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THÊM SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thêm sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php
                    ob_start();
                    require_once("connect.php");
                    define('PATH_UPLOAD','../images/sanpham/') ;
                    if(isset($_POST['submit'])){          
                      
                      $tensanpham = $_POST['tensanpham'];
                      $tendanhmuc = $_POST['tendanhmuc'];
                      $gia = $_POST['gia'];
                      $sale = $_POST['sale'];
                      $hinhanh = $_FILES['hinhanh']['name'];
                      $mota = $_POST['motasp'];
                      $soluong = $_POST['soluong'];
                      $sql = "SELECT ten_sp FROM chitietsp WHERE ten_sp='".$tensanpham."' ";
                      $result = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($result);
                      date_default_timezone_set('Asia/Ho_Chi_Minh');
                      $date = date('d/m/Y - H:i:s');
                      if($count==0){  
                        if(($tensanpham!=='')&&($gia!=='')&&($hinhanh!=='')&&($mota!=='')&&($masp!=='')&&($soluong!=='')){
                         if(isset($_FILES['hinhanh'])){
                        $nameFile = $_FILES['hinhanh']['name'];
                        $tmpName = $_FILES['hinhanh']['tmp_name'];
                        if(move_uploaded_file($tmpName, PATH_UPLOAD .$nameFile)){
                        header("location:../admin/index.php?module=list_product");
                        }
                        else {
                        header("location:../admin/index.php?state=error");
                        }
                    } 

                      $insert = mysqli_query($conn,"INSERT INTO chitietsp (ten_sp, masp, gia,sale, hinhanh, loaisanpham, motasp,soluong,date_add) values ('$tensanpham','$masp', '$gia','$sale', '$hinhanh', '$tendanhmuc', '$mota','$soluong','$date') ") or die (mysql_error());}
                        else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                        }
                      }
                      else {
                        if(($tensanpham=='')&&($gia=='')&&($hinhanh=='')&&($mota=='')&&($masp=='')&&($soluong!=='')){
                        echo "Bạn chưa nhập đủ thông tin!";
                            }
                            else {
                              echo "Tên sản phẩm or mã sản phẩm bị trùng!";
                            }
                      }

                      if(isset($insert)){
                      $_COOKIE['sanpham'] + 1;
                      $_SESSION['themsanpham'] = $insert;
                      header('location:index.php?module=list_product');
                    }
                    else {
                    echo "<br>";
                    echo "Thêm thất bại";
                  }

                    }
                    
                    ob_end_flush();
                    ?>

             <form role="form" name="themsanpham" action="index.php?module=product_new" method="post" enctype="multipart/form-data">
              <div class="box-body">
              <div class="form-group">
                  <label for="product_name">Tên sản phẩm</label>
                  <input class="form-control" name="tensanpham" id="product_name" placeholder="Tên sản phẩm " type="text">
                </div>
                <div class="form-group">
                <label>Danh mục</label>
                <select name="tendanhmuc" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <?php
                        $sql_loaisp = "select * from loaisp";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) { 
                        ?>
                  <option selected="selected" value="<?php echo $dong_sp['tenloaisp'] ?>"><?php echo $dong_sp['tenloaisp'] ?></option>
                        <?php 
                        }
                        ?>
                </select>
                
              </div>
              <div class="form-group">
                <label>Giá:</label>
                <input class="form-control" name="gia" id="product_name" placeholder="Giá sản phẩm: VNĐ" type="number">
              </div>
              <div class="form-group">
                <label>Sale:</label>
                <input class="form-control" name="sale" id="product_name" placeholder="Giá sale: VNĐ" type="number">
              </div>
              <div class="form-group">
                  <label for="exampleInputFile">Hình ảnh</label>
                  <input id="exampleInputFile" name="hinhanh" type="file">

                  <p class="help-block">Kích thước ảnh là 500x500px sẽ hiển thị đẹp nhất</p>
                </div>
                <div class="form-group">
                  <label for="content">Mô tả</label>
                  
                <textarea id="editor1" name="motasp" rows="10" cols="80">
                  
                    </textarea>
                </div>
                <div class="form-group">
                <label>Số lượng:</label>
                <input class="form-control" name="soluong" id="product_name" placeholder="Số lượng" type="number">
              </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="submit" type="submit" class="btn btn-primary">Lưu</button>
              </div>
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