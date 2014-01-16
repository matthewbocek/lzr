<!--
<?php
define("THISPAGE",basename($_SERVER['SCRIPT_NAME']));
define("PATH","http://mbocek.comxa.com/demos/lzr/");
define("PHYSICAL_PATH", "/home/a3866069/public_html/demos/lzr/");

function isActive($link_id)//$category is the link that it is next to
{
	if (THISPAGE==$link_id)
		echo 'class="active"';
}


function isInCategory($category_id)
{
	$pages = array(
		'work' => array('video.php','toi_toi.php','the_nebbish.php','a_very_little_warrior.php','the_beast.php'),
		'about' => array('about.php','about_me.php','my_process.php'),
		'lyrics' => array('lyrics.php','math_class_the_musical.php','frat_the_musical.php'),
		'contact' => array('contact.php','thanks.php')
	);
	
	if ((in_array(THISPAGE,$pages[$category_id])))
		echo 'class="active"';
}	
?>
-->

