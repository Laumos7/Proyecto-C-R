<?php
// incluye la clase Db
require_once('../model/conexion.php');
 
    class CrudUsuario{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($usuario){
			$db=Db::conectar();
            
             $hoy = date("Y-m-d H:i:s");  
			$insert=$db->prepare("INSERT INTO recibo values(NULL,:nombre,:documento,:vehiculo,:sede,'$hoy','$hoy',:Cancelado,DEFAULT)");
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('documento',$usuario->getdocumento());
			$insert->bindValue('vehiculo',$usuario->getvehiculo());
			$insert->bindValue('sede',$usuario->getsede());
			$insert->bindValue('Cancelado',$usuario->getCancelado());
			$insert->execute();
 
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM recibo');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setvehiculo($usuario['vehiculo']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setHoraIngreso($usuario['HoraIngreso']);
				$myusuario->setHoraSalida($usuario['HoraSalida']);
				$myusuario->setCancelado($usuario['Cancelado']);
				$myusuario->setestado($usuario['estado']);
				$listausuarios[]=$myusuario;
			}
			return $listausuarios;
		}

		public function mostrar1($documento){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM recibo WHERE documento=:documento');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setvehiculo($usuario['vehiculo']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setHoraIngreso($usuario['HoraIngreso']);
				$myusuario->setHoraSalida($usuario['HoraSalida']);
				$myusuario->setCancelado($usuario['Cancelado']);
				$myusuario->setestado($usuario['estado']);
				$listausuarios[]=$myusuario;
			
			}
			return $listausuarios;
		}





 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM usuario WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM usuario WHERE documento=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myusuario= new Usuario();
			$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setvehiculo($usuario['vehiculo']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setHoraIngreso($usuario['HoraIngreso']);
				$myusuario->setHoraSalida($usuario['HoraSalida']);
				$myusuario->setCancelado($usuario['Cancelado']);
				$myusuario->setestado($usuario['estado']);
			return $myusuario;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
            $hoy = date("Y-m-d H:i:s");  
			$cancelar="Si";
			$actualizar=$db->prepare("UPDATE recibo SET HoraSalida='$hoy',Cancelado=:Cancelado,estado=:estado WHERE documento=:documento and Cancelado='No'");
             $actualizar->bindValue('documento',$usuario->getdocumento());
			$actualizar->bindValue('Cancelado',$usuario->getCancelado());
			$actualizar->bindValue('estado',$usuario->getestado());
			$actualizar->execute();
		}
	}
?>