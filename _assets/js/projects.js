function keylistener(e) { 
	if(e.keyCode==27) { $('#mainNav').toggleClass('menuOpen'); }
	if(e.keyCode==37) { $('a.thirtySeven').addClass('pressed'); if($('a#thirtySeven').length) { window.location.href = $('a#thirtySeven').attr('href'); } }
	if(e.keyCode==39) { $('a.thirtyNine').addClass('pressed'); if($('a#thirtyNine').length) { window.location.href = $('a#thirtyNine').attr('href'); } }
}
function releasePress(e){
	$('a#ctrlKey,a#sixtySeven').removeClass();
}

$(document).keydown(keylistener).keyup(releasePress);

function fancyBoi(){
	var distance = $(window).scrollTop();
   if(distance>0){		
		$('#signature').css({
			'top':'-'+(distance)+'px'
		});
	} else {
		 $('#signature').removeAttr('style');
   }
}
function menuPos(){
	var nLeft = $('#mainNav').offset().left;
	var nWidth = $('#mainNav').width();
	$('#menu').css('left',((nLeft + nWidth)-60)+'px');
}

menuPos();
$(window).resize(function() { menuPos(); });
$(window).scroll(function(){ fancyBoi(); });

$('#burger').click(function(e){
	e.preventDefault();
	$('#mainNav').toggleClass('menuOpen');
});