$(document).ready(function(){
	$('#contact').mouseenter(function(){
		$('#popup-phone').show();
	}).mouseleave(function() {
		$('#popup-phone').hide();
	});
	
	$('#email').mouseenter(function(){
		$('#popup-email').show();
	}).mouseleave(function() {
		$('#popup-email').hide();
	});
	
	$('#bio').click(function(){
		$('#popup-bio').toggle();
	});
	
	$('#demo').click(function(){
		var vid = document.getElementById("audioplayer");
		
		$('#popup-demo').toggle();
		
		if(!$("#popup-demo").is(':visible')) {
			vid.pause();
        }
		else {
			vid.play();
		}
	});
});