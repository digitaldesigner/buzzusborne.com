<?php

	$prev = NULL;
	$next = NULL;
	
	if(isset($navigation) && is_array($navigation)){
		if(array_key_exists('prev',$navigation) && $navigation['prev']){
			$prev="<li><a href=\"".$navigation['prev']['path']."/\" class=\"arrow\" title=\"Use your LEFT arrow key to navigate to the PREVIOUS casestudy\" id=\"thirtySeven\"><em>Previous</em><br />".$navigation['prev']['title']."</a></li>";
		}
		if(array_key_exists('next',$navigation) && $navigation['next']){
			$next="<li class=\"next\"><a href=\"".$navigation['next']['path']."/\" class=\"arrow\" title=\"Use your RIGHT arrow key to navigate to the NEXT casestudy\" id=\"thirtyNine\"><em>Next</em><br />".$navigation['next']['title']."</a></li>";
		}
	}
	
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Buzz Usborne - <?php if(isset($navigation) && array_key_exists('this',$navigation)) { echo $navigation['this']['title']; } else { echo "Digital Designer"; } ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index,follow,archive"/>
	<meta name="Description" content="The portfolio of Product Designer and Creative Director, Buzz Usborne." />
	<meta name="Keywords" content="Buzz Usborne director digital design creative art campaign monitor prevue osbourne Pete Peter Graphic Digital Design Portfolio Designer London Sydney" />
	<meta property="og:description" content="The portfolio of Product Designer and Creative Director, Buzz Usborne." />
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
			<h1><a href="<?php echo path; ?>">Buzz</a><em>/</em></h1><?php } else { ?><div id="header">
			<h1><a href="<?php echo path; ?>">Buzz Usborne</a></h1>
			<?php } ?>

		</div>
