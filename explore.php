<?php 
	include 'lib/lib.php';

	$a = array('a','s','g');
	$b = array();

	foreach ($a as $key => $value) {
		array_push($b, $value);
	}

	print_r($b);

	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'explore.js')
	);

	include 'views/template/header.php';
	include 'views/explore/explore.php';
	include 'views/template/footer_admin.php';
?>