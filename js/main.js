$(document).ready(function(){


	$(window).scroll(function() {
		var heightFix = document.getElementById("davai").offsetHeight;
		var heightFix1 = document.getElementById("head").offsetHeight;
		console.log(heightFix);
		if ($(this).scrollTop() > (heightFix)) {
			$("#head").addClass("head_fixed").fadeIn('fast');
			$(".work").addClass("infixed").fadeIn('fast');
			$(".mywork").addClass("infixed").fadeIn('fast');
			$(".second-nav").addClass("infixed").fadeIn('fast');
		} else {
			$("#head").removeClass("head_fixed").fadeIn('fast');
			$(".work").removeClass("infixed").fadeIn('fast');
			$(".mywork").removeClass("infixed").fadeIn('fast');
			$(".second-nav").removeClass("infixed").fadeIn('fast');
		};
	});
	$('.keytrigger').click(function (){
		$('.valia').stop().slideToggle("slov");
	});
});
