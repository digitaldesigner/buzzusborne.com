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

$('#timeline').hover(function(){
	$('.hovered').removeClass('hovered');
});