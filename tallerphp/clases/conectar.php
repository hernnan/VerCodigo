<?php 

abstract class Conectar{
	private $mysqli;
	public function conectar(){
		$this->mysqli= new mysqli('localhost', 'root', '', 'tallerphp');
		//$this->mysqli->select_db('usuario');
		return $this->mysqli;
	}
	public function setNames(){
		return $this->mysqli->query("SET NAMES 'UTF8'");
	}
	
}