<?php 
	if(array_key_exists('HTTP_X_REQUESTED_WITH',$_SERVER) && $_SERVER['HTTP_X_REQUESTED_WITH']) {
		$imgPath = NULL;
		$AJAX=TRUE;
	} else{
		define('path','../../../');
		$imgPath = "../";
		$AJAX=FALSE;
		include(path.'_includes/header.php');
	}
?>
		<div id="project">
			<p>Nothing here yet</p>
		</div>
		
<?php if(!$AJAX) { include(path.'_includes/footer.php'); } ?>