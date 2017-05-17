<?php 
	include 'lib/lib.php';
	// error_reporting(0);
	$foto =array();
	$fotohref = array('#one!','#two!','#three!','#four!','#five!');

	$assets = array(
		'css' 	=> array('parent.css', 'explore.css', 'materialize.min.css', 'material-icon.css', 'font-awesome.min.css','navbar.css'),
		'js'	=> array('jquery.min.js', 'materialize.min.js', 'parent.js', 'explore.js','navbar.js')
	);
	$db->order_by('id_project', 'DESC');
	if(isset($_GET['ktg'])){
		$ktg = $input->get('ktg');
		$where = array('id_kategori' => $ktg);
		$db->select(array('project.id_user', 'project.id_project', 'project.nama AS nama_project', 'project.foto', 'target','income', 'user.nama', 'alamat','user.foto AS foto_user'));
		$db->where($where);
		$db->join('user','','project.id_user','user.id_user');
		$db->get_tbl('project');
		$data = $db->result();
	}elseif(isset($_GET['search'])){
		$search		= $input->get('search');
		$where		= array('project.nama' => $search);
		$db->select(array('project.id_user', 'project.id_project', 'project.nama AS nama_project', 'project.foto', 'target','income', 'user.nama', 'alamat','user.foto AS foto_user'));
		$db->logic_where('OR');
		$db->where_explore($where);
		$db->join('user','','project.id_user','user.id_user');
		$db->get_tbl('project');
		$data = $db->result();
	} else{
		$db->join('user','','project.id_user','user.id_user');
		$db->select(array('project.id_user', 'project.id_project', 'project.nama AS nama_project', 'project.foto', 'target','income', 'user.nama', 'alamat','user.foto AS foto_user'));

		$db->get_tbl('project');
		$data = $db->result();
	}
	foreach ($data as $key => $value) {
		array_push($foto, json_decode($value->foto));
	}
	include 'views/template/header.php';
	include 'views/template/nanavbaran.php';
	include 'views/explore/explore.php';
	include 'views/template/footer.php';
?>
