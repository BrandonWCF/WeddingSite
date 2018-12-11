<?php
Class DatabaseHandler
{
private $servername = 'localhost';
private $username = 'brandon';
private $password = 'P@ssword';
private $database = 'weddingdatabase';
public $connection = null;

	function Connect()
	{
		try 
		{
			$this->connection = new PDO("mysql:host=".$this->servername.";dbname=".$this->database, $this->username, $this->password);
			// set the PDO error mode to exception
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//echo "Connection Successful"; 
		}
		catch(PDOException $e)
		{
			//echo "Connection failed: " . $e->getMessage();
		}
	}
	
	function WriteUserToDatabase()
	{
		
	}
}
?>