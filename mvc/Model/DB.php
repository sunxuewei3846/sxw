<?php 

namespace Model;

class DB
{
	public $pdo;

	public function __construct()
	{
		$db = C('db');
		$this->pdo=new \PDO('mysql:host='.$db['host'].';dbname='.$db['dbname'],$db['username'],$db['password']);
	}

	public function add($table_name,$params)
	{
		$sql = 'insert into '.$table_name;

		$filed = '(';
		$value = ' values (';
		foreach ($params as $key => $val) {
			$filed .= $key.',';
			$value .= '"'.$val.'"'.',';
		}

		$sql .= trim($filed, ',').')'.trim($value, ',').')';
		return $this->pdo->query($sql);
		// return $sql;

	}

	public function select($table_name,$arr)
	{
		$yh_name = $arr['yh_name'];
		$yh_paw = $arr['yh_paw'];
		$sql = "select * from $table_name where yh_name = '$yh_name' and yh_paw = '$yh_paw'";
		$aa = count($this->pdo->query($sql));

		return $aa;
	}
	public function show($sql)
	{
		// $sql = "select * from $table_name";
		$res = $this->pdo->query($sql);
		return $res->fetchAll();
	}
} 