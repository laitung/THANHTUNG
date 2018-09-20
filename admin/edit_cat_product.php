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
    $id_loaisp = $_GET['id_loaisp'];
    //http://localhost/doantotnghiep/admin/index.php?module=edit_cat_product&id_loaisp=1
    $loaisp = mysqli_query($conn,"SELECT id_loaisp, tenloaisp, thutu, trangthai FROM loaisp WHERE id_loaisp=$id_loaisp");

    if(mysqli_num_rows($loaisp)>0){
      $arrloaisp = mysqli_fetch_array($loaisp);
      $_SESSION['danhmuctruoc_'.$id_loaisp.''] = $arrloaisp['tenloaisp'];


    
    }
    if(isset($_POST['submit'])){
    $tendanhmuc = $_POST['tendanhmuc'];
    $_SESSION['danhmucsau_'.$id_loaisp.''] = $tendanhmuc;
    $vitri = $_POST['vitri'];
    $trangthai = $_POST['trangthai'];
                      $sql = "SELECT tenloaisp FROM loaisp WHERE tenloaisp='".$tendanhmuc."'";
                      $result = mysqli_query($conn,$sql);
                      $count = mysqli_num_rows($result);
                      if($tendanhmuc==$arrloaisp['tenloaisp']){
                            if(($tendanhmuc!=='')&&($vitri!=='')&&($trangthai!=='')){
                              $update = mysqli_query($conn,"UPDATE loaisp SET tenloaisp='$tendanhmuc', thutu='$vitri', trangthai='$trangthai' WHERE id_loaisp=$id_loaisp") or die (mysql_error());}
                            else {
                                  echo "Bạn chưa nhập đủ thông tin!";
                            } 
                        }
                      else { 
                        if($count==0){
                          if(($tendanhmuc!=='')&&($vitri!=='')&&($trangthai!=='')){
                              $update = mysqli_query($conn,"UPDATE loaisp SET tenloaisp='$tendanhmuc', thutu='$vitri', trangthai='$trangthai' WHERE id_loaisp=$id_loaisp") or die (mysql_error());}
                            else {
                                  echo "Bạn chưa nhập đủ thông tin!";
                            } 
                        }
                        else {  
                            if($vitri==''){
                        echo "Bạn chưa nhập vị trí!";
                            }
                            else {
                              echo "Tên danh mục cập nhật bị trùng!";
                            }
                          }
                    }
      if (isset($update)){
      $_SESSION['capnhatdanhmuc'] = $update;
      header('location:index.php?module=listcatproduct');
      // header('location:index.php?module=list_cat_product');
    }
    else {
      echo "<br>";
      echo "Cập nhật thất bại!";
    }      
    
  }
     $sql3 = "SELECT * FROM chitietsp WHERE loaisanpham='".$_SESSION['danhmuctruoc_'.$id_loaisp.'']."'";
        $query3 = mysqli_query($conn,$sql3);
    while($dong_chitiet3 = mysqli_fetch_array($query3)){
      if(isset($_SESSION['danhmuctruoc_'.$id_loaisp.''])&&isset($_SESSION['danhmucsau_'.$id_loaisp.''])){
      $update3 = mysqli_query($conn,"UPDATE chitietsp SET loaisanpham = '".$_SESSION['danhmucsau_'.$id_loaisp.'']."'  WHERE loaisanpham='".$_SESSION['danhmuctruoc_'.$id_loaisp.'']."'") or die (mysql_error());}
      else {
        if(isset($tendanhmuc)){
        $update3 = mysqli_query($conn,"UPDATE chitietsp SET loaisanpham = '$tendanhmuc'  WHERE loaisanpham='$tendanhmuc' ") or die (mysql_error());}
      }
    }
    if(isset($update3)){
      unset($_SESSION['danhmuctruoc_'.$id_loaisp.'']);
      unset($_SESSION['danhmucsau_'.$id_loaisp.'']);
    }

    ob_end_flush();
    ?>
             <form role="form" name="themdanhmuc" action="" method="post">

              <div class="box-body">
                <div class="form-group">
                <label for="catname">Tên danh mục</label>
                  <input class="form-control" value="<?php echo $arrloaisp['tenloaisp'] ?>" name="tendanhmuc" placeholder="Tên danh mục " type="text">
                </div>
                <div class="form-group">
                  <label for="order">Vị trí</label>
                  <input class="form-control" name="vitri" value="<?php echo $arrloaisp['thutu'] ?>"  placeholder="Vị trí" type="number">
                </div>
                <div class="form-group">
                <label>Trạng thái</label>
                <select class="form-control select2 select2-hidden-accessible" name="trangthai" style="width: 100%;" tabindex="-1" aria-hidden="true">
                  <option value="<?php if(($arrloaisp['trangthai'])=='Hiển thị'){
                    echo "Hiển thị";
                  } else {
                    echo "Không hiển thị";
                  }
                   ?>"><?php if(($arrloaisp['trangthai'])=='Hiển thị'){
                    echo $arrloaisp['trangthai'];
                  } else {
                    echo "Không hiển thị";
                  }
                   ?></option>
                  <option value="<?php if(($arrloaisp['trangthai'])=='Hiển thị'){
                    echo "Không hiển thị";
                  } else {
                    echo "Hiển thị";
                  }
                   ?>"><?php if(($arrloaisp['trangthai'])=='Hiển thị'){
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
</div>