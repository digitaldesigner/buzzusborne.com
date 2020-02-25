<?php 
	define('path','../../');
	include(path.'_includes/header.php');
?>
		<div id="projectIntro">
			<h1>Let&rsquo;s Chat</h1>
			<span class="subscript">Principal Designer <em>&#8226;</em> Help Scout <em>&#8226;</em> 2017&ndash;<?=date('Y')?></span>
		</div>
	</div>
	
	<div class="fullImage top">
		<img class="leadImg" src="../_images/helpscout-chat/cover.png"  />
	</div>
	
	<div class="container">	
		<div class="project alignLeft">
			<h3 class="lrg">Designing Beacon</h3>
			<p>The brief was straight-forward enough &mdash; to bring chat as a communication channel to the Help Scout platform via the existing embeddable widget, Beacon. The original Beacon (shown below) was designed as a super simple way to view help documentation within our customers&rsquo; websites &mdash; though never intended to extend to much more. So... add chat to the widget and call it a day 😜</p>
			
			<p class="info"><strong>Below/</strong> The original Beacon</p>
			
	        <div class="image under transparent">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/beacon-original.png" width="100%" />
			</div>
			
			<h3 class="space-above">Starting from scratch</h3>
			<p>Since this small widget was going to be the gateway to chat and our future plans, I pushed for re-designing Beacon entirely using mobile-first principles. Aside from wanting a fresh start, early explorations revealed that my biggest challenge was going to be navigation &mdash; with so much functionality bundled into a small space, traditional desktop methods would have made this little tool feel heavy and hard to use.</p>
			
			<div class="video-link">
				<a href="https://www.loom.com/share/312ec6b8a6344bcb9119cae821c97d02" target="_blank">
					<div class="thumb"><video playsinline autobuffer autoplay muted loop><source src="https://cdn.loom.com/sessions/thumbnails/312ec6b8a6344bcb9119cae821c97d02-00001.mp4" type="video/mp4"></video></div>
					<p><strong class="loom">Beacon Walkthrough (May 2017)</strong><br />Talking through a very early stage concept to identify complexity around sections and navigation.</p>
				</a>
			</div>
			
			<p>Through lots of trial-and-error, user testing and big-boy tears I ended up using layering and depth to give the user a sense of structure without overloading the UI with navigation. I wrote about <a href="https://www.helpscout.com/blog/beacon-design/">my design process here</a>, and how that "ahah!" moment struck whilst on date-night with my wife.</p>
			<p class="info"><strong>Below/</strong> How layering works in Beacon</p>
        </div>
    </div>

	<div class="fullImage">
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/depth.png" width="100%" />
			</div>			
	</div>
	
	<div class="container">	
		<div class="project alignLeft">
	
	        <div class="image under transparent">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/layering.png" width="100%" />
			</div>
			
			<p>Stacking content was a really effective way of containing lots of functionality, however animation emerged as a really important method of providing the visitor with a sense of direction. Without animation, it was difficult to know where you came from, and how to get back. So, prototyping was key for this project &mdash; as was communicating animation&rsquo;s importance to the engineers.</p>
			
<!-- START BREAKOUT -->
        </div>
    </div>

	<div class="fullImage">
	    <video playsinline autobuffer autoplay muted loop>
	      <source src="../_images/helpscout-chat/_mp4/Transitions.mp4" type="video/mp4">
	    </video>
	</div>

	<div class="container">	
		<div class="project alignLeft">
<!-- END BREAKOUT -->
			
			<h3 class="space-above">Designing a personality</h3>
			<p>Another key realization was the importance of UI details and micro-interactions to give each Beacon a fun and friendly personality, whilst also remaining unique to the brands and websites that were hosting the widget. As each Beacon could be branded and translated, personality came in the form of subtle animation and fun, unusual and sometimes-a-bit-weird interactions.</p>
			
<!-- START BREAKOUT -->
        </div>
    </div>

	<div class="fullImage">
	    <video playsinline autobuffer autoplay muted loop>
	      <source src="../_images/helpscout-chat/_mp4/Beacon-Rating.mp4" type="video/mp4">
	    </video>
	    <video playsinline autobuffer autoplay muted loop>
	      <source src="../_images/helpscout-chat/_mp4/Confetti.mp4" type="video/mp4">
	    </video>
	</div>

	<div class="container">	
		<div class="project alignLeft">
