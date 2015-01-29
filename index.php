<?php 
	define('path','');
	include(path.'_includes/header.php');
?>
		
		<div id="intro">
			<h3>I'm Buzz, a Digital Designer living in Sydney. I work as the UX Director at <a href="projects/campmon/" title="See my design work for Campaign Monitor">Campaign Monitor</a> and Founded <a href="projects/prevue/" title="See my design work for Prevue">Prevue</a>.</h3>
		</div>
		
		<div id="showall">		
			<div class="image half prevue">
				<a href="projects/prevue/">
					<span class="title"><em>Prevue</em></span>
					<img src="_assets/gfx/large_prevue.jpg" height="478" draggable="false" />
				</a>
			</div>
			<div class="image half right close campmon">
				<a href="projects/campmon/">
					<span class="title"><em>Campaign Monitor</em></span>
					<img src="_assets/gfx/large_campmon.jpg" height="478" draggable="false" />
				</a>
			</div>
			<div class="image spanthree skype">
				<a href="projects/skype/">
					<span class="title"><em>Skype</em></span>
					<img src="_assets/gfx/large_skype.png" height="286" draggable="false" />
				</a>
			</div>
			<div class="image portrait pbp">
				<a href="projects/pbp/">
					<span class="title"><em>Postbox Party</em></span>
					<img src="_assets/gfx/large_pbp.jpg" height="477" draggable="false" />
				</a>
			</div>
			<div class="image thumb cmdigi">
				<a href="projects/cm-digital">
					<span class="title"><em>CM Digital</em></span>
					<img src="_assets/gfx/cm_digital.jpg" height="180" draggable="false" />
				</a>
			</div>
			<div class="image thumb right argyle">
				<a href="projects/the-argyle/">
					<span class="title"><em>The Argyle</em></span>
					<img src="_assets/gfx/theargyle.jpg" height="180" draggable="false" />
				</a>
			</div>
		</div>
		
<?php
	$hideCross=TRUE;
	$home=TRUE;
	include(path.'_includes/footer.php');
?>