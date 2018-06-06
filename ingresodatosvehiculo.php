<!DOCTYPE html>
<?php 
require("../model/conexion.php");
  $conexion=conexion();
session_start();
if (@!$_SESSION['email']) {

}elseif ($_SESSION['rol']==2) {
 
}

$correo=$_GET['correo']; 
$dato="SELECT COUNT(*) FROM VEHICULO where Propietario='$correo'";
$result = mysqli_query($conexion,$dato);
$row = $result->fetch_row();
    			
if($row[0]!=0)
{
	echo '<script>alert("Sus datos ya han sido registrados")</script> ';
	echo "<script>location.href='index.php'</script>";

//echo '<a href=index.php><input type=button value=Volver name=Buton></a>';

}
else{}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="../view/css/estilos.css">
     <link rel="shortcut icon" href="../view/images/favicon.ico">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>

</head>
<body>
	<div class="contenedor-formulario">
		<div class="wrap">
			<form action="administrar_vehiculo.php" class="formulario" name="formulario_registro" method="POST">
				<div>
					
					  <label class="label" for="vehiculo"><font color="#303F9F"><b>Vehiculo:</b></font></label><br><br>
						<div class="input-group radio">
                          
						<input type="radio" name="vehiculo" id="moto" value="1" required>
						<label for="moto">Moto</label>
						<input type="radio" name="vehiculo" id="bicicleta" value="2" required>
						<label for="bicicleta">Bicicleta</label>
					</div>
					
					<div class="input-group">
						<label class="label" for="Color del vehiculo"><b>Color del vehiculo:</b></label><br><br>
						<SELECT name="color" class="w3-select"  required>
					
						<OPTION VALUE="Negro">Negro</OPTION>
						<OPTION VALUE="Blanco">Blanco</OPTION>
						<OPTION VALUE="Azul">Azul</OPTION>
						<OPTION VALUE="Rojo">Rojo</OPTION>
						<OPTION VALUE="Amarillo">Amarillo</OPTION>
						<OPTION VALUE="Naranja">Naranja</OPTION>
						<OPTION VALUE="Plateado">Plateado</OPTION>
						<OPTION VALUE="Morado">Morado</OPTION>
						</SELECT>
						
					</div>
					
					<div class="input-group">
						<input type="text" name="placa" id="Placa" maxlength="6" required>
						<label class="label" for="Placa"><b>Placa o numero de rin:</b></label>
					</div>
					<div class="input-group">
						<input type="text" name="serie" id="serial"  maxlength="10" required>
						<label class="label" for="serial"><b>Serial:</b></label>
					</div>
					<div class="input-group">
						 <input type="text" name="marca" id="Marca"  maxlength="10" required>
						<label class="label" for="telefono"><b>Marca:</b></label>
					</div>

					<div class="input-group">
							<label class="label" for="telefono"><b>Documento del propietario:</b></label>
						
							<br><br>
							<input type="text" id="propietario" name="propietario" value="<?php echo $correo=$_GET['correo']; ?>" readonly>
							
						</div>


					<div class="input-group checkbox">
						<input type="checkbox" name="terminos" id="terminos" value="true">
						<label for="terminos">Acepto los Terminos y Condiciones</label>
							<input type='hidden' name='insertar' value='insertar'>
					</div>
						

					<input type="submit" id="btn-submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script src="../view/js/formulario.js"></script>
</body>
</html>