<?php
class Entity {
	
	  public  function save(){
		  $db = Db::getConnection();
		  $table = static::$table;
		  $db->exec("INSERT INTO {$table} (username, password) VALUES('{$this->username}','{$this->password}')");
		  $this->id = $db->lastInsertId();
	  }	
	
	   public static function getUser($username,$password){
			$db = Db::getConnection();
			$table = static::$table;
		    $res = $db->query("select * from {$table} where username = '{$username}' and password = '{$password}'");
		    $res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		    return $res->fetch();    
	  }
	  
	   public static function getAllUsers($username=null){
		  $db = Db::getConnection();
		  $table = static::$table;
		  $res = $db->query("select * from {$table} order by date asc");
		  $res->setFetchMode(PDO::FETCH_CLASS,get_called_class());
		  $output = [];
		  while($rw=$res->fetch()){
			  $output[] = $rw;
		  }
		  return $output;  
	  }
  
}
?>

