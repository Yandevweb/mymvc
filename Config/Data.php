<?php

class Config_Data
{
	private $host      = 'localhost';
	private $dbname    = 'mymvc';
	private $user      = 'root';
	private $password  = '0000';

	public function __construct(){
		try {
			$dbh = new PDO('mysql:host='. $this->host. ';dbname='. $this->dbname , $this->user, $this->password);
		} catch (Exception $e) {
			echo "Echec de la connexion à la base de données : (". $e->getMessage() . ")";
		}
	}

	public function getConnection(){
		return $this->$dbh;
	}
}