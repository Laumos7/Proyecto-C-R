<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
	
</head>
<body>

 <!-- ArkAngel,YonkoChileWebRox -->
	<div class="contenedor-formulario">
		<div class="wrap">
<?php
//incluye la clase Libro y CrudLibro
require('../model/connect_db.php');
	require_once('../model/crud_Usuario1.php');
	require_once('../model/Usuario.php');
	$crud= new CrudUsuario();
	$libro=new Usuario();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['id']);
?>

		
			<form action="../controller/administrar_usuario1.php" class="formulario" name="formulario_registro" method="POST">
		<DIV>

			<input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
		</div>
			<div>
							<label class="label" for="nombre"><font color= #303F9F><b>Nombre:</label>
		        			<div class="input-group">
							<input type="text" id="nombre" name="nombre" value='<?php echo $libro->getNombre()?>' readonly required>
							
						</div>

			
		
						<div >
							<label class="label" for="apellido">Apellido:</label>
							<div class="input-group">
							<input type="text" id="apellido" name="apellido"  value='<?php echo $libro->getApellido()?>' readonly required>
						</div>
		<div >
			
				<label class="label" for="genero">Genero:</label>
				<div class="input-group">
				<td><input type='text' name='genero' value='<?php echo $libro->getGenero() ?>' readonly></td>
		</div>
	<div>
		        			<label class="label" for="tipodedocumento">Tipo Documento:</label>
						<div class="input-group"><!--pass lo cambiamos por TipoDoc!-->
      			<br><br>
      			<select name='TipoDoc' id='TipoDoc' >
      			  <?php 
						     error_reporting(0);
										
         						 $query = $mysqli -> query ("SELECT * FROM tipodedocumento");
											
         						 while ($valores = mysqli_fetch_array($query)) {
												
           				 echo '<font color=black><option value="',$valores[codigo],'">',$valores[Descripcion],'</option>';
													
          }
        

							?>
			</div></select></div>
			<div >
			
				<label class="label" for="Documento">Documento:</label>
				<div class="input-group">
				<td><input type='text' name='documento' value='<?php echo $libro->getdocumento() ?>' readonly></td>
		</div>

			
		<div>
			<label class="label" for="Fecha de nacimiento">Fecha de nacimiento:</label>
						<div class="input-group">
			<td><input type='date' name='edad' value='<?php echo $libro->getedad() ?>'readonly></td>
		</div>

		<<div class="input-group">
    	        			<label style="font-size: 14pt"><b>CIUDAD</b></label>	<br><br>
							<!--pass lo cambiamos por TipoDoc!-->    	
							 <select name='ciudad' id='ciudad'  >		
						      <option value="Bogota">Bogot&aacute</option>';
							</select>					      
					    </div>
                        
		<div>
			<label class="label" for="direccion">Direccion:</label>
			<div class="input-group">
			<td><input type='text' name='direccion' value='<?php echo $libro->getdireccion() ?>' readonly></td>
		</div>
	
		<div>
			<label class="label" for="telefono">Telefono</label>
			<div class="input-group">
			<td><input type='text' name='telefono' value='<?php echo $libro->gettelefono() ?>' readonly></td>
		</div></div>
	
		<div>
			<label class="label" for="Sede">Estado</label>
				<div class="input-group">
			<td><input type='text' name='estado' value='<?php echo $libro->getestado() ?>'></td>
		</div>
		<input type='hidden' name='actualizar' value='actualizar' >
	</table>
	<input type='submit' value='Actualizar'>
	<a href="indexprin.php"><input type='submit' value="Volver"></a></div>
</form>
</body>
</html>