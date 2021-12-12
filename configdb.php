<?php
	@session_start();
	$_SESSION['judul'] = 'SPK WP Pemilihan Siswa Berprestasi';
	$mysqli = new mysqli('localhost','root','','spk-wp');
	if($mysqli->connect_errno){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
?>
