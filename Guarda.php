<?php

class Guarda//libre cambie por usuario
{
		private $id;
		private $nombre;
		private $documento;
		private $sede;
		private $Apertura;
		private $saldoInicial;
		private $saldoFinal;
		private $Cierre;
	 
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

		public function getsede(){
		return $this->sede;
		}
 
		public function setsede($sede){
			$this->sede = $sede;
		}

			public function getApertura(){
		return $this->Apertura;
		}
 
		public function setApertura($Apertura){
			$this->Apertura = $Apertura;
		}
			
			public function getsaldoInicial(){
		return $this->saldoInicial;
		}
 
		public function setsaldoInicial($saldoInicial){
			$this->saldoInicial = $saldoInicial;
		}
			
				public function getsaldoFinal(){
		return $this->saldoFinal;
		}
 
		public function setsaldoFinal($saldoFinal){
			$this->saldoFinal = $saldoFinal;
		}
			
				public function getCierre(){
		return $this->Cierre;
		}
 
		public function setCierre($Cierre){
			$this->Cierre = $Cierre;
		}		



		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}

		
	}
?>