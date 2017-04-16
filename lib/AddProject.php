<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama 		= $input->post('nama');
		$id_kategori= $input->post('id_kategori');
		$tags 		= json_decode($input->post('tags'));
		$jumlah 	= $input->post('jumlah');
		$deskripsi 	= $input->post('deskripsi');

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
			'tags' 			=> $tags,
			'jumlah'		=> $jumlah,
			'foto'			=> $namafile,
			'deskripsi'		=> $deskripsi
			);

		$db->select_tbl('project');
		$result = $db->insert($data_project);
		$id_project = $db->return_id();
		echo $result;
	}


?>