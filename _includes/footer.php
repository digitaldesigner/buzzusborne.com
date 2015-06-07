		
		<?php if(!isset($hideFoot)) { ?><div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
			<ul>
				<li><a href="<?php echo path; ?>/">Home</a></li>
				<li><a href="<?php echo path; ?>about/">About</a></li>
				<li><a href="http://linkedin.com/in/buzzusborne/">LinkedIn</a></li>
				<li class="right">&copy;<?php echo date('Y'); ?></li>
			</ul>
		</div><?php } ?>
		
		
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="<?php echo path; ?>_assets/js/lazysizes.min.js"></script>	
	<script src="<?php echo path; ?>_assets/js/modal.js"></script>	
</body>
</html>