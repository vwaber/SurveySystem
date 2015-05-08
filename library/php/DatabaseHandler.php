<?php

class DatabaseHandler
	{

	var $db;
	
	function __construct($host, $dbname, $user, $password)
		{	
		try
			{
			$this->db = new PDO(
				'mysql:'.$host.'=localhost;dbname='.$dbname, 
				$user, 
				$password,
				array(PDO::ATTR_PERSISTENT => true));

			$this->db->setAttribute(PDO::ATTR_ERRMODE,
				PDO::ERRMODE_EXCEPTION);
			}
		catch(PDOException $exception)
			{
			die('Could not connect to database.');
			}
		}
		/*
	Parameters:
		$table: 'TableName'
	Returns:
		Array
		(
		[0] => Array
			(
				[ColumnName] => Value
				[ColumnName2] => Value2
			)

		[1] => Array
			(
				[ColumnName0] => Value0
				[ColumnName1] => Value1
			)
	*/
	function select($table)
		{
		$qString = 'SELECT * FROM '.$table;
		
		$query = $this->db->prepare($qString);
		$query->execute();
		$row = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return($row);
		}
	
	/*
	Parameters:
		$table: 'TableName'
		$where:	array('Column' => 'Value')
	Returns:
		Array
		(
		[0] => Array
			(
				[ColumnName] => Value
				[ColumnName2] => Value2
			)

		[1] => Array
			(
				[ColumnName0] => Value0
				[ColumnName1] => Value1
			)
	*/
	function select_where($table, $where)
		{
		$qString = 'SELECT * FROM '.$table.' WHERE '.key($where).' = :'.key($where);
		
		$query = $this->db->prepare($qString);
		$query->execute($where);
		$row = $query->fetchAll(PDO::FETCH_ASSOC);
		
		return($row);
		}
		
	/*
	Parameters:
		$table: 'TableName'
		$cols:	array('Column1' => 'Value1', 'Column2' => 'Value2', ...)
		$where:	array('Column' => 'Value')
	Returns:
		Boolean based on success
	*/	
	function update($table, $cols, $where)
		{	
		$qString = 'UPDATE '.$table.' SET ';
		
		$keys = array_keys($cols);
		for($i = 0; $i < (count($keys) - 1); $i++)
			{
			$qString .= $keys[$i].'=:'.$keys[$i].', ';
			}
		$qString .= $keys[$i].'=:'.$keys[$i].' ';
		
		$qString .= 'WHERE '.key($where).'=:'.key($where);
		
		$query = $this->db->prepare($qString);	
		return($query->execute(array_merge($cols, $where)));	
		}
	
	/*
	Parameters:
		$table: 'TableName'
		$cols:	array('Column1' => 'Value1', 'Column2' => 'Value2', ...)
	Returns:
		Boolean based on success
	*/		
	function insert($table, $cols)
		{		
		$qString = 'INSERT INTO '.$table.' (';
		
		$keys = array_keys($cols);
		for($i = 0; $i < (count($keys) - 1); ++$i)
			{
			$qString .= $keys[$i].', ';
			}
		$qString .= $keys[$i].') ';
		
		$qString .= 'VALUES (';
		
		for($i = 0; $i < (count($keys) - 1); $i++)
			{
			$qString .= ':'.$keys[$i].', ';
			}
		$qString .= ':'.$keys[$i++].') ';
		
		$query = $this->db->prepare($qString);	
		return($query->execute($cols));
		}
	
	function user_authenticate($password)
		{
		$table = 'Users';
		$where = array('Password' => $password);
		
		$rows = $this->select_where($table, $where);
		
		if($rows != false)
			return(current($rows));
			
		return($rows);
		}
	}
?>