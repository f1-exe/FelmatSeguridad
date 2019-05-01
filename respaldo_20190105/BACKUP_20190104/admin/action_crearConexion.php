<?php
include 'funciones/funciones.php';

$nombre = $_POST['nombre'];
$ip_plat = $_POST['ip_plat'];
$usu_plat = $_POST['usu_plat'];
$pass_plat = $_POST['pass_plat'];
$fqdn = $_POST['fqdn'];
$ip_bd = $_POST['ip_bd'];
$puerto_bd = $_POST['puerto_bd'];
$nombre_bd = $_POST['nombre_bd'];
$usu_bd = $_POST['usu_bd'];
$pass_bd = $_POST['pass_bd'];
$tipo = $_POST['tipo'];
$pais = $_POST['pais'];
$ambiente = $_POST['ambiente'];
$producto = $_POST['producto'];

if(isset($nombre) && !empty($nombre)){

	if(isset($ip_plat) && !empty($ip_plat)){

		if(isset($usu_plat) && !empty($usu_plat)){

			if(isset($pass_plat) && !empty($pass_plat)){

				if(isset($fqdn) && !empty($fqdn)){

					if(isset($ip_bd) && !empty($ip_bd)){

						if(isset($puerto_bd) && !empty($puerto_bd)){

							if(isset($nombre_bd) && !empty($nombre_bd)){

								if(isset($usu_bd) && !empty($usu_bd)){

									if(isset($pass_bd) && !empty($pass_bd)){

										if(isset($tipo) && !empty($tipo)){

											if(isset($pais) && !empty($pais)){

												if(isset($ambiente) && !empty($ambiente)){

													if(isset($producto) && !empty($producto)){

														if(registrarConexion($nombre, $ip_plat, $usu_plat, $pass_plat, $fqdn, $ip_plat, $puerto_bd, $nombre_bd, $usu_bd, $pass_bd, $tipo, $pais, $ambiente, $producto)){
															$mensaje = "Conexion añadida exitosamente.";
															header("location: adminConexion.php?mensaje=$mensaje");
														}else{
															$mensaje = "Error al añadir la Conexión.";
															header("location: crearConexion.php?mensaje=$mensaje");
														}

													}
													else
													{
														$mensaje = "Debe seleccionar un producto o este se encuentra vacio.";
														header("location: adminConexion.php?mensaje=$mensaje");
													}

												}
												else
												{
													$mensaje = "Debe seleccionar un ambiente o este se encuentra vacio.";
													header("location: adminConexion.php?mensaje=$mensaje");
												}

											}
											else
											{
												$mensaje = "Debe seleccionar un Pais o este se encuentra vacio.";
												header("location: adminConexion.php?mensaje=$mensaje");
											}

										}
										else
										{
											$mensaje = "Debe seleccionar un tipo o esta se encuentra vacio.";
											header("location: adminConexion.php?mensaje=$mensaje");
										}

									}
									else
									{
										$mensaje = "Clave de la Base de Dato no existe o se encuentra vacio.";
										header("location: adminConexion.php?mensaje=$mensaje");
									}

								}
								else
								{
									$mensaje = "Usuario de la Base de Dato no existe o se encuentra vacio.";
									header("location: adminConexion.php?mensaje=$mensaje");
								}

							}
							else
							{
								$mensaje = "Nombre de la Base de Dato no existe o se encuentra vacio.";
								header("location: adminConexion.php?mensaje=$mensaje");
							}

						}
						else
						{
							$mensaje = "Puerto de la Base de Dato no existe o se encuentra vacio.";
							header("location: adminConexion.php?mensaje=$mensaje");
						}

					}
					else
					{
						$mensaje = "IP de la Base de Dato no existe o se encuentra vacio.";
						header("location: adminConexion.php?mensaje=$mensaje");
					}

				}
				else
				{
					$mensaje = "FQDN de la Plataforma no existe o se encuentra vacio.";
					header("location: adminConexion.php?mensaje=$mensaje");
				}

			}
			else
			{
				$mensaje = "Clave de Plataforma no existe o se encuentra vacio.";
				header("location: adminConexion.php?mensaje=$mensaje");
			}

		}
		else
		{
			$mensaje = "Usuario de Plataforma no existe o se encuentra vacio.";
			header("location: adminConexion.php?mensaje=$mensaje");
		}

	}
	else
	{
		$mensaje = "IP de Plataforma no existe o se encuentra vacio.";
		header("location: adminConexion.php?mensaje=$mensaje");
	}

}
else
{
	$mensaje = "Nombre no existe o se encuentra vacio.";
	header("location: adminConexion.php?mensaje=$mensaje");
}

?>
