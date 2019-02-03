<?php
include 'funciones/funciones.php';

$estado =  $_GET["estado"]; // es el estado de la noticia 1 aprobado 0 no aprobado
$id = $_GET["id"]; // id de la noticia
	
try {

	cambiarEstadoGestion($estado,$id);
	
    if($estado == 1){
    	echo "El estado ahora es gestionado.";
    }else{
		echo "El estado ahora es NO gestionado.";
    }
    
} catch (Exception $e) {
    echo "No se pudo cambiar el estado de la gestion.";
}
?>
