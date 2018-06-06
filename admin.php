<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['Usuario']) {
   
}elseif ($_SESSION['Cargo']==2) {

}
    require("../model/connect_db.php");
       require("../model/conexion.php");
?>
	
		
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>JM3D</title>
  <link href="../view/css/bootstrap.min.css" rel="stylesheet">
  <link href="../view/css/animate.min.css" rel="stylesheet"> 
  <link href="../view/css/font-awesome.min.css" rel="stylesheet">
  <link href="../view/css/lightbox.css" rel="stylesheet">
  <link href="../view/css/main.css" rel="stylesheet">
  <link href="../view/css/table1.css" rel="stylesheet">
  <link id="css-preset" href="../view/css/presets/preset1.css" rel="stylesheet">
  <link href="../view/css/responsive.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../view/images/favicon.ico">
  <style type="text/css">
  .accordion {
    background-color: #2c3e50;
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

tbody {
    width: 500px;
    overflow-x: auto;
}
#container-main{
    margin:40px auto;
    width:95%;
    min-width:320px;
    max-width:960px;
}

#container-main h1{
    font-size: 40px;
    
}

.accordion-container {
    width: 100%;
    margin: 0 0 20px;
    clear:both;
}

.accordion-titulo {
    position: relative;
    display: block;
    padding: 20px;
    font-size: 24px;
    font-weight: 300;
    background: #2c3e50;
    color: #fff;
    text-decoration: none;
}
.accordion-titulo.open {
    background: #2c3e50;
    color: #fff;
}
.accordion-titulo:hover {
    background: #1abc9c;
}

.accordion-titulo span.toggle-icon:before {
    content:"+";
}

.accordion-titulo.open span.toggle-icon:before {
    content:"-";
}

.accordion-titulo span.toggle-icon {
    position: absolute;
    top: 10px;
    right: 20px;
    font-size: 38px;
    font-weight:bold;
}

.accordion-content {
    display: none;
    padding: 20px;
    overflow: auto;
}

.accordion-content p{
    margin:0;
}

.accordion-content img {
    display: block;
    float: left;
    margin: 0 15px 10px 0;
    width: 50%;
    height: auto;
}


@media (max-width: 767px) {
    .accordion-content {
        padding: 10px 0;
    }
}

</style>
</head>

<body>
<div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>

  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(../view/images/slider/1.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Bienvenidos a <span>Colsutec</span></h1>
            <p class="animated fadeInRightBig">Un Sistema De Registro Para Un Control Oportuno</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar Ahora</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../view/images/slider/2.jpg)">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Registration System <span>JM3D</span></h1>
            <p class="animated fadeInRightBig">Un Sistema De Registro Para Un Control Oportuno</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Empezar Ahora</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../view/images/slider/3.jpg)">
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
            <li><a href="../controller/desconectar.php"> Bienvenido <?php echo $_SESSION['Usuario'];?>  Cerrar Sesi&oacuten </a></li> 
            <li class="scroll active"><a href="#home">Inicio</a></li>       
            <li class="scroll"><a href="#services">Datos Usuarios</a></li> 
           <li class="scroll"><a href="#about-us">Guardas registrados</a></li> 
            <li class="scroll"><a href="#team">Novedades</a></li>
            <li class="scroll"><a href="#about">Cuentas Registradas</a></li>                     
            <li class="scroll"><a href="#portfolio">Vehiculos de usuarios</a></li>
             <li class="scroll"><a href="#actividad">Reportes Parqueadero</a></li>
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->



 <section id="services">  
  <center>
  <br><br><br>
  <br><br><br>
  <center>
        <font face="comic-sans" size="18"><b>Buscar Usuario </b></font>
        <br><br><br>
        <form action="#services" method="POST">
          <input type="text " name="doc"> 
          <input type="submit" name="Buscar" value="buscar"> 
        </form>
        <br><br><br>
        <font face="comic-sans" size="18"><b>Informaci&oacuten Usuario Consultado </b></font>

<?php echo "<Font color=black>";
//Ejemplo con variable definida

