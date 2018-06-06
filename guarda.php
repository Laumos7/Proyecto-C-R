<!DOCTYPE html>

<?php require("../model/connect_db.php");

session_start();
if (@!$_SESSION['Usuario']) {
  
}elseif ($_SESSION['rol']==2) {
  
}

?>
  <?php
    
       require("../model/conexion.php");?>
           <?php
if ($_POST){
//Incrementamos el valor
$conta = $_POST["conta"] + 2000;
}
else{
//Valor inicial
$conta = 2000;
}
?>
    
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>JM3D</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/table1.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="images/favicon.ico">
  <style type="text/css">

.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 50%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc; 
}

.panel {
    padding: 0 18px;
    display: none;
    background-color: white;
    overflow: hidden;
}

</style>
</head>

<body>
 <!-- <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>!-->

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenidos a <span>Colsutec</span></h1>
            <p class="animated fadeInRightBig">Un Sistema De Registro Para Un Control Oportuno</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar Ahora</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Registration System <span>JM3D</span></h1>
            <p class="animated fadeInRightBig">Un Sistema De Registro Para Un Control Oportuno</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar Ahora</a>
          </div>
        </div>
        <div class="item" style="background-image: url(images/slider/3.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Somos Una Empresa <span>Creativa</span></h1>
            <p class="animated fadeInRightBig"></p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar Ahora</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
             <span class="icon-bar"></span>
          </button>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right"> 
          <?php 
          //Inicio menu condicionado----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
             $user=$_SESSION['Usuario'];
             $sql=("SELECT * from LOGIN where Usuario='$user' ");
             $query=mysqli_query($mysqli,$sql);
             ?><?php
             while($arreglo=mysqli_fetch_array($query))
                {
          $sede=$arreglo[5];
             } 
             if($sede==2)
             {
                echo " <li><a href=''>Bienvenido <strong>";
                echo $_SESSION['Usuario'];
                echo "</strong> </a></li><li><a href='../controller/desconectar.php'> Cerrar sesión </a></li>";       
                echo "<li class='scroll'><a href='#services'>Datos usuarios</a></li>";           
                echo "<li class='scroll'><a href='#services1'>Entrada y salida de usuarios</a></li>";
                echo "<li class='scroll'><a href='#cifras'>Estadisticas</a></li>";
                echo "<li class='scroll'><a href='#sistema'> Movimiento Recaudo</a></li>";
                echo "<li class='scroll'><a href='#Manual'>Manual Guarda</a></li>";
                echo "<li class='scroll'><a href='#foto'>Codigos disponibles</a></li>"; 
             }else if($sede==1)
             {
                echo " <li><a href=''>Bienvenido <strong>";
                echo $_SESSION['Usuario'];
                echo "</strong> </a></li><li><a href='../controller/desconectar.php'> Cerrar sesi&oacuten </a></li>";       
                echo "<li class='scroll'><a href='#services'>Datos usuarios</a></li>";           
                echo "<li class='scroll'><a href='#services1'>Entrada y salida de usuarios</a></li>";
                echo "<li class='scroll'><a href='#cifras'>Estadisticas</a></li>";
                 echo "<li class='scroll'><a href='#Manual'>Manual Guarda</a></li>";
                echo "<li class='scroll'><a href='#foto'>Codigos disponibles</a></li>";  
                 
             }
             //Fin menu condicionado---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
             ?>
  
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->





<?php 

// info usuario -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

?>
</td><td>

<section id="services">  
     <br><br><br><br>
       <center>
        <font face="comic-sans" size="18"><b> Buscar Usuario</b></font>
        <br><br><br>
        <form action="#" method="POST">
          <input type="text " name="doc"> 
          <input type="submit" name="Buscar1" value="buscar1"> 
        </form>
        <br><br><br>

      
      <font face="comic-sans" size="18"><b>Información Usuario</b></font>

<?php 
        //-----------------------------------------------------------------------------------------------------inicio tabla informacion usuarios------------------------------------------------------------------------------------------
echo "<Font color=black>";
//Ejemplo con variable definida

