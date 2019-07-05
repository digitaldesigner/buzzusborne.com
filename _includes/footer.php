			<?php if(!isset($hideFoot)) { ?><div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
				<ul>
					<?php if(!isset($homepage)) {?><li><a href="<?php echo path; ?>/">Home</a></li>
<?php } ?>
					<li><a href="<?php echo path; ?>about/">About</a></li>
                    <li><a href="https://twitter.com/@buzzusborne/">@buzzusborne</a></li>
					<li class="right">No cookies, no tracking, no CMS... just love.</li>
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
	<?php if(isset($JS)) { ?><script src="<?php echo path; ?>_assets/js/<?=$JS?>"></script><?php } elseif(!isset($hideModal)){ ?><script src="<?php echo path; ?>_assets/js/lazysizes.min.js"></script>
	<script src="<?php echo path; ?>_assets/js/projects.js"></script><?php } } ?>

</body>
</html>