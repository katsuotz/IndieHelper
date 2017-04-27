<?php 

	include 'lib.php';

	if(($_SERVER['REQUEST_METHOD'] == 'POST')){
		$id 		= $input->get('id_project');
		$where 		= array('id_project' => $id);
		$nama		= $input->post('nama');
		$desc		= $input->post('desc');
		$donation	= $input->post('donation');
		$kategori 	= $input->post('id_kategori');
		$j_tags 	= json_decode($input->post('tags'));
		$tags = array();
		$db->get_tbl('project');
		$result 	= $db->row_result();
		$oldImages 	= json_decode($result->foto);
 
		foreach ($j_tags as $key => $value) {
			array_push($tags, $value);
		}
		$taga = implode($tags, ',');


		$namafile 	= array();
		$tmpfile  	= array();
		for ($i = 1; $i <= 5; $i++) {
			if (!(empty($input->files('project-image' . $i)['name']))) {
				array_push($namafile, $input->files('project-image' . $i)['name']);
				array_push($tmpfile, $input->files('project-image' . $i)['dir']);
				$dir = "../assets/images/project/" . $namafile[$i - 1]; 
				move_uploaded_file($tmpfile[$i - 1], $dir);
			} else {
				array_push($namafile, '');
				array_push($tmpfile, '');
			}
		}

		for ($i = 1; $i <= 5; $i++) {
			if (empty($namafile[$i - 1]) && !(empty($oldImages[$i - 1]))) {
				$namafile[$i - 1] = $oldImages[$i - 1];
			}
		}

		if (!empty($namafile)) {
			$namafile = json_encode($namafile);
		} else {
			$namafile = []; 
		}


		$data = array(
			'nama' 		=> $nama,
			'deskripsi' => $desc,
			'target'	=> $donation,
			'foto'		=> $namafile,
			'tags'		=> $taga,
			);

		$db->where($where);
		$db->select_tbl('project');
		$return = $db->update($data);
		echo $return;
	}

 ?>