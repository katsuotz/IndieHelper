<?php 
	
include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'donasi.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js','donation.js'),
	);

$db->get_tbl('bank');
$bank = $db->result();

include 'views/template/header.php';
include 'views/user/donation.php';
include 'views/template/footer_admin.php';

?>