<?php 

	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username	= $input->post('login_username');
		$password	= sha1($input->post('login_password'));

		$where = array(
			'username' => $username,
			'password' => $password
			);

		$db->join('user', '', 'akun.id_akun', 'user.id_akun');
		$db->where($where);
		$db->get_tbl('akun');
		$result = $db->row_result();

		if ($result) {
			if ($result->username == $username && $result->password == $password) {
				$data = array(
					'id_user'	=> $result->id_user,
					'id_akun' 	=> $result->id_akun,
					'username' 	=> $result->username,
					'status'	=> $result->status
					);
				$session->set_session($data);
				echo "Berhasil";
			} else {
				echo "Gagal";
			}
		} else {
			echo "Gagal";
		}

	}

?>
