<?php
//incluye la clase Libro y CrudLibro
require_once('../model/crud_Guarda.php');
require_once("../model/Guarda.php");
 
$crud= new CrudGuarda();
$usuario= new Guarda();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$usuario->setNombre($_POST['nombre']);
		$usuario->setdocumento($_POST['documento']);
		$usuario->setsede($_POST['sede']);	

		//llama a la función insertar definida en el crud
		$crud->insertar($usuario);
		header('Location:../view/guarda.php#sistema');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif (isset($_POST['actualizar']))
	{
		$usuario->setId(($_POST['id']));
		$usuario->setsaldoFinal($_POST['saldoFinal']);		
		$crud->actualizar($usuario);
		header('Location:../view/guarda.php#sistema');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location:../view/guarda.php#sistema');	
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}
	elseif($_GET['accion']=='a'){
		header('Location: actualizar.php#sistema');
	}
?>