<!-- END BREAKOUT -->
			
			<div class="video-link">
				<a href="https://soapbox.wistia.com/videos/rMZHCBbCce/" target="_blank">
					<div class="thumb wistia"><img src="../_images/helpscout-chat/video-thumb-buzz.gif" width="100%" /></div>
					<p><strong class="miscvideo">Introducing some improvements</strong><br />I presented a more personal walkthrough for our Engineers on some ideas I had around animations, and why they were important for our customers.</p>
				</a>
			</div>
			
			<p>Eventually Beacon scaled to a being a fully-featured docs and chat app that&rsquo;s used daily by thousands of customers and their visitors to educate and communicate. During the design and build phases, I also created a component library based off our design system to help keep things consistent.</p>
			
        </div>
    </div>

	<div class="fullImage">
	    <div class="image">
			<a data-fancybox="beacon" href="../_images/helpscout-chat/key-screens-fullsize.png"><img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/key-screens-fullsize.png" width="100%" /></a>
		</div>
	</div>
	
	
	<div class="container">	
		<div class="project alignLeft">		
			<p>As an additional challenge, every screen of Beacon can be translated and themed to match a customer&rsquo;s brand...</p>
			
	        <div class="image half">
				<a data-fancybox="beacon-theme-neutral" href="../_images/helpscout-chat/beacon-theme-neutral-fullsize.png"><img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/beacon-theme-neutral.png" width="100%" /></a>
			</div>
	        <div class="image half right">
				<a data-fancybox="beacon-theme-light" href="../_images/helpscout-chat/beacon-theme-light-fullsize.png"><img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/beacon-theme-light.png" width="100%" /></a>
			</div>
	        <div class="image close">
				<a data-fancybox="beacon-theme-dark" href="../_images/helpscout-chat/beacon-theme-dark-fullsize.png"><img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/beacon-theme-dark.png" width="100%" /></a>
			</div>
			
			<hr class="sectionBreak" />
			
            <h3 class="lrg">Designing a Chat Admin</h3>
			<p>When a visitor sends a chat message via Beacon, there needs to be a place for Support Pros to receive, respond, manage and triage those messages. So whilst Beacon was being worked on, I set out to extend the existing Help Scout platform from supporting only email and phone to also (optionally) allowing chat communication. For this I designed an entirely new part of the product which neatly integrated with the old.</p>
			
			<div class="video-link">
				<a href="https://www.loom.com/share/4df68577242b47f5a325ace585256dc0" target="_blank">
					<div class="thumb"><img src="../_images/helpscout-chat/video-thumb-wires.png" width="100%" /></div>
					<p><strong class="loom">Structural Decisions (July 2017)</strong><br />A walkthrough of some wireframes and ideas on how to integrate chat into the wider product.</p>
				</a>
			</div>
			
			<p>Turns out, chat apps are difficult to design &mdash; so as with Beacon there was plenty of iteration and testing involved in creating a seamless and native-feeling experience.</p>

        </div>
    </div>
	<div class="fullImage">
	    <video playsinline autobuffer autoplay muted loop>
	      <source src="../_images/helpscout-chat/_mp4/Chat.mp4" type="video/mp4">
	    </video>
    </div>

	<div class="container">	
		<div class="project alignLeft">
			
			<p class="info"><strong>Above/</strong> Real-time is truly a different ballgame than email</p>
			
			<p>Additionally features like reporting, real-time availability, saved replies and keyboard shortcuts were a huge consideration for how the product operated and interacted with the existing tool set. </p>
			
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/chat-note.png" width="100%" />
			</div>
	        <div class="image close">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/transcript.png" width="100%" />
			</div>
	        <div class="image close">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/availability.png" width="100%" />
			</div>
			
			<hr class="sectionBreak" />
			
			<h3 class="lrg">Onboarding</h3>
			<p>Whilst complex and powerful in nature, I didn&rsquo;t want Beacon or the Chat Admin to feel overwhelmingly complicated or technical to create &mdash; so close attention was paid to designing an onboarding flow that felt lightweight, yet powerful. Ultimately Beacon isn&rsquo;t much use if no-one is creating them!</p>
		</div>
	</div>
	
	<div class="fullImage under">
        <div class="image">
			<a data-fancybox="beacon-onboarding" href="../_images/helpscout-chat/beacon-onboarding-fullsize.png"><img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/full-onboarding.png" width="100%" /></a>
		</div>
	</div>
	
	<div class="container">	
		<div class="project alignLeft">
			
			<p>Customers are able to customize colors, icons, translate every bit of text, even decide how prominent they want chat or self-service to be. It&rsquo;s safe to say that settings play a bit part of the overall experience.</p>
			
			<div class="video-link">
				<a href="https://www.loom.com/share/bbfbe3eba3f440daad48b801aba12621" target="_blank">
					<div class="thumb"><video playsinline autobuffer autoplay muted loop><source src="https://cdn.loom.com/sessions/thumbnails/bbfbe3eba3f440daad48b801aba12621-00001.mp4" type="video/mp4"></video></div>
					<p><strong class="loom">Settings Interactions (Dec 2019)</strong><br />A quick walkthrough of some new interaction states in response to a design crit session the day before.</p>
				</a>
			</div>
			
			<h3>Settings are fun, too</h3>
			<p>Although it&rsquo;s impossible to avoid forms, I saw no reason why creating a bespoke chat widget couldn&rsquo;t be an enjoyable process. Sometimes this just meant choosing the right components, but other times it called for creating entirely new patterns which used the same depth techniques as Beacon.</p>
	        
			<div class="image transparent">
			    <video class="image" playsinline autobuffer autoplay muted loop>
			      <source src="../_images/helpscout-chat/_mp4/Radio-Tiles.mp4" type="video/mp4">
			    </video>
			</div>
        </div>
    </div>
	
	<div class="fullImage">
	    <video playsinline autobuffer autoplay muted loop>
	      <source src="../_images/helpscout-chat/_mp4/Accordion.mp4" type="video/mp4">
	    </video>
	</div>
	
	<div class="container">
		<div class="project alignLeft">
			
			<hr class="sectionBreak" />
			<h3 class="lrg">Proactive Messages</h3>
			<p>In the time since Beacon was launched, consumer behavior has shifted &mdash; causing us to shift and extend the product in various ways. One of these shifts was towards proactive messaging... you know those little popups that ask if you want to chat? Building upon the foundations of Beacon, I designed these outbound types of messages to feel more personal, targeted and human than what you&rsquo;d expect.</p>
			
			<p>Messages, as they&rsquo;re known within Beacon, can be used from cold outreach to product onboarding and hyper-targeted alerts.</p>
			
			<div class="image transparent under">
			    <img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/messages.png" width="100%" />
			</div>
			
			<p>As we moved into the territory of marketers, growth and business development teams &mdash; the need for metrics and reporting increased. Plus, what designer portfolio would be complete without a dashboard?</p>
			
        </div>
    </div>
	
	<div class="fullImage">
        <div class="image">
			<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/messages-dashboard.png" width="100%" />
		</div>
	</div>
	
	<div class="container">
		<div class="project alignLeft">
	        <div class="image">
				<img class="lazyload" data-sizes="auto" data-src="../_images/helpscout-chat/messages-reports.png" width="100%" />
			</div>
			
			<hr class="sectionBreak" />
			
			<h3 class="lrg">And finally&hellip;</h3>
			<p>As I worked through this body of work &mdash; I also used the opportunity to build out a design system and visual language for the entire Help Scout design team. We call it HSDS (<a href="../hsds/">see more</a>) &mdash; a full platform UI library that exists as a translation layer between Figma and React (via StoryBook). Today I work as the design lead of HSDS, which has 12 key contributors spanning design and engineering.</p>
			
			<div class="video-link">
				<a href="https://www.youtube.com/watch?v=IcUgFhn0XxU" target="_blank">
					<div class="thumb"><img src="../_images/helpscout-chat/video-buzz-conf.gif" width="100%" /></div>
					<p><strong class="youtube">Moving your team from Sketch to Figma</strong><br />Talking at a conference in Sydney about moving our design systems from Sketch to Figma.</p>
				</a>
			</div>
			
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