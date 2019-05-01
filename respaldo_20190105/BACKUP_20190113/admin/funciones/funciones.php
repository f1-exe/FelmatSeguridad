<?php
include '../conexion/BDconexion.php';

//Se valida si el usuario se encuentra registrado en la BD
function validaUsuario($nombre){
  global $conn;
  $usu = "";
  $query = "SELECT nombre FROM usuario WHERE nombre = '".$nombre."'";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $name = $row[0];
  }

  if($name === $nombre){
    return true;
  }else{
    return false;
  }
}

//Se valida clave del usuario al momento de loguearse
function validaClave($nombre, $clave){
  global $conn;
  $pass="";
  $query = "SELECT clave FROM usuario WHERE nombre = '".$nombre."'";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $pass = $row[0];
  }

  if($clave === $pass){
    return true;
  }else{
    return false;
  }
}

function listarContacto(){
  global $conn;
  $query = "SELECT * FROM contacto";

  $result = mysqli_query($conn,$query);
  return $result;
}

//@felmat -  cambia el estado de la gestion de los contactos


function cambiarEstadoGestion($estado,$id){

  global $conn;
  $query = "UPDATE contacto SET gestion = ".$estado." WHERE id =".$id;
  $resp = mysqli_query($conn, $query);

  if($resp){
    //echo "SI";
    return true;
  }else{
    //echo "NO".mysqli_error($conn);
    return false;
  }

}

?>