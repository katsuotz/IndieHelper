<?php

include 'lib/lib.php';
$foto = array();
$assets = array(
	'css' 	=> array('parent.css', 'navbar.css','detail.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'navbar.js',"jquery.zoom.min.js",'detail.js')
	);

if(isset($_GET['id'])){
	$idpro	= $input->get('id');

	$where	= array('id_project' => $idpro);
	$db->select(array('project.id_project', 'project.nama AS nama_project', 'project.foto','project.deskripsi','project.tgl', 'target','project.income','kategori.nama_kategori', 'user.id_user AS id_user','user.nama', 'alamat','user.foto AS foto_user'));
	$db->where($where);
	$db->join('user','','project.id_user','user.id_user');
	$db->join('kategori','','project.id_kategori','kategori.id_kategori');
	$db->get_tbl('project');
	$data = $db->row_result();
	array_push($foto, json_decode($data->foto));

	$db->where(array('id_project' => $idpro,'status'=>'Sudah'));
	$db->join('user','','donasi.id_user','user.id_user');
	$db->get_tbl('donasi',true,6);
	$donasi = $db->result();

}

$db->get_tbl('bank');
$bank = $db->result();

include 'views/template/header.php';
include 'views/template/nanavbaran.php';
include 'views/project/detail.php';
include 'views/template/footer.php';

?>