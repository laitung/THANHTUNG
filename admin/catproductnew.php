     <div class="content-wrapper"> 
    <section class="content-header">
      <h1>
       THÊM DANH MỤC SẢN PHẨM
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li><a href="#">Thêm danh mục sản phẩm</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới danh mục sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php
                    ob_start();
                    require_once("connect.php");

                    if(isset($_POST['submit'])){
                      
                      $tendanhmuc = $_POST['tendanhmuc'];
                      $vitri = $_POST['vitri'];
                      $trangthai = $_POST['trangthai'];
                      $sql = "SELECT tenloaisp FROM loaisp WHERE tenloaisp='".$tendanhmuc."'";
                      $result = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($result);
                      // if($count==0){

                      if(($count==0)){
                        if(($tendanhmuc!=='')&&($vitri!=='')&&($trangthai!=='')){
                      $insert = mysqli_query($conn,"INSERT INTO loaisp (tenloaisp, thutu, trangthai) values ('$tendanhmuc', '$vitri', '$trangthai')") or die (mysql_error());}
                        else {
                            echo "Bạn chưa nhập đủ thông tin!";
                          }
                        }
                      else {  
                            if($vitri==''){
                        echo "Bạn chưa nhập vị trí!";
                            }
                            else {
                              echo "Tên danh mục bị trùng!";
                            }
                          }
                      if(isset($insert)){
                        $_COOKIE['danhmuc'] +1;
                        $_SESSION['themdanhmuc'] = $insert;
                      header('location:index.php?module=listcatproduct');
                    }
                    else {
                      echo "<br>";
                    echo "Thêm thất bại";
                  }
                    }
                      

                    ob_end_flush();

                    ?>
             <form role="form" name="themdanhmuc" action="" method="post">

              <div class="box-body">
                <div class="form-group">
                <label for="catname">Tên danh mục</label>
                  <input class="form-control" id="catname" name="tendanhmuc" placeholder="Tên danh mục " type="text">
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