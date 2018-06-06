<?php
// incluye la clase Db
require_once('../model/conexion.php');
 
	class CrudLibro{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO VEHICULO values(NULL,:Vehiculo,:Color,:Placa,:Serie,:Marca,:Propietario)');
			$insert->bindValue('Vehiculo',$libro->getvehiculo());
			$insert->bindValue('Color',$libro->getcolor());
			$insert->bindValue('Placa',$libro->getplaca());
			$insert->bindValue('Serie',$libro->getserie());
			$insert->bindValue('Marca',$libro->getmarca());
			$insert->bindValue('Propietario',$libro->getpropietario());
	
			$insert->execute();
 
		}
 
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM vehiculo');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new Vehiculo();
				$myLibro->setId($libro['id']);
				$myLibro->setvehiculo($libro['vehiculo']);
				$myLibro->setcolor($libro['color']);
				$myLibro->setplaca($libro['placa']);
				$myLibro->setserie($libro['serie']);
				$myLibro->setmarca($libro['marca']);
				$myLibro->setpropietario($libro['propietario']);
			
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

		public function mostrar1($documento){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM vehiculo WHERE propietario=:propietario');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new Vehiculo();
				$myLibro->setId($libro['id']);
				$myLibro->setvehiculo($libro['vehiculo']);
				$myLibro->setcolor($libro['color']);
				$myLibro->setplaca($libro['placa']);
				$myLibro->setserie($libro['serie']);
				$myLibro->setmarca($libro['marca']);
				$myLibro->setpropietario($libro['propietario']);

				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}





 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($id){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM vehiculo WHERE ID=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($id){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM vehiculo WHERE propietario=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$libro=$select->fetch();
			$myLibro= new Vehiculo();
				$myLibro->setId($libro['id']);
				$myLibro->setcargo($libro['cargo']);
				$myLibro->setvehiculo($libro['vehiculo']);
				$myLibro->setcolor($libro['color']);
				$myLibro->setplaca($libro['placa']);
				$myLibro->setserie($libro['serie']);
				$myLibro->setmarca($libro['marca']);
				$myLibro->setpropietario($libro['propietario']);
			return $myLibro;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE vehiculo SET  vehiculo=:vehiculo, color=:color, placa=:placa, serie=:serie, marca=:marca, propietario=:propietario WHERE id=:id');
			$actualizar->bindValue('id',$libro->getId());
			$actualizar->bindValue('vehiculo',$libro->getvehiculo());
			$actualizar->bindValue('color',$libro->getcolor());
			$actualizar->bindValue('placa',$libro->getplaca());
			$actualizar->bindValue('serie',$libro->getserie());
			$actualizar->bindValue('marca',$libro->getmarca());
			$actualizar->bindValue('propietario',$libro->getpropietario());
		
			$actualizar->execute();
		}
	}
?>