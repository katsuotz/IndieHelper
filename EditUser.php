<?php

include 'lib/lib.php';

$assets = array(
	'css' 	=> array('parent.css', 'admin.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'admin.js')
	);

$arr = array('akun.id_akun' => $input->get('id_akun'));

$db->select(array('akun.id_akun', 'foto', 'username', 'nama', 'jk', 'alamat'));
$db->join('user', '', 'akun.id_akun', 'user.id_akun');
$db->where($arr);
$db->get_tbl('akun');
$user = $db->row_result();

include 'views/template/header.php';
include 'views/template/navbar_admin.php';
include 'views/admin/edit_user.php';
include 'views/template/footer_admin.php';

?>