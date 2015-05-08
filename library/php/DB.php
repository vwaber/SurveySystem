<?php
class DB {
	
	var $dbcon;
	var $ready = false;
	var $last_query;
	var $last_error;
	
	function DB($dbuser, $dbpassword, $dbname, $dbhost) {
		return $this->__construct($dbuser, $dbpassword, $dbname, $dbhost);
	}
	
	function __construct($dbuser, $dbpassword, $dbname, $dbhost) {
		$this->dbcon = @mysql_connect($dbhost, $dbuser, $dbpassword);
		if(!$this->dbcon) {
			return false;
		}
		
		$this->select($dbname);
	}
	
	function select($db) {		
		if(!@mysql_select_db($db, $this->dbcon)) {
			$this->ready = false;
			return;
		}
	}
	
	function escape($string) {
		return addslashes($string);
	}
	
	function insert_query($query='') {
		if(empty($query)) {
			$this->last_error = 'No query supplied.';
			return false;
		}
		
		$this->last_query=$query;
		$result = mysql_query($query);
		if(!$result) {
			$this->last_error = mysql_error();
			return false;
		}
		$id = mysql_insert_id();
		if ($id==0) return true;
		else return $id;
	}

	function update_query($query='') {
		if(empty($query)) {
			$this->last_error = 'No query supplied';
			return false;
		}
		
		$this->last_query = $query;
		$result = mysql_query($query);
		if(!$result) {
			$this->last_error = 'No query supplied.';
			return false;
		}
		
		$rows = mysql_affected_rows();
		if($row == 0) return true;
		else return $rows;
	}

	function select_query($query='') {
		if(empty($query)) {
			$this->last_error = 'No query supplied.';
			return false;
		}

		$this->last_query = $query;
		$result = mysql_query($query);
		if(!$result) {
			$this->last_error = mysql_error();
			return false;
		}
		return $result;
	}
	
	function get_row_object($query = '') {
		if(empty($query)) {
			$this->last_error = 'No query supplied.';
			return false;
		}
		$this->last_query = $query;
		return mysql_fetch_object(mysql_query($query));
		
	}

	function insert_array($table, $data) {
		$data = add_magic_quotes($data);
		$fields = array_keys($data);
		return $this->insert_query("INSERT INTO $table (`" . implode('`,`',$fields) . "`) VALUES ('".implode("','",$data)."')");
	}

}

if(!isset($db))
	$db = new DB(DB_USER, DB_PASS, DB_NAME, DB_HOST);
?>