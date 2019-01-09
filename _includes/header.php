<?php

	if($_SERVER['SERVER_PORT']!='443' && $_SERVER['HTTP_HOST']!="portfolio"){
		header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
	}
	date_default_timezone_set('UTC');
	define('basesite','https://www.buzzusborne.com/');
	
    $manifest=array();
    $manifest['beacon']=array("order"=>1,"name"=>"Help Scout Beacon","thumb"=>"beacon-cover.png");
    $manifest['atlassian']=array("order"=>2,"name"=>"Atlassian","thumb"=>"jira-hero.jpg");
    $manifest['skype']=array("order"=>3,"name"=>"Skype","thumb"=>"skype_conversation.jpg");
    $manifest['prevue']=array("order"=>4,"name"=>"Prevue","thumb"=>"FullScreen.jpg");
    $manifest['canvas']=array("order"=>5,"name"=>"Campaign Monitor","thumb"=>"full_app.jpg");
    $manifest['sendle']=array("order"=>6,"name"=>"Sendle","thumb"=>"devices.jpg");
	$manifest['helpscout']=array("order"=>7,"name"=>"Help Scout","thumb"=>"");
    $manifest['skype_business']=array("order"=>8,"name"=>"Skype for Business","thumb"=>"dashbord_home.jpg");
    $manifest['campaignmonitor']=array("order"=>9,"name"=>"Campaign Monitor","thumb"=>"business_cards.jpg");
    $manifest['rango']=array("order"=>10,"name"=>"Paramount Pictures","thumb"=>"rango_01.jpg");
    $manifest['russian_standard']=array("order"=>11,"name"=>"Russian Standard Vodka","thumb"=>"russian_01.jpg");
    $manifest['toniandguy']=array("order"=>12,"name"=>"Toni &amp; Guy","thumb"=>"toniguy_01.jpg");
    $manifest['monitor']=array("order"=>13,"name"=>"Monitor iOS App","thumb"=>"concept_icons.png");
    $manifest['pbp']=array("order"=>14,"name"=>"Postbox Party","thumb"=>"pbp_homepage.jpg");
    $manifest['sleep-tracker']=array("order"=>15,"name"=>"Naptime App","thumb"=>"popover.png");
    $manifest['prevue_expenses']=array("order"=>16,"name"=>"Expense Tracker","thumb"=>"prevue_expenses.png");    
	
	function getCurrentDirectory() {
		$path = dirname($_SERVER['PHP_SELF']);
		$position = strrpos($path,'/') + 1;
		return substr($path,$position);
	}
    function navigation($thisSlug=''){
        global $manifest;
        $navigation=array(); // [current][previous][next]
        
        // Finding this page
		foreach($manifest as $pageSlug => $pageDetails):
    		if($pageSlug == $thisSlug){ 
				$navigation['current']=$pageDetails;
				$navigation['current']['slug']=$pageSlug;
				break;
            }
        endforeach;
		
		// Finding previous and next pages
		foreach($manifest as $pageSlug => $pageDetails):
			if($navigation['current']['order']>1 && ($pageDetails['order']==($navigation['current']['order']-1))){
				$navigation['previous']=$pageDetails;
				$navigation['previous']['slug']=$pageSlug;
			} elseif($navigation['current']['order']<count($manifest) && ($pageDetails['order']==($navigation['current']['order']+1))){
				$navigation['next']=$pageDetails;
				$navigation['next']['slug']=$pageSlug;
			}
		endforeach;
        
		// Filling in the blanks
		if(!array_key_exists('previous',$navigation)){
			$navigation['previous']=array("name"=>"Home","slug"=>"../");
		}
		if(!array_key_exists('next',$navigation)){
			$navigation['next']=array("name"=>"Home","slug"=>"../");
		}
		
		// Making it backwards compatible
		$output['this']=array('path'=>'./','title'=>$navigation['current']['name']);
		$output['next']=array('path'=>'../'.$navigation['next']['slug'],'title'=>$navigation['next']['name']);
		$output['prev']=array('path'=>'../'.$navigation['previous']['slug'],'title'=>$navigation['previous']['name']);
		$output['twitter_img']='casestudy/_images/'.$navigation['current']['thumb'];
        return $output;
    }
	
	if(!isset($hideNav)){
		$navigation=navigation(getCurrentDirectory());
	}

	$prev = NULL;
	$next = NULL;
	
	if(isset($navigation) && is_array($navigation)){
		if(array_key_exists('prev',$navigation) && $navigation['prev']){
			$prev="<li><a href=\"".$navigation['prev']['path']."\" class=\"arrow\" title=\"Use your LEFT arrow key to navigate to the PREVIOUS casestudy\" id=\"thirtySeven\"><em>Previous</em><br />".$navigation['prev']['title']."</a></li>";
		}
		if(array_key_exists('next',$navigation) && $navigation['next']){
			$next="<li class=\"next\"><a href=\"".$navigation['next']['path']."\" class=\"arrow\" title=\"Use your RIGHT arrow key to navigate to the NEXT casestudy\" id=\"thirtyNine\"><em>Next</em><br />".$navigation['next']['title']."</a></li>";
		}
	}
	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buzz Usborne - <?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo $navigation['this']['title']; } else { echo "Product Designer"; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index,follow,archive"/>
	<meta name="Description" content="Product Designer (UX/UI) and Founder." />
	<meta name="Keywords" content="Buzz Usborne UX UI product software app director digital design creative art campaign monitor prevue osbourne Pete Peter Graphic Digital Design Portfolio Designer London Sydney" />
	<meta property="og:title" content="Buzz Usborne - <?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo $navigation['this']['title']; } else { echo "Product Designer"; } ?>">
	<meta property="og:description" content="A collection of digital projects from Atlassian, Prevue, Campaign Monitor, Skype and more">
	<link href="<?php echo path; ?>_assets/gfx/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<link href="<?php echo path; ?>_assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<meta name="twitter:card" content="summary<?php if(isset($navigation) && array_key_exists('twitter_img',$navigation)) { echo "_large_image"; } ?>">
	<meta name="twitter:title" content="Buzz Usborne — <?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo $navigation['this']['title']; } else { echo "Product Designer"; } ?>">
	<meta name="twitter:description" content="Portfolio of Buzz, Founder of @GetPrevue & Designer @HelpScout. Formerly Design Lead @Atlassian, @CampaignMonitor & @Skype.">
<?php if(isset($navigation) && array_key_exists('twitter_img',$navigation)) { if(isset($baseOverride)){ $base = NULL; } else { $base = basesite; } ?>	<meta name="twitter:image" content="<?php echo $base.$navigation['twitter_img']; ?>">
	<meta name="og:image" content="<?php echo $base.$navigation['twitter_img']; ?>"><?php echo "\n"; } ?>
	<script type="text/javascript" src="//use.typekit.net/dlu2bpa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="viewport" content="width=320,initial-scale=1.0" />
</head>
<body<?php if(isset($bodyclass)){ echo " class=\"".$bodyclass."\""; }?>>
	<div class="container">
		<?php if(path=="../../"){ ?><div id="header" class="project">
			<h1><a href="<?php echo path; ?>">Buzz</a></h1><?php } else { ?><div id="header">
			<h1><a href="<?php echo path; ?>">Buzz Usborne</a></h1>
			<?php } ?>

		</div>
