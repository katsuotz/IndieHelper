<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama 		= $input->post('nama');
		$username	= $input->post('username');
		$password	= sha1($input->post('password'));
		$alamat		= $input->post('alamat');
		$jk			= $input->post('jk');
		$namafile 	= $input->files('photo')['name'];
		$tmpfile 	= $input->files('photo')['dir'];
		$dir		= "../assets/images/user/$namafile";

		$data_akun = array(
			'username' 	=> $username,
			'password' 	=> $password,
			'status'	=> 'user'
			);

		$db->select_tbl('akun');
		$db->insert($data_akun);
		$id_akun = $db->return_id();


		if(empty($namafile)){
			$data_user = array(
				'nama' 		=> $nama,
				'jk'		=> $jk,
				'foto'		=> 'default.jpg',
				'alamat'	=> $alamat,
				'id_akun'	=> $id_akun
				);
		}else{
			$data_user = array(
				'nama' 		=> $nama,
				'jk'		=> $jk,
				'foto'		=> $namafile,
				'alamat'	=> $alamat,
				'id_akun'	=> $id_akun
				);
		}
		move_uploaded_file($tmpfile, $dir);
		$db->select_tbl('user');
		$result = $db->insert($data_user);
		$id_user = $db->return_id();

		echo $result;
	}

?>