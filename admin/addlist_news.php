     <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THÊM DANH MỤC KHUYẾN MÃI
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thêm danh mục khuyến mãi</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục khuyến mãi</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
                    ob_start();
                    require_once("connect.php");
                    define('PATH_UPLOAD','../images/') ;
                    if(isset($_POST['submit'])){
                      
                      $hinhanh = $_FILES['hinhanh']['name'];
                      $vitri = $_POST['vitri'];
                      $trangthai = $_POST['trangthai'];
                      $sql = "SELECT * FROM news";
                      if(($hinhanh!=='')&&($vitri!=='')&&($trangthai!=='')){
                                                if(isset($_FILES['hinhanh'])){
    //tien hanh upload file len server
          $nameFile = $_FILES['hinhanh']['name'];
          $tmpName = $_FILES['hinhanh']['tmp_name'];

          if(move_uploaded_file($tmpName, PATH_UPLOAD .$nameFile)){
          header("location:../admin/index.php?module=list_news");
          }
          else {
          echo "Bạn chưa chọn ảnh khuyến mãi.";
          }
    }

                      $insert = mysqli_query($conn,"INSERT INTO news (khuyenmai, thutu, trangthai) values ('$hinhanh', '$vitri', '$trangthai')") or die (mysql_error());}
                      else {
                        echo "Bạn chưa điền tên danh mục or vị trí";
                      }
                      if(isset($insert)){
                      $_SESSION['themkhuyenmai'] = $insert;
                      header('location:index.php?module=list_news');

                    }
                    else {
                      echo "<br>";
                      echo "Thêm thất bại";
                  }
                    }
                    ob_end_flush();

                    ?>
              <form action="" method="post"  enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile">Ảnh khuyến mãi</label>
                  <input id="exampleInputFile" name="hinhanh" type="file">

                  <p class="help-block">Kích thước ảnh là 500x500px sẽ hiển thị đẹp nhất</p>
                </div>
                <div class="form-group">
                  <label for="order">Vị trí</label>
                  <input class="form-control" name="vitri" id="order" placeholder="Vị trí" type="number">
                </div>
                <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control select2 select2-hidden-accessible" name="trangthai" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option selected="selected" value="Hiển thị">Hiển thị</option>
                  <option value="Không hiển thị">Không hiển thị</option>
                  
                </select>
                
              </div>
                
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">Lưu</button>
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