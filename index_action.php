<?php
include 'funciones/funciones.php';

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$area = $_POST["area"];
$message = $_POST["message"];
$numero = "+56 ".$area." ".$phone;
$tipo = $_POST["tipo"];

//lo del seba
/*$recaptcha = $_POST["recaptcha"];



echo "var_dump getCaptcha : ";
var_dump(getCaptcha($recaptcha));*/
//$captcha = $_POST["captcha"];
//captcha v3 validacion 

//var_dump($_POST);

//$secret = "6LffTYkUAAAAANhWyW5KNIMl3nOvv9HIzQOJNC2A";



/*if($_POST){

   
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']);

    var_dump("file get : ".$response);
    
    $Return = json_decode($response);
   

    var_dump("Return method : ".$Return);
}


if(isset($captcha)){
  $captcha_var=$captcha;
}else{
  $captcha_var = false;
}

if(!$captcha_var){
  //Do something with error
  echo 'error, variable de key no esta seteada';
}else{
    $secret = "6LffTYkUAAAAANhWyW5KNIMl3nOvv9HIzQOJNC2A";
    $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$captcha_var."&remoteip=".$_SERVER['REMOTE_ADDR']);
    
    echo 'key-----'.$captcha_var;
    var_dump($response);
    
    /*if($response.success==false){
      echo 'error de verificacion ';
    }else{
      echo 'verificacion correcta : '.$response;
      var_dump($response);
    }
}

echo 'hola jajaj';

exit;*/

if($tipo == "0"){

  if(isset($name) && !empty($name)){

    if (strpos($name, ' ') !== false) {
      
      if(isset($email) && !empty($email)){

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    
          if(isset($phone) && !empty($phone)){
            
            if(is_numeric($phone)) {
              
              if(strlen($phone) == 8){
                
                if(isset($message) && !empty($message)){
                  
                  if(strlen($message) > 0 && strlen($message) <= 2500){
                    
                    echo "0";

                  }else{
                    echo "3";
                  } 
        
                }else{
                  echo "4";
                }

              }else{
                echo "5";
              }
            } else {
              echo "6";
            }
      
          }else{
            echo "7";
          }
    
        }else{
          echo "8";
        }
    
      }else{
        echo "9";
      }

    }else{
      echo "10";
    }

  }else{
    echo "11";
  }

}else if($tipo == "1"){

  if(insertarContacto($name, $email, $numero, $message)){
    
    $to = "felmatseguridad@gmail.com";
    //Correo que se envia al cliente
    enviarCorreo($email, $name, "Hemos recibido tu mensaje", 1, 0);

    //Correo que se envia a felmat notificando el contacto
    if(notificaciones() == 0){
      enviarCorreo($to, $name, "Nuevo mensaje de contacto", 2, 0);
    }else if(notificaciones() > 0){
      enviarCorreo($to, $name, "Nuevo mensaje de contacto", 3, notificaciones());
    }

   // echo "Su mensaje fue enviado correctamente";

    echo "1";
  }else{
    echo "2";
  }
}
?>
