<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../view/css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
	<style>body {
background-image: url(http://photos1.hi5.com/0031/763/432/vr3mEw763432-03.gif);
background-repeat: repeat;
background-position: top center;
background-attachment: fixed;
background-repeat: repeat-y;
}</style>
<html>

</head>
<body>

 <!-- ArkAngel,YonkoChileWebRox -->
	<div class="contenedor-formulario">

<?php
require('../model/connect_db.php');
require('../model/conexion.php');
//incluye la clase Libro y CrudLibro
	require_once('../model/crud_Usuario.php');
require_once("../model/Usuario.php");

 
$crud= new CrudUsuario();
$libro= new Usuario();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$libro=$crud->obtenerLibro($_GET['correo']);
?>

<div class="WRAP">
    
	<form action="../controller/administrar_usuario.php" class="formulario" name="formulario_registro" method="POST">
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
				<td><input type='text' name='genero' value='<?php echo $libro->getGenero() ?>' ></td>
		</div>
	<div>
		        			<label class="label" for="tipodedocumento">Tipo Documento:</label>
						<div class="input-group"><!--pass lo cambiamos por TipoDoc!-->
      			<br><br>
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
								
        

							?>
			</div></select></div>
			<div >
			
				<label class="label" for="Documento">Documento:</label>
				<div class="input-group">
				<td><input type='text' name='documento' value='<?php echo $libro->getdocumento() ?>' readonly ></td>
		</div>

			
		<div>
			<label class="label" for="Fecha de nacimiento">Fecha de nacimiento:</label>
						<div class="input-group">
			<td><input type='date' name='edad' value='<?php echo $libro->getedad() ?>'></td>
		</div>

		<div>
			<label class="label" for="Ciudad">Ciudad:</label>
		        			
				<div class="input-group">			<!--pass lo cambiamos por TipoDoc!-->
      			<td>
      			<select name='idciudad' id='ciudad'  class="w3-select" >
      			           
					<option value="Bogota">Bogot&aacute</option>';                    

			</select></div></div>
		<div>
			<label class="label" for="direccion">Direccion:</label>
			<div class="input-group">
			<td><input type='text' name='direccion' value='<?php echo $libro->getdireccion() ?>'></td>
		</div>
		
		<div>
			<label class="label" for="telefono">Telefono</label>
			<div class="input-group">
			<td><input type='text' name='telefono' value='<?php echo $libro->gettelefono() ?>'></td>
		</div></div>
	
		<div>
			<label class="label" for="Sede">Estado</label>
				<div class="input-group">
			<td><input type='text' name='estado' value='<?php echo $libro->getestado() ?>' readonly></td>
		</div>
		<input type='hidden' name='actualizar' value='actualizar' >
	</table>
	<input type='submit' value='Actualizar'>
	<a href="../view/index.php"><input type='submit' value="Volver"></a></div>
</form>
</form>
</body>
</html>