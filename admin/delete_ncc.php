<?php
	ob_start();  
  require_once("connect.php");
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM ncc WHERE ma_NCC='$id'");
  if(isset($delete)){
  	echo "Xóa thành công";
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=listncc');
  ob_end_flush();
?>