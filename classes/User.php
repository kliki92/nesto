<?php
class User extends Entity{
	public $id;
	public $username;
	public $password;
	
	public static $table = 'users';
}
?>
