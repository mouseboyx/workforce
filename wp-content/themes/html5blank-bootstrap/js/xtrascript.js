$(document).ready(function(){
	// $('#light').hover(function(){
	// 	$('.full-bg-img').animate({
	// 		backgroundColor:'rgba(255,255,255,.3)'
	// 		}, 'slow');
	// });
	// $('#light').hover(function(){ 
	// 	$('.full-bg-img').animate({
	// 		"background-color": "rgba(255,255,255,.7)"
	// 	}, 'slow');
	// }).mouseleave(function(){
	// 	$('.full-bg-img').css("background-color", "rgba(0,0,0,.8)"); 
	// });


	$('#light').hoverIntent(function(){ 
		$('.full-bg-img').fadeToggle("300","swing");
		$('#lightbulb').css("color", "#f7fc5f");
		// $('h1.inTheDark').replaceWith('<h1 class="display-5 mb-3">We will help you see the light</h1>');
	});

	$('#lightbulb').hoverIntent(function(){ 
		$('#lightbulb').css("color", "#f7fc5f");
		// $('h1.inTheDark').replaceWith('<h1 class="display-5 mb-3">We will help you see the light</h1>');
	});
	return false;

});