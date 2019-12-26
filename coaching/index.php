<?php
	define('path','../');
	$hideNav=TRUE;
	$bodyclass = "alt text";
	include(path.'_includes/header.php');
?>
	<div class="container">

<?php 
					printf(file_get_contents(path.'_includes/nav.html'),
					'', /* container class */
					' white', /* h1 class (i.e. "color") */ 
					path, /* home href */
					path."#work", /* work href */
					'', /* work class */
					path.'coaching/', /* coaching href */
					' active', /* coaching class */
					path.'about', /* about href */
					'',  /* about class */
					''
				);
?>

		<div class="textonly">
			<div class="showcase spacer-bottom">
				<div class="work single oversize"><img src="../_assets/gfx/meetup.jpg" /></div>
			</div>

			<p class="lead large">I&rsquo;m Buzz &mdash; Designer and Coach with over <?php echo (date('Y') - 2005); ?> years experience leading products and teams. I&rsquo;ve been Principal Designer at <a href="https://www.helpscout.com/" class="chilled" target="_blank">Help Scout</a>, Design Lead at <a href="https://www.atlassian.com/" class="chilled" target="_blank">Atlassian</a>, Head of Product at <a href="https://www.sendle.com/" class="chilled" target="_blank">Sendle</a>, Director of UX at <a href="https://www.campaignmonitor.com/" class="chilled" target="_blank">Campaign Monitor</a>, UI Lead at <a href="https://www.skype.com/" class="chilled" target="_blank">Skype</a> and Founder of <a href="https://getprevue.com/" class="chilled">Prevue</a>.</p>
			
			<p>I regularly speak and write about remote team collaboration, scaling design team processes and building creative distributed organizations. Through positions on advisory boards, incubators and mentoring programs, I&rsquo;ve had the pleasure of coaching world-class designers and advising startups &mdash; helping Founders and leadership teams identify the structures, processes and skills necessary to scale design effectively within their business.</p>
				
	
			<h2 class="spacer--xlarge">Coaching</h2>
			<p>I currently work with tech companies to help understand the gaps in their design capabilities, and identify the types of people, processes and structures necessary to help deliver their long term goals. Often that involves writing job descriptions to attract top talent, coaching existing teams, interviewing candidates or providing ongoing support. Sometimes I just explain the difference between UX and UI.</p>
			<p>I help awesome companies find awesome people. And in that capacity I&rsquo;ve worked with some of the fastest growing B2B and B2C SaaS companies here in Australia and the US, across a variety of industries &mdash; including not-for-profit, education, fintech and healthcare.</p>

		</div>
	
	<div class="textonly inline">
		<div class="colgroup">
			<div class="column">			
				<p><strong>Recent Interviews</strong></p>
				<p><a href="https://userleague.com/buzz-usborne/" target="_blank">User League</a><br />
				<a href="https://uxplanet.org/20-designers-20-questions-20-weeks-60ee38c36b62" target="_blank">UX Planet</a><br />
				<a href="http://nicelydone.club/interviews/buzz-usborne/" target="_blank">Nicely Done</a><br />
				<a href="https://uigarage.net/blog-post/learn-atlassians-lead-designer-buzz-usborne/" target="_blank">UI Garage</a><br />
				<a href="http://www.intelligentproductdesign.com/buzz-usborne/" target="_blank">Intelligent Product Design</a><br />
				<a href="http://www.tractor.edu.au/news/industry-interview-buzz-usborne" target="_blank">Tractor: Industry Interview</a><br />
				<a href="https://ausdesignradio.com/episodes/272693126" target="_blank">Australian Design Radio</a></p>
			</div>
			
			<div class="column">
				<p><strong>Talks</strong></p>
				<p><a href="https://www.youtube.com/watch?v=IcUgFhn0XxU" target="_blank">Sydney Designers Meetup</a><br />
				<a href="https://www.invisionapp.com/webinars/designingtogether/" target="_blank">InVision Design Talks</a><br />
				<a href="https://www.youtube.com/watch?v=cCNAWVt7O0I" target="_blank">Sydney Opera House</a><br />
				<a href="https://www.youtube.com/watch?v=dxHwDzgdv9g" target="_blank">Dropbox for Business</a></p>
			</div>
			
			<div class="column">
				<p><strong>My Writing</strong></p>
					<p><a href="https://www.smashingmagazine.com/2019/09/migrating-design-systems-sketch-figma/">Smashing Magazine</a><br />
					<a href="https://www.helpscout.com/blog/beacon-design/">The Design of Beacon</a><br />
					<a href="https://uxdesign.cc/designing-across-borders-683252ac668c">Designing Across Borders</a><br />
					<a href="https://medium.com/help-scout/more-tips-for-building-your-sketch-ui-library-975a44416f59">Building a Sketch Library</a><br />
					<a href="https://medium.com/@buzzusborne/where-to-find-inspiration-2c39470f3872#.4qc1qce4j">Where to Find Inspiration</a><br />
					<a href="https://medium.com/prevue-app/god-is-in-the-details-bc3a9a9a5d88">God is in the Details</a><br />
					<a href="https://medium.com/prevue-app/a-designer-s-guide-to-great-client-presentations-3fdb9871696b">A Guide to Presentating</a><br />
					<a href="https://medium.com/@buzzusborne/the-intersection-ba071f99d9d4">The Intersection</a></p>
			</div>
			
		</div>
	</div>
	
	<div class="textonly">
		<p class="highlight"><strong>Say hi!</strong><br /><a href="mailto:hello@buzzusborne.com">Email</a> or call +61 (0)451 116 531</p>
	</div>
	
		
<?php
	$JS = "text.js";
  $hideModal = TRUE;
	include(path.'_includes/footer.php');
?>