var landingOrgHeight = $('.landing').height();
function fancyBoi(){
	var distance = $(window).scrollTop();
   if(distance>0){
		var percentageMoved = (distance/landingOrgHeight * 100);
		var asOpacity = Math.round(percentageMoved - percentageMoved/100);
		var asOpacityInv = (1 - ((asOpacity * 2)/100));
		$('#bio').css({
			'top':'-'+(distance / 2)+'px',
			'opacity':asOpacityInv
		});
		if(asOpacityInv <= 0.5){
			$('#workIntro').addClass('show');
		} else {
			$('#workIntro').removeClass('show');
		}
	} else {
		 $('#bio').removeAttr('style');
		 $('#workIntro').removeClass('show');
   }
}

function menuPos(){
	var nLeft = $('#mainNav').offset().left;
	var nWidth = $('#mainNav').width();
	$('#menu').css('left',((nLeft + nWidth)-60)+'px');
}

menuPos();

$(window).scroll(function(){ fancyBoi(); });
$(window).resize(function() { menuPos(); });

var thingsIam = [
	'a fan of geese',
	'a meatbag',
	'a coffee addict',
	'an Englishman',
	'an Australian',
	'an average coder',
	'a random guy',
	'a dad',
	'a nerd',
	'another white guy',
	'a pixel pusher',
	'a tall dude',
	'a feminist',
	'an ex-sailor',
	'a wannabe architect',
	'a minimalist',
	'a work in progress',
	'a fancy skeleton',
	'an 80&rsquo;s kid',
	'a human',
	'a UX/UI guy',
	'a perfectionist',
	'a remote worker',
	'your friend'
];

function getrandom(existingVal){
	var newie = Math.floor(Math.random()*thingsIam.length);
	if(thingsIam[newie] == existingVal) {
		getrandom(existingVal);
	} else {
		return newie;
	}
}
$('#whoami').click(function(){
	$(this).html(thingsIam[getrandom($(this).html())]).addClass('on');
});

$('#burger').click(function(e){
	e.preventDefault();
	$('#mainNav').toggleClass('menuOpen');
});

$('a[href="#work"]').click(function(){
	$('#mainNav').removeClass('menuOpen');
})