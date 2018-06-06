<?php
// incluye la clase Db
require_once('../model/conexion.php');
 
	class CrudUsuario{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
	    public function insertar($usuario){
			$db=Db::conectar();
			$insert=$db->prepare('INSERT INTO USUARIO values(NULL,:Nombre,:Apellido,:Genero,:idTipoDoc,:Documento,:Edad,:Ciudad,:Direccion,:Telefono,DEFAULT)');
			$insert->bindValue('Nombre',$usuario->getNombre());
            $insert->bindValue('Apellido',$usuario->getApellido());
			$insert->bindValue('Genero',$usuario->getGenero());
			$insert->bindValue('idTipoDoc',$usuario->getTipoDoc());
			$insert->bindValue('Documento',$usuario->getdocumento());
			$insert->bindValue('Edad',$usuario->getedad());
			$insert->bindValue('Ciudad',$usuario->getciudad());
			$insert->bindValue('Direccion',$usuario->getdireccion());
			$insert->bindValue('Telefono',$usuario->gettelefono());
			$insert->execute();
 
		}
        
		// método para mostrar todos los libros
		public function mostrar(){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM USUARIO');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['Id_usuario']);
				$myusuario->setApellido($usuario['Apellido']);
				$myusuario->setGenero($usuario['genero']);
				$myusuario->setTipoDoc($usuario['idTipoDoc']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setedad($usuario['edad']);
				$myusuario->setciudad($usuario['idciudad']);
				$myusuario->setdireccion($usuario['direccion']);
				$myusuario->settelefono($libro['telefono']);
				$myusuario->setsede($usuario['sede']);
				$myusuario->setestado($usuario['estado']);
				$listausuarios[]=$myusuario;
			}
			return $listausuarios;
		}

		public function mostrar1($documento){
			$db=Db::conectar();
			$listausuarios=[];
			$select=$db->query('SELECT * FROM usuario WHERE documento=:documento');
 
			foreach($select->fetchAll() as $usuario){
				$myusuario= new Usuario();
				$myusuario->setId($usuario['id']);
				$myusuario->setNombre($usuario['nombre']);
				$myusuario->setApellido($usuario['apellido']);
				$myusuario->setGenero($usuario['genero']);
				$myusuario->setTipoDoc($usuario['idTipoDoc']);
				$myusuario->setdocumento($usuario['documento']);
				$myusuario->setedad($usuario['edad']);
				$myusuario->setciudad($usuario['idciudad']);
				$myusuario->setdireccion($usuario['direccion']);
				$myusuario->setcorreo($usuario['correo']);
				$myusuario->settelefono($libro['telefono']);
				$myusuario->setsede($usuario['sede']);
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
			$select=$db->prepare('SELECT * FROM USUARIO WHERE Documento=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$usuario=$select->fetch();
			$myusuario= new Usuario();
			$myusuario->setId($usuario['Id_usuario']);
				$myusuario->setNombre($usuario['Nombre']);
				$myusuario->setApellido($usuario['Apellido']);
				$myusuario->setGenero($usuario['Genero']);
				$myusuario->setTipoDoc($usuario['idTipoDoc']);
				$myusuario->setdocumento($usuario['Documento']);
				$myusuario->setedad($usuario['Edad']);
				$myusuario->setciudad($usuario['Ciudad']);
				$myusuario->setdireccion($usuario['Direccion']);
				//$myusuario->setcorreo($usuario['correo']);
				$myusuario->settelefono($usuario['Telefono']);
				//$myusuario->setsede($usuario['sede']);
				$myusuario->setestado($usuario['Estado']);
			return $myusuario;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($usuario){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE USUARIO SET Nombre=:Nombre, Apellido=:Apellido, Genero=:Genero, idTipoDoc=:TipoDoc, Documento=:Documento, Edad=:Edad, Ciudad=:Ciudad, Direccion=:Direccion,Telefono=:Telefono,Estado=:Estado WHERE Id_usuario=:Id_usuario');
    		$actualizar->bindValue('Id_usuario',$usuario->getId());
			$actualizar->bindValue('Nombre',$usuario->getNombre());
			$actualizar->bindValue('Apellido',$usuario->getApellido());
			$actualizar->bindValue('Genero',$usuario->getGenero());
			$actualizar->bindValue('TipoDoc',$usuario->getTipoDoc());
			$actualizar->bindValue('Documento',$usuario->getdocumento());
			$actualizar->bindValue('Edad',$usuario->getedad());
			$actualizar->bindValue('Ciudad',$usuario->getciudad());
			$actualizar->bindValue('Direccion',$usuario->getdireccion());
			$actualizar->bindValue('Telefono',$usuario->gettelefono());
			$actualizar->bindValue('Estado',$usuario->getestado());
			$actualizar->execute();
		}
	}
?>