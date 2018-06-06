
<?php
// incluye la clase Db
require_once('../model/conexion.php');
 
	class CrudGuarda{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO recaudo values(NULL,:nombre,:documento,:sede,DEFAULT,DEFAULT,DEFAULT,DEFAULT)');			
			$insert->bindValue('nombre',$usuario->getNombre());
			$insert->bindValue('documento',$usuario->getdocumento());
			$insert->bindValue('sede',$usuario->getsede());
		
			$insert->execute();
 
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM recaudo');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setApertura($usuario['Apertura']);
				$myusuario->setsaldoInicial($usuario['saldoInicial']);
				$myusuario->setsaldoFinal($usuario['saldoFinal']);
				$myusuario->setCierre($usuario['Cierre']);

				$listausuarios[]=$myusuario;
			}
			return $listausuarios;
		}

		public function mostrar1($documento){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM recaudo WHERE documento=:documento');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setApertura($usuario['Apertura']);
				$myusuario->setsaldoInicial($usuario['saldoInicial']);
				$myusuario->setsaldoFinal($usuario['saldoFinal']);
				$myusuario->setCierre($usuario['Cierre']);
			
			}
			return $listausuarios;
		}

		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM recaudo WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM recaudo WHERE documento=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setApertura($usuario['Apertura']);
				$myusuario->setsaldoInicial($usuario['saldoInicial']);
				$myusuario->setsaldoFinal($usuario['saldoFinal']);
				$myusuario->setCierre($usuario['Cierre']);
			return $myusuario;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE recaudo SET saldoFinal=:saldoFinal, Cierre=DEFAULT WHERE Id=:id');
			$actualizar->bindValue('id',$usuario->getId());
			$actualizar->bindValue('saldoFinal',$usuario->getsaldoFinal());
			$actualizar->execute();
		}
	}
?>