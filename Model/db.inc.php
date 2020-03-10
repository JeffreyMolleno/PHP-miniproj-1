<?php
	trait database{
		
		public $host = "localhost";
		public $dbname = "phpstart";
		public $users = "root";
		public $pass = "";
		public $db;

		public function db_init(){

			$this->db = new mysqli($this->host,$this->users,$this->pass,$this->dbname);

			if($this->db->connect_errno > 0 ){
				die('Unable to connect['. $this->db->connect_error.']');
			}	
		}

		public function get_db(){
			return $this->db;
		}
	}
?>