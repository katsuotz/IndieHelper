<?php 

	include 'lib.php';

	$id_project = $input->get('id_project');
	$where = array('id_project' => $id_project);

	$db->where($where);
	$delete = $db->delete('project');
	$result = $db->affected_rows();

	if ($result)
		$result = "Berhasil";
	else
		$result = "Gagal";

	$result = json_encode(
		array(
			'msg' => $result, 
			'tbl' => 'project'
			)
		);

	echo $result;
	
?>