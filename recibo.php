<?php

class Usuario//libre cambie por usuario
{
		private $id;
		private $nombre;
		private $documento;
		private $vehiculo;
		private $sede;
		private $HoraIngreso;
		private $HoraSalida;
		private $Cancelado;
		private $esestado;
		
	 
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getdocumento(){
		return $this->documento;
		}
 
		public function setdocumento($documento){
			$this->documento = $documento;
		}
			public function getvehiculo(){
		return $this->vehiculo;
		}
 
		public function setvehiculo($vehiculo){
			$this->vehiculo = $vehiculo;
		}

		public function getsede(){
		return $this->sede;
		}
 
		public function setsede($sede){
			$this->sede = $sede;
		}


			public function getHoraIngreso()
			{
		return $this->HoraIngreso;
		}
 
		public function setHoraIngreso($HoraIngreso){
			$this->HoraIngreso= $HoraIngreso;
		}
		public function getHoraSalida(){
		return $this->HoraSalida;
		}
 
		public function setHoraSalida($HoraSalida){
			$this->HoraSalida = $HoraSalida;
		}
		public function getCancelado(){
		return $this->Cancelado;
		}
 
		public function setCancelado($Cancelado){
			$this->Cancelado = $Cancelado;
		}
		
		public function getId(){
			return $this->id;
		}
 
		public function setestado($estado){
			$this->estado = $estado;
		}
		public function getestado(){
			return $this->estado;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		
	}
?>