<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$id_user	= $input->get('id_user');
		$nama 		= $input->post('nama');
		$username 	= $input->post('username');
		$jk 		= $input->post('jk');
		$alamat 	= $input->post('alamat');

		$data_akun = array(
			'username' => $username
			);

		$data_user = array(
			'nama' 	=> $nama,
			'jk'	=> $jk,
			'alamat'=> $alamat
			);

		$where = array('user.id_user' => $id_user);

		$db->select(array('user.id_user', 'akun.id_akun'));
		$db->join('user', '', 'akun.id_akun', 'user.id_akun');
		$db->where($where);
		$db->get_tbl('akun');
		$user = $db->row_result();

		$db->where(array('id_akun' => $user->id_akun));
		$result_akun = $db->update($data_akun, 'akun');
		$db->where(array('id_user' => $user->id_user));
		$result_user = $db->update($data_user, 'user');
		$result = $db->affected_rows();
		
		echo $result;
	}


?>