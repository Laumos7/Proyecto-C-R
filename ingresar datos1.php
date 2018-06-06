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
            <li><a href="Ingresar vehiculo.php"> Registrar vehiculo</a></li>           
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
	

<br><br>
<br><br>
<br>	
<br>	

<center>
<br><br>
<form action="consultarpersona1.php" method="POST">
<P ALIGN=center><FONT COLOR=BLACK><FONT SIZE=8>INGRESAR DATOS</FONT></FONT><!--TAMAÑO FUENTE!--></CENTER> <!-- CENTRA EL TITULO!--> </BR> <!-- SALTO DE LINEA!-->
<form>




<center><FONT SIZE=6> <FONT COLOR=black>Datos Personales </N></S> </FONT></FONT></center><BR><BR>


<H3>
<center>
Nombre:   <INPUT TYPE="text" NAME="nombre"  PATTERN="[A-Z a-z]{1,16}"  MAXLENGHT=15 SIZE= 15 VALUE REQUIRED><BR><BR>
Apellido: <INPUT TYPE="text" NAME="apellido"  PATTERN="[A-Z a-z]{1,16}" MAXLENGHT=15 SIZE= 15 VALUE REQUIRED><BR><BR>
Elija su G&eacute;nero:<br>  
<INPUT TYPE="radio" NAME="boton1" VALUE="Masculino" required> Masculino <br>  
<INPUT TYPE="radio" NAME="boton1"  VALUE="Femenino" required> Femenino  <BR><BR>
Fecha de nacimiento:<input type="date" name="fechac" width="300" height="300" required style='width:150px; height:20px'><BR><BR>


Ciudad:<select name="ciudad" class="form-control" id="inputciudad" required>
    <option value="Bogot&aacute;" STYLE='width:80px; HEIGHT:35px'>Bogot&aacute;</option>
    <option value="villavicencio"  STYLE='width:80px; HEIGHT:25px'>villavicencio</option>
    <option value="Barranquilla"  STYLE='width:80px; HEIGHT:25px'>Barranquilla</option>
    <option value="Cartagena"  STYLE='width:80px; HEIGHT:25px'>Cartagena</option>
    <option value="San Andres y Providencia"  STYLE='width:80px; HEIGHT:25px'>San Andres y Providencia</option>
