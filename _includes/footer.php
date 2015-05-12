		
		<div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
			<ul>
				<li><a href="<?php echo path; ?>/">Home</a></li>
				<li><a href="<?php echo path; ?>about/">About</a></li>
				<li><a href="http://linkedin.com/in/buzzusborne/">LinkedIn</a></li>
				<li class="right">&copy;<?php echo date('Y'); ?></li>
			</ul>
		</div>
		
		
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>
  <script type="text/javascript" charset="utf-8">
		$(function() {$("img.lazy").lazyload({effect : "fadeIn"});});
  </script>
	
</body>
</html>