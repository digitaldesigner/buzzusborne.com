<?php 
	define('path','');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/casestudy/_images/beacon/beacon-cover.png";
	$hideLogo = TRUE; 
  include(path.'_includes/header.php');
?>

	<div class="container floaty">
		<div id="header" class="project">
			<h1><a href="#">Buzz Usborne</a></h1>
		</div>
	</div>

  <div class="breakout landing">
    <section>
      <h1>I'm Buzz, casually tall</h1>
      <h2>Currently Product Lead @<a href="#">HelpScout</a> &amp; consultant and mentor.</h2>
      <h3>Previously UX Director at <a href="#">Campaign Monitor</a>, Head of Product at <a href="#">Sendle</a> and Lead Designer at <a href="#">Atlassian</a>, <a href="#">Skype</a> &amp; Founder of <a href="#">Prevue</a>.</h3>
  </div>
  
  <div class="container">
		
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