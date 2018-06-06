<?php
//DefiniciÛn de variables 
    $id=$_POST['documento'];
    $cargo=$_POST['cargo'];
    $sede=$_POST['sede'];
	//user
    $realname=$_POST['realname'];
	$mail=$_POST['nick'];
    if($cargo==1)
    {
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
    }
    else if($cargo==2)
    {
      $pass='BaRRiOcOlOmBiA*1234*#';
      $rpass='BaRRiOcOlOmBiA*1234*#';  
    }
    else if($cargo==3)
    {
        if($sede==1)
        {
             $pass='SedeColombia*123*';
             $rpass='SedeColombia*123*';  
        }
        else
        {
            $pass='SedeRestrepo*123*';
             $rpass='SedeRestrepo*123*';  
        }
    
    }
require('../model/conexion.php');
  $conexion=conexion(); 
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$consulta="SELECT * FROM LOGIN WHERE Correo='$mail'";
    $checkemail=mysqli_query($conexion,$consulta);

//¥Verificacion de email,  valida que el correo digitado no se encuentre en la base de datos y que las contraseÒas sean iguales
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                 $datos="INSERT INTO LOGIN VALUES('$id','$realname',md5('$pass'),'$mail','$cargo','$sede')";
				mysqli_query($conexion,$datos);
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con Exito");</script> ';
				//,md5('SedeColombia*123*')
			}
			
		}else{
                      echo ' <script language="javascript">alert("Las contrase√±as son incorrectas");</script> ';
			
		}

	
?>