if(isset($_POST["Buscar"]))
  {
       $doc=$_POST['doc'];
   
       $sql=("SELECT Id_usuario,Nombre,Apellido,Genero,tipodedocumento.Descripcion,Documento,Edad,Ciudad,Direccion,Telefono,Estado from USUARIO,tipodedocumento where(USUARIO.idTipoDoc=tipodedocumento.codigo) 
         and Documento=$doc ");
        $query=mysqli_query($mysqli,$sql);

          echo " <br><br><br><table class='table2'>";echo "<tr class='warning'>";echo "<thead><th>ID</th>";echo "<th>NOMBRE</th>";echo "<th>APELLIDO</th>";echo "<th>GENERO</th>";
          echo "<th>TIPO DE DOCUMENTO</th>";echo "<th>DOCUMENTO</th>";        echo "<th>FECHA DE NACIMIENTO</th>"; echo "<th>CIUDAD</th>";echo "<th>DIRECCION</th>";
          echo "<th>TELEFONO</th>"; echo "<th>ESTADO</th>"; echo "<th>ACTUALIZAR</th>";           
          echo "</b></tr></thead>";      
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
              echo "<tbody><tr class='success'>";
              echo "<td><font color='White'><b>$arreglo[0]</td>";echo "<td><font color='Black'><b>$arreglo[1]</td>";
              echo "<td><font color='White'><b>$arreglo[2]</td>";echo "<td><font color='Black'><b>$arreglo[3]</td>";
              echo "<td><font color='White'><b>$arreglo[4]</td>"; echo "<td><font color='Black'><b>$arreglo[5]</td>";
              echo "<td><font color='White'><b>$arreglo[6]</td>";echo "<td><font color='Black'><b>$arreglo[7]</td>";
              echo "<td><font color='White'><b>$arreglo[8]</td>";echo "<td><font color='Black'><b>$arreglo[9]</td>";
              echo "<td><font color='White'><b>$arreglo[10]</td>";                   
              echo "<td><a href=actualizaradminusuario.php?id=$arreglo[0]&accion=a>Actualizar</a> </td>";
            
            
          echo "</tr></tbody>";
        }
       echo "</table>";
      }
     
     echo "<br><br><br><br>";
?>
  
  
 <font face=comic-sans size=14><b>Modulo de reportes de usuarios </b></font>
  <br><br>
  <?php
  //---------------------------------------------------Acordion Usuarios--------------------------------------------------------------
  ?>
        <button class="accordion"><center><font color="White" face="Century" size="6">Usuarios</font></center></button>  
   <div class="panel">
        <?php
        echo "<br><br><br><font face=comic-sans size=14><b>InformaciÃ³n Usuarios </b></font>";
        extract($_GET);
        $sql=("SELECT Id_usuario,Nombre,Apellido,Genero,tipodedocumento.Descripcion,Documento,Edad,Ciudad,Direccion,Telefono,Estado from USUARIO,tipodedocumento where(USUARIO.idTipoDoc=tipodedocumento.codigo)");
         
        $query=mysqli_query($mysqli,$sql);
          echo " <br><br><br><table WIDTH='10%' class='table2'>";
          echo "<tr class='warning'>";echo "<thead><th><b>Id</th>";
          echo "<th><b>Nombre</th>";echo "<th><b>Apellido</th>";
          echo "<th><b>Genero</th>";echo "<th><b>Tipo de documento</th>";
          echo "<th><b>Documento</th>";echo "<th><b>Fecha de Nacimiento</th>";
          echo "<th><b>Ciudad</th>";echo "<th><b>Direccion</th>";
          echo "<th><b>Telefono</th>";echo "<th><b>Estado</th>";
          echo "<th><b>Actualizar</th>";echo "</b></tr></thead>";         
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query))
         {
            echo "<tbody><tr class='success'>";
          
              echo "<td><font color='White'><b>$arreglo[0]</td>";
              echo "<td><font color='Black'><b>$arreglo[1]</td>";
              echo "<td><font color='White'><b>$arreglo[2]</td>";
              echo "<td><font color='Black'><b>$arreglo[3]</td>";
              echo "<td><font color='White'><b>$arreglo[4]</td>";
              echo "<td><font color='Black'><b>$arreglo[5]</td>";
              echo "<td><font color='White'><b>$arreglo[6]</td>";
              echo "<td><font color='Black'><b>$arreglo[7]</td>";
              echo "<td><font color='White'><b>$arreglo[8]</td>";
              echo "<td><font color='Black'><b>$arreglo[9]</td>";
              echo "<td><font color='White'><b>$arreglo[10]</td>";
               
               
              echo "<td><a href=actualizaradminusuario.php?id=$arreglo[0]&accion=a>Actualizar</a> </td>";
            
          echo "</tr></tbody>";
        }
         echo "<thead><tr><th colspan=15><center><a href=creaPDF1.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";
        ?>
   </div>
   
