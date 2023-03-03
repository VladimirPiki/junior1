<?php

/**
 * @author Vladimir Krstevski <vlade.piki23@hotmail.com>
 * @link https://www.linkedin.com/in/vladimir-krstevski-6182aa24b/
 * Please, visit my website - https://fkjenimaale.mk/
 */

class DB
{
	/* Variable for connection to database */
	private $servername = "localhost";
	private $username 	= "root";
	private $password 	= "";
	private $dbname		= "junior_developer_task_test";
	private $conn		= null;

	/**
	 * Connection PHP to Database
	 * __construct
	 *
	 * @return void
	 */
	public function __construct()
	{
		try {
			$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$statement  = $this->conn->prepare("SET NAMES 'utf8'");
			$statement->execute();
			ini_set('default_charset', 'utf-8');
		} catch (PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}
	}



	/**
	 * All the data comes in this function and insert to database.
	 * 
	 * insertRow
	 *
	 * @param  mixed $table_name
	 * @param  mixed $columns_name
	 * @param  mixed $columns_value
	 * @return void
	 */
	public function insertRow($table_name, $columns_name, $columns_value)	
	{
		$stmt = $this->conn->prepare("INSERT INTO $table_name($columns_name)
		VALUES($columns_value)");
		if($stmt->execute()){
			echo "success";
		};
	}

	
	/**
	 * All the data comes in this function and delete to database.
	 * 
	 * deleteRow
	 *
	 * @param  mixed $table_name
	 * @param  mixed $pk_name
	 * @param  mixed $pk_value
	 * @return void
	 */
	public function deleteRow($table_name, $pk_name, $pk_value)
	{
		$stmt = $this->conn->prepare("DELETE FROM $table_name 
		WHERE $pk_name=$pk_value");
		if($stmt->execute()){
			echo "success";
		};
	}
	
	/**
	 * All the data comes in this function and display all (*) from database.
	 * 
	 * selectRow
	 *
	 * @param  mixed $table_name
	 * @return void
	 */
	public function selectRow($table_name)
	{
		$stmt = $this->conn->prepare("SELECT * from " . $table_name);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	/**
	 * This function indicates, that we can cover all CRUD operation with this one function.
	 * 
	 * @param mixed $selectRowStoredProcedureName
	 * 
	 * @return [type]
	 */
	public function selectRowStoredProcedure($selectRowStoredProcedureName)
	{
		$stmt = $this->conn->prepare("call $selectRowStoredProcedureName()");
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
