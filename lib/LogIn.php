<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username	= $input->post('login_username');
		$password	= $input->post('login_password');

		$where = array(
			'username' => $username,
			'password' => $password
			);

		$db->where($where);
		$db->get_tbl('akun');
		$result = $db->row_result();

		if ($result) {
			if ($result->username == $username && $result->password == $password) {
				if ($result->status == 'admin') {
					$where = array('akun.id_akun' => $result->id_akun);
					$db->join('admin', '', 'akun.id_akun', 'admin.id_akun');
					$db->where($where);
					$db->get_tbl('akun');
					$result_admin = $db->row_result();

					$data = array(
						'id'		=> $result_admin->id_admin,
						'id_akun' 	=> $result_admin->id_akun,
						'username' 	=> $result_admin->username,
						'status'	=> $result_admin->status,
						'nama'		=> $result_admin->nama,
						'foto'		=> $result_admin->foto
						);

				} elseif ($result->status == 'user') {
					$where = array('akun.id_akun' => $result->id_akun);
					$db->join('user', '', 'akun.id_akun', 'user.id_akun');
					$db->where($where);
					$db->get_tbl('akun');
					$result_user = $db->row_result();
					
					$data = array(
						'id'		=> $result_user->id_user,
						'id_akun' 	=> $result_user->id_akun,
						'username' 	=> $result_user->username,
						'status'	=> $result_user->status,
						'nama'		=> $result_user->nama,
						'foto'		=> $result_user->foto
						);

				}
				
				$session->set_session($data);
				echo $session->get_session('status');
			} else {
				echo $session->get_session('status');
			}
		} else {
			echo $session->get_session('status');
		}

	}

?>