if(isset($_POST["Buscar1"]))
  {
       $doc=$_POST['doc'];
      
        $sql=("SELECT usuario.id,usuario.nombre,usuario.apellido,tipodedocumento.descripcion,usuario.documento,usuario.sede,
              usuario.estado,vehiculo.vehiculo,vehiculo.color,vehiculo.placa,vehiculo.serie,vehiculo.marca from usuario 
              inner join vehiculo,tipodedocumento
              where (usuario.documento=vehiculo.propietario) and (usuario.idTipoDoc=tipodedocumento.codigo) and documento=$doc ");
              
              
        $query=mysqli_query($mysqli,$sql); 
              
        
        
            
      ?>
      <?php 
        if(mysqli_fetch_array($query)==0)
        {
            echo '<script>alert("No existe el usuario")</script> ';
        }
        else
        {    
             $sql1=("SELECT usuario.id,usuario.nombre,usuario.apellido,tipodedocumento.descripcion,usuario.documento,usuario.sede,
              usuario.estado,vehiculo.vehiculo,vehiculo.color,vehiculo.placa,vehiculo.serie,vehiculo.marca from usuario 
              inner join vehiculo,tipodedocumento
              where (usuario.documento=vehiculo.propietario) and (usuario.idTipoDoc=tipodedocumento.codigo) and documento=$doc ");
           $query1=mysqli_query($mysqli,$sql1); 
            echo " <br><br><br><br><br><br> <table class='table2'>";
              echo "<thead><tr class='warning'>";
              echo "<th>Id</th>";
              echo "<th>Nombre</th>";
              echo "<th>Apellido</th>";
              echo "<th>Tipo de documento</th>";
              echo "<th>Documento</th>";
              echo "<th>Sede</th>";
              echo "<th>Estado</th>";
               
              echo "<th>Tipo Vehiculo</th>";  
              echo "<th>Color</th>";  
              echo "<th>Placa/num.serie</th>"; 
              echo "<th>serial</th>";
              echo "<th>Marca</th>";                   
              echo "</tr></thead>";
         while($arreglo=mysqli_fetch_array($query1))
         {   
             
          
              echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";
              echo "<td><b>$arreglo[4]</td>";
              echo "<td><b>$arreglo[5]</td>";  
              echo "<td><b>$arreglo[6]</td>";
              echo "<td><b>$arreglo[7]</td>";     
              echo "<td><b>$arreglo[8]</td>"; 
              echo "<td><b>$arreglo[9]</td>"; 
              echo "<td><b>$arreglo[10]</td>"; 
              echo "<td><b>$arreglo[11]</td>"; 
            

          echo "</tr> </tbody>";
        }
         echo "</table>";
       }
  }
      
 echo "<br><br><br><br>";

       echo "<font face=comic-sans size=18><b>InformaciÃ³n Usuarios</b></font>";
echo "<Font color=black>";
  extract($_GET);

            $sql=("SELECT usuario.id,usuario.nombre,usuario.apellido,tipodedocumento.descripcion,usuario.documento,usuario.sede,
              usuario.estado,vehiculo.vehiculo,vehiculo.color,vehiculo.placa,vehiculo.serie,vehiculo.marca from usuario 
              inner join vehiculo,tipodedocumento
              where (usuario.documento=vehiculo.propietario) and (usuario.idTipoDoc=tipodedocumento.codigo) ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br><br> <table class='table2'>";
        echo "<thead><tr class='warning'>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Tipo de documento</th>";
        echo "<th>Documento</th>";
        echo "<th>Sede</th>";
        echo "<th>Estado</th>";
       
        echo "<th>Tipo Vehiculo</th>";  
        echo "<th>Color</th>";  
        echo "<th>Placa/num.serie</th>"; 
        echo "<th>serial</th>";
         echo "<th>Marca</th>";                   
          echo "</tr></thead>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";  
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";     
              echo "<td>$arreglo[8]</td>"; 
              echo "<td>$arreglo[9]</td>"; 
              echo "<td>$arreglo[10]</td>"; 
              echo "<td>$arreglo[11]</td>"; 
             

          echo "</tr></tbody>";
        }
         echo "</table>";
?>
<br><br><br>
</table>

<br><br><br>
</table>
</section>




<?php 

// LECTOR INGRESAR USUARIO -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

?>


</td><td>


<section id="services1">  
     <br><br>
       <center>
        <font face="comic-sans" size="18"><b>Buscar Codigo </b></font>
        <br><br><br>
        <form action="#services1" method="POST">
          <input type="text " name="doc"> 
          <input type="submit" name="Buscar" value="buscar"> 
        </form>
        <br><br><br>
        <font face="comic-sans" size="18"><b>Codigo Usuario</b></font>


<?

echo "<Font color=black>";
//Ejemplo con variable definida

if(isset($_POST["Buscar"]))
  {
       $doc=$_POST['doc'];
   
       $sql=("SELECT * FROM recibo where recibo.documento=$doc "); 
        $query=mysqli_query($mysqli,$sql);


        echo " <br><br><br><br><br><br><table class='table2'>";
        echo "<tr class='warning'>";
        echo "<thead><th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Documento</th>";
        echo "<th>Vehiculo</th>"; 
        echo "<th>Hora Ingreso</th>";
       echo "<th>Hora Salida</th>";
       echo "<th>Cancelado</th>";
        echo "<th>Estado</th>";
      
        echo "</b></tr></thead>";
   
      ?>
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
              echo "<td>$arreglo[5]</td>";  
              echo "<td>$arreglo[6]</td>";
              echo "<td>$arreglo[7]</td>";  
               
            
          echo "</tr> </tbody>";
        }
         echo "</table>";
      }
     
     echo "<br><br><br><br>";
       echo "<font face=comic-sans size=18><b>Información Usuarios</b></font>";

  echo " <form action=../controller/administar_recibo.php method=POST>
          <input type=text name=doc placeholder='Registrar Entrada'>  
          <input type='hidden' name='insertar' value='insertar'>
          <input type=submit name=Registrar value=Registrar>   
        </form>";

 echo "<br> <form action=../controller/administar_recibo.php?accion=actualizar&Cancelado=Si&estado=Inactivo method=POST>
          <input type=text name=doc placeholder='Registrar Salida'> 
          <input type='hidden' name='actualizar' value='actualizar'>
          <input type=submit name=Actualizar value=Actualizar> 
       
        </form>";
echo "<Font color=black>";
  extract($_GET);

            $sql=("SELECT * from recibo ");
             
        $query=mysqli_query($mysqli,$sql);
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

       echo " <br><br><br><br><br><br>  <table class='table2'>";
        echo "<thead><tr class='warning'>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Documento</th>";
        echo "<th>Vehiculo</th>"; 
        echo "<th>Sede</th>"; 
        echo "<th>Hora Ingreso</th>";
       echo "<th>Hora Salida</th>";
       echo "<th>Cancelado</th>";
        echo "<th>Estado</th>";
                     
        echo "</tr> </thead>";
   
      ?>
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";
              echo "<td><b>$arreglo[4]</td>";
              echo "<td><b>$arreglo[5]</td>";  
              echo "<td><b>$arreglo[6]</td>";
              echo "<td><b>$arreglo[7]</td>";     
              echo "<td><b>$arreglo[8]</td>"; 
             
          echo "</tr></tbody>";
        }
         echo "</table>";
         
         
         
        
         
