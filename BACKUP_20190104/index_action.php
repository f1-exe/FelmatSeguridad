<?php
include 'funciones/funciones.php';

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$message = $_POST["message"];


if(isset($name) && !empty($name)){

  if (strpos($name, ' ') !== false) {
    
    if(isset($email) && !empty($email)){

      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
  
        if(isset($phone) && !empty($phone)){
          
          if(is_numeric($phone)) {
            
            if(strlen($phone) == 8){
              
              if(isset($message) && !empty($message)){
                
                if(strlen($message) > 0 && strlen($message) <= 2500){
                  
                  if(insertarContacto($name, $email, $phone, $message)){

                    echo "Su mensaje fue enviado correctamente";
                    
                    //Correo que se envia al cliente
                    enviarCorreo($email, $name, "Hemos recibido tu mensaje", 1, 0);

                    //Correo que se envia a felmat notificando el contacto
                    if(notificaciones() == 0){
                      enviarCorreo('felmatseguridad@gmail.com', $name, "Nuevo mensaje de contacto", 2, 0);
                    }else if(notificaciones() > 0){
                      enviarCorreo('felmatseguridad@gmail.com', $name, "Nuevo mensaje de contacto", 3, notificaciones());
                    }

                   // echo "Su mensaje fue enviado correctamente";
                  }else{
                    echo "Error al enviar su mensaje";
                  }

                }else{
                  echo "El mensaje puede contener hasta 2500 carácteres";
                } 
      
              }else{
                echo "El campo mensaje es obligatorio";
              }

            }else{
              echo "El teléfono debe tener un largo de 8 dígitos";
            }
          } else {
            echo "Debe ingresar un valor numérico como teléfono";
          }
    
        }else{
          echo "El campo teléfono es obligatorio";
        }
  
      }else{
        echo "Ingrese un E-Mail Válido";
      }
  
    }else{
      echo "El campo E-Mail es obligatorio";
    }

  }else{
    echo "Debe ingresar nombre y apellido separado por un espacio";
  }

}else{
  echo "El campo nombre es obligatorio";
}
?>
