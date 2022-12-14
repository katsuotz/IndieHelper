 	<?php 
	
	/**
	* Lib For IndieHelper
	* SMKN 4 Bandung XI-RPL 3
	*/

	session_start();
	
	function baseurl($custom = '') {
		$baseurl = 'http';
		$baseurl .= "://".$_SERVER['HTTP_HOST'];
		$baseurl .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		$baseurl .= $custom;

		return $baseurl;
	}

	function location($url) {
		header('Location: ' . $url);
	}

	function money($uang){
		return "Rp " . number_format($uang, 0,',','.') . ', -';
	}

	function percent($income,$target){
		$percent = ($income / $target) * 100;

		if($percent >= 100)
			return 100;
		else
			return $percent;
	}


	class Database
	{
		
		public $mysqli = '';
		public $tblname = '';
		public $fieldname = '';
		public $value = '';

		public $infield = '';
		public $invalues = '';
		public $select = '*';
		public $where = '';
		public $order_by = '';

		public $logic = 'AND';

		public $join = array();
		public $data = '';

		function __construct()
		{	
			$this->mysqli = new mysqli('localhost','root','','db_indie');
		}

		function select_tbl($value) {
			return $this->tblname = $value;
		}

		function insert($data) {
			foreach ($data as $key => $value) {
				$this->infield[] = $key;
				$this->invalues[] = "'" . $value . "'";		
			}

			$query = "INSERT INTO $this->tblname(" . implode( $this->infield, ",") . ") VALUES (" . implode(", ", $this->invalues) . ")";

			$this->infield 	= null;
			$this->invalues = null;

			if ($this->mysqli->query($query)) {
				return 'Berhasil';
			} else {
				return 'Gagal';
			}
		}

		function return_id() {
			$result = $this->mysqli->insert_id;
			return $result;
		}

		function delete($tblname) {
			$query = "DELETE FROM $tblname $this->where";
			$this->mysqli->query($query);
			return $query;
		}

		function select($value) {
			$this->select = implode(',', $value);
		}

		function from($value) {
			$this->tblname = $value;
		}

		function where_null($value) {
			$this->where = 'WHERE '. $value . ' IS NULL';
		}

		function where($value) {
			$row = array();
			$col = array();

			foreach ($value as $key => $values) {
				array_push($row, $key);
				array_push($col, $values);
			}

			$data = array();

			for ($i = 0; $i < count($row); $i++) {
				array_push($data, ($row[$i] . " = '" . $col[$i]) . "'");
			}

			if($this->logic == 'AND')
				$this->where = 'WHERE ' . implode(' AND ', $data);
			else
				$this->where = 'WHERE ' .implode(" $this->logic ",$data);

		}

		function order_by($id, $order) {
			$this->order_by = 'ORDER BY ' . $id . ' ' . $order;
		}

		function where_explore($value){
			$col = array();

			foreach ($value as $key => $values) {
				array_push($col, $values);
				$row = $key;			
			}

			$data = array();

			for ($i=0; $i < count($col); $i++) { 
				array_push($data, $row." LIKE '%". $col[$i] . "%'");
			}

			 $this->where = 'WHERE '.implode(' OR ', $data);
		}

		function logic_where($logic = 'AND'){
			$this->logic = $logic;
		}

		function join($tbljoin, $jointype = '', $column1, $column2) {
			$join = $jointype . ' JOIN ' . $tbljoin . ' ON (' . $column1 . ' = ' . $column2 . ') ';
			array_push($this->join, $join);
		}

		function get_tbl($tblname = '',$limit = false,$count = 0) {
			if ($tblname)
				$this->tblname = $tblname;

			if ($this->join) {
				$this->join = implode(' ', $this->join);
			} else {
				$this->join = '';
			}

			if($limit)
				$query = "SELECT $this->select FROM $this->tblname $this->join $this->where $this->order_by LIMIT $count";
			else
				$query = "SELECT $this->select FROM $this->tblname $this->join $this->where $this->order_by";

			$this->data = $this->mysqli->query($query);
			$this->select = '*';
			$this->tblname = '';
			$this->where = '';
			$this->order_by = '';
			$this->join = array();
			
		}

		function update($value,$kutip = true, $tblname = '') {
			if ($tblname)
				$this->tblname = $tblname;
			$row = array();
			$col = array();

			foreach ($value as $key => $values) {
				array_push($row, $key);
				array_push($col, $values);
			}

			$data = array();

			if($kutip == true){
				for ($i = 0; $i < count($row); $i++) {
					array_push($data, ($row[$i] . " = '" . $col[$i]). "'" );
				}
			}else{
				for ($i = 0; $i < count($row); $i++) {
					array_push($data, ($row[$i] . " = " . $col[$i]) );
				}
			}

			$query = "UPDATE $this->tblname SET " . implode(', ', $data) . " $this->where";
			

			if($this->mysqli->query($query))
				return 'Berhasil';
			else
				return 'Gagal';
		}

		function row_result() {
			return $this->data->fetch_object();
		}

		function row_array() {
			$result = $this->data->fetch_object();
			return (array) $result;
		}

		function result() {
			$res = array();
			while ($datas = $this->data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
		}

		function result_array() {
			$result = $this->data->fetch_object();
			return (array) $result;
		}

		function affected_rows() {
			return $this->mysqli->affected_rows;
		}
	}


	class Input extends Database
	{
		
		function post($post){
			return $_POST[$post];
		}

		function get($get){
			return $_GET[$get];
		}

		function files($file){
			if ($_FILES[$file]['name']) {
				$ext  = strtolower(pathinfo($_FILES[$file]['name'],PATHINFO_EXTENSION));
				$name = md5(time().$_FILES[$file]['name']).".$ext";
				$data = array(
					'name' => $name,
					'dir' => $_FILES[$file]['tmp_name'],
					'size' => $_FILES[$file]['size'],
					'ext' => $ext,
					);
				return $data;
			} else {
				return $data = array();
			}
		}
	}

	class Session extends Database
	{
		function set_session($session) {
			foreach ($session as $key => $value) {
				$_SESSION["$key"] = $value;
			}
		}

		function get_session($keyname) {
			$data = @$_SESSION["$keyname"];
			return $data;
		}

		function unset_session($session) {
			foreach ($session as $key => $value) {
				unset($_SESSION["$value"]);
			}
		}
	}

	$session = new Session();
	$input = new Input();
	$db = new Database();

	function checkLogin(){
		if(empty($_SESSION['STATUS'])){
			location('Login.php');
		}
	}

 ?>