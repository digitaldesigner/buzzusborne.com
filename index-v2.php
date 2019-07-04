<?php 
	define('path','');
	$hideNav=TRUE;
	$homepage=TRUE;
	$navigation['twitter_img']="https://buzzusborne.com/casestudy/_images/beacon/beacon-cover.png";
	$hideLogo = TRUE; 
  include(path.'_includes/header.php');
?>

  <div class="breakout landing">
    <section>
      <h1>Hi, I&rsquo;m Buzz</h1>
      <h2>I&rsquo;m a Design Coach working with individuals, startups and tech teams. I help design teams reach their full potential through hiring, leadership, mentorship and building sustainable practices that enable designers and businesses to succeed.</h2>
      <h3>Currently I work with <a href="#">Help Scout</a> and consult with startups looking to grow their design capabilities. Previously I was the UX Director at <a href="#">Campaign Monitor</a>, Head of Product at <a href="#">Sendle</a> and Lead Designer at <a href="#">Atlassian</a> and <a href="#">Skype</a>. I also Founded <a href="#">Prevue</a> <em>(acq &rsquo;18)</em>.</h3>
      <h3>I have 15+ multi-diciplinary experience both client-side and agency, in-house and remote, and a deep love of cross-functional team collaboration.</h3>
      
      <ol class="tinyNav">
        <li><a href="#">Work</a></li>
        <li><a href="#">Speaking</a></li>
        <li><a href="#">Coaching</a></li>
        <li><a href="#">About</a></li>
      </ol>
    </section>
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