<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Expense Tracker</h1>
			<span class="subscript">Founder &amp; Product Design Lead <em>&#8226;</em> UX / UI / Development <em>&#8226;</em> 2018</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/misc/prevue_expenses.png"  />
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> The home screen of <a href="../prevue/">Prevue&rsquo;s</a> realtime expense tracker</p>
			
			<p>Whilst running <a href="../prevue/">Prevue</a>, I found it difficult to track real-time profit &mdash; especially as Prevue operates with both monthly recurring and one-off payments, and charges in multiple currencies. In addition, it was difficult to report expenses against profit&hellip; so I built my own tool.</p>
			<p>The tool pulls real-time payment data from Stripe, calculates conversion rates using 3rd party forex rates, pulls expenses from Google Docs, then calculates tax and payment fees to leave raw profit.</p>
			<p>Optimised for mobile, this now operates as a day-to-day substitute to any other payment reporting I have for Prevue.</p>
			<div class="image"><img class="lazyload" width="100%s" data-sizes="auto" data-src="../_images/misc/ex_desktop.png" /></div>
			<p class="caption"><strong>Below/</strong> Built to be mobile-first (even the graph), I use the tool almost every day to get a picture of company performance</p>
			<div class="image half"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/ex_detail_mobile01.png" width="100%" /></div>
			<div class="image half right"><img class="lazyload" data-sizes="auto" data-src="../_images/misc/ex_detail_mobile02.png" width="100%" /></div>			
		</div>
	</div>
	
	<div class="container">	
  		<dl class="outro">
  			<div class="col left">
  				<dt>Position</dt>
  					<dd>Founder <em class="special amp">&amp;</em> Product Lead</dd>
  				<dt>Company</dt>
  					<dd>Prevue</dd>
  				<dt>Date</dt>
  					<dd>2007&ndash;2018</dd>
  			</div>
  			<div class="col middle">			
  				<dt>Responsibilities</dt>
  					<dd>UX <em class="special amp">&amp;</em> UI</dd>
  					<dd>Front-end (HTML, CSS, JavaScript)</dd>
  					<dd>Backend (PHP)</dd>
  			</div>
  			<div class="col right">
  				<dt>More</dt>
  					<dd><a href="https://prevue.it/">Visit Prevue</a></dd>
  			</div>
  		</dl>
			
<?php
	include(path.'_includes/footer.php');
?>