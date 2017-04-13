<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama 		= $input->post('nama');
		$username	= $input->post('username');
		$password	= sha1($input->post('password'));
		$alamat		= $input->post('alamat');
		$jk			= $input->post('jk');

		$data_akun = array(
			'username' 	=> $username,
			'password' 	=> $password,
			'status'	=> 'user'
			);

		$db->select_tbl('akun');
		$db->insert($data_akun) . '<br>';
		$id_akun = $db->return_id();

		$data_user = array(
			'nama' 		=> $nama,
			'jk'		=> $jk,
			'alamat'	=> $alamat,
			'id_akun'	=> $id_akun
			);

		$db->select_tbl('user');
		$result = $db->insert($data_user);
		$id_user = $db->return_id();

		echo $result;
	}

?>