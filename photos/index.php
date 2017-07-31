<?php
	define('path','../');
	$hideNav=TRUE;
	$navigation = array(
		"next" => array(
			"path"	=> "..",
			"title"	=> "Home"
		),
		"prev" => array(
			"path"	=> "../about",
			"title"	=> "About"
		),
		"this"=> array(
			"title"	=>	"Photos (@buzz)"
		)
	);
	
	// Instagram stuffs
	$access_token="10107.ffd12dd.9c84dc0a5ade4640b35a240575751778";
	$photo_count=10;
	$json_link="https://api.instagram.com/v1/users/self/media/recent/?";
	$json_link.="access_token={$access_token}&count={$photo_count}";
	$json=file_get_contents($json_link);
	$obj=json_decode($json, true, 512, JSON_BIGINT_AS_STRING);
	
	// Regular header
	$bodyclass = "ig";
	$i=0;
	foreach ($obj['data'] as $post):
		if($i==0) {
			$navigation['twitter_img']=$post['images']['standard_resolution']['url'];
			break;
		}
	endforeach;
	$baseOverride = TRUE;
	include(path.'_includes/header.php');
?>
	</div>
	
	<ul class="instagram">
<?php
			
			$i=1;
			foreach ($obj['data'] as $post):
				
				if($i % 2 == 0){
					
				} else {
					echo "		<div class=\"wrap\">\n\n";
				}
				
				echo "			<li>";
				echo "\n				<a href='{$post['link']}' target='_blank' title=\"{$post['caption']['text']}\">
					<img class='img-responsive photo-thumb' src='{$post['images']['standard_resolution']['url']}' />
				</a>";

				echo "\n				<p>";
				
				$post_like = NULL;
				$post_loc = NULL;
				if(
					array_key_exists('location',$post)
					&& count($post['location'])
					&& $post['location']['latitude']
					&& $post['location']['longitude']
				) {
					$locName = "Location";
					if($post['location']['name']){
						$firstLoc = explode(",",$post['location']['name']);
						$locName = $firstLoc[0];
					}
					
					$post_loc = "<a href=\"https://www.google.com/maps/preview/@".$post['location']['latitude'].",".$post['location']['longitude'].",18z\" target=\"_blank\" class=\"location\">{$locName}</a>";
				}
				$pic_like_count=$post['likes']['count'];
				if($pic_like_count>10){
					$post_like = "<span class=\"likes\"><strong>&#10084;</strong> {$pic_like_count}</span>";
				}
				
				if($post_loc || $post_like){ echo $post_loc.$post_like; }
				
				echo "</p>";
				echo "\n			</li>\n";
				
				if($i % 2 == 0){
					echo "\n		</div>\n";
				}
				
				
				$i++;
			endforeach;

?>
		<li class="more"><a href="https://instagram.com/buzz/" target="_blank" title="See more on Instagram">See more @buzz</a></li>
	</ul>
			
	<div class="container">
<?php
	include(path.'_includes/footer.php');
?>