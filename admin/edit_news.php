      <?php
    ob_start(); 
    require_once("connect.php");
    $id = $_GET['id'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
    $tensp = mysqli_query($conn,"SELECT * FROM news WHERE id=$id");
    if(mysqli_num_rows($tensp)>0){
      $arrtensp = mysqli_fetch_array($tensp);
    }
    if(isset($_POST['submit'])){
    // header('location:index.php?module=list_product');
    if(($_POST['hinhanh'])==''){
      $hinhanh = $_POST['anhcodinh'];
    }
    else {
      $hinhanh = $_POST['hinhanh'];
    }
    $vitri = $_POST['vitri'];
    $trangthai = $_POST['trangthai'];
    if(($vitri!=='')&&($hinhanh!=='')&&($trangthai!=='')){
    $update = mysqli_query($conn,"UPDATE news SET khuyenmai='$hinhanh', thutu='$vitri', trangthai='$trangthai' WHERE id=$id") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền đầy đủ thông tin";
                      }
    if (isset($update)){
      $_SESSION['capnhatkhuyenmai'] = $update;
       header('location:index.php?module=list_news');
    }
    else {
      echo "<br>";
      echo "Cập nhật thất bại!";
    }
    
    }
    ob_end_flush();
    ?>
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
             <form role="form" name="themsanpham" action="" method="post">
              <div class="box-body">
              <div>
                  <label >Ảnh khuyến mãi</label>
                  <input name="anhcodinh" value="<?php echo $arrtensp['khuyenmai'] ?>">
                  <input type="file" name="hinhanh">

                  <p class="help-block">Kích thước ảnh là 500x500px sẽ hiển thị đẹp nhất</p>
                </div>
               <div class="form-group">
                <label for="order">Vị trí</label>
                  <input class="form-control" name="vitri" value="<?php echo $arrtensp['thutu'] ?>"  placeholder="Vị trí" type="number">
              </div>
                
                  <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control select2 select2-hidden-accessible" name="trangthai" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option value="<?php if(($arrtensp['trangthai'])=='Hiển thị'){
                    echo "Hiển thị";
                  } else {
                    echo "Không hiển thị";
                  }
                   ?>"><?php if(($arrtensp['trangthai'])=='Hiển thị'){
                    echo $arrtensp['trangthai'];
                  } else {
                    echo "Không hiển thị";
                  }
                   ?></option>
                  <option value="<?php if(($arrtensp['trangthai'])=='Hiển thị'){
                    echo "Không hiển thị";
                  } else {
                    echo "Hiển thị";
                  }
                   ?>"><?php if(($arrtensp['trangthai'])=='Hiển thị'){
                    echo "Không hiển thị";
                  } else {
                    echo "Hiển thị";
                  }
                   ?></option>
                  
                  
                </select>
                
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