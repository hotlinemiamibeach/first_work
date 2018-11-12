<?php
	require_once("../datb/setting.php");
	require_once("../datb/bdbd.php");
	require_once("../port/creatstuct.php");

	$link = db_connect();
	$article = article_get($link,$id);
	if(isset($_GET['action']))
		$action = $_GET['action'];
	else 
		$action = "";

	if ($action == "add" ) {	
		
		if (!empty($_POST['title']) && !empty($_POST['type']) && !empty($_POST['main_ph']) && !empty($_POST['id_galery'])) 
		{
			new_galery($link,$_POST['title'],
							 $_POST['type'],
						     $_POST['main_ph'],
							 $_POST['id_galery']);	
			$i = 1;
			while (isset($_POST['image'.$i]))
			{	
				
				new_img($link,$_POST['image'.$i],
						      $_POST['id_galery'],
						      $i);
				
				$j = 1;
				while(isset($_POST[$i. 'teg' . $j]))
				{
					$flow = get_all_img($link);
					$last = array_pop($flow);
						
					new_teg($link,$_POST[$i.'teg'.$j],
								  $_POST['id_galery'],
								  $last['id']);
							
					$j++;	
				}
				$i++;
				}
			header("Location: alena.php");
		}	
		include ("add_main_article.php");

	}
	else if ($action == "edit")
	{
		if(!isset($_GET['id']))
			header("Location:alena.php");
		$id = (int)$_GET['id'];
		$vid = $_GET['type'];
		if ($vid == 'gal'){
			if (!empty($_POST) && $id > 0) {
				edit_galery($link,$_POST['title'],$_POST['type'],$_POST['main_ph'],$_POST['id_galery'],$id);
				header('Location:alena.php');
			}
			$art = article_get($link,$id);
			include("edit_gal.php");
		}
		else if ($vid == 'pic')
		{
			if (!empty($_POST) && $id > 0) {
				edit_pic($link,$_POST['num'],$_POST['id_galery'],$_POST['image'],$id);
				header('Location:alena.php');
			}
			$ph = img_for_edit($link,$id);
			include("edit_pic.php");
		}
		else if ($vid == 'teg')
		{
			if (!empty($_POST) && $id > 0) {
				edit_teg($link,$_POST['id_galery'],$_POST['id_img'],$_POST['comment'],$id);
				header('Location:alena.php');
			}
			$teg = get_teg_for_edit($link,$id);
			include("edit_teg.php");
		}
	}
	else if ($action =='delete')
	{
		$vid = $_GET['type'];
		if ($vid == 'gal'){
			$id = $_GET['id'];
			$a = articles_delete($link,$id);
			$b = art_img_del($link,$id);
			$c = art_teg_del($link,$id);
			header('Location:alena.php');
		}
		if ($vid == 'pic')
		{
			$id = $_GET['id'];
			$b = pic_del($link,$id);
			header('Location:alena.php');
		}
		if ($vid == 'teg')
		{
			$id = $_GET['id'];
			$b = teg_del($link,$id);
			header('Location:alena.php');
		}
	}
		
	
	else {
		$articles = article_all($link);
		include("views.php");
	}

?>