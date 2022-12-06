<?php
namespace App\Model;

abstract class Connect
{
	protected $conn;

	protected const HOST = '';  	/* database ip */
	protected const USER = '';  	/* username */
	protected const PASSWORD = '';  /* password of the user */

	protected function connect_DB($database_name)
	{
		try
		{
			$this->conn = new \PDO(
				'mysql:host=' . Connect::HOST . ';dbname=' . $database_name,
				Connect::USER, Connect::PASSWORD
			);
		}
		catch (\PDOException $e)
		{
			return False;
		}
	}

}
