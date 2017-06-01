<?php

/**
* 
*/
class QueryBuilder
{
	private $pdo;
	
	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll()
	{
		$stmt = $this->pdo->prepare('select * from employee');
		$stmt->execute();
		return $stmt->fetchAll();
	}
}