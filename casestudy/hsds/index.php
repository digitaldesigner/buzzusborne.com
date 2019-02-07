<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Help Scout Design System</h1>
			<span class="subscript">Lead Designer <em>&#8226;</em> Design Systems / UI / Prototyping <em>&#8226;</em> 2018&ndash;<?=date('Y')?></span>
		</div>
	</div>
	
	<div class="fullImage top video">
	    <video autoplay muted loop id="showcase" class="leadImg">
	      <source src="../_video/hsds.mp4" type="video/mp4">
	    </video>
	</div>
		
	<div class="container">	
		<div class="project">
			<h5>Building a Design System</h5>
			<p class="info"><strong>Above/</strong> Quickly constructing ready-made UI that perfectly matches our production environment</p>
			<p>Help Scout has always been strong on <a href="http://style.helpscout.com/">visual guides</a> and documentation for their brand. However, there were no established UI standards that covered the product, or anything that served as a &lsquo;single source of truth&rsquo; for anyone on the team. In fact, Designers were referencing and re-drawing what was on the live site &mdash; a pretty common, though less than ideal situation for any product.</p>
			
			<p>This approach worked well until the business hit a period of growth which saw the expansion of both our team and product footprint. At this point I saw an opportunity to define how we manage, share and contribute to our UI at scale. Our first cross-functional Design System.</p>

	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/hsds-covers.png" width="100%" />
			</div>

			<h5>Taking a different tack</h5>
			<p>Design Systems aren&rsquo;t a new concept, though having built and worked with large design systems at Campaign Monitor and Atlassian, I was familiar with the challenges various approaches bring with scale. Before long, UI Libraries risk become too large, confronting or difficult to maintain &mdash; ours needed to be leaner.</p>
			
			<p class="info"><strong>Below/</strong> A selection of HSDS components. The lower libraries reference components from those above to form interdependency</p>
			
			<p>Working with the design team and UI Engineers, I proposed a system of inter-dependent UI Libraries that spanned the various products and functions of the business &mdash; Marketing, Product, Embeddables and Mobile. Each Library came with its own documentation, GitHub repository and associated React component Storybook. I called it, unimaginatively, <strong>HSDS</strong>. The Help Scout Design System.</p>
			
			<div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/symbols.png" width="100%" />
			</div>
			
			<h5>Making Sketch work</h5>
			<p>Our fully-remote Design team is spread across 3 continents and 5 timezones, so our approach to how the Sketch Libraries were constructed needed to be self-explanatory and protected from accidental damage. So instead of following the popular <a href="https://shop.bradfrost.com/collections/frontpage/products/atomic-design">&ldquo;Atomic&rdquo;</a>  approach, our components were constructed in pre-built chunks with total color and over-writing control, example uses and a commit process similar to submitting code. Some of my approach is covered <a href="https://medium.com/help-scout/more-tips-for-building-your-sketch-ui-library-975a44416f59">in this article</a> &mdash; but simply, my approach meant that anyone could create a full and accurate UI in seconds.</p>
			
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/example-embed.png" width="100%" />
			</div>
			
			<p class="caption central">Every library comes with its own &ldquo;Example Usage&rdquo; files which outline the more common ways components are grouped</p>
			
			</div>
		</div>	

		<div class="fullImage">
			<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/example-product.png" />
		</div>

		<div class="container">	
			<div class="project">

			<p class="caption central"><strong>Below/</strong> An example of how just one component can have a number of different states and configurations</p>
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/beacon-cards.png" width="100%" />
			</div>
			
			<p>Splitting our Design System by business function also meant that we could centrally manage our brand assets such as colors, illustrations, icons and anything that is agnostic to environment or team. This approach meant that by adding, removing or changing an asset (an icon, for example) in one single place, every other UI Library would gracefully consume that change. This was perfect for our 2018 brand refresh, where we changed our entire color pallet &mdash; there was no risk to &lsquo;downstream&rsquo; libraries and no risk of out-of-date files.</p>
			
			<p>For example, no matter what team or project a designer is part of &mdash; they consume the same shadows, color pallets and core shared elements:</p>
			
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/core-shadows.png" width="100%" />
			</div>
			
			
			<h5>Bridging the gap</h5>
			<p class="info"><strong>Below/</strong> The React Storybook that contains all components and visual QA tools</p>
			
			<p>Design Systems are only useful when they&rsquo;re easy for Engineers to consume &mdash; otherwise Designers are operating in a vaccuum. From the outset, HSDS involved UI Engineers from across the business to build the necessary tooling that sees each component visualized, tested and self-contained &mdash; ready to be consumed by anyone who implements code. Thanks to a monumental effort from Help Scout&rsquo;s Design Engineer (<a href="https://www.jonquach.com/">our very own Q</a>), HSDS now operates as a single-source of truth and visual quality benchmark for every team.</p>
			
			<div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/hsds-react.png" width="100%" />
			</div>
			
			<p>Although I initially designed and orchestrated the construction of HSDS, today it&rsquo;s being consumed and contributed to by every Designer and UI Engineer across the business &mdash; fully documented and managed by a group with no single point of failure. This way the system can continue to grow and evolve without much overhead. Even the documentation (below) gets automatically updated when new changes and examples become available.</p>
			
			</div>
		</div>	

		<div class="fullImage">
			<img class="lazyload" data-sizes="auto" data-src="../_images/hsds/wiki-pages.png" />
		</div>

		<div class="container">	
			<div class="project">

			<dl class="outro">
				<div class="col left">
					<dt>Position</dt>
						<dd>Designer</dd>
					<dt>Company</dt>
						<dd>Help Scout</dd>
					<dt>Date</dt>
						<dd>2018&ndash;<?=date('Y')?></dd>
				</div>
				<div class="col middle">			
					<dt>Responsibilities</dt>
						<dd>Design Systems</dd>
						<dd>Documentation</dd>
						<dd>Design Ops</dd>
						<dd>HTML prototyping</dd>
				</div>
				<div class="col right">
					<dt>More</dt>
						<dd><a href="https://helpscout.com/">Help Scout</a></dd>
						<dd><a href="https://medium.com/help-scout/more-tips-for-building-your-sketch-ui-library-975a44416f59">Read more</a></dd>
				</div>
			</dl>
		
<?php
	include(path.'_includes/footer.php');
?>