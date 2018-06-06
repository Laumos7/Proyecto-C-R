<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <title>Formularios</title>
  <style>body {
background-image: url(http://photos1.hi5.com/0031/763/432/vr3mEw763432-03.gif);
background-repeat: repeat;
background-position: top center;
background-attachment: fixed;
background-repeat: repeat-y;
}</style>
</head>
<body>

 <!-- ArkAngel,YonkoChileWebRox -->
  <div class="contenedor-formulario">
     <div class="WRAP">
<?php
//incluye la clase Libro y CrudLibro
require('../model/connect_db.php');
  require_once('../model/crud_vehiculo.php');
  require_once('../model/vehiculo.php');
  $crud= new CrudLibro();
  $libro=new vehiculo();
  //busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
 $libro=$crud->obtenerLibro($_GET['correo']);
?>
<html>

<body>
    
  <form action="../controller/administrar_vehiculo.php" class="formulario" name="formulario_registro" method="POST">
  <font color= #303F9F>
   <div>
   <DIV>
      <input type='hidden' name='id' value='<?php echo $libro->getId()?>'>
    </DIV>
    <div>    
      <label class="label" for="Cargo:
">Cargo:
</label>         <div class="input-group">
    <input type='text' name='cargo' value='<?php echo $libro->getcargo()?>'></td>
    </DIV>
    <div>
      <label class="label" for="Vehiculo">Vehiculo</label>
      <div class="input-group">
   <input type='text' name='vehiculo' value='<?php echo $libro->getvehiculo()?>' >
    </div>
   <div>
    <label class="label" for="Color">Color</label>
          <div class="input-group">
      <input type='text' name='color' value='<?php echo $libro->getcolor() ?>'>
   </div>
    <div>
      <label class="label" for="PLaca">PLaca</label>
      <div class="input-group">
      <td><input type='text' name='placa' value='<?php echo $libro->getplaca() ?>'></td>
    </div>
    <div>
      <td>serial:</td>
      <div class="input-group">
      <td><input type='text' name='serie' value='<?php echo $libro->getserie() ?>'></td>
    </div>
    </div>
     <div>
      <td>marca:</td>
      <div class="input-group">
      <td><input type='text' name='marca' value='<?php echo $libro->getmarca() ?>'></td>
   </div>
   </div>
      <div>
      <td>Doc propietario:</td>
      <div class="input-group">
      <td><input type='text' name='propietario' value='<?php echo $libro->getpropietario() ?>'></td>
    </div>
    
    <input type='hidden' name='actualizar' value'actualizar'>
  </table>
  <input type='submit' value='Guardar'>
  <a href="../view/index.php"><input type='submit' value="Volver"></a></div>
</form>
</body>
</html>