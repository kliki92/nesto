<?php
class Db {
  private static $conn = null;
  public static function getConnection(){
    if(!self::$conn){
      self::$conn = new PDO("mysql:host=localhost;dbname=diwanee","root","");
    }
    return self::$conn;
  }	
}
 ?>
