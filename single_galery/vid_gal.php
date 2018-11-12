<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/gal.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="../js/gal.js" type ="text/javascript"></script>
	<title>Сань, ну ты чё</title>
</head>
<body>
	
	<div class="headr">
		<p class = "h1"> Саня,ну ты че </p>

		<div class="mini_nav">

			<ul>
				<li><a href="../index.php">Главная</a></li>
				<li><a href="">Обо мне</a></li>
				<li><a href="">Связь</a></li>
			</ul>

		</div>
	</div>
	
	<div class="adik-2"></div>

	<div class="someinfo">
		<?php
			$article = article_get($link, $_GET['id']);
		?>
		
		<div class="headinfo"><?=$article['title']?></div>
		<p class="word"><?=$article['type']?></p>
		
	</div>
		
	<div class="content_je">
		<?php foreach ($imgsrc as $elem):?>
		<div class="block" id = "tst">

			

			<div class="photo">
				
				<img src="<?=$elem['image']?>" alt="" class = "l">
				
				<div class = "teg">
					<?php 

						$tegs = get_tegs($link,$elem['id']);

					?>
					
					Tegs: 
					<?php foreach ($tegs as $teg):?> 
					<a href ="#" class = "tword">
						
							<?=$teg['comment']?>
						
					</a> 
					<?php endforeach ?> 
					
				</div>

			</div>
			
			
			
			
		</div>
		<?php endforeach ?>
		


		
	</div>




	

</body>
</html>