<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username	= $input->post('login_username');
		$password	= sha1($input->post('login_password'));

		$where = array(
			'username' => $username,
			'password' => $password
			);

		$db->where($where);
		$db->get_tbl('akun');
		$result = $db->row_result();

		if ($result) {
			if ($result->status == 'admin') {
				$where = array('akun.id_akun' => $result->id_akun);
				$db->join('admin', '', 'akun.id_akun', 'admin.id_akun');
				$db->where($where);
				$db->get_tbl('akun');
				$result_admin = $db->row_result();

				if ($result_admin) {
					$data = array(
						'ID'		=> $result_admin->id_admin,
						'ID_AKUN' 	=> $result_admin->id_akun,
						'USERNAME' 	=> $result_admin->username,
						'STATUS'	=> $result_admin->status,
						'NAMA'		=> $result_admin->nama,
						'FOTO'		=> $result_admin->foto
						);
				}

			} elseif ($result->status == 'user') {
				$where = array('akun.id_akun' => $result->id_akun);
				$db->join('user', '', 'akun.id_akun', 'user.id_akun');
				$db->where($where);
				$db->get_tbl('akun');
				$result_user = $db->row_result();
				
				if ($result_user) {
					$data = array(
						'ID'		=> $result_user->id_user,
						'ID_AKUN' 	=> $result_user->id_akun,
						'USERNAME' 	=> $result_user->username,
						'STATUS'	=> $result_user->status,
						'NAMA'		=> $result_user->nama,
						'FOTO'		=> $result_user->foto
						);	
				}
			}
		}

		if (!empty($data)) {
			$session->set_session($data);
		}

		echo $session->get_session('STATUS');

	}

?>
