<?php 
$enlace = $_GET[file]; 
header ("Content-Disposition: attachment; filename=".$_GET[file]); 
header ("Content-Type: jpg"); 
header ("Content-Length: ".filesize($enlace)); 
readfile($enlace); 
?>
