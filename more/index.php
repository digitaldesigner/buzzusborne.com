<?php 
	define('path','../');
	$hideNav=TRUE;
	$navigation = array(
		"prev" => array(
			"path"	=> "../",
			"title"	=> "Home"
		),
		"next" => array(
			"path"	=> "../casestudy/prevue_expenses",
			"title"	=> "Expense Tracker"
		),
		"twitter_img" => "casestudy/_images/misc/prevue_expenses.png"
	);
	include(path.'_includes/header.php');
?>
		<div id="about">		
			<p class="lead"><a href="../">Back</a></p>
						
			<h3>More Work</h3>
		</div>
    
    <ul class="caseStudies">
				<li>
					<a href="../casestudy/prevue_expenses/">
						<div class="image leadImg expenses"><img src="../casestudy/_images/misc/prevue_expenses.png" /></div>
						<h5><span>Expense Tracker</span></h5>
						<p>A tool to visualize business expenses</p>
					</a>
				</li>
				<li>
					<a href="../casestudy/toniandguy/">
						<div class="image toniguy"><img src="../casestudy/_images/misc/toniguy_01.jpg" /></div>
						<h5><span>Toni&amp;Guy</span></h5>
						<p>Website for international hair brand</p>
					</a>
				</li>
				<li>
					<a href="../casestudy/russian_standard/">
						<div class="image russian"><img src="../casestudy/_images/misc/russian_01.jpg" /></div>
						<h5><span>Russian Standard</span></h5>
						<p>Website for the world's most popular vodka</p>
					</a>
				</li>
				<li>
					<a href="../casestudy/rango/">
						<div class="image rango"><img src="../casestudy/_images/misc/rango_01.jpg" /></div>
						<h5><span>Old El Paso / Rango</span></h5>
						<p>Game design for a movie-related promotion</p>
					</a>
				</li>
				<li>
					<a href="../photos">
						<div class="image photos"><img src="../casestudy/_images/misc/photo-feed.jpg" /></div>
						<h5><span>Photos</span></h5>
						<p>A photo feed from my Instagram, @buzz</p>
					</a>
				</li>
				<li>
					<a href="http://sketches.buzzusborne.com/">
						<div class="image sketches"><img src="../casestudy/_images/misc/sketches.jpg" /></div>
						<h5><span>Sketches</span></h5>
						<p>A random collection of my UI sketch work</p>
					</a>
				</li>
        
			</ul>
			 
<?php
	include(path.'_includes/footer.php');
?>