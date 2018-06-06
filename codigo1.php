<html lang="en">
<head>
	<?php
	require("../model/connect_db.php");
require("../model/conexion.php");
	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<title>Formularios</title>
	<style>
		body
		 {
		  background-image: url(http://photos1.hi5.com/0031/763/432/vr3mEw763432-03.gif);
	      background-repeat: repeat;
	      background-position: top center;
	      background-attachment: fixed;
	      background-repeat: repeat-y;
	     }

		#customers 
		 {
	       font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	       border-collapse: collapse;
	       width: 100%;
	     }

		#customers td, #customers th 
		 {
		    border: 1px solid #000;
		    padding: 8px;
		 }

		#customers tr:nth-child(even)
		 {
			background-color: #ddd;
		 }

		#customers tr:hover 
		 {
		 	background-color: #ddd;
		 }

		#customers th
		  {
		    padding-top: 12px;
		    padding-bottom: 12px;
		    text-align: left;
		    background-color: #4CAF50;
		    color: white; 
		  }
    </style>
</head>
<body>
 <!-- ArkAngel,YonkoChileWebRox -->
	<div class="contenedor-formulario">		
			<form action="../view/index.php" class="formulario" name="formulario_registro" method="POST">
				<div>
					<center><Font color=black SIZE=12 face=comic-sans>Usuario Consultado</Font></center>
					<br><br><br>						
					<?php
						echo "<Font color=black>";
						extract($_GET);
						
						$result1="lmoscososanchez@misena.edu.co";
					    $sql=("SELECT id as id,nombre as Nombre,apellido as Apellido,genero,tipodedocumento.Descripcion,documento,edad,ciudad.descripcion,direccion,correo,telefono,sede from usuario,tipodedocumento,ciudad where(usuario.idTipoDoc=tipodedocumento.codigo) and (usuario.idciudad=ciudad.idCiudad)  and documento='$result1'  ");

				        $query=mysqli_query($mysqli,$sql);

				        echo "<table  border='2'; id='customers'>";
				        echo "<tr class='warning'>";
				        echo "<td>Id</td>";
				        echo "<td>Nombre</td>";
				        echo "<td>Apellido</td>";
				        echo "<td>Genero</td>";
				        echo "<td>Tipo de documento</td>";
				        echo "<td>Documento</td>"; 
				        echo "<td>Fecha de Nacimiento</td>";
				        echo "<td>Ciudad</td>";
				        echo "<td>Direccion</td>";
				        echo "<td>Correo</td>";
				        echo "<td>Telefono</td>";
				        echo "<td>Sede</td>";       
				        echo "</tr>";
	                ?>
        
				    <?php 
				         
				        while($arreglo=mysqli_fetch_array($query))
				        {
					        echo "<tr class='success'>";
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
				            echo "</tr>";
				        }
				        
				        echo "<tr><td colspan=13><input type=submit id=btn-submit value=volver></td></tr></table>";

				    
					?>	  
				 <center><img src="images/consu.jpg" width=""></center>
				 <div class="span8"></div>	
		      </div>	
		    <br/>
     </div>
</form>
</form>
</div>
</div>
</div>
<script src="js/formulario.js"></script>
</body>
</html>