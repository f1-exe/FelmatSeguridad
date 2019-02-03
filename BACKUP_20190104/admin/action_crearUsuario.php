<?php
include 'funciones/funciones.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$tipo_usuario = $_POST['tipo_usuario'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$cargo = $_POST['cargo'];

if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0){

	$path = "img/".basename($_FILES['foto']['name']);
	$foto = $_FILES['foto']['name'];
	if($pass1 === $pass2){
		if(move_uploaded_file($_FILES['foto']['tmp_name'], $path)){

			if(registrarUsuario($nombre, $usuario, $pass1, $tipo_usuario, $foto, $cargo)){
				$mensaje = "Usuario creado exitosamente.";
				header("location: adminUsuario.php?mensaje=$mensaje");
			}else{
				$mensaje = "Error al añadir Usuario.";
				header("location: crearJugador.php?mensaje=$mensaje");
			}

		}else{

			$mensaje = "Error al subir imagen del Usuario.";
			header("location: adminUsuario.php?mensaje=$mensaje");
		}
	}else{
		$mensaje = "Error las contraseñas son distintas.";
		header("location: adminUsuario.php?mensaje=$mensaje");
	}


}
else
{
	if(registrarUsuario($nombre, $usuario, $pass1, $tipo_usuario, NULL, $cargo)){
		$mensaje = "Usuario creado exitosamente.";
		header("location: adminUsuario.php?mensaje=$mensaje");
	}else{
		$mensaje = "No se selecciono imagen.";
		header("location: crearUsuario.php?mensaje=$mensaje");
	}

}

?>
