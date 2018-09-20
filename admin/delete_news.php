<?php
	ob_start();  
  require_once("connect.php");
  $id = $_GET['id'];
  $delete = mysqli_query($conn,"DELETE FROM news WHERE id='$id'");
  if(isset($delete)){
  	$_SESSION['xoakhuyenmai'] = $delete;
  }
  else {
  	echo "Không thể xóa danh mục này";
  }
  header('location:index.php?module=list_news');
  ob_end_flush();
?>