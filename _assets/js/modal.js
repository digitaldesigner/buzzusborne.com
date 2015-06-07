function keylistener(e) { 
	if(e.keyCode==37) { $('a#thirtySeven').addClass('pressed'); if($('a#thirtySeven').length) { window.location.href = $('a#thirtySeven').attr('href'); } }
	if(e.keyCode==39) { $('a#thirtyNine').addClass('pressed'); if($('a#thirtyNine').length) { window.location.href = $('a#thirtyNine').attr('href'); } }
}

function releasePress(e){
	$('a#ctrlKey,a#sixtySeven').removeClass();
}

$(window).scroll(function(){ 
	var scrollDis = $(document).scrollTop();
	var windowHeight = $( window ).height();

	if(scrollDis > windowHeight){
		$('#keycontrols').fadeIn(200);
	} else if(scrollDis <= windowHeight){
		$('#keycontrols').fadeOut(200);
	}
	
});

$(document).keydown(keylistener).keyup(releasePress);