<?php 

	include 'lib.php';

	$id_akun	= $session->get_session('id_akun');
	$id_user	= $session->get_session('id_user');
	$nama 		= $session->get_session('nama');
	$username 	= $session->get_session('username');
	$password 	= $session->get_session('password');
	$alamat		= $session->get_session('alamat');
	$jk			= $session->get_session('jk');
	$foto		= $session->get_session('foto');
	$status		= $session->get_session('status');

	$data_akun = array(
		'id_akun'	=> $id_akun,
		'username' 	=> $username,
		'password' 	=> $password,
		'status'	=> $status
		);

	// print_r($data_akun);

	$data_user = array(
		'id_user'	=> $id_user,
		'nama' 		=> $nama,
		'jk'		=> $jk,
		'foto'		=> $foto,
		'alamat'	=> $alamat,
		'id_akun'	=> $id_akun
		);

	print_r($data_user);

	$db->select_tbl('akun');
	$result = $db->insert($data_akun);

	echo $result;
	$db->select_tbl('user');
	$result = $db->insert($data_user);
	echo $result;

	header("location:" . baseurl('../datauser.php'));

?>