?>
<br><br><br>
</table>

<br><br><br>
</table>
</section>



<?php 
// ESTADISTICAS -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

?></td><td>

<section id="cifras">
  <br><br><br><center>Estadisticas
  <?php
 echo " <br><br><center>  <table class='table2' width=70%>";
echo "<thead><tr><th><Font color=White size=6>Sede Colombia</th><th><Font color=Black size=6>Sede Restrepo</th></tr></thead><tr><br><br><br><td><Font color=White size=4>";
$result = mysqli_query($mysqli,"SELECT COUNT(*) FROM recibo where estado='Activo' and sede='Colombia'");
$row = $result->fetch_row();
echo "Vehiculos en sede Colombia:  $row[0]";


$result = mysqli_query($mysqli,"SELECT COUNT(*) FROM recibo where estado='Inactivo' and sede='Colombia'");
$row = $result->fetch_row();
echo '<br><br><br><Font color=White size=4>han salido: ', $row[0],' Usuarios de sede Colombia</td>';


$result = mysqli_query($mysqli,"SELECT COUNT(*) FROM recibo where estado='Activo' and sede='Restrepo'");
$row = $result->fetch_row();
echo '<td><Font color=Black size=4>Vehiculos en sede Restrepo: ', $row[0];


$result = mysqli_query($mysqli,"SELECT COUNT(*) FROM recibo where estado='Inactivo' and sede='Restrepo' ");
$row = $result->fetch_row();
echo '<br><br><br>han salido: ', $row[0],' Usuarios de sede restrepo</td></tr></table>';

?>

