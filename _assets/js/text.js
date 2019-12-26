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
$(window).scroll(function(){ fancyBoi(); });

$('#burger').click(function(e){
	e.preventDefault();
	$('#mainNav').toggleClass('menuOpen');
});

$('#timeline').hover(function(){
	$('.hovered').removeClass('hovered');
});