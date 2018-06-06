<html>
<head>
<title>pagina proyecto</title> 

</head>

<div style="text-align: center; font-size: 15px;background-color:#BDBDBD;">
<br><br>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
      * {box-sizing:border-box}
      body {font-family: Verdana,sans-serif;margin:0}
     .mySlides {display:none}

      /* Slideshow container */
      .slideshow-container {
      max-width:800px;
 
      position: relative;
      margin: auto;
      }

      /* Next & previous buttons */
     .prev, .next {
     cursor: pointer;
     position: relative;
     top: 50%;
     width: auto;
     padding: 16px;
     margin-top: -22px;
     color: black;
     font-weight: bold;
     font-size: 18px;
     transition: 0.6s ease;
     border-radius: 0 3px 3px 0;
     }

     /* Position the "next button" to the right */
    .next {
    right: -20;
    border-radius: 3px 0 0 3px;
    }
 /* Position the "prev button" to the left */
    .prev {
    left: -10;
    border-radius: 3px 0 0 3px;
    }
   

    /* Number text (1/4 etc) */
    .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
    }
 
  


    /* Fading animation */
    .fade {
    -webkit-animation-name: fade;
    -webkit-animation-duration: 1.5s;
    animation-name: fade;
    animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 500px) {
    .prev, .next,.text {font-size: 11px}
    }
 </style>
 </head>
 <body>

   <div class="slideshow-container">
       <div class="mySlides fade">
       <div class="numbertext">1 / 4</div>
       <img src="imagenc1.jpg" style="width:100%">
   </div>

   <div class="mySlides fade">
       <div class="numbertext">2 / 4</div>
       <img src="imagenc2.jpg" style="width:100%">
   </div>

  <div class="mySlides fade">
       <div class="numbertext"></div>
       <img src="imagenc3.jpg" style="width:100%">

  </div>

  <div class="mySlides fade">
       <div class="numbertext">4 / 4</div>
       <img src="imagenc4.jpg" style="width:100%">

  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
  <br>

  <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
 </div>

 <script>
  var slideIndex = 1;
  showSlides(slideIndex);

 function plusSlides(n) {
   showSlides(slideIndex += n);
  }
  
 function currentSlide(n) {
   showSlides(slideIndex = n);
  }

  function showSlides(n) {
   var i;
   var slides = document.getElementsByClassName("mySlides");
   var dots = document.getElementsByClassName("dot");
   
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
 }

 </script>

</div>
     

<style type="text/css">

body{
background-image: url(fondo.jpg);
background-repeat: no-repeat;
background-size: 3000px
  
}
div {
  border-top-color: red;
  border-right-color: red;
  border-bottom-color: red;
  border-left-color: red;
}
      
      * {
        margin:1px;
        padding:1px;
      }
      
      #header {
        margin:center;
        width:700px;
        font-family:Arial, Helvetica, sans-serif;
      }
      
      ul, ol {
        list-style:none;
      }
      
      .nav > li {
        float:left;
      }
      
      .nav li a {
        background-color:#000;
        color:#fff;
        text-decoration:none;
        padding:10px 12px;
        display:block;
      }
      
      .nav li a:hover {
        background-color:#434343;
      }
      
      .nav li ul {
        display:none;
        position:absolute;
        min-width:300px;
      }
      
      .nav li:hover > ul {
        display:block;
      }
      
      .nav li ul li {
        position:center;
      }
      
      .nav li ul li ul {
        right:-300px;
        top:0px;
      }
      
    </style>
  </head>
  <body>

<center>
    <div id="header">
      <ul class="nav">
        <li><a href="pagina proyecto.html">Inicio</a></li>
<li><a href="">Ingresar</a>

    <ul>
            <li><a href="Ingresar datos1.php">Registrarse </a></li>
            <li><a href="Ingresar vehiculo.html"> Registrar vehiculo</a></li>           
            <li><a href="Novedades.html">Informar novedades usuario</a></li>
            <li><a href="inv.html"> Informar novedades vehiculos</a></li>
            


          </ul></li>
        <li><a href="">Actualizar</a>

    <ul>
            <li><a href="Estado.html">Estado persona</a></li>
            

            <li><a href="EV.html">Eliminar vehiculo</a></li>
          </ul></li>
        <li><a href="">Modificar</a>

    <ul>
            <li><a href="modificar vehiculo.html">Datos persona </a>
            <li><a href="vehiculo.html">Datos Vehiculos</a></li>
          </ul></li>
          <li><a href="">Consultar</a>

    <ul>
            <li><a href="datos persona.html"> Datos persona  </a></li>
            <li><a href="Dv i.html">Datos vehiculo</a></li>
            <li><a href="comprobar pago.html"> Pagos </a></li>
            <li><a href="informe.html">Reportes</a></li>
<li><a href="Hora i.html">Registro de horas de entrada y salida</a></li>


          </ul></li>

        <li><a href="">Acerca de</a>
          <ul>
            <li><a href="Mision.html">mision</a></li>
            <li><a href="vision.html">Vision </a></li>
<li><a href="quienes somos.html">Quienes somos</a></li>
            <li><a href="integrantes.html">Integrantes</a></li>
          </ul>
        </li>
        <li><a href="">Contacto</a></li>
      </ul>
    
</div>
</div>
</center>
	



<center>


<br><br><br><br>


<P ALIGN=center><FONT COLOR=BLACK><FONT SIZE=8>Consultar datos</FONT></FONT><!--TAMAÑO FUENTE!--></CENTER> <!-- CENTRA EL TITULO!--> </BR> </BR> <!-- SALTO DE LINEA!-->
<P ALIGN=center><img src="s.jpg" width="505" height="115"><BR><BR><BR>


<fieldset>


<center>  <table border=3 width=100% >
<tr><td>Nombre  </td><td>Apellido</td><td>Genero</td><td>ciudad</td><td>Fecha de nacimiento</td><td>Direccion</td><td>Correo</td><td>Telefono</td><td>Estado civil</td><td>sede</td><td>ficha de caracterizacion</td><td>vehiculo</td></tr>

<?php 
$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$genero=$_POST['boton1'];
$ciudad=$_POST['ciudad'];
$fechanac=$_POST['fechac'];
$Direccion=$_POST['direccion'];
$COrreo=$_POST['correo'];
$Telefono=$_POST['telefono'];
$Estado=$_POST['estado'];
$sede=$_POST['sede'];
$ficha=$_POST['fc'];
$vehiculo=$_POST['vehiculo'];


echo "<tr><td>",$Nombre,"</td><td>",$Apellido,"</td><td>",$genero,"</td><td>",$ciudad,"</td><td>",$fechanac,"</td><td>",$Direccion,"</td><td>",$COrreo,"</td><td>",$Telefono,"</td><td>",$Estado,"</td><td>",$sede,"</td><td>",$ficha,"</td><td>",$vehiculo;

?>


</table></center>
</fieldset>
 
  <br/><br/>
 



</FORM>
</body>
</html>