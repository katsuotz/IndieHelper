<?php 
	
	/**
	* Lib For IndieHelper
	* SMKN 4 Bandung XI-RPL 3
	*/

	include 'Helper.php';

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

		function __construct()
		{	
			$this->mysqli = new mysqli('localhost','root','','db_indie');
		}

		function getall($tbname = '') {
			if(!empty($tbname))
				$data = $this->mysqli->query("SELECT * FROM $tbname");
			$res = array();
			while ($datas = $data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
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
			$query = $this->mysqli->query("DELETE FROM $tblname WHERE $this->fieldname = $this->value");
			return $query;
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

			$this->where = 'WHERE ' . implode(' AND ', $data);

			return $this->where;
		}

		function gettable($tblname = '') {
			if ($tblname)
				$this->tblname = $tblname;

			$query = "SELECT $this->select FROM $this->tblname $this->where";
			$data = $this->mysqli->query($query);
			$res = array();
			$this->select = '*';
			$this->tblname = '';
			$this->where = '';
			if ($data) {
				return $data->fetch_object();
			}
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
			$name = $_FILES[$file]['name'];
			$data = array(
				'name' => $name,
				'dir' => $_FILES[$file]['tmp_name'],
				'size' => $_FILES[$file]['size'],
				'ext' => strtolower(pathinfo($name,PATHINFO_EXTENSION)),
				);
			return $data;
		}
	}

	class Session extends Database
	{
		function set_session($session) {
			foreach ($session as $key => $value) {
				$_SESSION[$key] = $value;
			}
		}

		function get_session($keyname) {
			return $_SESSION[$keyname];
		}

	}

	$session = new Session();


	$input = new Input();
	$db = new Database();

 ?>