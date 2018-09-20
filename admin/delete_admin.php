<?php
	ob_start();  
  require_once("connect.php");
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM admin WHERE id='$id'");
  if(isset($delete)){
  	$_SESSION['xoaadmin'] = $delete;
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=listadmin');
  ob_end_flush();
?>