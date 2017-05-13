<?php 
	include 'lib.php';

	if(isset($_GET['id_donasi']) && isset($_GET['status'])){
		$id 	= $input->get('id_donasi');
		$status	= $input->get('status');
		$where	= array('id_donasi'=>$id);
		$db->select(array('id_donasi','jumlah','id_project'));
		$db->where($where);
		$db->get_tbl('donasi');
		$data   = $db->row_result();
		$id_project	= $data->id_project;
		$jumlah		= $data->jumlah;

		if($status == 1){
			$update	= array('income' => 'income + '.$jumlah);
			$db->select_tbl('project');
			$db->where(array('id_project' => $id_project));
			$check = $db->update($update,false);
			if($check == "Berhasil"){
				$db->select_tbl('donasi');
				$db->where(array('id_donasi'=>$id));
				if($db->update(array('status'=>'Sudah')) == 'Berhasil'){
					location('../datadonasi.php');
				}else{
					echo "Error";
				}
			}else{
				echo "Error";
			}

		}else{
			$update	= array('income' => 'income - '.$jumlah);
			$db->select_tbl('project');
			$db->where(array('id_project' => $id_project));
			$check = $db->update($update,false);
			if($check == "Berhasil"){
				$db->select_tbl('donasi');
				$db->where(array('id_donasi'=>$id));
				if($db->update(array('status'=>'Belum')) == 'Berhasil'){
					location('../datadonasi.php');
				}else{
					echo "Error";
				}
			}else{
				echo "Error";
			}
		}
	}

 ?>