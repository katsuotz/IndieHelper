<?php 
	include 'lib/lib.php';
error_reporting(0);
	$db->get_tbl('project');
	$data = $db->result();
	$foto =array();
	foreach ($data as $key => $value) {
		array_push($foto, json_decode($value->foto));

	}
	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'explore.js')
	);

	include 'views/template/header.php';
	include 'views/explore/explore.php';
	include 'views/template/footer_admin.php';
?>