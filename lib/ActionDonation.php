<?php 
	include 'lib.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$jumlah		= $input->post('jumlah');
		$feedback	= $input->post('feedback');
		$bank		= $input->post('bank');
		$id_project	= $input->get('id_project');
		$id_user	= $session->get_session('ID');

		$data = array(
			'feedback'		=> $feedback,
			'jumlah'		=> $jumlah,
			'id_bank'		=> $bank,
			'id_project'	=> $id_project,
			'id_user'		=> $id_user,
			'status'		=> 'Belum'
			);

		$db->select_tbl('donasi');
		$result = $db->insert($data);

		if($result == 'Berhasil'){
			// $update	= array('income' => 'income + '.$jumlah);
			// $where 	= array('id_project' => $id_project);
			// $db->where($where);
			// $db->select_tbl('project');
			// $check = $db->update($update,false);
			// if($check == "Berhasil"){
				location('../detailproject.php?id='.$id_project);
			// }
		}
		else{
			echo "Error";
		}
	}
 ?>