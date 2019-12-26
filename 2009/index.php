<?php
	define('path','../');
	$hideNav=TRUE;
	$navigation['this']['title']="My First Portfolio";
	$navigation['meta']="A look back at my printed portfolio from 2009";
	$navigation['twitter_img']="https://buzzusborne.com/2009/images/thumbs/Paper-01.jpg";
	$bodyclass = "text";
	include(path.'_includes/header.php');
?>
	<div class="container">
	<?php 
						printf(file_get_contents(path.'_includes/nav.html'),
						'', /* container class */
						'', /* h1 class (i.e. "color") */ 
						path, /* home href */
						path."#work", /* work href */
						' active', /* work class */
						path.'coaching/', /* coaching href */
						'', /* coaching class */
						path.'about', /* about href */
						'',  /* about class */
						''
					);
	?>

		<div class="textonly spacer-top">
			<h1>My First Portfolio</h1>
			<p class="lead"><strong><?php echo (date('Y') - 2009); ?> years ago&hellip;</strong> I wanted to break into tech. At the time I had 4 years of agency experience under my belt, but was keen to move into the not-so glamorous world of software. So I did what any digital designer did back then: I <span class="texter">printed</span> my web work, put it in an A3 leather-bound portfolio and went out for interviews.</p>
			<p>What follows is the printed portfolio of 25 year old Buzz&hellip; my greatest hits from 2006 to 2009. It&rsquo;s the work that landed me a job with Skype.</p>
						
			<hr />
			
			<h4>2006</h4>
			<h2>It begins&hellip; with print work</h2>
			<p class="lead">For some reason my portfolio opened with print work &mdash; probably not a strong start. Safe to say that I had no idea what I was doing. It showcased a recipe booklet and a wine pairing guide which were significant to me because they were my first &ldquo;real&rdquo; client briefs.</p>
			<p>I remember the wine guide well &mdash; after my Creative Director handed me the brief I excused myself and had a full-blown panic attack in the agency bathrooms. Turns out I had no idea how to operate the software the agency wanted me to use (Quark Xpress)&hellip; I learned fast. It was also my first experience of seeing a design job from from start to finish, including dealing with printers.</p>
			
			<div class="showcase">
				<div class="work"><a data-fancybox="print-work" href="./images/fullsize/Wine-01.jpg"><img src="./images/thumbs/Wine-01.jpg" /></a></div>
				<div class="work right"><a data-fancybox="print-work" href="./images/fullsize/Wine-02.jpg"><img src="./images/thumbs/Wine-02.jpg" /></a></div>
			</div>
			
			<hr />
			
			<h4>2007</h4>
			<h2>Shop</h2>
			<p class="lead">Aha, some digital work! SHOP was a fashion blog that accompanied a print magazine my agency was also involved in. I don&rsquo;t recall much about this brief, other than things appearing &ldquo;above the fold&rdquo; was very much a priority at the time. This design represented my attempts to aggravate front-end developers with near impossible layouts, photographic content and custom fonts &mdash; which again was non-trivial in 2007.</p>
			<p>The design was considered pretty radical (boring) for its lack of gradients and shadows &mdash; which were all the rage in &lsquo;07 &mdash; and instead reflected a style more commonly seen in print. Since &ldquo;flat design&rdquo; didn&rsquo;t happen for another 7&ndash;8 years, I&rsquo;m impressed with how well this stands up.</p>

			<div class="showcase">
				<div class="work shadow"><a data-fancybox="shop" href="./images/fullsize/Shop-01.jpg"><img src="./images/thumbs/Shop-01.jpg" /></a></div>
				<div class="work shadow right"><a data-fancybox="shop" href="./images/fullsize/Shop-02.jpg"><img src="./images/thumbs/Shop-02.jpg" /></a></div>
			</div>

			<hr />
			
			<h4>2007</h4>
			<h2>Eden Project</h2>
			<p class="lead">This was pitch work that was later rejected, but I recall pulling it together in just a couple of days. Judging from the illustrations, I was clearly unaware that women or PoC existed &mdash; something I&rsquo;m ashamed to see in my own work.</p>
			<p>This is from a time where tag clouds were a big draw-card, and blogs were a very complicated thing to pull off. It&rsquo;s pretty cute and colorful, although you can see my style slipping back into fake paper textures and hand-drawn nonsense.</p>
			
			<div class="showcase">
				<div class="work shadow"><a data-fancybox="eden-project" href="./images/fullsize/Eden-01.jpg"><img src="./images/thumbs/Eden-01.jpg" /></a></div>
				<div class="work shadow right"><a data-fancybox="eden-project" href="./images/fullsize/Eden-02.jpg"><img src="./images/thumbs/Eden-02.jpg" /></a></div>
			</div>
			
			<hr />
			
			<h4>2008</h4>
			<h2>Sam &amp; Buzz</h2>
			<p class="lead">My wife and I went traveling around Japan and Australia, so I made an interactive website to help our family know where we&rsquo;d be on any particular date. I hacked it together using WordPress, and was my attempt at showing that I knew how to code (kinda).</p>
			<p>Bizarrely this opened the most doors for me &mdash; probably because it was something a bit different and just for fun. At the very least it was a good demonstration of the type of work I wanted to be doing. If I&rsquo;m honest, I&rsquo;m most impressed that I considered mobile, since the iPhone had only been around for 1 year.</p>
			
			<div class="showcase">
				<div class="work shadow"><a data-fancybox="sam-and-buzz" href="./images/fullsize/SamBuzz-01.jpg"><img src="./images/thumbs/SamBuzz-01.jpg" /></a></div>
				<div class="work shadow right"><a data-fancybox="sam-and-buzz" href="./images/fullsize/SamBuzz-02.jpg"><img src="./images/thumbs/SamBuzz-02.jpg" /></a></div>
			</div>
			
			<hr />
			
			<h4>2009</h4>
			<h2>Duchy Originals</h2>
			<p class="lead">I worked on this site with then-colleague-now-famous-DJ, <a href="https://www.google.com/search?q=russ+chimes" class="chilled">Russ Chimes</a>. It won a bunch of awards largely because it was a fully custom eCommerce build &mdash; which in 2009 was a huge deal. The launch party was hosted by Prince Charles at some Royal residence. I wasn&rsquo;t invited.</p>
			<p>There were so many textures and shadows my eyes hurt to look at it &mdash; but it won an Awwwards &lsquo;Site of the Day&rsquo; when Skeuomorphism was all the rage, so it can&rsquo;t have been that bad.</p>
			
			<div class="showcase">
				<div class="work shadow"><a data-fancybox="duchy-originals" href="./images/fullsize/Duchy-01.jpg"><img src="./images/thumbs/Duchy-01.jpg" /></a></div>
				<div class="work shadow right"><a data-fancybox="duchy-originals" href="./images/fullsize/Duchy-02.jpg"><img src="./images/thumbs/Duchy-02.jpg" /></a></div>
			</div>
			
			<hr />
			
			<h4>2009</h4>
			<h2>Russian Standard</h2>
			<p class="lead">I designed this pitch website for Russian Standard vodka, which never saw the light of day. I was proud of it because the client provided me with zero assets and only 48 hours to come up with something creative. They did, however, give me a crate of vodka as &ldquo;inspiration&rdquo;.</p>
			<p>This was hot off the back of the Duchy work, so I was dead-set on trying something a bit different from paper textures. This concept proposed a photo-heavy site in a time when a 100kb image was laughably huge.</p>
			
			<div class="showcase">
				<div class="work shadow"><a data-fancybox="russian-standard" href="./images/fullsize/Russia-01.jpg"><img src="./images/thumbs/Russia-01.jpg" /></a></div>
				<div class="work shadow right"><a data-fancybox="russian-standard" href="./images/fullsize/Russia-02.jpg"><img src="./images/thumbs/Russia-02.jpg" /></a></div>
			</div>
			
			<hr />
			
			<h2>And finally&hellip;</h2>
			<p class="lead">One evening in 2006 a client phoned to ask whether I could do a &ldquo;quick photorealistic mockup&rdquo; of what commemorative plates and mugs might look like if Prince William and his then-girlfriend Kate Middleton ever got engaged.</p>
			<p>Little did I know that the client would leak my mockups to the press, making headlines in every tabloid nationwide and sparking speculation that a Royal wedding was afoot. I got accused of being the leak (I&rsquo;d never leak such terrible design work). Ironically the pair didn&rsquo;t get engaged for another 4 years.</p>

			<p>End on a high note.</p>

			<div class="showcase">
				<div class="work single"><a data-fancybox href="./images/fullsize/Daily-Telegraph.jpg"><img src="./images/thumbs/Paper-01.jpg" /></a></div>
			</div>
			
			<p class="highlight spacer--xlarge"><strong>Looking to break into tech?</strong> You probably don&rsquo;t need a printed portfolio anymore. But if you'd like advice on where to start, what work to show and how to sell yourself, I&rsquo;d be happy to help. <a href="mailto:hello@buzzusborne.com">Drop me a line.</a></p>


		</div>
	
		
<?php
  $hideModal = TRUE;
	
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
	
	$JS = "text.js";
	include(path.'_includes/footer.php');
?>