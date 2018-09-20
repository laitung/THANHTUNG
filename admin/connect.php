<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "db_banhang";
	$conn = mysqli_connect($server,$user,$pass,$db) or die ("Khong the ket noi toi CSDL");
	mysqli_query($conn,'SET NAMES "utf8"');
			
?>