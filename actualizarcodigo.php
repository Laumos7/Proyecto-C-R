<?php
require_once 'conexion.php';
$nom=$_GET["nombre"];
$foto=$_GET["foto"];

mysql_query("UPDATE foto
SET foto='Activo'
WHERE nombre=$nom;");
header("Location: ../view/guarda.php#foto");
?>
