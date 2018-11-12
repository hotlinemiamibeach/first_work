$(document).ready(function(){
	var width = document.getElementById('tst');
	var change = document.getElementsByClassName('l');


	for (i = 0; i < change.length; i++){
		change[i].style.width = width.offsetWidth + "px";
	}	
});