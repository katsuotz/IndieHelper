<?php 
	include 'lib/lib.php';

	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'about.js')
	);

	include 'views/template/header.php';
	include 'views/explore/explore.php';
	include 'views/template/footer_admin.php';
?>