</section>
    
     <section id="sistema">  
 <?php
 $user=$_SESSION['user'];
             $sql=("SELECT * from LOGIN where Usuario='$user' ");
             $query=mysqli_query($mysqli,$sql);
             ?><?php
             while($arreglo=mysqli_fetch_array($query))
                {
          $sede=$arreglo[5];
             } 
             if ($sede==2){
?>
<br>
<center>
 <font face="comic-sans" size="18"><b> Movimiento Recaudo</b></font>
<center><div class="w3-container">

  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-green w3-large">Registro guarda</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

      <div class="w3-center"><br>
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
      
      </div>

      <form class="w3-container" action="../controller/administrar_recaudo.php" method="POST">
        <div class="w3-section">
          <label><b><font size="4" color="black" face="comic-sans">Nombre</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Entra nombre" name="nombre" required>
          <label><b>Documento</b></label>
          <input class="w3-input w3-border" type="number" placeholder="Ingrese documento" name="documento" required>
           <label><b><font size="4" color="black" face="comic-sans">Sede</b></label>
          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Sede" name="sede" required>

          <div class="input-group checkbox">
              <input type="checkbox" name="terminos" id="terminos" value="true">
              <label for="terminos">Acepto los Terminos y Condiciones</label>
              <input type='hidden' name='insertar' value='insertar'>

            </div>
            
          <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Registrar</button>
          
        </div>
      </form>

      <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
        
      </div>

    </div>
  </div>
</div>
  <?php     

echo "<Font color=black>";
  extract($_GET);

            $sql=("SELECT id,nombre,documento,sede,Apertura,saldoInicial,saldoFinal,Cierre from recaudo ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br><br><table class='table2'>";
        echo "<thead><tr class='warning'>";
        echo "<th>Id</th>";
        echo "<th>Nombre</th>";
        echo "<th>Documento</th>";
        echo "<th>Sede</th>";
        echo "<th>Apertura</th>";       
        echo "<th>Saldo Final</th>";  
        echo "<th>Cierre</th>";  
                          
          echo "</tr></thead>";

          
      ?>
        

      <?php 
         while($arreglo=mysqli_fetch_array($query))

         {
          $conta=$arreglo[6]+2000;
            echo "<tr class='success'>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
              echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
             // echo "<td>$arreglo[5]</td>";  
              echo "<td>

              <form  name=f1 action=../controller/administrar_recaudo.php method=POST>
<font color=black><input type=text-shadow name=saldoFinal value=$conta readonly>
<input type='hidden' name='actualizar' value='actualizar'>
<input type='hidden' name='id' value='$arreglo[0]'>
<input type=submit value=sumar></font>
</form> </td>";
              echo "<td>$arreglo[7]</td>";     
             
          echo "</tr>";
        }
         echo "</table>";

}?>

</table></section>

     <section id="foto">
<center>
<table class='table2'><thead><tr><th><b>Codigos Para activacion</b></font></th><th><b>Codigos Activos</b></font></th></tr></thead>
<tr><td>  <?php
   echo " <table >";
        require_once 'conexion.php';
        $sql=  mysql_query("select * from foto where foto='Inactivo'");
 echo "<thead><tr class='warning'>";
        echo "<th>Documento</th>";
        echo "<th>Estado </th>";
        echo "<th>Activar</th>";
  
                          
          echo "</tr></thead>";
        while($res=  mysql_fetch_array($sql)){

           echo "<tr><td>".$res[1]."</td>";
           echo "<td>".$res[2]."</td>";
$nombre=$res["nombre"];
echo "<td><a href='../controller/actualizarcodigo.php?nombre=$res[1]&foto=Activo'>Activar</a></td></tr>";
        }
echo "</table></td><td>"
;
        ?><?php
   echo " <table class='table2'>";
        require_once 'conexion.php';
        $sql=  mysql_query("select * from foto where foto='Activo'");
 echo "<thead><tr class='warning'>";
        echo "<th>Documento</th>";
        echo "<th>Estado </th>";
                
          echo "</tr></thead>";
        while($res=  mysql_fetch_array($sql)){

           echo "<tr><td>".$res[1]."</td>";
           echo "<td>".$res[2]."</td>";
$nombre=$res["nombre"];

        }
echo "</table></center>"
;
        ?></td></tr></table>

</center>





<br><br><br><br>
<section id="Manual">

<center>
 <font face="comic-sans" size="18"><b> Ayuda e informacion del sitio</font>
<br><br><br><br>
        <button class="accordion">Movimiento recaudo</button>
<div class="panel">
  <p><font size="4" color="Black" face="comic-sans">En esta tabla encontrara registrado su nombre, la fecha de incio de seccion, su saldo incial y su saldo final de lo que recaude durante el dia, <br>para registrar cada pago, de click en el boton sumar. 
</p>
</div>

<button class="accordion">Entrada y salida de usuarios</button>
<div class="panel">
  <p>En esta tabla se registra y actualiza la entrada y salida de los usuarios y vehículos, por medio del lector de codigo de barras que usted posee.</p>
</div>

<button class="accordion">Estadísticas</button>
<div class="panel">
  <p>En esta tabla se puede  observar las estadísticas de los cupos ocupados en los parqueaderos de cada sede , cuantas personas han entrado y salido .</p>
</div>

<button class="accordion">Entrega código de barras al usuario</button>
<div class="panel">
  <p>En esta Tabla le llegara la notificación de los usuarios que generaron el código de barras, usted deberá imprimirlo <br> cuando el usuario vaya a solicitarlo. </p>
</div>
</center>
      </section>    
    </div>
  </section><!--/#services-->    
    <div class="span8">
    </div>
        </div>
      </div>
    </div>  
    </div>  
    <br/>

    <!--EMPIEZA DESLIZABLE-->
    
     <!--TERMINA DESLIZABLE-->

    </div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}
</script>
<script>

function imprSelec(nombre)

{

var ficha = document.getElementById(nombre);

var ventimp = window.open(' ', 'popimpr');

ventimp.document.write( ficha.innerHTML );

ventimp.document.close();

ventimp.print( );

ventimp.close();

}

</script>

</body>
</html>    	