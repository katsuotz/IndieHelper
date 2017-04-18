<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js')
	);

$db->select(array('akun.id_akun', 'id_user', 'foto', 'username', 'nama', 'jk', 'alamat'));
$db->join('user', '', 'akun.id_akun', 'user.id_akun');
$db->get_tbl('akun');
$user = $db->result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/data_user.php';
include 'views/template/footer_admin.php';

?>