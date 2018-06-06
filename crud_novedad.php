<?php
// incluye la clase Db
require_once('../model/conexion.php');
 
	class CrudLibro{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO NOVEDAD values(NULL,:TipoDoc,:Documento,:Novedad,DEFAULT)');
			$insert->bindValue('TipoDoc',$libro->getTipoDoc());
			$insert->bindValue('Documento',$libro->getdocumento());
			$insert->bindValue('Novedad',$libro->getnovedad());
			$insert->execute();
 
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM NOVEDAD');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new novedad();
				$myLibro->setId($libro['id']);
				$myLibro->setTipoDoc($libro['TipoDoc']);
				$myLibro->setdocumento($libro['documento']);
				$myLibro->setnovedad($libro['novedad']);
				$myLibro->setfecha($libro['fecha']);		
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		public function mostrar1($documento){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM novedad WHERE documento=:propietario');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new novedad();
				$myLibro->setId($libro['id']);
				$myLibro->setTipoDoc($libro['TipoDoc']);
				$myLibro->setdocumento($libro['documento']);
				$myLibro->setfecha($libro['fecha']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}





 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM novedad WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM novedad WHERE documento=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new novedad();
		
				$myLibro->setTipoDoc($libro['TipoDoc']);
				$myLibro->setdocumento($libro['documento']);
				$myLibro->setnovedad($libro['novedad']);
				$myLibro->setfecha($libro['fecha']);
							return $myLibro;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE novedad SET TipoDoc=:TipoDoc, documento=:documento, novedad=:novedad WHERE idnovedad=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('TipoDoc',$libro->getTipoDoc());
			$actualizar->bindValue('documento',$libro->getdocumento());
			$actualizar->bindValue('novedad',$libro->getnovedad());
			$actualizar->bindValue('fecha',$libro->getfecha());
			$actualizar->execute();
		}
	}
?>