<?php
	require_once '../config/config.php';
	
	if(ISSET($_POST['save'])){
		$tenmenu = $_POST['tenmenu'];
		$thutu = $_POST['thutu'];
		$parent = $_POST['parent_id'];
		
		
		mysqli_query($mysql, "INSERT INTO `tbl_menu` VALUES('', '$tenmenu','$thutu', '$parent')") or die(mysqli_error());
		
		header('location: index.php');
	}
?>