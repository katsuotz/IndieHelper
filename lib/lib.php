<?php 
	
	/**
	* 
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

		function __construct()
		{	
			$this->mysqli = new mysqli('localhost','root','','db_indie');
		}

		function getall($tbname = ''){
			if(!empty($tbname))
				$data = $this->mysqli->query("SELECT * FROM $tbname");
			$res = array();
			while ($datas = $data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
		}

		function get($tbname){
			$this->tblname = $tbname;
		}

		function where($fieldname,$value){
			$this->fieldname = $fieldname;
			$this->value = $value;
		}

		function delete($tblname){
			$query = $this->mysqli->query("DELETE FROM $tblname WHERE $this->fieldname = $this->value");
			return $query;
		}

		function getwhere($fieldname,$value){
			$data = $this->mysqli->query("SELECT * FROM $this->tblname WHERE $fieldname = '$value'");
			$res = array();
			while ($datas = $data->fetch_object()) {
				$res[] = $datas;
			}
			return $res;
		}

	}


	$db = new Database();

 ?>