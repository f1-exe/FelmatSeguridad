<?php 
    include 'funciones/funciones.php';
     $id = $_GET['id'];

     if(validaCP($id)){
         $cant = validaCantidadCP($id);
         $cant++;
         if(actualizaCantidadCP($id, $cant)){
             exit;
         }else{
            exit;
         }
     }else{
         if(insertCP($id)){
            exit;
         }else{
            exit;
         }
     }

    //header ("Location: https://www.test.cl/img/felmat1-b");
?>