<center>
<?php
  //---------------------------------------------------Acordion Usuarios Activos--------------------------------------------------------------
  ?>
<button class="accordion"><center><font color="White" face="Century" size="6">Usuarios Activos</font></center></button>
<div class="panel">
<?php
  echo "<br><br><br><font face=comic-sans size=14><b>Usuarios Activos </b></font>";
      extract($_GET);
      $sql=("SELECT Id_usuario,Nombre,Apellido,Genero,tipodedocumento.Descripcion,Documento,Edad,Ciudad,Direccion,Telefono,Estado from USUARIO,tipodedocumento where(USUARIO.idTipoDoc=tipodedocumento.codigo) 
         and Estado='Activo' ORDER BY Id_usuario "); 

      $query=mysqli_query($mysqli,$sql);

         echo " <br><br><br><table WIDTH='10%' class='table2'>";
         echo "<tr class='warning'>";
          echo "<thead><th><b>Id</th>";
          echo "<th><b>Nombre</th>";
          echo "<th><b>Apellido</th>";
          echo "<th><b>Genero</th>";
          echo "<th><b>Tipo de documento</th>";
          echo "<th><b>Documento</th>";        
          echo "<th><b>Fecha de Nacimiento</th>";
          echo "<th><b>Ciudad</th>";
          echo "<th><b>Direccion</th>";
         
          echo "<th><b>Telefono</th>";
         
          echo "<th><b>Estado</th>";
          echo "<th><b>Actualizar</th>";           
          echo "</b></tr></thead>";     

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><font color='White'><b>$arreglo[0]</td>";
              echo "<td><font color='Black'><b>$arreglo[1]</td>";
              echo "<td><font color='White'><b>$arreglo[2]</td>";
              echo "<td><font color='Black'><b>$arreglo[3]</td>";
              echo "<td><font color='White'><b>$arreglo[4]</td>";
              echo "<td><font color='Black'><b>$arreglo[5]</td>";
              echo "<td><font color='White'><b>$arreglo[6]</td>";
              echo "<td><font color='Black'><b>$arreglo[7]</td>";
              echo "<td><font color='White'><b>$arreglo[8]</td>";
              echo "<td><font color='Black'><b>$arreglo[9]</td>";
              echo "<td><font color='White'><b>$arreglo[10]</td>";

              echo "<td><a href=actualizaradminusuario.php?id=$arreglo[0]&accion=a>Actualizar</a> </td>";
            
            
          echo "</tr></tbody>";
        }
         echo "<thead><tr><th colspan=15><center><a href=creaPDF1.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";
?>
</div>
<center>
<?php
  //---------------------------------------------------Acordion Usuarios Inactivos--------------------------------------------------------------
  ?>
