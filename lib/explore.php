<?php 
	include 'lib.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = $input->post('search');
		$db->order_by('id_project', 'DESC');
		if($data == '') {
			$db->get_tbl('project');
			$result = $db->result();
			echo json_encode($result);
	
		} else {
			$wh = array();

			foreach ($data as $key => $value) {
				array_push($wh,$value);
			}

			$db->logic_where('OR');
			$db->where_explore($wh);
			$db->get_tbl('project');
			$result = $db->result();
			
			echo json_encode($result);
		}
	}
 ?>