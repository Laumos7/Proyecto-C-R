<!DOCTYPE html>
<?php 
require("../model/conexion.php");
  $conexion=conexion(); 
session_start();
if (@!$_SESSION['Correo']) {

}elseif ($_SESSION['rol']==2) {
 
}
$correo=$_GET['correo']; 
$dato="SELECT COUNT(*) FROM USUARIO where Documento='$correo'";
$result = mysqli_query($conexion,$dato);
$row = $result->fetch_row();
				
if($row[0]!=0)
{
	echo '<script>alert("Sus datos ya han sido registrados")</script> ';
	echo "<script>location.href='../controller/index.php'</script>";

//echo '<a href=../view/index.php><input type=button value=Volver name=Buton></a>';

}
else{}
?>
<html lang="en">
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../view/css/estilos.css">   
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="../view/images/favicon.ico">
	<title>Formularios</title>
	

</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="administrar_usuario.php" class="formulario" name="formulario_registro" method="POST">
			<B>
				<div>
                
                        <div class="input-group">
    						<input type="text" id="nombre" name="nombre" value="<?php echo $_SESSION['Usuario'];?>" required>
							<label class="label" for="nombre">Nombre:</label>
						</div>
                        

						<div class="input-group">
							<input type="text" id="apellido" name="apellido" value="" required>
							<label class="label" for="correo">Apellido:</label>
						</div>


						<div class="input-group">
						<font color= #303F9F>Genero:
						</div>


						<div class="input-group radio" >
							<input type="radio" name="genero" id="hombre" value="Hombre"  required>
							<label for="hombre">Hombre</label>
							<input type="radio" name="genero" id="mujer" value="Mujer"  required>
							<label for="mujer">Mujer</label>
						</div>


					
						<div class="input-group">
		        			<label style="font-size: 12pt"><b>Tipo De Documento</b></label>	<br><br>
							<!--pass lo cambiamos por TipoDoc!-->    			
						     <select name='TipoDoc' id='TipoDoc' class="w3-select" >
      			  <?php 
						     error_reporting(0);
										
         						 $query = $conexion -> query ("SELECT * FROM tipodedocumento");
											
         						 while ($valores = mysqli_fetch_array($query)) {
												
           				 echo '<font color=black><option value="',$valores[codigo],'">',$valores[Descripcion],'</option>';}
										?></select>
					      
					    </div>



						<div class="input-group">
							<font color= #303F9F>Digite numero de documento:<BR><BR>
							<input type="number" name="documento" value="<?php echo $_GET['correo'];?>" readonly><BR><BR>
						</div>

						
						<div class="input-group">
							<font color= #303F9F>Fecha de nacimiento:<br><br>
							<input type="date" id="edad" name="edad" max="2003-12-31"  required>
							
						</div>

						<div class="input-group">
		        			<label style="font-size: 14pt"><b>CIUDAD</b></label>	<br><br>
							<!--pass lo cambiamos por TipoDoc!-->    	
							 <select name='idciudad' id='ciudad' class="w3-select" >		
						      <option value="Bogota">Bogot&aacute</option>';
							</select>					      
					    </div>


						<div class="input-group">
							<input type="text" id="direccion" name="direccion"  required>
							<label class="label" for="Direccion">Direccion:</label>
						</div>

						<div class="input-group">
							<font color= #303F9F>Telefono:<br><br>
							<input type="text" id="telefono" name="telefono"  pattern="[0-9]{1,12}" required >						
						</div>
						
						<div class="input-group checkbox">
							<input type="checkbox" name="terminos" id="terminos" value="true">
							<label for="terminos">Acepto los Terminos y Condiciones</label>
							<input type='hidden' name='insertar' value='insertar'>

						</div>
							
					<input type="submit" id="btn-submit" value="Enviar" name="b">
				
				</div>
			</form>
                    
		</div>
	</div>
	<script src="../view/js/formulario.js"></script>
</body>
</html>	