<option value="Atlantico"  STYLE='width:80px; HEIGHT:25px'>Atlantico</option>
<option value="Bolivar"  STYLE='width:80px; HEIGHT:25px'>Bolivar</option>
<option value="Cesar"  STYLE='width:80px; HEIGHT:25px'>Cesar</option>
<option value="Cordoba"  STYLE='width:80px; HEIGHT:25px'>Cordoba</option>
<option value="Guiajira"  STYLE='width:80px; HEIGHT:25px'>Guiajira</option>
<option value="Magdalena"  STYLE='width:80px; HEIGHT:25px'>Magdalena</option>
<option value="Sucre"  STYLE='width:80px; HEIGHT:25px'>Sucre</option>
<option value="Antioquia"  STYLE='width:80px; HEIGHT:25px'>Antioquia</option>
<option value="Boyac&aacute"  STYLE='width:80px; HEIGHT:25px'>Boyac&aacute;</option>
<option value="Caldas"  STYLE='width:80px; HEIGHT:25px'>Caldas</option>
<option value="Cundinamarca"  STYLE='width:80px; HEIGHT:25px'>Cundinamarca</option>
<option value="Huila"  STYLE='width:80px; HEIGHT:25px'>Huila</option>
<option value="Norte de Santander"  STYLE='width:80px; HEIGHT:25px'>Norte de santander</option>
<option value="Quindio"  STYLE='width:80px; HEIGHT:25px'>Quindio</option>
<option value="Risaralda"  STYLE='width:80px; HEIGHT:25px'>Risaralda</option>
<option value="Santander"  STYLE='width:80px; HEIGHT:25px'>Santander</option>
<option value="Tolima"  STYLE='width:80px; HEIGHT:25px'>Tolima</option>
<option value="Cauca"  STYLE='width:80px; HEIGHT:25px'>Cauca</option>
<option value="choc&oacute;"  STYLE='width:80px; HEIGHT:25px'>choc&oacute;</option>
<option value="Nariño"  STYLE='width:80px; HEIGHT:25px'>Nari&ntilde;o</option>
<option value="Valle"  STYLE='width:80px; HEIGHT:25px'>Valle</option>
<option value="Amazonas"  STYLE='width:80px; HEIGHT:25px'>Amazonas</option>
<option value="caquet&aacute;"  STYLE='width:80px; HEIGHT:25px'>caquet&aacute;</option>
<option value="Guainía"  STYLE='width:80px; HEIGHT:25px'>Guain&iacute;a</option>
<option value="Putumayo"  STYLE='width:80px; HEIGHT:25px'>Putumayo</option>
<option value="Vaup&eacute;"  STYLE='width:80px; HEIGHT:25px'>Vaup&eacute;s</option>
<option value="Arauca"  STYLE='width:80px; HEIGHT:25px'>Arauca</option>
<option value="Casanare"  STYLE='width:80px; HEIGHT:25px'>Casanare</option>
<option value="Meta"  STYLE='width:80px; HEIGHT:25px'>Meta</option>
<option value="Vichada"  STYLE='width:80px; HEIGHT:25px'>Vichada</option>
</option>  </select><BR><BR>
Direcci&oacute;n:<INPUT TYPE="text" NAME="direccion" MAXLENGHT=20 SIZE= 20 VALUE REQUIRED><BR><BR>
Correo:   <INPUT TYPE="email" NAME="correo"   MAXLENGHT=35 SIZE= 35 VALUE REQUIRED><BR><BR>
Telefono:<INPUT TYPE="number" NAME="telefono"  MIN="0000" MAX="999999999999" VALUE REQUIRED><BR> <BR>
Estado Civil:<select name="estado" class="form-control" id="inputEstadoCivil">
    <option value="Soltero" STYLE='width:80px; HEIGHT:35px'>Soltero</option>
    <option value="Casado"  STYLE='width:80px; HEIGHT:25px'>Casado</option>
    <option value="Separado"  STYLE='width:80px; HEIGHT:25px'>Separado</option>
    <option value="Divorciado"  STYLE='width:80px; HEIGHT:25px'>Divorciado</option>
    <option value="Viudo"  STYLE='width:80px; HEIGHT:25px'>Viudo</option>
</select><BR><BR>
Sede:<select name= "sede" class="form-control"id="sede"><BR> <BR>
    <option value="Restrepo"  STYLE='width:80px; HEIGHT:25px'>Restrepo</option>
    <option value="Colombia"  STYLE='width:80px; HEIGHT:25px'>Colombia</option>
    <option value="Ricaurte"  STYLE='width:80px; HEIGHT:35px'>Ricaurte</option> 
</select><BR><BR>Ficha de Caracterizaci&oacute;n:<INPUT TYPE="number" NAME="fc"  MIN="0000" MAX="999999999" VALUE REQUIRED><BR> <BR>
Vehiculo:<select name= "vehiculo" class="form-control"id="sede"><BR> <BR>
    <option value="moto"  STYLE='width:80px; HEIGHT:25px'>Moto</option>
    <option value="bicicleta"  STYLE='width:80px; HEIGHT:25px'>Bicicleta</option><BR><BR><BR><BR>
</select><BR><BR>




<center><INPUT TYPE="submit" STYLE='width:80px; HEIGHT:35px'><BR><INPUT TYPE="Reset" STYLE='width:90px; HEIGHT:35px'>


</center>

</body>
</html>

<br><br>
<br><br>
<br>	




</form>
</center>

</body>
</html>