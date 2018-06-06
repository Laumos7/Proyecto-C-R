<!DOCTYPE html>
<?php require("../model/connect_db.php");
?>

<html lang="en">
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
   	    <title>LOGIN</title>
        <link rel="stylesheet" href="../view/cssindex/css/style.css" />
        <link rel="shortcut icon" href="../view/cssindex/favicon.ico">
         
        <style>
         body
        {
         background-image: url(../view/cssindex/img/4.jpg);
         background-repeat: no-repeat;
        background-size: 2000px 1500px;
         }
        
        .opacity
         {
        background-color:rgb(231, 223, 227 );
        opacity:0.8; /* Opacidad 60% */
        width: 2000px;
        height:1500px;
          }
        </style>
	</head>
   
	<body >

	<br><br><br>
 	    <div class="login-wrap">
	      <div class="login-html">          
		      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar </label>
		      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
		       <div class="login-form">
                             <!-- Inicio formulario de ingreso -->

				    <div class="sign-in-htm">
			             <form action="validar.php" method="POST">

								<div class="group">
									<label for="user" class="label">Correo</label>
									<input id="mail" type="email" class="input" type="text" name="mail" required>
								</div>

								<div class="group">
									<label for="pass" class="label">Contraseña</label>
									<input id="pass" type="password" class="input" type="password" name="pass"   required>
								</div>

								<div class="group">
									<input id="check" type="checkbox" class="check" checked>
									<label for="check"><span class="icon"></span> Recordar mi contraseña</label>
								</div>
								
								<div class="group">
									<input type="submit" Class="button" value="Enter">
								</div>
					    </form><!-- Fin formulario de ingreso -->
							<div class="hr"></div>
						<div class="foot-lnk">
					<label for="tab-2">Registrarse?</a>
				</div>
			</div>	
			
			<!-- Inicio formulario de registro -->
			<div class="sign-up-htm">
				<form method="post" action="">
                    
                    <div class="group">
    					<label for="documento" class="label">Documento</label>
						<input id="documento" type="number" class="input" name="documento" placeholder="Ingresa tu documento aqui" required >
					</div>

				   <div class="group">
						<label for="realname" class="label">Nombre</label>
						<input id="realname" type="text" class="input" name="realname" placeholder="Ingresa tu nombre" pattern="[A-Z a-z]{6,25}" title="Solo se admiten letras, el nombre debe superar los 6 caracteres"  required >
					</div>
                    
                    <div class="group">
                    
    					<label for="cargo" class="label">Cargo</label>
					     <select name='cargo' id='cargo' class="input"  >
          		        <?php 
                        $query = $mysqli -> query ("SELECT * FROM CARGO");
                        	 while ($valores = mysqli_fetch_array($query)) {
												
           				 echo '<option value="',$valores[Id_cargo],'"><font color=black>',$valores[Descripcion],'</option>';}
						?></select>
     				</div>
                     
                     <div class="group">
                    
        				<label for="sede" class="label">Sede</label>
					     <select name='sede' id='sede' class="input" >
          		        <?php 
                        $query = $mysqli -> query ("SELECT * FROM SEDE");
                        	 while ($valores = mysqli_fetch_array($query)) {
												
           				 echo '<option value="',$valores[Id_sede],'"><font color=black>',$valores[Descripcion],'</option>';}
						?></select>
     				</div>

					<div class="group">
						<label for="nick" class="label">Correo Electronico</label>
						<input id="nick"  name="nick" type="email" class="input"  placeholder="Ingresa tu correo" required>
					</div>

					<div class="group">
						<label for="pass" class="label">Contraseña</label>
						<input id="pass" type="password" class="input" data-type="password" name="pass"  placeholder="Ingresa una contrase&ntilde;a" pattern="(?=.*\d)(?=.*[a-z]).{5,8}" title="6 a 8 caracteres (Al menos una letra y un numero)" >
					</div>

					<div class="group">
						<label for="pass" class="label">Repite Contraseña</label>
						<input id="rpass" type="password" class="input" data-type="password" name="rpass"  placeholder="verificaci&oacute;n de contrase&ntilde;a" pattern="(?=.*\d)(?=.*[a-z]).{5,8}" title="6 a 8 caracteres (Al menos una letra y un numero)" >
					</div>
			
					<div class="group">
						<input name="submit" type="submit" value="Sign up" class="button" >
					</div>
				</form><!-- Fin formulario de registro -->
				<div class="hr"></div>
				<div class="foot-lnk">
				<label for="tab-1">Already member?</a>
			</div>
                         <!-- Registro de datos -->
			<?php
					if(isset($_POST['submit'])){
						require("registro.php");
					}
				?>
			<!--Fin formulario registro -->

	
		</div></center></div></center></div></div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.vide.js"></script>

</body>
</html>										