	<?php 
	
	/**
	* Lib For IndieHelper
	* SMKN 4 Bandung XI-RPL 3
	*/

	session_start();
	
	function baseurl($custom = ' '){
		$baseurl = 'http';
		$baseurl .= "://".$_SERVER['HTTP_HOST'];
		$baseurl .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
		$baseurl .= $custom;

		return $baseurl;
	}

	function redirect($url = '') {
		header("location: " . $url);
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

		public function __construct()
		{	
			$this->mysqli = new mysqli('localhost','root','','db_indie');
		}

		public function select_tbl($value) {
			return $this->tblname = $value;
		}

		public function insert($data) {
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

		public function return_id() {
			$result = $this->mysqli->insert_id;
			return $result;
		}

		public function delete($tblname) {
			$query = "DELETE FROM $tblname $this->where";
			$this->mysqli->query($query);
			return $query;
		}

		public function select($value) {
			$this->select = implode(',', $value);
		}

		public function from($value) {
			$this->tblname = $value;
		}

		public function where($value) {
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

		public function where_explore($value){
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

		public function logic_where($logic = 'AND'){
			$this->logic = $logic;
		}

		public function join($tbljoin, $jointype = '', $column1, $column2) {
			$join = $jointype . ' JOIN ' . $tbljoin . ' ON (' . $column1 . ' = ' . $column2 . ') ';
			array_push($this->join, $join);
		}

		public function get_tbl($tblname = '') {
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

		public function update($value, $tblname = '') {
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

		public function row_result() {
			return $this->data->fetch_object();
		}

		public function row_array() {
			$result = $this->data->fetch_object();
			return (array) $result;
		}

		public function result() {
			$res = array();
			while ($datas = $this->data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
		}

		public function result_array() {
			$result = $this->data->fetch_object();
			return (array) $result;
		}

		public function affected_rows() {
			return $this->mysqli->affected_rows;
		}
	}


	class Input extends Database
	{
		
		public function post($post){
			return $_POST[$post];
		}

		public function get($get){
			return $_GET[$get];
		}

		public function files($file){
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
		public function set_session($session) {
			foreach ($session as $key => $value) {
				$_SESSION["$key"] = $value;
			}
		}

		public function get_session($keyname) {
			return $_SESSION["$keyname"];
		}

		public function unset_session($session) {
			foreach ($session as $key => $value) {
				unset($_SESSION["$value"]);
			}
		}
	}

	class Login_Checker extends Database
	{
		public function check_login()
		{

		}
	}

	$lc 		= new Login_Checker();
	$session 	= new Session();
	$input 		= new Input();
	$db 		= new Database();

 ?>