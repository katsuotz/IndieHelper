<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'profile.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'profile.js')
	);

include 'views/template/header.php';
// include 'views/template/navbar.php';
include 'views/user/profile.php';
include 'views/template/footer.php';

?>