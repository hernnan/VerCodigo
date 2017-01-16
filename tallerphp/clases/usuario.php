<?php 
require_once("conectar.php");

class Usuarios extends Conectar{
	private $db;

	public function __construct(){
		$this->db=parent::conectar();
		parent::setNames();
	}

	public function getDatos(){
		$sql = "
				select 
				id,nombre,correo,telefono,fecha
				from
				usuario;
				";
		$datos = $this->db->query($sql);
		$arreglo=array();
		while($reg=$datos->fetch_object()){
			$arreglo[]= $reg;
		}
		return $arreglo;		
	}
	public function getDatosPorId($id){
		$sql = "
				select 
				id,nombre,correo,telefono,fecha
				from
				usuario
				where
				id='".$id."'
				";
		$datos = $this->db->query($sql);
		$arreglo=array();
		while($reg=$datos->fetch_object()){
			$arreglo[]= $reg;
		}
		return $arreglo;		
	}

	public function insertar(){
		$sql="
			 insert into usuario
			 values
			 (null, '".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["telefono"]."','".$_POST["fecha"]."'); 	
		";
		$this->db->query($sql);
	}

	public function actualizar(){
		$sql=
		"
			UPDATE usuario
			SET
			nombre='".$_POST["nombre"]."',
			correo='".$_POST["correo"]."',
			telefono='".$_POST["telefono"]."',
			fecha='".$_POST["fecha"]."'
			WHERE
			id='".$_POST["id"]."'

		";
		$this->db->query($sql);
	}
	public function eliminar(){
		$sql=
		"
			delete from usuario
			where
			id='".$_GET["id"]."'

		";
		$this->db->query($sql);
	}
}