<?php
//Include para traer las funciones
include 'funciones/funciones.php';

$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$tipo_usuario = $_POST['tipo_usuario'];
$id_usuario = $_POST['id_usuario'];
$cargo = $_POST['cargo'];

if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0){

	$path = "img/".basename($_FILES['foto']['name']);
	$foto = $_FILES['foto']['name'];
	if(move_uploaded_file($_FILES['foto']['tmp_name'], $path)){

		if(editarUsuario($nombre, $usuario, $tipo_usuario, $foto, $id_usuario, $cargo)){
			$mensaje = "Usuario editado exitosamente.";
			header("location: adminUsuario.php?mensaje=$mensaje");
		}else{
			$mensaje = "Error al editar Usuario.";
			header("location: adminUsuario.php?mensaje=$mensaje");
		}

	}else{

		$mensaje = "Error al subir imagen del Usuario.";
		header("location: editarUsuario.php?mensaje=$mensaje");
	}

}
else
{
	if(editarUsuarioSinLogo($nombre, $usuario, $tipo_usuario, $id_usuario, $cargo)){
		$mensaje = "Usuario editado exitsamente.";
		header("location: adminUsuario.php?mensaje=$mensaje");
	}else{
		$mensaje = "No se selecciono imagen.";
		header("location: adminUsuario.php?mensaje=$mensaje");
	}

}

?>
