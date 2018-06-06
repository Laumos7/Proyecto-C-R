<?php
//incluye la clase Libro y CrudLibro
require_once('../model/crud_Usuario.php');
require_once("../model/Usuario.php");
 
$crud= new CrudUsuario();
$usuario= new Usuario();

 
    // si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
		$usuario->setGenero($_POST['genero']);
		$usuario->setTipoDoc($_POST['TipoDoc']);
		$usuario->setdocumento($_POST['documento']);
		$usuario->setedad($_POST['edad']);	
		$usuario->setciudad($_POST['idciudad']);	
		$usuario->setdireccion($_POST['direccion']);		
		$usuario->setcorreo($_POST['correo']);	
		$usuario->settelefono($_POST['telefono']);	
		$usuario->setsede($_POST['sede']);	
	

		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		    echo "<script>location.href='index.php'</script>";
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setApellido($_POST['apellido']);
		$usuario->setGenero($_POST['genero']);
		$usuario->setTipoDoc($_POST['TipoDoc']);
		$usuario->setdocumento($_POST['documento']);	
		$usuario->setedad($_POST['edad']);
		$usuario->setciudad($_POST['idciudad']);
		$usuario->setdireccion($_POST['direccion']);		
		$usuario->setcorreo($_POST['correo']);
		$usuario->settelefono($_POST['telefono']);	
		$usuario->setsede($_POST['sede']);		
		$usuario->setestado($_POST['estado']);	
		$crud->actualizar($usuario);
		header('Location:index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}
	elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>