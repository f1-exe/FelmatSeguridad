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

//Obtiene nombre del Usuario
function obtieneNombre($usuario){
  global $conn;
  $nombre="";
  $query = "SELECT nombre FROM usuario WHERE usuario = '".$usuario."'";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $nombre = $row[0];
  }
    return $nombre;
}

//Obtiene Tipo de usuario
function obtieneTipo($usuario){
  global $conn;
  $tipo="";
  $query = "SELECT tipo FROM usuario WHERE usuario = '".$usuario."'";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $tipo = $row[0];
  }
    return $tipo;
}

function obtieneUsuario($usuario){
  global $conn;
  $query = "SELECT foto,cargo,nombre FROM usuario WHERE usuario = '".$usuario."'";
  $resp = mysqli_query($conn, $query);
  return $resp;
}

##################################### COMIENZO DE CRUD PARA USUARIO ############################################
//Metodo que permite registar un usuario
function registrarUsuario($nombre, $usuario, $clave, $tipo_usuario, $foto, $cargo){
  global $conn;
  $query = "INSERT INTO usuario (nombre, usuario, clave, tipo, foto, cargo) VALUES ('".$nombre."','".$usuario."','".$clave."',".$tipo_usuario.",'".$foto."',".$cargo.")";
  $resp = mysqli_query($conn, $query);

  if($resp){
    echo "SI";
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}

function listarUsuario(){
  global $conn;
  $query = "SELECT id, nombre, usuario, tipo, foto, cargo FROM usuario";

  $result = mysqli_query($conn,$query);
  return $result;
}

function listarUsuarioPorID($id_usuario){
  global $conn;
  $query = "SELECT * FROM usuario WHERE id = ".$id_usuario."";
  $result = mysqli_query($conn,$query);
  return $result;
}

//Metodo que permite editar datos de algún jugador
function editarUsuario($nombre, $usuario, $tipo, $foto, $id_usuario, $cargo){
  global $conn;
  $query = "UPDATE usuario SET nombre = '".$nombre."', usuario = '".$usuario."', tipo = ".$tipo.", foto = '".$foto."', cargo = ".$cargo."  WHERE id = ".$id_usuario."";
  $resp = mysqli_query($conn, $query);

  if($resp){
    echo "SI";
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}

//Metodo para editar la informacion de un Jugador SIN LOGO !!!
function editarUsuarioSinLogo($nombre, $usuario, $tipo, $id_usuario, $cargo){
  global $conn;
  $query = "UPDATE usuario SET nombre = '".$nombre."', usuario = '".$usuario."', tipo = ".$tipo.", cargo = ".$cargo." WHERE id = ".$id_usuario."";
  $resp = mysqli_query($conn, $query);

  if($resp){
    echo "SI";
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}

function listarConexiones(){
  global $conn;
  $query = "SELECT * FROM plataforma";

  $result = mysqli_query($conn,$query);
  return $result;
}

function registrarConexion($nombre, $ip_plat, $usu_plat, $pass_plat, $fqdn, $ip_bd, $puerto_bd, $nombre_bd, $usu_bd, $pass_bd, $tipo, $pais, $ambiente, $producto){
  global $conn;
  $query = "INSERT INTO plataforma (nombre, ip_plat, usu_plat, pass_plat, fqdn, ip_bd, puerto_bd, nombre_bd, usu_bd, pass_bd, tipo, pais, ambiente, producto) VALUES ('".$nombre."','".$ip_plat."','".$usu_plat."','".$pass_plat."','".$fqdn."','".$ip_bd."',".$puerto_bd.",'".$nombre_bd."','".$usu_bd."','".$pass_bd."',".$tipo.",".$pais.",".$ambiente.",".$producto.")";
  $resp = mysqli_query($conn, $query);

  if($resp){
    echo "SI";
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}

function listarConexionPorID($id){
  global $conn;
  $query = "SELECT * FROM plataforma WHERE id = ".$id."";
  $result = mysqli_query($conn,$query);
  return $result;
}

function listarClientes(){
  global $conn;
  $query = "SELECT * FROM clientes";

  $result = mysqli_query($conn,$query);
  return $result;
}

function registrarCliente($nombre, $ip_plat, $usu_plat, $pass_plat, $fqdn, $ip_bd, $puerto_bd, $nombre_bd, $usu_bd, $pass_bd, $tipo, $pais, $ambiente, $producto){
  global $conn;
  $query = "INSERT INTO plataforma (nombre, ip_plat, usu_plat, pass_plat, fqdn, ip_bd, puerto_bd, nombre_bd, usu_bd, pass_bd, tipo, pais, ambiente, producto) VALUES ('".$nombre."','".$ip_plat."','".$usu_plat."','".$pass_plat."','".$fqdn."','".$ip_bd."',".$puerto_bd.",'".$nombre_bd."','".$usu_bd."','".$pass_bd."',".$tipo.",".$pais.",".$ambiente.",".$producto.")";
  $resp = mysqli_query($conn, $query);

  if($resp){
    echo "SI";
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}
