<?php
	class  Db{
		private static $conexion=NULL;
		private function __construct (){}
 
		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=sql313.ihostfull.com;dbname=uoolo_21595414_controlyregistro','uoolo_21595414','administradorjm3d',$pdo_options);
			return self::$conexion;
		}		
}
	

function conexion(){
		
		$conexion=new mysqli("sql313.ihostfull.com","uoolo_21595414","administradorjm3d","uoolo_21595414_controlyregistro");
		
		$conexion->set_charset("utf8");
			
			if($conexion->connect_errno){
				anuciarError("Error de base de datos","Ha ocurrido un error con la base de datos");
			}
			
		return $conexion;
	}


?>