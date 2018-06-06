<?php
//incluye la clase Libro y CrudLibro
require_once('../model/crud_novedad.php');
require_once("../model/novedad.php");
 
$crud= new CrudLibro();
$libro= new novedad();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {

		$libro->setTipoDoc($_POST['TipoDoc']);
		$libro->setdocumento($_POST['documento']);
		$libro->setnovedad($_POST['novedad']);

				//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		header('Location:index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif(isset($_POST['actualizar'])){
		$libro->setId($_POST['id']);

		
		$libro->setTipoDoc($_POST['TipoDoc']);
		$libro->setdocumento($_POST['documento']);
		$libro->setnovedad($_POST['novedad']);
		$libro->setfecha($_POST['fecha']);
		$crud->actualizar($libro);
		header('Location:index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location:../view/index.php');	
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar1.php');
	}
?>