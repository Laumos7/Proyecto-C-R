<html>
</head>
<div style="text-align: center; font-size: 15px;background-color:#4682B4;">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
      * {box-sizing:border-box}
      body {font-family: Verdana,sans-serif;margin:0}
     .mySlides {display:none}

      /* Slideshow container */
      .slideshow-container {
      max-width:700px;
 
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
    right: -50;
    border-radius: 3px 0 0 3px;
    }
 /* Position the "prev button" to the left */
    .prev {
    left: 50;
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
 
  

    .active, .dot:hover {
    background-color: #717171;
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
       <div class="numbertext">3 / 4</div>
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
			
			* {
				margin:1px;
				padding:1px;
			}
			
			#header {
				margin:center;
				width:800px;
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
            <li><a href="persona1.php"> Datos persona  </a></li>
            <li><a href="DV U1.php">Datos vehiculo</a></li>
            <li><a href="comprobar pago.html"> Pagos </a></li>
            <li><a href="informe.html">Reportes</a></li>


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
 <body background="fondo.jpg">
<center>

<H1>Informacion</H1>
   <FORM action="php1.php" Method="post">
     <fieldset>
        <legend>Datos del vehiculo</legend>
         
         <table border=1 width=1300>
          <td width=100>
          Propietario 
          </td>

          <td width=100>
          Apellido
          </td>

          <td width=100>
          Tipo de identificación
          </td>

         <td width=100>
         Identificación
          </td>

          <td width=100>
          Cargo
          </td>

          <td width=100>
          Tipo de vehiculo
          </td>
           <td width=100>
          Color
          </td>
           <td width=100>
          Placa
          </td>
          <td width=100>
          Serial
          </td>
          <td width=100>
          Marca
          </td>
        
          

<?php 

$Nombre=$_POST['nombr'];
 $apellido=$_POST['apellido'];
  $identidad=$_POST['Identificacion'];
  $numero=$_POST['numero'];
$cargo=$_POST['Cargo'];
$tveh=$_POST['tipo'];
$color=$_POST['Color'];
$placa=$_POST['Placa'];
$serial=$_POST['serial'];
$marca=$_POST['Modelo'];
$nombre=$_POST['nombr'];
echo "<TR>
          <td width=150>",
         $Nombre,
          "</td><td width=100>",
          $apellido,
         " </td>
          <td width= 100>",
         $identidad,
          "</td>
          <td width= 100>",
          $numero,
          "          </td>
          <td width= 100>",
          $cargo,
          "</td>
          <td width= 100>",
          $tveh,
          "</td>
          <td width= 100>",
          $color,
          "</td>
          <td width= 100>",
          $placa,
          "</td>
          <td width= 100>",
          $serial,
          "</td>
          <td width= 100>",
          $marca,"</td>
<Tr>"
     ?>

</button>
     </fieldset>
    </form>
</body>
</html>
