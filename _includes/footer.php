		
		<div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
			<ul>
				<li><a href="<?php echo path; ?>/">Home</a></li>
				<li><a href="<?php echo path; ?>about/">About</a></li>
				<li><a href="http://linkedin.com/in/buzzusborne/">LinkedIn</a></li>
				<li class="right">&copy;<?php echo date('Y'); ?></li>
			</ul>
		</div>

		<div id="overlay">
			<h1>Behind the scenes</h1>
			<h2>Some of the sketches, concepts and ideas that went into this project.</h2>
			<hr />
			<div id="conceptWork"></div>
			<a href="javascript://" class="closeModal" title="Close">&#215;</a>
		</div>
	</div>
	<div id="backdrop"></div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo path; ?>_assets/js/modal.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-32687371-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</body>
</html>