<?php
		$mysqli = new MySQLi("sql313.ihostfull.com", "uoolo_21595414","administradorjm3d", "uoolo_21595414_controlyregistro");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
		$link =mysqli_connect("sql313.ihostfull.com","uoolo_21595414","administradorjm3d");
	if($link){
		mysqli_select_db($link,"uoolo_21595414_controlyregistro");
	}


?>
