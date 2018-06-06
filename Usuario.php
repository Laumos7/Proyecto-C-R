<?php

class Usuario//libre cambie por usuario
{
    	private $id;
		private $nombre;
		private $apellido;
		private $genero;
		private $TipoDoc;
		private $documento;
		private $edad;
		private $ciudad;
		private $direccion;
		private $correo;
		private $telefono;
		private $estado;
	 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getApellido(){
			return $this->apellido;
		}
 
		public function setApellido($apellido){
			$this->apellido = $apellido;
		}
 
		public function getGenero(){
		return $this->genero;
		}
 
		public function setGenero($genero){
			$this->genero = $genero;
		}
		public function getTipoDoc(){
		return $this->TipoDoc;
		}
 
		public function setTipoDoc($TipoDoc){
			$this->TipoDoc = $TipoDoc;
		}
			public function getdocumento(){
		return $this->documento;
		}
 
		public function setdocumento($documento){
			$this->documento = $documento;
		}
			public function getedad(){
		return $this->edad;
		}
 
		public function setedad($edad){
			$this->edad = $edad;
		}
			public function getciudad(){
		return $this->ciudad;
		}
 
		public function setciudad($ciudad){
			$this->ciudad = $ciudad;
		}
		public function getdireccion(){
		return $this->direccion;
		}
 
		public function setdireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getcorreo(){
		return $this->correo;
		}
 
		public function setcorreo($correo){
			$this->correo = $correo;
		}
		public function gettelefono(){
		return $this->telefono;
		}
 
		public function settelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getsede(){
		return $this->sede;
		}
 
		public function setsede($sede){
			$this->sede = $sede;
		}

		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		public function getestado(){
			return $this->estado;
		}
 
		public function setestado($estado){
			$this->estado = $estado;
		}
	}
?>