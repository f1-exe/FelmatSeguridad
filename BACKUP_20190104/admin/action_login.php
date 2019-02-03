<?php
session_start();
include 'funciones/funciones.php';

$usuario = $_POST['loginUsername'];
$clave = $_POST['loginPassword'];

if($_SERVER["REQUEST_METHOD"] == "POST") {
  if(isset($usuario) && isset($clave)){
    if(!empty($usuario) && !empty($clave)){
      if(validaUsuario($usuario)){
        if(validaClave($usuario, $clave)){

          $_SESSION["session_usuario"] = $usuario;
          header("location: index.php");
        }else{
          $mensaje = "Clave incorrecta";
          header("location: login.php?mensaje=$mensaje");
        }
      }else{
        $mensaje = "Usuario no registrado o invalido";
        header("location: login.php?mensaje=$mensaje");
      }
    }else{
      $mensaje = "ERROR!! Datos vacios";
      header("location: login.php?mensaje=$mensaje");
    }
  }else{
    $mensaje = "ERROR!! Datos indefinidos o NULL";
    header("location: login.php?mensaje=$mensaje");
  }
}else{
  $mensaje = "ERROR!! Method form incorrecto";
  header("location: login.php?mensaje=$mensaje");
}

?>
