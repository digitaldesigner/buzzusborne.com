function keylistener(e) { 
	if(e.keyCode==37) { $('a#thirtySeven').addClass('pressed'); if($('a#thirtySeven').length) { window.location.href = $('a#thirtySeven').attr('href'); } }
	if(e.keyCode==39) { $('a#thirtyNine').addClass('pressed'); if($('a#thirtyNine').length) { window.location.href = $('a#thirtyNine').attr('href'); } }
}

function releasePress(e){
	$('a#ctrlKey,a#sixtySeven').removeClass();
}

$(document).keydown(keylistener).keyup(releasePress);

var leadImage = $('.leadImg').offset();
var leadImageH = $('.leadImg').height();

$(window).scroll(function(){
   if($(window).scrollTop()>((leadImage.top + leadImageH) - (leadImageH / 2))){
		 $('#keycontrols').fadeIn(200);
		 $('.leadImg').addClass('scrollout');
   } else {
		 $('.leadImg').removeClass('scrollout');
		 $('#keycontrols').fadeOut(200);
   }
});