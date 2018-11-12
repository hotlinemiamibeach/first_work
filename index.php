<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="libs/animate/animate.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
	</script>
	<script src="js/main.js" type ="text/javascript"></script>
	<script src="libs/jquery_waipoint/jquery.waypoints.js"></script>
	
	<title>Derevo</title>
</head>
<body>
	<header id = "davai">
		<div class="headerphone">
			<div class="menutrigger">
				<div class="key">
					<a  class ="keytrigger">
						<i class="fa fa-bars" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="navphone">
				<ul class = "valia">
					<li><a href="../port/portfolio.php"> Портфолио </a></li>
					<li><a href="2"> Обо мне </a></li>
					<li><a href=""> Связь </a></li>
					<li><a href="4"> Блог </a></li>
				</ul>
			</div>
		</div>
		<div class="first-main">
			
				<div class="first-name">
					<p class="name">Name</p>
				</div>
			
			
				<div class="first-head">
					<p class= "headinfo">Первый проект лучшего <br> Фотографа из спб</p>
				</div>
			
			
				<div class="nav">
					<ul class="first-nav">
						<li><a href="../port/portfolio.php">Портфолио</a></li>
						<li ><a href="#">Обо мне</a></li>
						<li ><a href="contact.php">Связь</a></li>
						<li ><a href="#">Блог</a></li>
					</ul>
				</div>
		</div>
	</header>

    <div class="second_page">
    	<div class="test">
	    	
	    	<p class="infoheadsecond"> Почему нужно выбрать именно тебя </p>

			<div class="words">
				
				<div class="leftwords box animated boxhidden">
					<div class="border"></div>
					<i class="fa fa-calendar" aria-hidden="true"></i>
					<p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus culpa maxime, odit tenetur. Eveniet enim, quasi amet voluptates aperiam, labore, natus expedita accusantium ut obcaecati quod maxime? Officiis iure, harum.</p>
					<div class="border"></div>
				</div>
				
				<div class="centerwords box animated boxhidden delay-35s">
					<div class="border"></div>
					<i class="fa fa-tree" aria-hidden="true"></i>
					<p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit deserunt incidunt repellat neque pariatur fuga quisquam possimus nisi impedit odit at ex repudiandae dolorum assumenda, optio, vel nulla aut, praesentium.</p>
					<div class="border"></div>
				</div>
				
				<div class="rightwords box animated boxhidden delay-07s">
					<div class="border"></div>
					<i class="fa fa-pie-chart" aria-hidden="true"></i>
					<p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit placeat quae sit inventore aliquam commodi quos, vero qui necessitatibus corporis excepturi unde fuga distinctio quod nesciunt iusto praesentium possimus sequi.</p>
					<div class="border"></div>
				</div>

			</div>

	    	<div id = "head">
				<div class="work">
					<p class="mywork"><a href="../port/portfolio.php">Мои работы</a></p>
				</div>
			
				<div>
					<ul class = "second-nav">
						<li ><a href="#">Обо мне</a></li>
						<li ><a href="#">Связь</a></li>
						<li ><a href="#">Блог</a></li>
					</ul>
				</div>
			</div> <!-- second header -->
			
			
    	
			
		</div>
    </div>

	<div class="third-page">
				
		<div class="about">
			
			<div class="photo">		
			</div>

			<div class="info">
				<p class="discript_3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad laboriosam fuga dolor necessitatibus assumenda esse, et aliquid hic, repellendus omnis aperiam unde perspiciatis itaque eius vitae quae, illum neque obcaecati!</p>
 			</div>

		</div>

	</div>


	<footer>
		
		<div class="pick">
			<p class="namepl">No_name</p> 	
			<p class="photograph">Photograph</p>
		</div>
		
		<div class="line">
			
		</div>

		<div class="footnav">
			<ul>
				<li> <i class="fa fa-phone" aria-hidden="true"></i> 8-800-555-3535</li>
				<li><a href="https://vk.com/id380114944"><i class="fa fa-vk" aria-hidden="true"></i></a> </li>
				<li><a href="https://www.instagram.com/sazonyshka/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			</ul>
		</div>

		<div class="howtofind">
			
		</div>
		<div class="lineo">
		</div>
		<div class = "footnav1">
			<ul>
				<li><a href = "../port/portfolio.php">Потрфолио</a></li>
				<li><a href = "">Обо мне</a></li>
				<li><a href = "">Связь</a></li>
				<li><a href = "">Блог</a></li>
			</ul>
		</div>
	</footer>

	<script>
		$('.box').waypoint( function () {
			$('.box').addClass('fadeInUp');
		}, {
			offset:'75%'
		});
	</script>
</body>
</html>