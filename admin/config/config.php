<?php 

	$mysql = new mysqli("localhost","root","","website_caffe");

	// Check connection
	if ($mysql->connect_error) {
	  echo "Không thể kết nối Mysql" . $mysqli->connect_error;
	  exit();
	}

?>