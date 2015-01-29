function showmodal(){
	$('#combo').hide();
	$('#comboClose').addClass('show');
	$('#backdrop').addClass('in');
	$('#overlay').addClass('show');
	$("html, body").animate({scrollTop:0},200);
}

function concepts(){
	if($('#ctrlKey').length){
		showmodal();
		$('#conceptWork').load($('#ctrlKey').attr('href')+' #project',function(){
			$(this).addClass('loaded');
		});
	}
}

function closemodal(){
	$('#combo').show();
	$('#comboClose').removeClass('show');
	$('#backdrop').stop().fadeOut(300,function(){$(this).removeClass().removeAttr('style');});
	$('#overlay').removeClass();
}

function keylistener(e) { 
	if(e.keyCode==27) { closemodal(); }
	if(e.keyCode==37) { $('a#thirtySeven').addClass('pressed'); if($('a#thirtySeven').length) { window.location.href = $('a#thirtySeven').attr('href'); } }
	if(e.keyCode==39) { $('a#thirtyNine').addClass('pressed'); if($('a#thirtyNine').length) { window.location.href = $('a#thirtyNine').attr('href'); } }
	if(e.keyCode==67) { $('a#sixtySeven').addClass('pressed'); }
	if(e.ctrlKey) { $('a#ctrlKey').addClass('pressed'); }
	if(e.keyCode==67 && e.ctrlKey) { concepts(); $('a#ctrlKey,a#sixtySeven').removeClass(); }
}

function releasePress(e){
	$('a#ctrlKey,a#sixtySeven').removeClass();
}

function prettyload(){ $("img").each(function(){$(this).load(function(){$(this).animate({'opacity':1},100);return!1}).each(function(){this.complete&&0!==this.naturalWidth&&$(this).trigger("load")})})};

$(window).scroll(function(){

$('#keycontrols').fadeIn(300);

});



$(document).keydown(keylistener).keyup(releasePress).ready(function(){
	
	
	
	prettyload();
	
	$('.showConcepts').click(function(e){ 
		e.preventDefault();
		concepts();
	});
	
	$('.closeModal').click(closemodal);
	
});


$(document).click(function(e){
	
	if($(e.target).is("#backdrop")){
		closemodal(); 
	}
	
});