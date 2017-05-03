<?php 
	
include 'lib/lib.php';

$idproject = $input->get('id');

$where = array('id_project' => $idproject);

$db->where($where);
$db->get_tbl('project');
$datas = $db->row_result();

$foto =array();
array_push($foto, json_decode($datas->foto));

$assets = array(
	'css' 	=> array('parent.css', 'donation.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css'),
	'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js','donation.js'),
	);

$db->get_tbl('bank');
$bank = $db->result();

include 'views/template/header.php';
include 'views/user/donation.php';
include 'views/template/footer_admin.php';

?>
