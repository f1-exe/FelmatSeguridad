<?php
include 'funciones/funciones.php';

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$area = $_POST["area"];
$message = $_POST["message"];
$numero = "+56 ".$area." ".$phone;
$tipo = $_POST["tipo"];
$recaptcha = $_POST["recaptcha"];


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

  $x = getCaptcha($recaptcha);

    if($x->score > 0.5){
     
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
    

    }else{
        echo '12';
    }
    echo "1";
  }else{
    echo "2";
  }
}
?>
