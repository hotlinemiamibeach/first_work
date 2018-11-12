<?php

include_once('setting.php');

function db_connect() {
	$link = mysqli_connect(HOST,USER,PASSWORD,DB)
		or die("Error: ".mysqli_error($link));
	if(!mysqli_set_charset($link, "utf8")){
		print("Error: ".mysqli_error($link));
	}

return $link;
	}


?>