<?php

	if($_SERVER['SERVER_PORT']!='443' && $_SERVER['HTTP_HOST']!=("portfolio" || "portfolio:8888")){
    header('Location: https://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		exit();
	}
	$fullURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	
	date_default_timezone_set('UTC');
	define('basesite',$fullURL);
	
#	Number of case-studies to highlight on the homepage
	
	if(!isset($maxCaseStudies)) {
		$maxCaseStudies=2;
	} 
	
#	You can customize the homepage with ?show=5
	if(isset($_GET['show'])){
		if(is_numeric($_GET['show'])){
			$maxCaseStudies=$_GET['show'];
			
			if($maxCaseStudies<2){
				$maxCaseStudies = 2;
			}
			
		} else {
			$maxCaseStudies=100;
		}
	}
	
#	Build the nav
    $manifest=array();
	
    $manifest['beacon']=array(
		"path"	=>	"helpscout-chat",
		"name" 	=>	"Help Scout",
		"thumb"	=>	"solid-beacon.png",
		"meta"	=>	"Principal Designer",
		"year"	=>	date("Y"),
		"og"	=>	"https://buzzusborne.com/casestudy/_images/helpscout-chat/beacon-cover.png",
		"color" => "#cd4dcc"
	);
    $manifest['atlassian']=array(
		"path"	=>	"atlassian",
		"name"	=>	"Atlassian",
		"thumb"	=>	"solid-atlassian.png",
		"meta"	=>	"Lead Designer",
		"year"	=>	"2017",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/atlassian/jira-hero.jpg",
		"color" => "#3e64ff"
		);
    $manifest['skype']=array(
		"path"	=>	"skype",
		"name"	=>	"Skype",
		"thumb"	=>	"solid-skype.png",
		"year"	=>	"2010",
		"meta"	=>	"A suite of recognizable icons",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/skype/desktop_skype.jpg",
		"color" => "#42dee1"
		);
    $manifest['prevue']=array(
		"path"	=>	"prevue",
		"name"	=>	"Prevue",
		"thumb"	=>	"solid-prevue.png",
		"year"	=>	"2018",
		"meta"	=>	"A feedback tool for designers",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/prevue/Library.jpg",
		"color" => "#272d39"
		);
	$manifest['helpscout']=array(
		"path"	=>	"hsds",
		"name"	=>	"HS Design System",
		"thumb"	=>	"solid-hsds.png",
		"year"	=>	"2019",
		"meta"	=>	"A cross-functional design system",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/hsds/cover.jpg",
		"color" => "#c886e5"
		);
    $manifest['campaignmonitor']=array(
		"path"	=>	"campaignmonitor",
		"name"	=>	"Campaign Monitor",
		"thumb"	=>	"solid-cm.png",
		"year"	=>	"2014",
		"meta"	=>	"Creative direction for an Aussie tech company",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/campaignmonitor/business_cards.jpg",
		"color" => "#413c69"
		);
    $manifest['sendle']=array(
		"path"	=>	"sendle",
		"name"	=>	"Sendle",
		"thumb"	=>	"solid-sendle.png",
		"year"	=>	"2016",
		"meta"	=>	"A modern shipping app for small businesses",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/sendle/devices.jpg",
		"color" => "#f67280"
		);
    $manifest['skype_business']=array(
		"path"	=>	"skype_business",
		"name"	=>	"Skype for Business",
		"thumb"	=>	"solid-bcp.png",
		"year"	=>	"2009",
		"meta"	=>	"A UI for Skype&rsquo;s business suite",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/skype_business/dashbord_home.jpg",
		"color" => "#a0c334"
		);
    $manifest['canvas']=array(
		"path"	=>	"canvas",
		"name"	=>	"Campaign Monitor",
		"thumb"	=>	"full_app.jpg",
		"year"	=>	"UX/UI<em class='special bullet'>&bullet;</em>2014",
		"meta"	=>	"A drag &amp; drop editor to build beautiful emails",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/canvas/full_app.jpg",
		"color" => "#f4b0c7"
		);
    $manifest['rango']=array(
		"path"	=>	"rango",
		"name"	=>	"Paramount Pictures",
		"thumb"	=>	"rango_01.jpg",
		"year"	=>	"Game Design<em class='special bullet'>&bullet;</em>2011",
		"meta"	=>	"Game design for a movie-themed promotion",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/misc/rango_01.jpg",
		"color" => "#ffd369"
		);
    $manifest['russian_standard']=array(
		"path"	=>	"russian_standard",
		"name"	=>	"Russian Standard Vodka",
		"thumb"	=>	"russian_01.jpg",
		"year"	=>	"Visual Design<em class='special bullet'>&bullet;</em>2009",
		"meta"	=>	"Website for the world&rsquo;s most popular vodka",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/misc/russian_01.jpg",
		"color" => "#574f7d"
		);
    $manifest['toniandguy']=array(
		"path"	=>	"toniandguy",
		"name"	=>	"Toni &amp; Guy",
		"thumb"	=>	"toniguy_01.jpg",
		"year"	=>	"Visual Design<em class='special bullet'>&bullet;</em>2011",
		"meta"	=>	"Marketing site for global hair brand",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/misc/toniguy_01.jpg",
		"color" => "#000"
		);
    $manifest['monitor']=array(
		"path"	=>	"monitor",
		"name"	=>	"Monitor iOS App",
		"thumb"	=>	"concept_icons.png",
		"year"	=>	"Iconography<em class='special bullet'>&bullet;</em>2014",
		"meta"	=>	"Fresh iconography for iOS",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/monitor/test.jpg",
		"color" => "#3fc5f0"
		);
    $manifest['pbp']=array(
		"path"	=>	"pbp",
		"name"	=>	"Postbox Party",
		"thumb"	=>	"pbp_homepage.jpg",
		"year"	=>	"Visual Design<em class='special bullet'>&bullet;</em>2014",
		"meta"	=>	"Shopify store design and development",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/pbp/pbp_homepage.jpg",
		"color" => "#049aa0"
		);
    $manifest['sleep-tracker']=array(
		"path"	=>	"naptime",
		"name"	=>	"Naptime App",
		"thumb"	=>	"popover.png",
		"year"	=>	"UI<em class='special bullet'>&bullet;</em>2018",
		"meta"	=>	"A personal project to visualize time",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/naptime/popover.png",
		"color" => "#fec700"
		);
    $manifest['prevue_expenses']=array(
		"path"	=>	"prevue_expenses",
		"name"	=>	"Expense Tracker",
		"thumb"	=>	"prevue_expenses.png",
		"year"	=>	"UI<em class='special bullet'>&bullet;</em>2018",
		"meta"	=>	"A simple tool to track business expenses",
		"og"	=>	"https://buzzusborne.com/casestudy/_images/misc/prevue_expenses.png",
		"color" => "#f35588"
		);
	
	
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
			$navigation['previous']=array("name"=>"Work","slug"=>"../work/");
		}
		if(!array_key_exists('next',$navigation)){
			$navigation['next']=array("name"=>"Work","slug"=>"../work/");
		}
		
		// Making it backwards compatible
		$output['this']=array('path'=>'./','title'=>$navigation['current']['name'],'full'=>$navigation['current']);
		$output['next']=array('path'=>'../'.$navigation['next']['slug'],'title'=>$navigation['next']['name'],'full'=>$navigation['next']);
		$output['prev']=array('path'=>'../'.$navigation['previous']['slug'],'title'=>$navigation['previous']['name'],'full'=>$navigation['previous']);
		$output['twitter_img']=$navigation['current']['og'];
		$output['meta']=$navigation['current']['meta'];
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
	<title>Buzz Usborne<?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo "- ".$navigation['this']['title']; } else { echo " - Product Designer & Coach"; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index,follow,archive"/>
	<meta name="Description" content="Design Coach & Product Designer" />
	<meta name="Keywords" content="Buzz Usborne coach designer UX UI product software app director digital design creative art campaign monitor prevue osbourne Pete Peter Graphic Digital Design Portfolio Designer London Sydney" />
	<meta property="og:title" content="Buzz Usborne - <?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo $navigation['this']['title']; } else { echo "Design Coach"; } ?>">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<link href="<?php echo path; ?>_assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href='https://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#2b5797">	
	<meta name="twitter:card" content="summary<?php if(isset($navigation) && array_key_exists('twitter_img',$navigation)) { echo "_large_image"; } ?>">
	<meta name="twitter:title" content="Buzz Usborne">
<?php if(isset($navigation) && array_key_exists('meta',$navigation)) {?>	<meta name="twitter:description" content="<?=$navigation['this']['title']." — ".$navigation['meta']?>">
	<meta property="og:description" content="<?=$navigation['this']['title']." — ".$navigation['meta']?>">
<?php } else { ?>
	<meta name="twitter:description" content="Design Coach & Product Designer at Help Scout. Formerly Atlassian, Skype, Campaign Monitor and more...">
	<meta property="og:description" content="Design Coach & Product Designer at Help Scout. Formerly Atlassian, Skype, Campaign Monitor and more...">
<?php } if(isset($navigation) && array_key_exists('twitter_img',$navigation)) { if(isset($baseOverride)){ $base = NULL; } else { $base = basesite; } ?>	<meta name="twitter:image" content="<?php echo $navigation['twitter_img']; ?>">
	<meta name="og:image" content="<?php echo $navigation['twitter_img']; ?>"><?php echo "\n"; } else { ?>
	<meta name="twitter:image" content="https://buzzusborne.com/_assets/gfx/twitter-card.png">
<?php	} ?>
	<script type="text/javascript" src="//use.typekit.net/dlu2bpa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="viewport" content="width=320,initial-scale=1.0" />
</head>
<body<?php if(isset($bodyclass)){ echo " class=\"".$bodyclass."\""; }?>>
		<?php if(path=="../../"){ ?>

	<div class="container">
<?php 

	$keyNav = NULL;
	if(isset($navigation)) {
		$keyNav = '<li class="tip"><div class="keys">';
		
		if(array_key_exists('prev',$navigation)){
			$keyNav .= '<a href="'.$navigation['prev']['path'].'" class="thirtySeven" title="'.$navigation['prev']['title'].'">&larr;</a>';
		}
		if(array_key_exists('next',$navigation)){
			$keyNav .= '<a href="'.$navigation['next']['path'].'" class="thirtyNine" title="'.$navigation['next']['title'].'">&rarr;</a>';
		}
		
		$keyNav .="</div></li>";
	}
	
	printf(str_replace("_root_",path,file_get_contents(path.'_includes/nav.html')),
		NULL,				// Additional class to 'siteNav'
		NULL, 			// Logo: Classname (optional) 
		NULL, 			// Home: Class (optiona;)
		' active', 	// Work: Class (optional)
		NULL, 			// Coaching: Class (optional)
		NULL,  			// About: Class (optional)
		$keyNav			// Additional options (optional)
	);
 } ?>

