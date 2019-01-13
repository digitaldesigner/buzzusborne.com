<?php

	if($_SERVER['SERVER_PORT']!='443' && $_SERVER['HTTP_HOST']!="portfolio"){
		header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
	}
	date_default_timezone_set('UTC');
	define('basesite','https://www.buzzusborne.com/');
	
	// The following order is what's used to generate nav
    $manifest=array();
    $manifest['beacon']=array("path"=>"beacon","name"=>"Help Scout Beacon","thumb"=>"beacon-cover.png","meta"=>"Chat and support widget","short"=>"UX &amp; UI <em>/</em>  Research <em>/</em> Prototyping");
    $manifest['atlassian']=array("path"=>"atlassian","name"=>"Atlassian","thumb"=>"jira-hero.jpg","meta"=>"A productivity tool for software teams","short"=>"UX &amp; UI <em>/</em> Mentoring <em>/</em> Prototyping");
    $manifest['skype']=array("path"=>"skype","name"=>"Skype","thumb"=>"skype_conversation.jpg","meta"=>"A suite of recognizable icons","short"=>"Iconography");
    $manifest['prevue']=array("path"=>"prevue","name"=>"Prevue","thumb"=>"FullScreen.jpg","meta"=>"A feedback tool for designers","short"=>"UX &amp; UI <em>/</em> Development <em>/</em> Marketing");
	$manifest['helpscout']=array("path"=>"helpscout","name"=>"Help Scout","thumb"=>"","meta"=>"A cross-functional Design System","short"=>"Design Systems <em>/</em> UI <em>/</em> Prototyping");
    $manifest['canvas']=array("path"=>"canvas","name"=>"Campaign Monitor","thumb"=>"full_app.jpg","meta"=>"A WYSIWYG editor to build beautiful emails","short"=>"UX &amp; UI <em>/</em> Prototyping");
    $manifest['sendle']=array("path"=>"sendle","name"=>"Sendle","thumb"=>"devices.jpg","short"=>"Leadership <em>/</em> Visual Design <em>/</em>  UX &amp; UI");
    $manifest['skype_business']=array("path"=>"skype_business","name"=>"Skype for Business","thumb"=>"dashbord_home.jpg","short"=>"UX &amp; UI");
    $manifest['campaignmonitor']=array("path"=>"campaignmonitor","name"=>"Campaign Monitor","thumb"=>"business_cards.jpg","short"=>"Creative Direction <em>/</em> Visual Design <em>/</em> Print <em>/</em> Marketing");
    $manifest['rango']=array("path"=>"rango","name"=>"Paramount Pictures","thumb"=>"rango_01.jpg","short"=>"Visual <em>/</em> Game Design");
    $manifest['russian_standard']=array("path"=>"russian_standard","name"=>"Russian Standard Vodka","thumb"=>"russian_01.jpg","short"=>"Visual Design <em>/</em> Marketing");
    $manifest['toniandguy']=array("path"=>"toniandguy","name"=>"Toni &amp; Guy","thumb"=>"toniguy_01.jpg","short"=>"Visual Design <em>/</em> Marketing");
    $manifest['monitor']=array("path"=>"monitor","name"=>"Monitor iOS App","thumb"=>"concept_icons.png","short"=>"Iconography <em>/</em> Art Direction <em>/</em> UX &amp; UI");
    $manifest['pbp']=array("path"=>"pbp","name"=>"Postbox Party","thumb"=>"pbp_homepage.jpg","short"=>"Visual Design <em>/</em> Development");
    $manifest['sleep-tracker']=array("path"=>"naptime","name"=>"Naptime App","thumb"=>"popover.png","short"=>"UI <em>/</em> Development");
    $manifest['prevue_expenses']=array("path"=>"prevue_expenses","name"=>"Expense Tracker","thumb"=>"prevue_expenses.png","short"=>"Visual Design <em>/</em> Development");    

	// Set the above order
	$i=1; foreach($manifest as $path => $page): $manifest[$path]['order']=$i; $i++; endforeach;
	
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
    		if($pageDetails['path'] == $thisSlug){ 
				$navigation['current']=$pageDetails;
				$navigation['current']['slug']=$pageDetails['path'];
				break;
            }
        endforeach;
		
		// Finding previous and next pages
		foreach($manifest as $pageSlug => $pageDetails):
			$directory = $pageDetails['path'];
			if($navigation['current']['order']>1 && ($pageDetails['order']==($navigation['current']['order']-1))){
				$navigation['previous']=$pageDetails;
				$navigation['previous']['slug']=$directory;
			} elseif($navigation['current']['order']<count($manifest) && ($pageDetails['order']==($navigation['current']['order']+1))){
				$navigation['next']=$pageDetails;
				$navigation['next']['slug']=$directory;
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
		$output['this']=array('path'=>'./','title'=>$navigation['current']['name'],'full'=>$navigation['current']);
		$output['next']=array('path'=>'../'.$navigation['next']['slug'],'title'=>$navigation['next']['name'],'full'=>$navigation['next']);
		$output['prev']=array('path'=>'../'.$navigation['previous']['slug'],'title'=>$navigation['previous']['name'],'full'=>$navigation['previous']);
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
			$prev="<li><a href=\"".$navigation['prev']['path']."\" class=\"arrow\" title=\"";

			if(array_key_exists('meta',$navigation['prev']['full'])) {
				$prev.= $navigation['next']['title']." &mdash; ".$navigation['prev']['full']['meta'];
			} else {
				$prev.= "Use your LEFT arrow key to navigate to the PREVIOUS casestudy";
			}
				
			$prev.="\" id=\"thirtySeven\"><em>Previous</em><br />".$navigation['prev']['title']."</a></li>";
		}
		if(array_key_exists('next',$navigation) && $navigation['next']){
			$next="<li class=\"next\"><a href=\"".$navigation['next']['path']."\" class=\"arrow\" title=\"";
			
			if(array_key_exists('meta',$navigation['next']['full'])) {
				$next.= $navigation['next']['title']." &mdash; ".$navigation['next']['full']['meta'];
			} else {
				$next.= "Use your RIGHT arrow key to navigate to the NEXT casestudy";
			}
			
			$next.="\" id=\"thirtyNine\"><em>Next</em><br />".$navigation['next']['title']."</a></li>";
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
