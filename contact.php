<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<title>Coloss</title>
</head>
<body>
	
	
	<div class="main">
		
		<div class="content">
			
			<div class="info">
				<p class = "welcome"> Вы можете связаться со мной просто заполнив форму ниже </p>
			</div>
			
			<div class="contact">
				<form>	
					
					<div class = "form">
						
						<input type="text" id="name" placeholder="Ваше имя" required onclick="$(this).css ('border-color','black')">
						<input type="email" id="email" placeholder="Ваш email" required onclick="$(this).css ('border-color','black')"> 
					</div>
				

					<div class ="enter">
						<textarea id = "message" placeholder="Введите текст сообщения..." required onclick="$(this).css ('border-color','black')"></textarea>
					</div>
					<button class = "btn" id = "send"> Отправить </button>
				</form>	
			</div>

		</div>

	</div>

<script>
$('#send').click (function () {
	var email = $('#email').val ();
	var name = $('#name').val ();
	var message = $('#message').val ();
	$.ajax({
		url:    	'ajax/conti.php',
		type:		'POST',
		cache: 		false,
		data:   	{'name':name, 'email':email, 'message':message},
		dataType:	'html',
		beforeSend: function () {
			$('#send').attr ("disabled", "disabled");
		},
		success: function(data) {
			if (data == true) {
				$('#name').val ("");
				$('#email').val ("");
				$('#message').val ("");
				$('#send').text ("Сообщение отправлено");
				$('#email').css ("border-color", "#60fc8c");
				$('#name').css ("border-color", "#60fc8c");
				$('#message').css ("border-color", "#60fc8c");
			} else {
				if (data == false)				
					alert ("Что-то пошло не так! Сообщение не отправлено");
				else {					
					switch (data) {
					case "Имя не указано":
					$('#name').css ("border-color", "#ff0000");
					break;
					case "Сообщение не указано":
					$('#message').css ("border-color", "#ff0000");
					break;
					case "Неправильный e-mail":
					$('#email').css ("border-color", "#ff0000");
					break;
					default:
					$('#email').css ("border-color", "#ff0000");
					$('#message').css ("border-color", "#ff0000");
					$('#name').css ("border-color", "#ff0000");
					}
				}
			}
			$('#send').removeAttr ("disabled");				
		}
	});
});
</script>
</body>
</html>