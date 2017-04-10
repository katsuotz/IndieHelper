<?php 
	
	/**
	* 
	*/
	class Database 
	{
		public var $mysqli = "";
		public var $tblname = "";
		public var $fieldname = '';
		public var $value = '';
		
		function __construct()
		{
			$this->mysqli = new mysqli('localhost','root','','db_indie');
		}

		function getAll($tbname){
			if(!empty($tbname))
				$data = $this->mysqli->query("SELECT * FROM $tbname");
			$res = array();
			while ($datas = $data->fetch_object()) {
				$res = $datas;
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