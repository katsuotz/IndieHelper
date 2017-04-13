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

		function insert($data) {
			foreach ($data as $key => $value) {
				$this->infield[] = $key;
				$this->invalues[] = "'" . $value . "'";		
			}

			$query = "INSERT INTO $this->tblname(" . implode( $this->infield, ",") . ") VALUES (" . implode(", ", $this->invalues) . ")";

			if ($this->mysqli->query($query)) {
				return 1;
			} else {
				return 0;
			}
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
				array_push($data, ($row[$i] . " AND '" . $col[$i]) . "'");
			}

			$this->where = 'WHERE ' . implode(' = ', $data);
		}

		function gettable($tblname = '') {
			if ($tblname)
				$this->tblname = $tblname;

			$data = $this->mysqli->query("SELECT $this->select FROM $this->tblname $this->where");
			$res = array();
			while ($datas = $data->fetch_object()) {
				$res[] = $datas;
			}
			$this->select = '*';
			$this->tblname = '';
			$this->where = '';
			return $res;
		}
	}


	class Input extends Database
	{
		
		function Post($post){
			return $_POST[$post];
		}

		function Get($get){
			return $_GET[$get];
		}
	}

	$input = new Input();
	$db = new Database();

 ?>