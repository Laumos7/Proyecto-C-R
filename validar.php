<?php
//Apertura de cuenta 
session_start();
	require("../model/conexion.php");
       //require("../model/connect_db.php");
	//definicion de variables
	$username=$_POST['mail'];
	$pass=md5($_POST['pass']);
	$pass1=md5($_POST['pass']);
	$conexion=conexion(); 
    $consulta2="SELECT * FROM LOGIN WHERE Correo='$username' and Cargo=2";
    $sql2=mysqli_query($conexion,$consulta2);
    if($f2=mysqli_fetch_assoc($sql2)){
    	if($pass==$f2['Password']){
            
			//$_SESSION['id']=$f['id'];
			$_SESSION['Usuario']=$f2['Usuario'];
			$_SESSION['Cargo']=$f2['Cargo'];
            
             echo '<script>alert("Bienvenido Administrador")</script> ';    
			echo "<script>location.href='admin.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='LOGIN.php'</script>";
		}
	}
    
    
    
     $consulta3="SELECT * FROM LOGIN WHERE Correo='$username' and Cargo=1";
    $sql1=mysqli_query($conexion,$consulta3);
    if($f1=mysqli_fetch_assoc($sql1)){
		if($pass==$f1['Password']){
            
			$_SESSION['Id_documento']=$f1['Id_documento'];
			$_SESSION['Usuario']=$f1['Usuario'];
			$_SESSION['Cargo']=$f1['Cargo'];
                         $_SESSION['Correo']=$f1['Correo'];
            
                
			echo "<script>location.href='index.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='LOGIN.php'</script>";
		}
	}
    
     $consulta4="SELECT * FROM LOGIN WHERE Correo='$username' and Cargo=3";
    $sql=mysqli_query($conexion,$consulta4);
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['Password']){
            
			//$_SESSION['id']=$f['id'];
			$_SESSION['Usuario']=$f['Usuario'];
			$_SESSION['Cargo']=$f['Cargo'];
            
                echo '<script>alert("BIENVENIDO GUARDA")</script> ';
			echo "<script>location.href='guarda.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='LOGIN.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='LOGIN.php'</script>";	

	}
    
    ?>