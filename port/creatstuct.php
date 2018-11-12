<?php
function article_all($link)
{
	$query = "SELECT * FROM articles ORDER BY id DESC";
	$result = mysqli_query($link, $query);

	if(!$result)
		die(mysqli_error($link));
	
	//извлеч из бд	
	$ff = mysqli_num_rows($result);
	$art = array();

	for ($i = 0; $i < $ff; $i++)
	{
		$row = mysqli_fetch_assoc($result);
		$art[] = $row;
	}

	return $art;
}
function article_get($link,$id_galery)
{
	$query = sprintf("SELECT * FROM articles WHERE id_galery = %d",(int)$id_galery);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	$art = mysqli_fetch_assoc($result);
	return $art;
}
function images($link,$id_galery)
{
	$query = sprintf("SELECT id, image, id_galery, num FROM image_ga WHERE id_galery = %d",(int)$id_galery);
	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$numstr = mysqli_num_rows($result);
	$img = array();

	for ($i = 0; $i < $numstr; $i++)
	{
		$kk = mysqli_fetch_assoc($result);
		$img[] = $kk;
	} 

	return $img;
}
function img_for_edit($link,$id)
{
	$query = sprintf("SELECT image, id_galery, num FROM image_ga WHERE id = %d",(int)$id);
	$result = mysqli_query($link,$query);
	if(!$result)
		die(mysqli_error($link));
	$img = mysqli_fetch_assoc($result);
	return $img;
}

function get_all_img ($link) {
	$query = sprintf("SELECT id FROM image_ga");
	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$numstr = mysqli_num_rows($result);
	$img = array();

	for ($i = 0; $i < $numstr; $i++)
	{
		$kk = mysqli_fetch_assoc($result);
		$img[] = $kk;
	} 

	return $img;
}
function get_tegs($link, $id_img) {
	$query = sprintf("SELECT * FROM tegs WHERE id_img = %d",(int)$id_img);
	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$numstr = mysqli_num_rows($result);
	$tegs = array();

	for ($i = 0; $i < $numstr; $i++)
	{
		$kk = mysqli_fetch_assoc($result);
		$tegs[] = $kk;
	} 

	return $tegs;
}
function get_teg_for_edit($link, $id) {
	$query = sprintf("SELECT * FROM tegs WHERE id = %d",(int)$id);
	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	$teg = mysqli_fetch_assoc($result);
	return $teg;
}
function new_galery($link,$title,$type,$main_ph,$id_galery) {
	
	$title = trim($title);
	$type = trim($type);

	if ($title == "") 
		return false;

	$request = "INSERT INTO articles (title,type,main_ph,id_galery) VALUES ('%s', '%s', '%s', '%d')";
	$query = sprintf($request,
		mysqli_real_escape_string($link,$title),
		mysqli_real_escape_string($link,$type),
		mysqli_real_escape_string($link,$main_ph),
		mysqli_real_escape_string($link,$id_galery));

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));
	return true;
}
function new_img($link,$image,$id_galery,$num) {
	
	if ($image == "") 
		return false;

	$request = "INSERT INTO image_ga (image,id_galery,num) VALUES ('%s', '%s' ,'%d')";
	$query = sprintf($request,
		mysqli_real_escape_string($link,$image),
		mysqli_real_escape_string($link,$id_galery),
		$num);

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));
	return true;
}
function new_teg($link,$comment,$id_galery,$id_img) {
	
	if ($comment == "") 
		return false;

	$request = "INSERT INTO tegs (comment,id_galery,id_img) VALUES ('%s', '%d', '%d')";
	$query = sprintf($request,
		mysqli_real_escape_string($link,$comment),
		mysqli_real_escape_string($link,$id_galery),
		mysqli_real_escape_string($link,$id_img));

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));
	return true;
}
function edit_galery($link,$title,$type,$main_ph,$id_galery,$id) {
	
	$title = trim($title);
	$type = trim($type);
	$main_ph = trim($main_ph);
	$id = (int)$id;
	$id_galery = (int)$id_galery;

	if ($title == '') 
		return false;

	$request = "UPDATE articles SET title='%s', type='%s' , main_ph='%s', id_galery='%d' WHERE id='%d'";
	$query = sprintf($request,
		mysqli_real_escape_string($link,$title),
		mysqli_real_escape_string($link,$type),
		mysqli_real_escape_string($link,$main_ph),
		$id_galery, 
		$id);

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}
function edit_pic($link,$num,$id_galery,$image,$id) {
	
	$image = trim($image);
	$num = trim($num);
	$id_galery = trim($id_galery);
	$id = (int)$id;
	$id_galery = (int)$id_galery;

	if ($image == ' ') 
		return false;

	$request = "UPDATE image_ga SET num='%d', id_galery='%d' , image='%s' WHERE id='%d'";
	$query = sprintf($request,
		$num,
		$id_galery,
		mysqli_real_escape_string($link,$image),
		$id);

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}
function edit_teg($link,$id_galery,$id_img,$comment,$id) {
	
	$comment = trim($comment);
	$id_galery = trim($id_galery);
	$id = (int)$id;
	$id_galery = (int)$id_galery;
	$id_img = trim($id_img);
	$id_img = (int)$id_img;

	if ($comment == ' ') 
		return false;

	$request = "UPDATE tegs SET id_galery='%d', id_img='%d' , comment='%s' WHERE id='%d'";
	$query = sprintf($request,
		$id_galery,
		$id_img,
		mysqli_real_escape_string($link,$comment),
		$id);

	$result = mysqli_query($link,$query);

	if(!$result)
		die(mysqli_error($link));

	return mysqli_affected_rows($link);
}
function articles_delete($link,$id)
{	
	$id = (int)$id;
	
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM articles WHERE id = '%d'", $id);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
}
function art_img_del($link,$id)
{
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM image_ga WHERE id_galery = '%d'", $id);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
}
function art_teg_del($link,$id)
{
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM tegs WHERE id_galery = '%d'", $id);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
}

function pic_del($link,$id)
{
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM image_ga WHERE id = '%d'", $id);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
}
function teg_del($link,$id)
{
	$id = (int)$id;
	if ($id == 0)
		return false;
	$query = sprintf("DELETE FROM tegs WHERE id = '%d'", $id);
	$result = mysqli_query($link, $query);
	if(!$result)
		die(mysqli_error($link));
	return mysqli_affected_rows($link);
}
?>