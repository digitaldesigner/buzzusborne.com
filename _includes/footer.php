	<?php if(!isset($hideFoot)) { ?><div id="footer"<?php if(isset($home)) { echo 'class="break"'; } ?>>
			<ul>
				<li><a href="<?php echo path; ?>">Home</a></li>
				<li><a href="<?php echo path; ?>work/">Work</a></li>
				<li><a href="https://yourfriend.buzz/">Coaching</a></li>
				<li><a href="<?=path?>about/">About</a></li>
				<li class="right" title="No tracking, no cookies. Just love">✌️</li>
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
	<script src="//cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<?php if(isset($JS)) { ?>	<script src="<?php echo path; ?>_assets/js/<?=$JS?>"></script><?php } elseif(!isset($hideModal)){ ?>	<script src="<?php echo path; ?>_assets/js/lazysizes.min.js"></script>
	<script src="<?php echo path; ?>_assets/js/projects.js"></script><?php } } ?>
<?php if(isset($script) && $script){ echo "	".$script; } ?>

</body>
</html>