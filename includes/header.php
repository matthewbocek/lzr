<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Matt Bocek - Page Template - Home</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=9" />
	<meta name="robots" content="noindex, nofollow" /> 
	
	<link rel="stylesheet" type="text/css" href="<?php echo PATH;?>css/master.css" />
	
<body>
<div id="wrapper">
	<div id="header">
		<h1><a href="<?echo PATH;?>index.php">Leeran</a><a href="<?echo PATH;?>index.php"><span class="bigz">Z</span></a><a href="<?echo PATH;?>index.php">.com</a></h1>
		<!--<h1><a href="index.php"><span class="whitez">Z</span></a></h1>-->
		
		<div id="music_widget">
			<!--<img src="<?php echo PATH;?>images/music_widget.gif" alt="IMG music widget IMG"/>-->
            <h3 style="color:white;">Sample music (silent)</h3>
            <audio controls>
                <source src="<?echo PATH;?>audio/sample1.mp3" type="audio/mpeg">
                <source src="<?echo PATH;?>audio/sample2.mp3" type="audio/mpeg">
                <source src="<?echo PATH;?>audio/sample3.mp3" type="audio/mpeg">
                Your browser does not support HTML5 Audio
            </audio>
		</div><!-- end #music_widget -->
		
		<div id="nav">
		<ul>
			<li <?php isInCategory('work')?>><a href="<?echo PATH;?>work/video.php">Work</a></li>
			<li <?php isInCategory('about')?>><a href="<?echo PATH;?>about/about.php">About</a></li>
			<li <?php isInCategory('lyrics')?>><a href="<?echo PATH;?>lyrics/lyrics.php">Lyrics</a></li>
			<li <?php isInCategory('contact')?>><a href="<?echo PATH;?>contact/contact.php">Contact</a></li>
		</ul>
		</div><!-- end #nav -->
		
		
		
	</div><!-- end #header -->
	
	<div id="middle">