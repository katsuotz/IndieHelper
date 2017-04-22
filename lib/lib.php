	<?php 
	
	/**
	* Lib For IndieHelper
	* SMKN 4 Bandung XI-RPL 3
	*/

	session_start();
	
	function baseurl($custom = ''){
		$baseurl = 'http';
		$baseurl .= "://".$_SERVER['HTTP_HOST'];
		$baseurl .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		$baseurl .= $custom;

		return $baseurl;
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
			return $this->mysqli->query($query);
		}

		function select($value) {
			$this->select = implode(',', $value);
		}

		function from($value) {
			$this->tblname = $value;
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

		function where_explore($value){
			$row = 'nama';
			$col = array();

			foreach ($value as $value) {
				array_push($col, $value);			
			}

			$data = array();

			for ($i=0; $i < count($col); $i++) { 
				array_push($data, $row." LIKE '". $col[$i] . "%'");
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

		function get_tbl($tblname = '') {
			if ($tblname)
				$this->tblname = $tblname;

			if ($this->join) {
				$this->join = implode(' ', $this->join);
			} else {
				$this->join = '';
			}

			$query = "SELECT $this->select FROM $this->tblname $this->join $this->where";
			$this->data = $this->mysqli->query($query);
			$this->select = '*';
			$this->tblname = '';
			$this->where = '';
			$this->join = array();
		}

		function update($value, $tblname = '') {
			if ($tblname)
				$this->tblname = $tblname;
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

			$query = "UPDATE $this->tblname SET " . implode(', ', $data) . " $this->where";
			$this->data = $this->mysqli->query($query);

		}

		function row_result() {
			return $this->data->fetch_object();
		}

		function row_array() {
			return $this->data->fetch_array();
		}

		function result() {
			$res = array();
			while ($datas = $this->data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
		}

		function result_array() {
			$res = array();
			while ($datas = $this->data->fetch_array()) {
				$res[] = $datas;
			}
			return $res;
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
				$name = $_FILES[$file]['name'];
				$data = array(
					'name' => $name,
					'dir' => $_FILES[$file]['tmp_name'],
					'size' => $_FILES[$file]['size'],
					'ext' => strtolower(pathinfo($name,PATHINFO_EXTENSION)),
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
			return $_SESSION["$keyname"];
		}

	}

	$session = new Session();
	$input = new Input();
	$db = new Database();

 ?>