<?php
//incluye la clase Libro y CrudLibro
require_once('../model/crud_recibo.php');
require_once("../model/recibo.php");
 require("../model/connect_db.php");

 
 $doc=$_POST['doc'];
 $sql=("SELECT usuario.id, usuario.nombre ,usuario.documento,vehiculo.vehiculo,usuario.sede from usuario
inner join vehiculo
             where (usuario.documento=vehiculo.propietario)  and usuario.documento=$doc "); 
        $query=mysqli_query($mysqli,$sql);
 while($arreglo=mysqli_fetch_array($query))
 {
$nombre=$arreglo[1];
$vehiculo=$arreglo[3];
$sede=$arreglo[4];
$can='No';
 }



$crud= new CrudUsuario();
$libro= new Usuario();
 
    // si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {

		$libro->setNombre($nombre);
		$libro->setdocumento($_POST['doc']);
		$libro->setvehiculo($vehiculo);
		$libro->setsede($sede);
		$libro->setCancelado($can);
				//llama a la función insertar definida en el crud
		$crud->insertar($libro);
		header('Location:../view/guarda.php#services1');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	}elseif($_GET['accion']=='actualizar'){
                       $libro->setdocumento(($doc));
			$libro->setCancelado(($_GET['Cancelado']));
			$libro->setestado(($_GET['estado']));
		$crud->actualizar($libro);
		header('Location:../view/guarda.php#services1');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif ($_GET['accion']=='e') {
		$crud->eliminar($_GET['id']);
		header('Location:../view/index.php');	
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php 
	}elseif($_GET['accion']=='a'){
		header('Location: actualizar1.php');
	}
?>	