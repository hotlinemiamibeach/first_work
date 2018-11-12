<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ziga-zaga</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src="../js/alena.js" type ="text/javascript"></script>
	<link rel="stylesheet" type="text/css" href="../css/alena.css">
</head>
<body>
	
	<div class="main">
		<div class = "label">
			<p class = "text_label"> Панель администратора </p>
		</div>
		<div class = "content">
			
			<div class="add_new">
				<p><a href ="alena.php?action=add"> Добавить новую галерею </a> </p> 
			</div>
			
			<div class = "table"> 
				<?php foreach($articles as $state): ?>
				<div class="galery">
				
					<div class = "photo"> 
						<img src="<?=$state['main_ph']?>" class = "ph">
					</div>	
					
					<div class="info_main">
						<p>Название: <?=$state['title']?> </p>
						<p>Описание: <?=$state['type']?></p>
						<p>Номер галереи: <?=$state['id']?></p>
						<p>Путь к фото: <?=$state['main_ph']?></p>	
					</div>
					
					<div class="edit">
						<p><a href = "alena.php?action=edit&id=<?=$state['id']?>&type=gal">Редактировать </a></p>
						<p><a href = "alena.php?action=delete&id=<?=$state['id']?>&type=gal">Удалить</a></p>
					</div>

					

				</div>
				<?php
						$img = images($link,$state['id_galery']); 
				?>
				<?php foreach($img as $elem): ?>
				<div class="pictures" id = "1">
					<div class = "pi">
						<div class="img_pic">
							<img src="<?=$elem['image']?>" class = "pic_ph">
						</div>
						
						<div class="info_main">
							<p>Номер фото: <?=$elem['num']?> </p>
							<p>Номер галереи: <?=$elem['id_galery']?></p>
							<p>Id фото: <?=$elem['id']?></p>
							<p>Путь к фото: <?=$elem['image']?></p>	
						</div>

						<div class="edit">
							<p><a href = "alena.php?action=edit&id=<?=$elem['id']?>&id_galery=<?=$elem['id_galery']?>&type=pic">Редактировать </a></p>
							<p><a href = "alena.php?action=delete&id=<?=$elem['id']?>&id_galery=<?=$elem['id_galery']?>&type=pic">Удалить</a></p>
						</div>
					
					</div>
					<div class = "comments"> 
						<?php
							$tegs = get_tegs($link,$elem['id']); 
						?>	
						
						<p class = "com_text_main"> Комментарии:  </p>
						
						<?php foreach($tegs as $teg): ?>
							
							<ul class = "com_output" >
								<li> <?=$teg['comment']?> </li>
								<li class = "margin"> <a href = "alena.php?action=edit&id=<?=$teg['id']?>&id_galery=<?=$teg['id_galery']?>&id_img=<?=$teg['id_img']?>&type=teg">Редактировать </a> </li>
								<li class = "margin"> <a href = "alena.php?action=delete&id=<?=$teg['id']?>&id_galery=<?=$teg['id_galery']?>&id_img=<?=$teg['id_img']?>&type=teg">Удалить </a> </li>

							</ul>
						
						<?php endforeach?>
					</div>
				</div>
				<?php endforeach?>
				<?php endforeach?>
			</div>
				

			</div>
			
	






			
	</div>
</body>
</html>