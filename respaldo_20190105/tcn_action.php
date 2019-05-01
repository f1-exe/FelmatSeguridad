<?php
include 'funciones/funciones.php';

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$cargo = $_POST["cargo"];
$mensaje = $_POST["mensaje"];
$recaptcha = $_POST["recaptcha"];
$archivo1 = $_POST["name1"];
$archivo2 = $_POST["name2"];

if(isset($nombre) && !empty($nombre)){

    if (strpos($nombre, ' ') !== false) {

        if(isset($correo) && !empty($correo)){

            if(filter_var($correo, FILTER_VALIDATE_EMAIL)){

                if(isset($telefono) && !empty($telefono)){

                    if(is_numeric($telefono)) {

                        if(strlen($telefono) == 9){

                            if($cargo == "Guardia" || $cargo == "Supervisor"){

                                if(isset($mensaje) && !empty($mensaje)){

                                    if(subirArchivos()){

                                        $phone = "+56 ";
                                        $phone .= substr($telefono, 0, 1)." ";
                                        $phone .= substr($telefono, 1, 4)." ";
                                        $phone .= substr($telefono, 5, 4);

                                        $x = getCaptcha($recaptcha);

                                        if($x->score > 0.5){

                                            if(registrarTCN($nombre, $correo, $phone, $mensaje, $archivo1, $archivo2, $cargo)){
                                                
                                                echo "Se ha completado la postulación correctamente";
                                            }else{
                                                echo "Error al insertar en la Base de Datos";
                                            }

                                        }else{
                                            echo "Error de verificación de reCapatcha, refresque el navegador e intentelo nuevamente";
                                        }

                                    }else{
                                        echo "Error al subir archivos";
                                    }

                                }else{
                                    echo "El campo ¿Por qué deberías trabajar con nosotros? es obligatorio";
                                }

                            }else{
                                echo "Debe seleccionar un cargo al que postula";
                            }

                        }else{
                            echo "El teléfono debe tener un largo de 8 dígitos";
                        }

                    }else{
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

function subirArchivos(){
    $ruta = './archivos/trabajaConNosotros/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
    $respuesta = false;
   
    foreach ($_FILES as $key) //Iteramos el arreglo de archivos
    {
        if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Ccontinuamos 
            {
                $NombreOriginal = $key['name'];//Obtenemos el nombre original del archivo
                $temporal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
                $Destino = $ruta.$NombreOriginal;	//Creamos una ruta de destino con la variable ruta y el nombre original del archivo	
                
                move_uploaded_file($temporal, $Destino); //Movemos el archivo temporal a la ruta especificada

                
            }
    
        if ($key['error']=='') //Si no existio ningun error, retornamos un mensaje por cada archivo subido
            {
                $respuesta = true;
            }
        if ($key['error']!='')//Si existio algún error retornamos un el error por cada archivo.
            {
                $respuesta = false; 
            }
    }

    return $respuesta;
}
?>