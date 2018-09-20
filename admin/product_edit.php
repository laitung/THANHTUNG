
    <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       SỬA SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Sửa sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa thông tin sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                    <?php
    ob_start(); 
    require_once("connect.php");
    $masp = $_GET['masp'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
    $tensp = mysqli_query($conn,"SELECT masp, ten_sp, gia,sale, hinhanh, loaisanpham, motasp, soluong FROM chitietsp WHERE masp=$masp");
    if(mysqli_num_rows($tensp)>0){
      $arrtensp = mysqli_fetch_array($tensp);
    }
    if(isset($_POST['submit'])){
    // header('location:index.php?module=list_product');
    $tensanpham = $_POST['tensanpham'];
    $tendanhmuc = $_POST['tendanhmuc'];
    $gia = $_POST['gia'];
    $sale = $_POST['sale'];
    if(($_POST['hinhanh'])==''){
      $hinhanh = $_POST['anhcodinh'];
    }
    else {
      $hinhanh = $_POST['hinhanh'];
    }
    $motasp = $_POST['motasp'];
    $soluong = $_POST['soluong'];
                      $sql = "SELECT ten_sp FROM chitietsp WHERE ten_sp='".$tensanpham."' ";
                      $result = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($result);
      if(($tensanpham==$arrtensp['ten_sp'])){
        if(($tensanpham!=='')&&($gia!=='')&&($hinhanh!=='')&&($motasp!=='')&&($soluong!=='')){
            $update = mysqli_query($conn,"UPDATE chitietsp SET ten_sp='$tensanpham', loaisanpham='$tendanhmuc', gia='$gia', sale='$sale', hinhanh='$hinhanh', motasp='$motasp', soluong='$soluong' WHERE masp=$masp") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
                    }
        else {  if(($count==0)){  
                        if(($tensanpham!=='')&&($gia!=='')&&($hinhanh!=='')&&($mota!=='')&&($soluong!=='')){
                      $update = mysqli_query($conn,"UPDATE chitietsp SET ten_sp='$tensanpham', loaisanpham='$tendanhmuc', gia='$gia', sale='$sale', hinhanh='$hinhanh', motasp='$motasp', soluong='$soluong' WHERE masp=$masp") or die (mysql_error());}
                        else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                        }
                      }
                      else {
                        if(($tensanpham=='')&&($gia=='')&&($hinhanh=='')&&($mota=='')&&($soluong=='')){
                        echo "Bạn chưa nhập đủ thông tin!";
                            }
                            else {
                              echo "Tên sản phẩm bị trùng!";
                            }
                      }

        }




    if (isset($update)){
      $_SESSION['capnhatsanpham'] = $update;
       header('location:index.php?module=list_product&trang='.$_GET['trang'].'');
    }
    else {
      echo "<br>";
      echo "Cập nhật thất bại!";
    }
    
    }
    ob_end_flush();
    ?>
             <form role="form" name="themsanpham" action="" method="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="product_name">Tên sản phẩm</label>
                  <input class="form-control" value="<?php echo $arrtensp['ten_sp'] ?>" name="tensanpham" id="product_name" placeholder="Tên sản phẩm " type="text">
                </div>
                <div class="form-group">
                <label>Danh mục</label>
                <select name="tendanhmuc" class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
                        <?php
                        $sql_loaisp = "select * from loaisp";
                        $query = mysqli_query($conn,$sql_loaisp); 
                        ?>
                        <option ><?php echo $arrtensp['loaisanpham'] ?></option>
                        <?php
                        while($dong_sp = mysqli_fetch_array($query)) { 
                        ?>

                  <option ><?php echo $dong_sp['tenloaisp'] ?></option>
                        <?php 
                        }
                        ?>
                </select>
                
              </div>
              <div class="form-group">
                <label>Giá:</label>
                <input class="form-control" value="<?php echo $arrtensp['gia'] ?>" name="gia" id="product_name" placeholder="Giá sản phẩm: VNĐ" type="number">
              </div>
              <div class="form-group">
                <label>Sale:</label>
                <input class="form-control" value="<?php echo $arrtensp['sale'] ?>" name="sale" id="product_name" placeholder="Giá sale: VNĐ" type="number">
              </div>
              <div>
                  <label >Hình ảnh</label>
                  <input name="anhcodinh" value="<?php echo $arrtensp['hinhanh'] ?>">
                  <input type="file" name="hinhanh">

                  <p class="help-block">Kích thước ảnh là 500x500px sẽ hiển thị đẹp nhất</p>
                </div>
                <div class="form-group">
                  <label for="content">Mô tả</label>
                  
                <textarea name="motasp"><?php echo $arrtensp['motasp'] ?>
                </textarea>
                </div>
              <div class="form-group">
                <label>Số lượng:</label>
                <input class="form-control" value="<?php echo $arrtensp['soluong'] ?>" name="soluong" id="product_name" placeholder="Số lượng" type="number">
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