<button class="accordion"><center><font color="White" face="Century" size="6">Usuarios Inactivos</font></center></button>
<div class="panel">
  <?php
  echo "<br><br><br><font face=comic-sans size=18><b>Usuarios Inactivos</b></font>";
      extract($_GET);
     $sql=("SELECT Id_usuario,Nombre,Apellido,Genero,tipodedocumento.Descripcion,Documento,Edad,Ciudad,Direccion,Telefono,Estado from USUARIO,tipodedocumento where(USUARIO.idTipoDoc=tipodedocumento.codigo) 
         and Estado='Inactivo' ORDER BY Id_usuario ");

      $query=mysqli_query($mysqli,$sql);

         echo " <br><br><br><table WIDTH='10%' class='table2'>";
         echo "<tr class='warning'>";
          echo "<thead><th><b>Id</th>";
          echo "<th><b>Nombre</th>";
          echo "<th><b>Apellido</th>";
          echo "<th><b>Genero</th>";
          echo "<th><b>Tipo de documento</th>";
          echo "<th><b>Documento</th>";        
          echo "<th><b>Fecha de Nacimiento</th>";
          echo "<th><b>Ciudad</th>";
          echo "<th><b>Direccion</th>";
          
          echo "<th><b>Telefono</th>";
         
          echo "<th><b>Estado</th>";
          echo "<th><b>Actualizar</th>";           
          echo "</b></tr></thead>";     

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><font color='White'><b>$arreglo[0]</td>";
              echo "<td><font color='Black'><b>$arreglo[1]</td>";
              echo "<td><font color='White'><b>$arreglo[2]</td>";
              echo "<td><font color='Black'><b>$arreglo[3]</td>";
              echo "<td><font color='White'><b>$arreglo[4]</td>";
              echo "<td><font color='Black'><b>$arreglo[5]</td>";
              echo "<td><font color='White'><b>$arreglo[6]</td>";
              echo "<td><font color='Black'><b>$arreglo[7]</td>";
              echo "<td><font color='White'><b>$arreglo[8]</td>";
              echo "<td><font color='Black'><b>$arreglo[9]</td>";
              echo "<td><font color='White'><b>$arreglo[10]</td>";
                   
              echo "<td><a href=actualizaradminusuario.php?id=$arreglo[0]&accion=a>Actualizar</a> </td>";
            
            
          echo "</tr></tbody>";
        }
         echo "<thead><tr><th colspan=15><center><a href=creaPDF1.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";
?>
</div>  
</section>


<section id="about-us">  
     <br><br><br><br>
    
     <center>  

<div id="container-main">
    <font face="comic-sans" size="18"><b>Reportes seccion Guarda</b></font>
    <br><br><br><br>
    <div class="accordion-container">
        <a href="#guarda" class="accordion-titulo">Guardas Registrados<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion todos los guardas----------------------------------------------------------------------
      echo "<br><br><h1><b>Informaci&oacuten Guardas </b></h1>";
      extract($_GET);
      $sql=("SELECT * from LOGIN where Cargo=3"); 

      $query=mysqli_query($mysqli,$sql);

        echo " <table class='table2'>";
        echo "<tr class='warning'>";
        echo "<thead><th>Documento</th>";
        echo "<th>Nombre</th>";
        echo "<th>Contraseña</th>"; 
        echo "<th>Correo</th></thead>";
        echo "</tr>";   
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
             echo "<td><b>$arreglo[3]</td>";              
                         
          echo "</tr></tbody>";
        }
          echo "<thead><tr><th colspan=15><center><a href=creaPDF5.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table>";
?>

        </div>  
    </div>
    
    <div class="accordion-container">
        <a href="#guarda" class="accordion-titulo">Guardas sede Colombia<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion Guardas sede colombia----------------------------------------------------------------------
      echo "<h1><b>Informaci&oacuten Guardas </b></h1>";
      extract($_GET);
     $sql=("SELECT * from LOGIN where Cargo=3 and Sede=1"); 

      $query=mysqli_query($mysqli,$sql);
        
        echo " <table class='table2'>";
        echo "<tr class='warning'>";
        echo "<thead><th>Documento</th>";
        echo "<th>Nombre</th>";
        echo "<th>Contraseña</th>"; 
        echo "<th>Correo</th>";
        echo "<th>Sede</th></thead>";
        echo "</tr>";  

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";
              echo "<td><b>Colombia</td>";
             
                 
          echo "</tr></tbody>";
        }
          echo "<thead><tr><th colspan=15><center><a href=creaPDF5.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table>";
?>  
        
        </div></div>
        <div class="accordion-container">
        <a href="#guarda" class="accordion-titulo">Guardas sede Restrepo<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion Guardas sede Restrepo----------------------------------------------------------------------
      echo "<h1><b>Informaci&oacuten Guardas </b></h1>";
      extract($_GET);
      $sql=("SELECT * from LOGIN where Cargo=3 and Sede=2");

      $query=mysqli_query($mysqli,$sql);

         echo " <table class='table2'>";
        echo "<tr class='warning'>";
        echo "<thead><th>Documento</th>";
        echo "<th>Nombre</th>";
        echo "<th>Contraseña</th>"; 
        echo "<th>Correo</th>";
        echo "<th>Sede</th></thead>";
        echo "</tr>";  

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";
              echo "<td><b>Restrepo</td>";
             
                 
          echo "</tr></tbody>";
        }
          echo "<thead><tr><th colspan=15><center><a href=creaPDF5.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table>";
