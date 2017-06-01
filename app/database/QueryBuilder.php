<?php

/**
* 
*/
class QueryBuilder
{
	private $pdo;
	protected $table;
	protected $sql;

	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}

	public function selectAll()
	{
		$this->sql = "SELECT * ";
		return $this;
	}

	public function from($table)
	{
		$this->sql .= "FROM {$table};";
		return $this;
	}
	public function execute()
	{
		$stmt = $this->pdo->prepare($this->sql);
		$stmt->execute();
		return $stmt->fetchAll();		
	}



}