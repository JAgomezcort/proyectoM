<?php

class user extends DB{
	private $nombre;
	private $username;


	public function userExists(suser, $pass){
      $md5pass = md5($pass);

      $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user AND password = :pass');
      



}
}






?>