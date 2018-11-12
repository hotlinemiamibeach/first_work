<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/port.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/prof.js" type ="text/javascript"></script>
	<title>Портфолио</title>
</head>
<body>
	<div class="headr" id = "headr">
		<p class = "h1"> Name </p>

		<div id = "mini_nav">

			<ul>
				<li><a href="../index.php">Главная</a></li>
				<li><a href="">Связь</a></li>
				<li><a href="">Обо мне</a></li>
			</ul>

		</div>

	</div>
	<?php
		
		require_once('../datb/bdbd.php');
		include('creatstuct.php');

		$link = db_connect();
		$art = article_all($link);
		
	?>
	
	<div class="main_content">
		
		
		<div class="sparja">
		<?php foreach ($art as $elem):?>
		<div class="a1"  id= "tst">
		
			<a href ="../single_galery/gal.php?id=<?=$elem['id_galery']?>"><div class="pich" >
				
				<img src="<?=$elem['main_ph']?>" class = "kk">

			</div></a>
			
			<div class="trtr">
				<a href ="../single_galery/gal.php?id=<?=$elem['id']?>""><p class ="golova"><?=$elem['title']?></p></a>
				
				<div class="navnav">
					<ul>
						<li><a href ="#">Пленка</a></li>
						<li><a href ="#">Любовь</a></li>
						<li><a href ="#">Дерево</a></li>
					</ul>
				</div>
			</div>
		</div>

		<?php endforeach ?>
		
		
	
	</div>

</div>


	

</body>
</html>