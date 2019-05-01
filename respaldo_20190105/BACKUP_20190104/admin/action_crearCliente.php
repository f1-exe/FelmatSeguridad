<?php
include 'funciones/funciones.php';

$coid = $_POST['coid'];
$rut = $_POST['rut'];
$nombre = $_POST['nombre'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
$maquina = $_POST['maquina'];
$url = $_POST['url'];

if(isset($coid) && !empty($coid)){

	if(isset($rut) && !empty($rut)){

		if(isset($nombre) && !empty($nombre)){

			if(isset($usuario) && !empty($usuario)){

				if(isset($clave) && !empty($clave)){

					if(isset($maquina) && !empty($maquina)){

						if(isset($url) && !empty($url)){

							
						}
						else
						{
							$mensaje = "URL no existe o se encuentra vacio.";
							header("location: adminConexion.php?mensaje=$mensaje");
						}

					}
					else
					{
						$mensaje = "Maquina no existe o se encuentra vacio.";
						header("location: adminConexion.php?mensaje=$mensaje");
					}

				}
				else
				{
					$mensaje = "Clave no existe o se encuentra vacio.";
					header("location: adminConexion.php?mensaje=$mensaje");
				}

			}
			else
			{
				$mensaje = "Usuario no existe o se encuentra vacio.";
				header("location: adminConexion.php?mensaje=$mensaje");
			}

		}
		else
		{
			$mensaje = "Nombre no existe o se encuentra vacio.";
			header("location: adminConexion.php?mensaje=$mensaje");
		}

	}
	else
	{
		$mensaje = "RUT no existe o se encuentra vacio.";
		header("location: adminConexion.php?mensaje=$mensaje");
	}

}
else
{
	$mensaje = "COID no existe o se encuentra vacio.";
	header("location: adminConexion.php?mensaje=$mensaje");
}

?>
