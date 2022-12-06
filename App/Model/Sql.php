<?php
namespace App\Model;

use App\Model\Connect;

abstract class Sql extends Connect
{
	protected function set_param($statement, $key, $value)
	{
		$statement->bindParam($key, $value);
	}

	protected function set_params($statement, $parameters = Array())
	{
		foreach ($parameters as $key => $value)
			$this->set_param($statement, $key, $value);
	}

	public function query($query, $parameters = Array())
	{
		$stmt = $this->conn->prepare($query);
		$this->set_params($stmt, $parameters);
		$stmt->execute();

		return $stmt;
	}
}
