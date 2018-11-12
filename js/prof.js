
	$(document).ready(function(){
		if ($(window).width() > 1025 && $(window).width() < 1377 ) 
		{
			var width = document.getElementById('tst');
			var widths = document.getElementsByClassName('a1');
			var photos = document.getElementsByClassName('kk');
			for (i = 0; i < photos.length; i++){
				photos[i].style.height = width.offsetWidth + "px";
				photos[i].style.width = width.offsetWidth + "px";
				if (i%2 == 0 && i != 0) {
					widths[i].style.marginRight = 0;
				}
				else {widths[i].style.marginRight = 8 + "%";}
				if (i > 2) {
					widths[i].style.paddingTop = 4 + "%";
				}
				
			}	
			var plusheight = document.getElementsByClassName('sparja');
			var needheight = document.getElementsByClassName('main_content');
			needheight[0].style.height = plusheight[0].offsetHeight +"px";
		}
		else if ($(window).width() > 1023 && $(window).width() < 1025 ) 
		{
			var width = document.getElementById('tst');
			var widths = document.getElementsByClassName('a1');
			var photos = document.getElementsByClassName('kk');
			for (i = 0; i < photos.length; i++){
				photos[i].style.height = width.offsetWidth + "px";
				photos[i].style.width = width.offsetWidth + "px";
				if (i%2 == 0 && i != 0) {
					widths[i].style.marginRight = 0;
				}
				else {widths[i].style.marginRight = 8 + "%";}
				if (i > 2) {
					widths[i].style.paddingTop = 4 + "%";
				}
				
			}	
			var plusheight = document.getElementsByClassName('sparja');
			var needheight = document.getElementsByClassName('main_content');
			needheight[0].style.height = plusheight[0].offsetHeight +"px";
		}
		else if ($(window).width() > 550 && $(window).width() < 1023) 
		{
			var width = document.getElementById('tst');
			var widths = document.getElementsByClassName('a1');
			var photos = document.getElementsByClassName('kk');
			for (i = 0; i < photos.length; i++){
				photos[i].style.height = width.offsetWidth + "px";
				photos[i].style.width = width.offsetWidth + "px";
				if ((i%3 == 0 && i != 0) || (i == 1)) {
					widths[i].style.marginRight = 0;
				}
				if (i%2 == 0 )
				{
					widths[i].style.marginRight = 12 + "%";
				}
				if (i > 1) {
					widths[i].style.paddingTop = 4 + "%";
				}
				
			}	
			var plusheight = document.getElementsByClassName('sparja');
			var needheight = document.getElementsByClassName('main_content');
			needheight[0].style.height = plusheight[0].offsetHeight +"px";
		}
		else {
			var width = document.getElementById('tst');
			var widths = document.getElementsByClassName('a1');
			var photos = document.getElementsByClassName('kk');
			for (i = 0; i < photos.length; i++){
				photos[i].style.height = width.offsetWidth + "px";
				photos[i].style.width = width.offsetWidth + "px";
				if (i > 0 )
				{
					widths[i].style.marginTop = 5 + "%";
				}
				
				
			}	
			var plusheight = document.getElementsByClassName('sparja');
			var needheight = document.getElementsByClassName('main_content');
			needheight[0].style.height = plusheight[0].offsetHeight +"px";
			$(window).scroll(function() {
				var height = document.getElementById("headr").offsetHeight;
				var height1 = document.getElementById("mini_nav").offsetHeight;
				var height2 = height - height1;
				console.log(height2);
				
				if ($(this).scrollTop() > (height2)) {
					$("#mini_nav").addClass("fixed").fadeIn('fast');
				}
				else {
					$("#mini_nav").removeClass("fixed").fadeIn('fast');
				}
			});
		}
		
	});
