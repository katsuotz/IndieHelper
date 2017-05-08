<?php

include 'lib/lib.php';
// error_reporting(0);

$assets = array(
	'css' 	=> array('parent.css', 'home.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css','navbar.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'home.js')
	);

$fotohref = array('#one!','#two!','#three!','#four!','#five!');

$db->select(array('project.id_project', 'project.nama AS nama_project', 'project.foto', 'target', 'user.nama', 'alamat','user.foto AS foto_user'));
$db->join('user','','project.id_user','user.id_user');
$db->get_tbl('project',true,6);
$data = $db->result();

$foto = array();

$db->get_tbl('kategori');
$kategori = $db->result();

foreach ($data as $value) {
	array_push($foto, json_decode($value->foto));
}

include 'views/template/header.php';
include 'views/template/nanavbaran.php';
include 'views/home/home.php';
include 'views/template/footer.php';

?>