<?php

class Vehiculo
{
		private $id;
		private $cargo;
		private $vehiculo;
		private $color;
		private $placa;
		private $serie;
		private $marca;
		private $propietario;
		
	 
		function __construct(){}
 
		public function getCargo(){
		return $this->cargo;
		}
 
		public function setCargo($cargo){
			$this->cargo = $cargo;
		}
 
		public function getvehiculo (){
			return $this->vehiculo;
		}
 
		public function setvehiculo ($vehiculo){
			return $this->vehiculo = $vehiculo;
		}
 
		public function getColor(){
		return $this->color;
		}
 
		public function setColor($color){
			$this->color = $color;
		}
		public function getPlaca(){
		return $this->Placa;
		}
 
		public function setPlaca($placa){
			$this->Placa = $placa;
		}
			public function getserie(){
		return $this->serie;
		}
 
		public function setserie($serie){
			$this->serie = $serie;
		}
			public function getmarca(){
		return $this->marca;
		}
 
		public function setmarca($marca){
			$this->marca = $marca;
		}
			public function getpropietario(){
		return $this->propietario;
		}
 
		public function setpropietario($propietario){
			$this->propietario = $propietario;
		}
		
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
	}
?>
