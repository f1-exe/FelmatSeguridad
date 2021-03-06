<?php
include 'conexion/BDconexion.php';

//Se valida si el usuario se encuentra registrado en la BD
function validaUsuario($usuario){
  global $conn;
  $usu = "";
  $query = "SELECT usuario FROM usuario WHERE usuario = '".$usuario."'";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $usu = $row[0];
  }

  if($usu === $usuario){
    return true;
  }else{
    return false;
  }
}

//Se valida clave del usuario al momento de loguearse
function validaClave($usuario, $clave){
  global $conn;
  $pass="";
  $query = "SELECT clave FROM usuario WHERE usuario = '".$usuario."'";
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

//Obtiene nombre del Usuario
function enviarCorreo($mail_user, $nombre, $asunto, $tipo , $noti){
  //$texto_opcional =  utf8_decode($texto_opcional);
  /*switch ($tipo) {
      case 1: $mensaje = 'Gracias por registrate!';
          break;
      case 2: $mensaje = 'Estimado : '.$nombre.'<br>
            Su nueva clave para ingresar es: <br> <h1><b><strong><center>'.$texto_opcional.'</center></strong></b></h1> <br>
            Una vez que entres no olvides cambiar la clave por una que te sea facil de recordar.
                      <br>
                       Saludos,<br>
                       Equipo </F1.EXE> ';
          break;
  }*/

  require_once 'lib/sm/lib/swift_required.php';
  $pEmailGmail = 'contacto@felmatseguridad.cl';
  $pPasswordGmail = 'Felmatseguridad2018.';
  $pFromName = 'Felmat Contacto'; //display name

  $pTo = trim($mail_user);
  $pSubjetc = $asunto;

  $template = '';

  if($tipo == 1){
    $template = 'plantillas/mailCliente.html';
  }else if($tipo == 2){
    $template = 'plantillas/mailFelmat.html';
  }else if($tipo == 3){
    $template = 'plantillas/mailFelmatNoti.html';
  }
  
  $pBody = file_get_contents($template);

  if($tipo == 1){
    $pBody = str_replace("#USUARIO#", $nombre, $pBody);
  }else if($tipo == 2){
    $pBody = str_replace("#CLIENTE#", $nombre, $pBody);
  }else if($tipo == 3){
    $pBody = str_replace("#CLIENTE#", $nombre, $pBody);
    $pBody = str_replace("#NUMERO#", $noti, $pBody);
  }

  $transport = Swift_SmtpTransport::newInstance('mail.felmatseguridad.cl', 587, 'tls')
          ->setUsername($pEmailGmail)
          ->setPassword($pPasswordGmail);

  $mMailer = Swift_Mailer::newInstance($transport);
  $mEmail = Swift_Message::newInstance();
  $mEmail->setSubject($pSubjetc);
  $mEmail->setTo($pTo);
  
  $mEmail->setFrom(array($pEmailGmail => $pFromName));
  $mEmail->setBody($pBody, 'text/html');

  if($mMailer->send($mEmail) == 1){
    return true;
  }else{
    return false;
  }
}

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

function insertarContacto($nombre, $email, $telefono, $mensaje){
  global $conn;
  $query = "INSERT INTO contacto (nombre, correo, telefono, mensaje, fecha) VALUES ('".$nombre."','".$email."','".$telefono."','".$mensaje."',NULL)";
  $resp = mysqli_query($conn, $query);

  if($resp){
    return true;
  }else{
    echo "NO".mysqli_error($conn);
    return false;
  }
}

function notificaciones(){
  global $conn;
  $noti = '';
  $query = "SELECT COUNT(*) FROM contacto WHERE gestion = 0";
  $resp = mysqli_query($conn, $query);

  while($row = mysqli_fetch_row($resp))
  {
    $noti = $row[0];
  }
    return $noti;
}