?>  
        
        </div>
        
    </div>
</div>
     

<br><br><br><br>
</table>
</section>

  <section id="team">  
 <br><br><br><br>
    
     <center>  

<div id="container-main">
    <font face="comic-sans" size="18"><b>Novedades registradas</b></font>
    <br><br><br><br>
     <div class="accordion-container">
        <a href="#team" class="accordion-titulo">Información Novedades<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion Novedades----------------------------------------------------------------------
      echo "<br><br><h1><b>Informaci&oacuten Novedades </b></h1>";
      extract($_GET);
    extract($_GET);


            $sql=("SELECT Id_novedad as id,tipodedocumento.Descripcion,Documento,Novedad,Fecha
from NOVEDAD,tipodedocumento where (NOVEDAD.TipoDoc=tipodedocumento.codigo) ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br> <table class='table2'>";
          echo "<thead><tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Tipo Documento</th>";
            echo "<th>Documento</th>";
               echo "<th>Novedad</th>";
            echo "<th>Fecha</th></thead>";          
          echo "</tr>";
          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";    
              echo "<td><b>$arreglo[4]</td>";    

              

 
            
          echo "</tr></tbody>";
        }
             echo "<thead><tr><th colspan=15><center><a href=creaPDF3.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table>";
?>

        </div> </div>   

    
    <div class="accordion-container">
        <a href="#team" class="accordion-titulo">Novedades de hoy<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion Novedades de hoy----------------------------------------------------------------------
      echo "<br><br><h1><b>Informaci&oacuten Novedades </b></h1>";
      extract($_GET);
    extract($_GET);
//echo date("Y-m-d");  
  $hoy = date("Y-m-d");  
 

            $sql=("SELECT Id_novedad as id,tipodedocumento.Descripcion,Documento,Novedad,Fecha
from NOVEDAD,tipodedocumento where (NOVEDAD.TipoDoc=tipodedocumento.codigo)and NOVEDAD.Fecha>='$hoy' ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br>  <table class='table2'>";
          echo "<thead><tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Tipo Documento</th>";
            echo "<th>Documento</th>";
               echo "<th>Novedad</th>";
            echo "<th>Fecha</th></thead>";          
          echo "</tr>";
          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";    
              echo "<td><b>$arreglo[4]</td>";    

              

 
            
          echo "</tr></tbody>";
        }
             echo "<thead><tr><th colspan=15><center><a href=creaPDF3.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table>";
?>

        </div>  
    </div>
    
    <div class="accordion-container">
        <a href="#team" class="accordion-titulo">Novedades del mes<span class="toggle-icon"></span></a>
        <div class="accordion-content">
         <?php
//---------------------------------------------------------Acordion Novedades del mes----------------------------------------------------------------------
      echo "<br><br><h1><b>Informaci&oacuten Novedades del mes </b></h1>";
      extract($_GET);
    extract($_GET);
//echo date("Y-m-d");  
  $hoy = date("Y-m-d");  
 

            $sql=("SELECT Id_novedad as id,tipodedocumento.Descripcion,Documento,Novedad,Fecha
from NOVEDAD,tipodedocumento where (NOVEDAD.TipoDoc=tipodedocumento.codigo)and MONTH(NOVEDAD.Fecha)=MONTH(CURDATE()); ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br>  <table class='table2'>";
          echo "<thead><tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Tipo Documento</th>";
            echo "<th>Documento</th>";
               echo "<th>Novedad</th>";
            echo "<th>Fecha</th></thead>";          
          echo "</tr>";
          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";    
              echo "<td><b>$arreglo[4]</td>";    

              

 
            
          echo "</tr></tbody>";
        }
             echo "<thead><tr><th colspan=15><center><a href=creaPDF3.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";
?>

        </div>  
    </div>  
    

</table></section>

 <section id="about"> 
  <center>
 <font face="comic-sans" size="18"><b>Información Cuentas</b></font>
 
  <?php
