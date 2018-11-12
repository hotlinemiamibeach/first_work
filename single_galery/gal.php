<?php 
	require_once('../datb/bdbd.php');
	require_once('../port/creatstuct.php');

	$link = db_connect();
	$imgsrc = images($link, $_GET['id']);
	
	include('vid_gal.php');
?>