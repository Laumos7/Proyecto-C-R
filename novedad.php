<?php

class novedad
{
		private $id;
		private $TipoDoc;
		private $documento;
		private $novedad;
		private $fecha;

		
	 
		function __construct(){}
 
		public function getTipoDoc(){
		return $this->TipoDoc;
		}
 
		public function setTipoDoc($TipoDoc){
			$this->TipoDoc= $TipoDoc;
		}

		
 
		public function getdocumento (){
			return $this->documento;
		}
 
		public function setdocumento ($documento){
			return $this->documento = $documento;
		}
 
		public function getnovedad(){
		return $this->novedad;
		}
 
		public function setnovedad($novedad){
			$this->novedad = $novedad;
		}

		public function getfecha(){
		return $this->fecha;
		}
 
		public function setfecha($fecha){
			$this->fecha= $fecha;
		}

		
		public function getId(){
			return $this->id;
		}
 
		public function setId($id){
			$this->id = $id;
		}
	}
?>
