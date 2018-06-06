<!DOCTYPE html>
<?php 
require('../model/conexion.php');
require_once('../model/crud_Usuario.php');
require_once("../model/Usuario.php");

$crud= new CrudUsuario();
$libro= new Usuario();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['nombre']);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../view/css/estilos.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>

</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="administar_novedades.php" class="formulario" name="formulario_registro" method="POST">
				<div>					
					
					<div class="input-group">
		        			<label style="font-size: 14pt"><b>Tipo De Documento</b></label>	<br><br>
							<!--pass lo cambiamos por TipoDoc!-->    			
						     <select name='TipoDoc' id='TipoDoc'  class="w3-select" >
          		  <?php 
                  $conexion=conexion(); 
						     error_reporting(0);
                             $peticion="SELECT * FROM tipodedocumento";          
    			$query=mysqli_query($conexion,$peticion);					   
				 while ($valores = mysqli_fetch_array($query)) {  
					 $a=""; 
					 if($valores["codigo"]==$libro->getTipoDoc()){$a="selected";}               
						echo '<option value="',$valores["codigo"],'"',$a,'>',$valores["Descripcion"],'</option>';                    
				  }								   

							?></select>
					      
					</div>
				
					
					<div class="input-group">
							<label class="label" for="telefono">Documento del propietario:</label>
						
							<br><br>
							<input type="text" id="documento" name="documento" value="<?php echo$_GET['nombre']?>" readonly>
							
						</div>
					<div class="input-group">
					<font color= #303F9F>Novedades:<br><br>
						  <textarea name="novedad" id="Novedad" cols="40" rows="5"></textarea>
						
					</div>

					<div class="input-group">
					<font color= #303F9F>Fecha Actual:<br><br>
						<?php $fecha=(date("d") . "/" . date("m") . "/" . date("Y"));  ?>
						 <input type="text" name="fecha" value="<?php echo $fecha ?>">
						
					</div>
				
					<div class="input-group checkbox">
    						<input type="checkbox" name="terminos" id="terminos" >
							<label for="terminos">Acepto los Terminos y Condiciones</label>
						</div>
					<input type='hidden' name='insertar' value='insertar'>	

					<input type="submit" id="enviar" name="enviar" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="../view/js/formulario.js"></script>
</body>
</html>