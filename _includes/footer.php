		
			<?php if(!isset($hideFoot)) { ?><div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
				<ul>
					<li><a href="<?php echo path; ?>/">Home</a></li>
					<li><a href="<?php echo path; ?>about/">About</a></li>
					<li><a href="https://linkedin.com/in/buzzusborne/">LinkedIn</a></li>
					<li class="right">&copy;<?php echo date('Y'); ?></li>
				</ul>
			</div><?php } ?>
	
		</div>	
	
		<div id="keycontrols"<?php if(isset($hideNav)) { echo " class=\"hidden\""; }?>>
			<ul>
				<?php 
				if($prev || $next){ 
					if($prev){ echo $prev; }
					if($next){ echo "\n			".$next; } 
				}
				?>
			
			</ul>
		</div>
	
  <?php if(!isset($hideFoot)) { ?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="<?php echo path; ?>_assets/js/lazysizes.min.js"></script>	
	<script src="<?php echo path; ?>_assets/js/modal.js"></script><?php } ?>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-64855407-<?php if(isset($_SERVER) && is_array($_SERVER) && array_key_exists('HTTP_HOST',$_SERVER)){
		switch ($_SERVER['HTTP_HOST']) {
		    case "buzzusborne.com":
		        echo "1";
		        break;
		    case "digital.design":
		        echo "2";
		        break;
		    case "usborne.buzz":
		        echo "3";
		        break;
				default:
						echo "1";
		}
	}?>', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>