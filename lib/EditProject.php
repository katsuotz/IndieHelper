<?php 
	include 'lib.php';

	if(($_SERVER['REQUEST_METHOD'] == 'POST')){
		$id 		= $input->get('id_project');
		$nama		= $input->post('nama');
		$desc		= $input->post('desc');
		$donation	= $input->post('donation');
		$kategori 	= $input->post('id_kategori');
		$j_tags 	= json_decode($input->post('tags'));
		$tags = array();

		foreach ($j_tags as $key => $value) {
			array_push($tags, $value);
		}
		$taga = implode($tags, ',');

		$data = array(
			'nama' 		=> $nama,
			'deskripsi' => $desc,
			'target'	=> $donation,
			'tags'		=> $taga,
			);
		$where = array(
			'id_project' => $id,
			);
		$db->where($where);
		$db->select_tbl('project');
		$return = $db->update($data);
		echo $return;
	}

 ?>