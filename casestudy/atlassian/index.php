<?php 
	define('path','../../');
	$navigation = array(
		"this" => array(
			"path"	=> "./",
			"title"	=> "Atlassian"
		),
		"prev" => array(
			"path"	=> "../..",
			"title"	=> "Home"
		),
		"next" => array(
			"path"	=> "../prevue",
			"title"	=> "Prevue"
		),
		"twitter_img" => "casestudy/_images/atlassian/jira-hero.jpg"
	);
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>JIRA <em>&amp;</em> Atlassian</h1>
			<span class="subscript">Lead Designer <em>&#8226;</em> UX / UI / Mentorship <em>&#8226;</em> 2016&ndash;17</span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/atlassian/jira-hero.jpg"  />
	</div>
	
	<div class="container">	
		<div class="project">
			<h5>The Brief</h5>
			<p class="info"><strong>Above/</strong> An Agile board, the core of the JIRA product</p>
			
			<p>One of my major responsibilities whilst at <a href="https://atlassian.com" target="_blank">Atlassian</a> was the re-design of JIRA &mdash; a now <?php echo (date('Y') - 2002); ?> year old issue and project tracking tool used by millions. Used primarily by software teams, JIRA is the powerhouse behind companies like NASA, Spotify, and pretty much every team I&rsquo;ve ever worked with.</p>
			
			<p>As anyone whose ever used JIRA knows&hellip; it&rsquo;s really hard to master. Once you have it figured, you can do some amazing things &mdash; but the barrier to entry is high. And in an increasingly saturated marketplace, small software teams are less willing to put in the time to learn the intricacies of such a large product &mdash; so it was time for JIRA to adapt to meet their needs.</p>
			
			<p>Over several months, I led a series of workshops, customer interviews and design spikes to produce a fresh new take on JIRA that made it more appropriate for modern software teams. In early-2017, it was <a href="https://twitter.com/JIRA/status/859431554220789761" target="_blank">announced</a> by Atlassian&rsquo;s Head of Design at their European Summit</a>.</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/atlassian_summit.jpg" width="100%" /></div>
			
			<p class="caption inline">Photo credit: <a href="https://twitter.com/sherifmansour/status/859384000258818048">Sherif Mansour</a></p>
						
			<p>The outcome of my preliminary workshops and research, and the defining hypothesis of the re-design, was that by helping software teams realise their own potential sooner, they&rsquo;d be advocates for life. This was validated using extensive user testing and data analysis, both during design and with the subsequent staged release.</p>
			
			<blockquote>&ldquo;Our customers&rsquo; success is our success.&rdquo;</blockquote>
			
			<p>Every UX and visual design decision was made with this in mind &mdash; and was viewed through the lens of helping teams get to a point of productivity sooner. It was my intetion that JIRA should naturally adapt to the way you work best, and remain easy-to-use regardless of content.</p>
			
			<div class="image rounded"><img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/jira_og.png" width="100%" /></div>
			<p class="caption inline"><strong>Above/</strong> Previous JIRA design, 2002&ndash;17</p>
			
			<h3>Evolving a design language</h3>
			
			<p>This project was a prime candidate for the adoption of the new <a href="https://atlassian.design/" target="_blank">Atlassian design language</a>, &ldquo;ADG 3&rdquo;. Working with such a fully-featured and established base presented an ideal opportunity to spend extra time on UX and micro-interactions, and less time worrying about colours or the design of componentised elements.</p><p>Above all else, it afforded me the opportunity to strip JIRA back to only what was absolutely necessary &mdash; both from a visual and UX standpoint. By far the biggest challenge was to ensure that JIRA appeared visually simple, even when dense with information and content.</p>
			
			<div class="image rounded"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/harrison.jpg" /></div>
			<div class="image rounded close"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/full_board.png" /></div>
			
			<p class="caption"><strong>Above <em class="special amp">&amp;</em> below/</strong> Columns with multi-directional scrolling. When empty, or with multiple columns and potentially thousands of cards, boards must be clear and easy to understand</p>
			
			<div class="image"><img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/columns_full.png" width="100%" /></div>
			
			<p class="caption"><strong>Below/</strong> Even contextual menus in JIRA have the potential to become complex and overloaded with information, so it was important to consider things like overflow from the outset</p>
		</div>
	</div>	

	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/filters.png" />
	</div>
	
	<div class="container">	
		<div class="project">
			<h3>Prototyping</h3>
			<p>Because the majority of the visual styling decisions were already in place from the design system, I turned my attention to the interaction design &mdash; which involved prototyping&hellip; from scrolling interactions and shadows, to focus states and animation.</p>
			
			<p>These prototypes were also used in extensive user testing, which were performed every 2 weeks to ensure we didn&rsquo;t get too lost in exploration or polish &mdash; and were remaining true to our hypothesis and design principles.</p>
			
			<p>The below example, showing how a board can be filtered by assignee, is a good demonstration of how visual decisions needed to be made in code rather than from static design files.</p>
		</div>
	</div>
	
	<div class="fullImage">
		<img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/filters01.gif" />
	</div>
		
	<div class="container">	
		<div class="project">
			<p>New functionality was introduced where it made sense, and usually in response to a shift in user expectations. The ability to add tasks directly within a column &mdash; something that&rsquo;s possible in Asana, Trello and the likes &mdash; was an example of such functionality. Prototyping was important to determine the ideal placement of text (notice how the word &lsquo;Create&rsquo; and the text cursor are aligned) and how animation could indicate success without being too over-the-top (when adding multiple in quick succession).</p>
			
			<p class="caption inline"><strong>Below/</strong> That &ldquo;click&rdquo; animation&hellip;</p>
			
			<div class="image first custom-create"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/createtask_trim.gif" /></div>			
			
			<p>Shadows also played a big part to indicate the depth of content, especially when scrolling. The prototype below demonstrated a stacking concept &mdash; not too dissimilar to that seen in iOS &mdash; which was difficult to explain with static design or in words.</p>
			
			<div class="image rounded"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/scroll.gif" /></div>
			
			<h5>God is in the details</h5>
			<p>With any pattern library, it&rsquo;s important to sweat the details &mdash; they&rsquo;re the difference between a collection of building blocks, and a polished interface. JIRA using ADG 3 was no exception. Special attention was spent on the details that usually get forgotten, like how shadows interact with the content beneath them, and the alignment and relationship of content.</p>
			
			<div class="image"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/shadow_detail.png" /></div>		
				
			<p>Applying the design language in the context of such a large product helped evolve patterns and styles at a company-wide level &mdash; and has informed the design direction of other products with similar elements, like columns and cards. In my opinion, this two-way relationship of consuming, modifying and updating pattern libraries when applied in context is the true key to success for any living, breathing design system.</p>
			
			<div class="image rounded"><img class="lazyload" width="100%" data-sizes="auto" data-src="../_images/atlassian/detailing.png" /></div>
		</div>
	</div>
	
	<div class="fullImage close rounded">
		<img class="lazyload" data-sizes="auto" data-src="../_images/atlassian/full_board_people.png" />
	</div>
		
	<div class="container">	
		<div class="project">
			
			<dl class="outro">
				<div class="col left">
					<dt>Position</dt>
						<dd>Lead Designer</dd>
					<dt>Company</dt>
						<dd>Atlassian</dd>
					<dt>Date</dt>
						<dd>2016&ndash;17</dd>
				</div>
				<div class="col middle">			
					<dt>Responsibilities</dt>
						<dd>UX <em class="special amp">&amp;</em> UI</dd>
						<dd>User-testing</dd>
						<dd>Design workshop facilitation</dd>
						<dd>Mentoring</dd>
						<dd>HTML prototyping</dd>
				</div>
				<div class="col right">
					<dt>More</dt>
						<dd><a href="https://uigarage.net/blog-post/learn-atlassians-lead-designer-buzz-usborne/">Interview</a></dd>
						<dd><a href="https://www.atlassian.com/software/jira">JIRA Software</a></dd>
						<dd><a href="https://atlassian.design/">Atlassian Design</a></dd>
				</div>
			</dl>
		
<?php
	include(path.'_includes/footer.php');
?>