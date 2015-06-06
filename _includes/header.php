<?php

	$projects=array();
	$projects["prevue"]=array(
		"title"=>"Prevue",
		"thumb"=>"prevue.jpg"
	);
	$projects["canvas"]=array(
		"title"=>"Campaign Monitor",
		"thumb"=>"campaignmonitor.jpg"
	);

	$url = $_SERVER['REQUEST_URI'];
	$parts = explode('/',$url);
	$dir = $_SERVER['SERVER_NAME'];
	for ($i = 0; $i < count($parts) - 1; $i++) { $dir .= $parts[$i] . "/"; }
	$dir = substr($dir, 0, -1);
	$folders = explode("/",$dir);
	$thisDIR = end($folders);
	$prev=NULL;
	$next=NULL;
	
	if(array_key_exists($thisDIR,$projects)){
		
		$i=0;
		$thisPro=0;
		foreach($projects as $folder => $title):
			if($folder==$thisDIR){
				$thisPro=$i;
			}
			$i++;
		endforeach;
		
		$i=0;
		foreach($projects as $folder => $details):
			if($i==($thisPro-1)){
				$prev="\n					<a href=\"".path."projects/".$folder."/\" class=\"arrow\" title=\"Jump to ".$details['title']."\" id=\"thirtySeven\">&#65513;</a>";
			} elseif($i==($thisPro+1)){
				$next="\n					<a href=\"".path."projects/".$folder."/\" class=\"arrow\" title=\"Jump to ".$details['title']."\" id=\"thirtyNine\">&#65515;</a>";
			}
			$i++;
		endforeach;
		
	}
	
	$prev = NULL;
	$next = NULL;

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buzz Usborne - <?php if(array_key_exists($thisDIR,$projects)){ echo $projects[$thisDIR]['title']; } else { echo "Digital Designer"; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index,follow,archive"/>
	<meta name="Description" content="The portfolio of Digital Art Director, Buzz Usborne" />
	<meta name="Keywords" content="Buzz Usborne director digital design creative art campaign monitor prevue osbourne Pete Peter Graphic Digital Design Portfolio Designer London Sydney" />
	<meta property="og:description" content="The portfolio of Sydney-based digital Art Director, Buzz Usborne." />
	<link href="<?php echo path; ?>_assets/gfx/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
	<link href="<?php echo path; ?>_assets/css/main.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lora:400,400italic' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="//use.typekit.net/dlu2bpa.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<meta name="viewport" content="width=320,initial-scale=1.0" />
</head>
<body<?php if(isset($bodyclass)){ echo " class=\"".$bodyclass."\""; }?>>
	
	<div class="container">
		
		<?php if(path=="../../"){ ?><div id="header" class="project">
			<h1><a href="<?php echo path; ?>">Buzz</a> <em>/</em></h1><?php } else { ?><div id="header">
			<h1><a href="<?php echo path; ?>">Buzz Usborne</a></h1>
			<h2><?php if(isset($buzzTitle)&&$buzzTitle){ echo $buzzTitle; } else { echo "Digital Designer"; } ?></h2><?php } ?>

		</div>

		<div id="keycontrols">
			<ul>
<?php 
	if($prev || $next){ 
		echo "				<li>"; 
		if($prev){ echo $prev; }
		if($next){ echo $next; } 
		echo "\n				</li>\n";
	}
	if(isset($concepts) && $concepts) { ?>				<li id="combo">
					<a href="concepts/" id="ctrlKey" class="showConcepts">ctrl</a><span>+</span>
					<a href="concepts/" id="sixtySeven" class="showConcepts">c</a>
				</li>
				<li id="comboClose">
					<a href="javascript://" class="closeModal" id="esc">esc</a>
				</li>
<?php } ?>
			</ul>
		</div>
<?php if(isset($AJAX) && !$AJAX) { ?>

		<div id="preheader">
			<h3>Concepts</h3>
			<p>It's nice to see the glossy final end result - but it's not often you get to see the failed concepts, the sketches and ideas that went into a brief. So here's a look behind the scenes of <a href="../">this project</a>:</p>
		</div>
		
<?php } ?>