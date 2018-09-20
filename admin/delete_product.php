<?php
	ob_start();  
  require_once("connect.php");
  $masp = $_GET['masp'];
  $delete = mysqli_query($conn,"DELETE FROM chitietsp WHERE masp='$masp'");
  if(isset($delete)){
  	$_SESSION['xoasanpham'] = $delete;
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=list_product&trang='.$_GET['trang'].'');
  ob_end_flush();
?>