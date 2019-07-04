<?php 
	define('path','');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/casestudy/_images/beacon/beacon-cover.png";
	include(path.'_includes/header.php');
?>
		<div id="about">		
			<p class="lead">I&rsquo;m a Product Designer. I love solving tough customer problems through beautiful design, clear communication and clever technology. I've been sweating the details for companies large and small for over <?php echo (date('Y') - 2005); ?> years. <br /><a href="about/">About me</a></p>
						
			<h3>My Work</h3>
		</div>
		
		<ul class="caseStudies">
			<?php
					
				$i=1;
				foreach($manifest as $key => $page):
					if($i<=$maxCaseStudies){
					
						echo '	<li>
					<a href="casestudy/'.$page['path'].'">
						<div class="image '.strtolower($page['path']).' leadImg"><img src="casestudy/_images/'.$page['path'].'/'.$page['thumb'].'" /></div>
						<h5><span>'.$page['name'].'</span></h5>';
						
						if(array_key_exists('meta',$page)){
							echo '
						<p>'.$page['meta'].'</p>';
						}
						
					echo '
					</a>
				</li>
			';
						
					} else {
						break;
					}
					$i++;
				endforeach;
					
				?></ul>
        </div>
        
<?php if(count($manifest)>$i) {?>
        <div class="breakout" id="fancy">
            <div class="container textlinks">
                <h3>More&hellip;</h3>
            
				<ul>
				<?php
				
				foreach($manifest as $key => $page):
					if($page['order']>$maxCaseStudies){
						echo '	<li><a href="casestudy/'.$page['path'].'"><span>'.$page['name'].'</span>';
						
						if(array_key_exists('meta',$page)){
							echo '<p>'.$page['meta'].'</p>';
						}

						echo '</a></li>
				';
					}
				endforeach;
				
				?></ul>
            </div>
        </div>

<?php } ?>
        <div class="container">
<?php
	include(path.'_includes/footer.php');
?>