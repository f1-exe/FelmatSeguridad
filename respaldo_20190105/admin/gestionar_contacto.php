<?php
include 'funciones/funciones.php';

$estado =  $_GET["estado"]; // es el estado de la noticia 1 aprobado 0 no aprobado
$id = $_GET["id"]; // id de la noticia
	
try {

	cambiarEstadoGestion($estado,$id);
	
    if($estado == 1){
        echo "0";
    }else{
        echo "1";
    }
    
} catch (Exception $e) {
    echo "2";
}
?>