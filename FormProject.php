<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'form.css','navbar.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js','navbar.js','parent.js', 'form.js')
	);

$db->get_tbl('kategori');
$kategori = $db->result();

include 'views/template/header.php';
include 'views/template/nanavbaran.php';
include 'views/project/form-project.php';
include 'views/template/footer_admin.php';

?>