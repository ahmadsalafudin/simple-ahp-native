<?php
$mysqli = new mysqli('localhost','root','','ahp-web');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}

?>