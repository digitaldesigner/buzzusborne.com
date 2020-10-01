<?php
	define('path','../');
	$hideNav=TRUE;
	$bodyclass = "text dark-logo";
	include(path.'_includes/header.php');
	echo "	<div class=\"container\">\n";
	printf(str_replace("_root_",path,file_get_contents(path.'_includes/nav.html')),NULL,' white',NULL,NULL,NULL,' active',NULL);
?>
		
		<div class="textonly">
			<div class="showcase spacer-bottom">
				<div class="work single oversize"><img src="../_assets/home/Buzz_Usborne.jpg" /></div>
			</div>

			<p class="lead large">I&rsquo;m Buzz, a British designer who works remotely from a tiny surf town on the East coast of Australia. Currently I&rsquo;m Principal Designer at <a href="https://helpscout.com/" class="chilled" target="_blank">Help Scout</a> &mdash; I also <a href="https://yourfriend.buzz/" class="chilled">coach design teams</a>, advise startups and ocassionally write about design.</p>

			<p>Through a career of designing and managing, I&rsquo;ve found that I&rsquo;m at my best when I&rsquo;m helping others succeed. Today I do that through building design systems, running workshops, speaking and mentoring.</p>

			<p>As a designer, I&rsquo;m passionate about solving tough customer problems by combining thoughtful research, clever technology and beautiful design. I&rsquo;ve previously contributed to, and led design teams at Atlassian, Campaign Monitor, Skype, Sendle and a number of start-ups and agencies in Europe and Australia.</p>
			
			<p>In 2008 I founded <a href="https://prevue.it/" class="chilled" target="_blank">Prevue</a>, a design presentation tool used by over 40,000 design agencies to share concepts and gather client feedback &mdash; a product I built and managed until it was acquired in 2018. During that time I learned to code, honed my visual skills and came to understand the importance of business in design.</p>

			<p>Before designing for a living, I was a competitive sailor and coach. I taught all ages and abilities whilst also participating in a number of internationally recognized events. My mind is never too far from the ocean, and I appreciate the importance of a healthy work/life balance. So when I&rsquo;m not online, you&rsquo;ll find me outdoors with my wife and son &mdash; swimming, sand running or travelling.</p>
			
			<h3>I&rsquo;ve made friends at&hellip;</h3>
		</div>
		
		<div class="fullwidth mobSpacerTop">
			<div class="container">
			
				<div class="moments" id="timeline">
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Absolute</strong><br />Junior&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>05</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Popcorn</strong><br />Graphic&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>06</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Large&nbsp;Design</strong><br />Digital&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>07</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Story&nbsp;Worldwide</strong><br />Senior&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>08</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Prevue</strong><br />Founder</div><div class="year"><em>20</em><span>&lsquo;</span>09</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Skype</strong><br />UI&nbsp;Design&nbsp;Lead</div><div class="year"><em>20</em><span>&lsquo;</span>10</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Campaign&nbsp;Monitor</strong><br />Head&nbsp;of&nbsp;Design</div><div class="year"><em>20</em><span>&lsquo;</span>11</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Campaign&nbsp;Monitor</strong><br />Head&nbsp;of&nbsp;Design</div><div class="year"><em>20</em><span>&lsquo;</span>12</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Campaign&nbsp;Monitor</strong><br />UX&nbsp;Director</div><div class="year"><em>20</em><span>&lsquo;</span>13</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Campaign&nbsp;Monitor</strong><br />UX&nbsp;Director</div><div class="year"><em>20</em><span>&lsquo;</span>14</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer left"><strong>Sendle</strong><br />Product&nbsp;Lead</div><div class="year"><em>20</em><span>&lsquo;</span>15</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Atlassian</strong><br />Lead&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>16</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Atlassian</strong><br />Lead&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>17</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Help&nbsp;Scout</strong><br />Lead&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>18</div></div>
					<div class="point"><span class="marker single"></span><div class="pointer right"><strong>Help&nbsp;Scout</strong><br />Principal&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span>19</div></div>
					<div class="point hovered"><span class="marker this"></span><div class="pointer right highlight"><strong>Help&nbsp;Scout</strong><br />Principal&nbsp;Designer</div><div class="year"><em>20</em><span>&lsquo;</span><?=date('y')?></div></div>
				</div>
			
				<div class="textonly">
					<p><strong>Say &ldquo;hello&rdquo;</strong><br /><a href="https://linkedin.com/in/buzz/">LinkedIn</a><br /><a href="mailto:hello@buzzusborne.com">Email</a><br /><a href="https://twitter.com/@buzzusborne/">Twitter</a><br /></p>
				</div>
			</div>
		</div>

	
<?php

	$JS = "text.js";
  $hideModal = TRUE;
	include(path.'_includes/footer.php');
?>