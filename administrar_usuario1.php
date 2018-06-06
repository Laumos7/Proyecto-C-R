<?php
//incluye la clase Libro y CrudLibro

	require_once('../model/crud_Usuario1.php');
	require_once('../model/Usuario.php');
	$crud= new CrudUsuario();
	$libro=new Usuario();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$libro->setNombre($_POST['nombre']);
		$libro->setApellido($_POST['apellido']);
		$libro->setGenero($_POST['genero']);
		$libro->setTipoDoc($_POST['TipoDoc']);
		$libro->setdocumento($_POST['documento']);
		$libro->setedad($_POST['edad']);	
		$libro->setciudad($_POST['ciudad']);	
		$libro->setdireccion($_POST['direccion']);		
		$libro->setcorreo($_POST['correo']);	
		$libro->settelefono($_POST['telefono']);	
		$libro->setsede($_POST['sede']);	
	

		//llama a la función insertar definida en el crud
		$crud->insertar($libro);
	header('Location: ../view/admin.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);
		$libro->setNombre($_POST['nombre']);
		$libro->setApellido($_POST['apellido']);
		$libro->setGenero($_POST['genero']);
		$libro->setTipoDoc($_POST['TipoDoc']);
		$libro->setdocumento($_POST['documento']);	
		$libro->setedad($_POST['edad']);
		$libro->setciudad($_POST['ciudad']);
		$libro->setdireccion($_POST['direccion']);		
		$libro->settelefono($_POST['telefono']);		
		$libro->setestado($_POST['estado']);		
		$crud->actualizar($libro);
		header('Location: ../view/admin.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
	header('Location: ../view/admin.php');	
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar.php');
	}
?>