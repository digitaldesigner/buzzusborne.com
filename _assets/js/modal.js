function showmodal(){
	$('#combo').hide();
	$('#comboClose').addClass('show');
	$('#backdrop').addClass('in');
	$('#overlay').addClass('show');
	$("html, body").animate({scrollTop:0},200);
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

$(window).scroll(function(){ $('#keycontrols').fadeIn(300); });
$(document).keydown(keylistener).keyup(releasePress);