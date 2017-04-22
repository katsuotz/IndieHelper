<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama 		= $input->post('nama');
		$id_kategori= $input->post('id_kategori');
		$j_tags 	= json_decode($input->post('tags'));
		$target 	= $input->post('target');
		$deskripsi 	= $input->post('deskripsi');
		$tags = array();

		foreach ($j_tags as $key => $value) {
			array_push($tags, $value);
		}

		$tags = json_encode($tags);

		$namafile 	= array();
		$tmpfile  	= array();
		for ($i = 1; $i <= 5; $i++) {
			if (!empty($input->files('project-image' . $i)['name'])) {
				array_push($namafile, $input->files('project-image' . $i)['name']);
				array_push($tmpfile, $input->files('project-image' . $i)['dir']);
				$dir = "../assets/images/project/" . $namafile[$i - 1]; 
				move_uploaded_file($tmpfile[$i - 1], $dir);
			}
		}

		if (!empty($namafile)) {
			$namafile = json_encode($namafile);
		} else {
			$namafile = ''; 
		}

		$data_project = array(
			'nama' 			=> $nama,
			'id_kategori' 	=> $id_kategori,
			'id_user'		=> $session->get_session('id'),
			'tags' 			=> $tags,
			'target'		=> $target,
			'foto'			=> $namafile,
			'deskripsi'		=> $deskripsi
			);

		$db->select_tbl('project');
		$result = $db->insert($data_project);
		$id_project = $db->return_id();
		echo $result;
	}


?>