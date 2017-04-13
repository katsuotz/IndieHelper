<?php 
	
	/**
	* Lib For IndieHelper
	* XI-RPL 3
	*/

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

		// function get($tbname) {
		// 	$this->tblname = $tbname;
		// }

		// function where($fieldname, $value) {
		// 	$this->fieldname = $fieldname;
		// 	$this->value = $value;
		// }

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
	}

	$input = new Input();
	$db = new Database();

 ?>