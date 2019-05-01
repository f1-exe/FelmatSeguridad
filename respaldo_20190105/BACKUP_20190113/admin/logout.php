<?php
 session_start();
 session_unset();
 session_destroy();

 $tipo = $_GET['tipo'];

 if($tipo == 1){
	$mensaje = "Su sesion ha expirado, por favor vuelva a loguearse.";
 	header("location: login.php?mensaje=$mensaje");
 }else{
 	$mensaje = "Sesión finalizada correctamente";
    header("location: login.php?mensaje=$mensaje");
 }
?>
