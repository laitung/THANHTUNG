<?php
	ob_start();  
  require_once("connect.php");
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM nguyenlieu WHERE ma_NL='$id'");
  if(isset($delete)){
  	echo "Xóa thành công";
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=nhaphang');
  ob_end_flush();
?>