<!DOCTYPE html>
<?php 
require("../model/connect_db.php");
require("../model/conexion.php");
session_start();

if (@!$_SESSION['Usuario']) {
  
}elseif ($_SESSION['Cargo']==1) 
{
  
}

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>JM3D</title>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../view/css/bootstrap.min.css" rel="stylesheet">
  <link href="../view/css/style.css" rel="stylesheet">
  <link href="../view/css/bootstrap.min.css" rel="stylesheet">
  <link href="../view/css/animate.min.css" rel="stylesheet"> 
  <link href="../view/css/font-awesome.min.css" rel="stylesheet">
  <link href="../view/css/lightbox.css" rel="stylesheet">
  <link href="../view/css/main.css" rel="stylesheet">
  <link id="css-preset" href="../view/css/presets/preset1.css" rel="stylesheet">
  <link href="../view/css/responsive.css" rel="stylesheet">
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../../view/images/favicon.ico">
  <style>
/*.opacity{
  background-image: url('../view/images/3.jpg');
   opacity:0.8;  Opacidad 60% 
   width:1900px;
   height:200px;
}*/
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 70%;
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
.send {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.send4 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.send4:hover {
    background-color: #008CBA;
    color: white;
}

.button {
    background-color: #000;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}

.button {border-radius: 12px;}
.button {
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.button1 {
    background-color: #000;
    border: none;
    color: white;
    padding: 20px 36px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 18px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {border-radius: 12px;}
.button1{
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.Fields {
  background-color: #000;
  border: 2px solid #A8A8A8;
  font-family:  sans-serif;
  font-size: 15px;
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
          </button>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
  
       <li><a href="">Bienvenido <strong><?php echo $_SESSION['Usuario'];?></strong> </a></li>
        <li><a href="../controller/desconectar.php"> Cerrar sesión </a></li>                
            <li class="scroll active"><a href="#home">Inicio</a></li>
            <li class="scroll"><a href="#services">Ingresar</a></li> 
            <li class="scroll"><a href="#about-us">Modificar</a></li>                     
            <li class="scroll"><a href="#portfolio">Imagenes</a></li>
            <li class="scroll"><a href="#team">Consultar</a></li>
            <li class="scroll"><a href="#blog">Acerca De</a></li>
            <li class="scroll"><a href="#contact">Contacto</a></li>   
            <li class="scroll"><a href="#ayuda">Ayuda y soporte</a></li>    
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
            <h2>Registro</h2>
            <h3>En nombre de la administraci&oacuten, les doy la bienvenida como un nuevo usuario del parqueadero de colsutec.</h3>
          </div>
        </div> 
      </div>
      <div class="text-center our-services">
        <div class="row">
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa fa-users"></i>
            </div>
            <div class="service-info">
              <h3><a href="ingresodatosusuario.php?correo=<?php $user=$_SESSION['Id_documento']; echo $user;?>">Ingresar Datos</a></h3>
              <p></p>
            </div>
          </div>
           <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa  fa-bicycle"></i>
            </div>
             <div class="service-info">
              <h3><a href="ingresodatosvehiculo.php?correo=<?php echo $user;?>">Ingresar vehiculo</a></h3>
            </div>
         </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-list"></i>
            </div>
            <div class="service-info">
              <h3><a href="ingresonovedades.php?nombre=<?php echo $user;?>">Informar Novedades</h3></a>
            </div>
          </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#services-->
    <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <BR><BR>
            

            <h1><font color="Black" face="comic-sans" size=18 ><i><b>MODIFICAR </h1></b></i></font>
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            
          <div class="w3-blue w3-section" style="width:200%">
              <button onclick="myFunction('Demo1')" class="w3-button w3-block"> Datos persona</button>
              <div id="Demo1" class="w3-hide w3-container">
              <?php 
              $user=$_SESSION['Id_documento'];
              //$sql=("SELECT documento from usuario where nombre='$user' ");
             //$query=mysqli_query($mysqli,$sql);?>
              <h3>DOCUMENTO</h3>
              <form action="actualizarusuario.php" method="GET">
            <h4><input type="text" class="Fields" name="correo"
             value="<?php echo  $user;?>" readonly></h4>
            <input type="submit" name="Consultar" class="button" value="Consultar">
             </form>
          </div>
    </div>

<div class="w3-blue w3-section" style="width:200%">

  <div id="Demo2" class="w3-hide w3-container">
    



  </div>
</div>
<script>
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
            
           </div>
            <p></p>
          </div>
      </div>
        <div class="col-sm-6">


          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <p class="lead"><font color="#000" face="comic-sans" size=6 ><B>USUARIOS FRANJA 6-6</p></font></B>
                  <div class="w3-light-grey">
  <div class="w3-container w3-red" style="width:50%">50%</div>
</div><br>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="400ms">
              <p class="lead"><font color="#000" face="comic-sans" size=6 ><B>USUARIOS FRANJA 6-10 </B></p></font>
             <div class="w3-light-grey">
  <div class="w3-container w3-green" style="width:100%">100%</div>
</div><br>
            </div>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
              <p class="lead"><font color="#000" face="comic-sans" size=6 ><B>USUARIOS SATISFECHOS</B></p></font>
                  <div class="w3-light-grey">
  <div class="w3-container w3-blue" style="width:100%">100%</div>
</div><br>
            </div>
              <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
             
              <H1><font color="#000">ESTADISTICAS</H1>
           </div>


           
          </div>
        </div>
      </div>
    </div>
  </section><!--/#about-us-->
<section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>IMAGENES </h2>
          
        </div>
      </div> 
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/10.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/9.jpg" alt="" height="757" width="989">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
    
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/3.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/4.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="700ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
              
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/6.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="900ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/7.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="1000ms">
            <div class="folio-image">
              <img class="img-responsive" src="../view/images/portfolio/8.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Trabajamos para su comodidad </h3>
                    <p>Barrio Colombia</p>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>../view/
    
      </section>
 <section id="team">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <br><br><br>
          <h2>Consultar datos</h2>
          <p>Escribe tu documento para consultar  datos </p>
           <BR>   <BR>   <BR>
       <div class="row">
      <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
            <CENTER>
              <i class="fa fa-users"></i>
            </div>
         
              <div class="member-info">
                <h3>Datos Persona</h3>
                           
                <form action="consultarusuario.php" method="POST">
                <h4><input type="text" name="correo"  value="<?php echo  $user; ?>" readonly></h4>
               <font color=black> <input type="submit" name="Consultar" value="Consultar">
                </form>
              </div>
          </div>
           <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="service-icon">
              <i class="fa  fa-bicycle"></i>
            </div>
             
              <div class="member-info">
                <h3>Datos Vehiculo</h3 >
               
                
                <form action="consultarvehiculo.php" method="POST">
                <h4><input type="text" name="correo"  value="<?php echo  $user; ?>" readonly></h4>
                <input type="submit" name="Consultar" value="Consultar">
                </form>
              </div>

         </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="service-icon">
              <i class="fa fa-list"></i>
            </div>
             <div class="member-info">
                <h3>Novedades</h3>
                     
                
                <form action="consultarnovedades.php" method="POST">
                <h4><input type="text" name="correo" value="<?php echo  $user; ?>" readonly></h4>
                <input type="submit" name="Consultar" value="Consultar"></font>
                </form>
              </div>
          </div>
    
          </div>
         
        </div>
      </div>            
    </div>
  </section><!--/#team-->

  <section id="features" class="parallax">
    <div class="container">
      <div class="row count">
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <i class="fa fa-user"></i>
          <h3 class="timer">4</h3>
          <p>Happy Clients</p>
        </div>
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
          <i class="fa fa-desktop"></i>
          <h3 class="timer">2</h3>                    
          <p>Modern Websites</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="700ms">
          <i class="fa fa-trophy"></i>
          <h3 class="timer">0</h3>                    
          <p>WINNING AWARDS</p>
        </div> 
        <div class="col-sm-3 col-xs-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="900ms">
          <i class="fa fa-comment-o"></i>                    
          <h3>24/7</h3>
          <p>Fast Support</p>
        </div>                 
      </div>
    </div>
  </section><!--/#features-->



    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->
  <section id="pricing">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>RECUERDE</h2>
          <p>Señor usuario recuerde la tarifa del uso del parqueadero </p>
          <br>*Recuerde que la tarifa aplica solo para motos en el barrio restrepo</br>
        </div>
      </div>
      <div class="pricing-table">
        <div class="row">
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
             
              <img src="../view/images/precio/moto.jpg" width="180" height="200">
              
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <h3></h3>
              <img src="../view/images/precio/recuerde.png" >
                <span></span>                                
              
             
            </div>
          </div>
          <div class="col-sm-3">
            <div class="single-table featured wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <h3>Tarifa</h3>
              <div class="price">
                Motos                                
              </div>
              <ul>
               <H1><FONT color="White"> $2.000<H!>
                
                                            </ul>
           
            </div>
          </div>
            <div class="col-sm-3">
            <div class="single-table wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
            
              <img src="../view/images/precio/bici.jpg" width="180" height="200" >
                <span></span>                                
              
             
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#pricing-->

  <section id="twitter" class="parallax">
    <div>
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="twitter-icon text-center">
              <i class="fa fa-twitter"></i>
              <h4>Twitter</h4>
            </div>
            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <h2>Siguenos <a href="#"><span>Follow</span> </h2></p>
                </div>
                <div class="item">
                  <h2>#Parqueaderos <a href="#"><span> </span></a><h2> 
                </div>
                <div class="item">                                
                  <h1>Un sistema de registro para un control oportuno <a href="#"><span></span> </a></h1>
                </div>
              </div>                        
            </div>                    
          </div>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->

  <section id="blog">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h1>Colsutec</h1>
          <p><font color="black">La Fundación Colegio Superior de Estudios Técnicos “COLSUTEC”, nace en el año de 1999 como institución sin ánimo de lucro de carácter privado, producto de la experiencia de más de 15 años de servicio social y educativo en capacitación técnica y formación para el trabajo de sus miembros (Consejo de Dirección).</p>
        </div>
      </div>
           <div class="wrap">
    <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card1">
         <img src="../view/images/mision.jpg" width="550" height="320">
        </div>
        <div class="atras">
          <p>Impulsar programas de desarrollo social y humano, a través de modelos de formación integral por competencias, de seguimiento a iniciativas de gestión empresarial, y de investigaciones socioeconómicas.</p>
        </div>
      </div>
    </div>
    <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card2">
          <img src="../view/images/vision.jpg" width="550" height="320">
        </div>
        <div class="atras">
          <p>Mejorar la calidad de vida de los beneficiarios de los programas, y contribuir a identificar nuevas lineas de acción para  la ejecución de programas sociales.</p>
        </div>
      </div>
    </div>
    <div class="tarjeta-wrap">
      <div class="tarjeta">
        <div class="adelante card3">
           <img src="../view/images/Quienes.jpg" width="550" height="320">
        </div>
        <div class="atras">
          <p>Los estatutos constitutivos direccionan a la Fundación hacia la formación para el trabajo del recurso humano más necesitado y a la investigación social como factor de desarrollo.

En cumplimiento de su misión la Fundación ha diseñado un modelo de formación laboral integral con un módulo de capacitación técnica por competencias, un módulo de formación humana en orientación ocupacional y valores y un módulo de emprendimiento.</p>
        </div>
      </div>
    </div>
  </div>         
        </div>                
      </div>
    </div>
  </section><!--/#blog-->

  <section id="contact">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contacto</h2>
            <p>Somos una empresa que se caracteriza por dar soluciones para el control de información en las organizaciones, que facilite operaciones como lo son: Registro y control de ingresos y salidas en los parqueaderos Control de flujo de información, buscamos satisfacer las necesidades del cliente dándole un servicio oportuno y garantizado.</p>
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

          
         <form action="../view/PHPMailer-5.2-stable/index.php" class="formulario" method="POST">
       <div class="row">
            <div class="col-sm-6">
              <form id="main-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
<font color="White" size="4">Nombre</font><br>
                    <div class="form-group">
                      
                      <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="<?php echo $_SESSION['Usuario'];?>" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
<font color="White" size="4">Correo</font>
                      <input type="email" name="email" class="form-control" placeholder="Correo" value="<?php echo $_SESSION['Correo'];?>" required="required"  >
                    </div>
                  </div>
                </div>
                <div class="form-group">
<font color="White" size="4">Asunto</font>
                  <input type="text" name="asunto" class="form-control" placeholder="Asunto" required="required">
                </div>
                <div class="form-group">
<font color="White" size="4">Mensaje</font>
                  <textarea name="mensaje" id="message" class="form-control" rows="4" placeholder="Ingresa tu mensaje" required="required"></textarea>
                </div>                        
                <div class="form-group">  
 <input type="submit" value="Enviar" class="send send4">
                        <p class="green-text" id="enviado"></p>
 </div>
              </form> 
</div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Direccion:</span> Sede Barrio Colombia </li>
                  <li><i class="fa fa-phone"></i> <span> Telefono:</span> +57 3144571984 </li>
                  <li><i class="fa fa-envelope"></i> <span> Correo:</span><a href="lmoscososanchez6@misena.edu.co"> support@JM3D.com</a></li>

                </ul>
              </div>                            
            </div>
          </div>
        </div>
      </div>
    </div>        
  </section>
 
<section id="ayuda" >

<center>
 <font face="comic-sans" size="18"><b> Ayuda e informacion del sitio</font>
<br><br><br><br>
        <button class="accordion">Registro de datos del usuario </button>
<div class="panel">
  <p><font size="4" color="Black" face="comic-sans">Apreciado usuario para completar el registro de datos, de click debajo de este icono <br>  <div class="service-icon">
              <i class="fa fa-users" style="color:white;"></i>
            </div><br> El cual se encuentra al inicio de la pagina.<br>Nota, recuerde que solo podra registrar datos una vez
</p>
</div>

<button class="accordion">Registro de Vehiculos</button>
<div class="panel">
<p><font size="4" color="Black" face="comic-sans">Apreciado usuario para completar el registro de datos de su vehiculo, de click debajo de este icono <br>  <div class="service-icon">
              <i class="fa fa-bicycle" style="color:white;"></i>
            </div><br> El cual se encuentra al inicio de la pagina.<br>
</p>
</div>

<button class="accordion">Registro de Novedades</button>
<div class="panel">
  <p><font size="4" color="Black" face="comic-sans">Apreciado usuario si usted desea registrar novedades puede dar click en el siguiente icono<br>  <div class="service-icon">
              <i class="fa fa-list" style="color:white;"></i>
            </div><br> El cual se encuentra al inicio de la pagina.<br>
</p>
</div>

<button class="accordion">Consulta de datos </button>
<div class="panel">
 <p><font size="4" color="Black" face="comic-sans">Para la consulta de datos usted dispone de tres botones, los cuales tienen su documento y lo llevaran a la consulta tanto de datos personales, asi mismo de su vehiculo y las novedades que ha registrado<br>  <div class="service-icon">
              <i class="fa fa-users" style="color:white;"></i> </div><div class="service-icon"><i class="fa fa-bicycle" style="color:white;"></i></div><div class="service-icon"><i class="fa fa-list" style="color:white;"></i>
            </div>
</p>
</div>


<button class="accordion">Modificar datos</button>
<div class="panel">
  <p><font size="4" color="Black" face="comic-sans">Para ingresar al formulario que le permitira la modificacion de sus datos de click al siguiente boton<br>   <div class="w3-blue w3-section" style="width:30%">
              <button onclick="myFunction('Demo1')" class="w3-button w3-block"> Datos persona</button>
              <div id="Demo1" class="w3-hide w3-container"></div><br><br>
</p>
</div>

</center>
      </section>    

  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="../view/images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2017 JM3D Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Crafted by JM3D Team</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
  <script src="../view/jquery-3.1.1.min.js"></script>
<script src="../view/materialize.min.js"></script>
<script>
    function enviarFormulario(){
         var formData = new FormData($(".formulario")[0]);
            $.ajax({
            data: formData,
            url: '../view/PHPMailer-5.2-stable/index.php',
            type: 'post',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            success: function(response){
                if(response){
                    $('#enviado').text(response);
                    $('#nombre').val('');
                    $('#email').val('');
                    $('#asunto').val('');
                    $('#mensaje').val('');
                }else{
                   $('#enviado').text(response); 
                }
            }
        });
        
    }
</script>

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


</body>
</html>
  					