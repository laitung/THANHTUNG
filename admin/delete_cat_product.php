<?php
	ob_start();  
  require_once("connect.php");
  $id_loaisp = $_GET['id_loaisp'];
  $delete = mysqli_query($conn,"DELETE FROM loaisp WHERE id_loaisp='$id_loaisp'");
  if(isset($delete)){
  	$_SESSION['xoadanhmuc'] = $delete;
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=listcatproduct');
  ob_end_flush();
?>