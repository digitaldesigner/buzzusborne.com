<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Help Scout DS</h1>
			<span class="subscript">Principal Designer <em>&#8226;</em> Help Scout <em>&#8226;</em> 2017&ndash;<?=date('Y')?></span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/helpscout-chat/cover.png"  />
	</div>
	
	<div class="container">	
		<div class="project alignLeft">
			<h3 class="lrg">A fresh start</h3>
			<p>
- Open contribution (no ivory tower)<br />
- Parity with React<br />
- Creativity first<br />
- Well documented<br />
- Tools to help (Colorway, codepen)</p>

			<div class="video-link">
				<a href="https://www.youtube.com/watch?v=SdhGCSrLYc8" target="_blank">
					<div class="thumb"><img src="../_images/helpscout-design-system/meetup-thumb.gif" width="100%" /></div>
					<p><strong class="youtube">DesignOps 2020</strong><br />Headlined a remote meetup to discuss my experiences building a design system with a small team.</p>
				</a>
			</div>

			<h3 class="lrg">And finally&hellip;</h3>
			<p>As I worked through this body of work &mdash; I also used the opportunity to build out a design system and visual language for the entire Help Scout design team. We call it HSDS (<a href="../hsds/">see more</a>) &mdash; a full platform UI library that exists as a translation layer between Figma and React (via StoryBook). Today I work as the design lead of HSDS, which has 12 key contributors spanning design and engineering.</p>
			
			
		</div>
	</div>

	<div class="container">	
		
<?php
	$script ='
	<link rel="stylesheet" href="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="//cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
	<script type="text/javascript">
	$(\'[data-fancybox]\').fancybox({
		infobar: false,
		buttons: ["close"],
		animationEffect: "fade",
		animationDuration: 250,
		protect: "true"
	});
	</script>';	


	include(path.'_includes/footer.php');
?>