//--------------------------------------------------------Tabla Cuentas---------------------------------------------------------------------------------------------------------------------------------------------------------------------------
        require("../model/connect_db.php");
        $sql=(" SELECT * FROM  login ");
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br><br><br><br><br><br>  <table class='table2'>";
          echo "<thead><tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Usaurio</th>";
            echo "<th>Password</th>";
            echo "<th>Correo</th>";
           
            echo "<th>Editar</th>";
            echo "<th>Borrar</th>";
          echo "</tr></thead>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody><tr class='success'>";
              echo "<td><b>$arreglo[0]</td>";
              echo "<td><b>$arreglo[1]</td>";
              echo "<td><b>$arreglo[2]</td>";
              echo "<td><b>$arreglo[3]</td>";
          
              echo "<td><a href='actualizarad.php?id=$arreglo[0]'>Actualizar</a></td>";
            echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'>Eliminar</a></td>";
            

            
          echo "</tr></tbody>";
        }
        
       echo "<thead><tr><th colspan=15><center><a href=creaPDF4.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM login WHERE id=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
            //header('Location: proyectos.php');
            echo "<script>location.href='admin.php'</script>";
          } //-------------------------------------------------------Fin tabla Cuentas------------------------------------------------------------------------------------------

      ?>
     
      
      
      </section>
       <section id="portfolio">
      <center><br><br>
   
            <font face="comic-sans" size="18"><b>Información Vehiculos</b></font>
    <br><br>
     
<?php
 //-------------------------------------------------------------------------inicio tabla informacion vehiculos-----------------------------------------------------------------------------------------------------------------------------------------------------
echo "<Font color=black>";

  extract($_GET);

   $sql=("SELECT id,cargo,vehiculo,color,placa,serie,marca,propietario from vehiculo ");
       
  
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
        $query=mysqli_query($mysqli,$sql);

        echo " <br><br><br><br><br><br>   <table class='table2'>";
          echo "<thead><tr class='warning'>";
            echo "<th>Id</th>";
            echo "<th>Cargo</th>";
            echo "<th>Vehiculo</th>";
            echo "<th>Color</th>";
            echo "<th>PLaca</th>";
            echo "<th>Serial</th>";
            echo "<th>Modelo</th>";
            echo "<th>Propietario</th>";
            echo "<th>Actualizar</th>";
            echo "<th>Eliminar</th>";
         
                     
          echo "</tr></thead>";
          
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
              echo "   <td><a href=actualizarav.php?id=$arreglo[0]&accion=a>Actualizar</a> </td>";
              echo " <td><a href=administrar_vehiculo1.php?id=$arreglo[0]&accion=e>Eliminar</a>   </td>";
          

 
            
          echo "</tr></tbody>";
        }
           echo "<thead><tr><th colspan=15><center><a href=creaPDF2.php  target=_blank><input type=button  value=Imprimir></a></th></tr></thead></table></center>";
           //-----------------------------------------------------------------------------------fin tabla informacion vehiculos------------------------------------------------------------------------------------------------------------------------------------------------------------
?>
          

    
      
<br><br><br><br>
    
    </div>
  </section><!--/#services-->
  <section id="actividad">
   <div><center>
  <?php

  echo date("Y-m-d");  
  $hoy = date("Y-m-d");  
 
  
    $sql=("Select * from recibo where recibo.HoraIngreso >= '$hoy'" );
    
   //where recibo.HoraIngreso >= '2018-05-02'
             
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
  </center></div>
  </section>
  
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
  <script type="text/javascript" src="../view/js/jquery.js"></script>
  <script type="text/javascript" src="../view/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../view/js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../view/js/wow.min.js"></script>
  <script type="text/javascript" src="../view/js/mousescroll.js"></script>
  <script type="text/javascript" src="../view/js/smoothscroll.js"></script>
  <script type="text/javascript" src="../view/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../view/js/lightbox.min.js"></script>
  <script type="text/javascript" src="../view/js/main.js"></script>
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


$(".accordion-titulo").click(function(){
    	
   var contenido=$(this).next(".accordion-content");
			
   if(contenido.css("display")=="none"){ //open		
      contenido.slideDown(250);			
      $(this).addClass("open");
   }
   else{ //close		
      contenido.slideUp(250);
      $(this).removeClass("open");	
  }
							
});
</script>

</body>
</html>	