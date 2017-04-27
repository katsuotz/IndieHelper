<?php 
	include 'lib/lib.php';

	$assets = array(
		'css' => array('parent.css','editproject.css','materialize.min.css','material-icon.css','font-awesome.min.css'),
		'js' => array('jquery.min.js','materialize.min.js','parent.js','edit-project.js'),
		);

	$id  = $input->get('id_project');

	$where = array(
		'id_project' => $id,
		);

	$db->where($where);
	$db->join('kategori', '', 'project.id_kategori', 'project.id_project');
	$db->get_tbl('project');
	$datas = $db->row_result();
	$db->get_tbl('kategori');
	$kategori = $db->result();
	
	$img_project = json_decode($datas->foto);
	$tags = $datas->tags;
	$tags_js = json_encode(explode(',', $tags));
	

	include 'views/template/header.php';
	include 'views/user/editproject.php';
	include 'views/template/footer.php';

 ?>
