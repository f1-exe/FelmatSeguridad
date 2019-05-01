<?php
session_start();

//Include para traer la conexion y realizar querys
include 'funciones/funciones.php';

$usuario = $_SESSION["session_usuario"];

if(!isset($_SESSION["session_usuario"])){
    $mensaje = "No se ha iniciado sesión";
    header("location: login.php?mensaje=$mensaje");
}

$listaContactos = listarContacto();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel de control Felmat Seguridad</title>
    <link href="https://www.felmatseguridad.cl/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="icon" href="https://www.felmatseguridad.cl/img/favicon.ico" type="image/x-icon" >
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link href="vendor2/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <script>
       .clickable {
           cursor:pointer;
       }
    </script>
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <img src="https://www.felmatseguridad.cl/admin/img/images.png" alt="logo felmat" class="img-fluid rounded-circle">
            <h2 class="h5"><?php echo $usuario; ?></h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>

        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">      
            <li> <a href="#"> <i class="icon-screen"> </i>Contactos</a></li>
        </div>      
      </div>
    </nav>
    <div class="page">


      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Panel de</span><strong class="text-primary"> Control</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Cerrar sesión</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!--seccion del contenido-->
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Lista de contactos registrados</h1>
          </header>

          <!-- COMIENZO DE LA TABLA -->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Lista de Contactos</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>N°</th>
		                  <th>Nombre</th>
		                  <th>Teléfono</th>
		                  <th>E-mail</th>
                          <th>Fecha del registro</th>
                          <th>Gestionado</th>
                          <th>Gestionar</th>
                          <th>Fecha Gestión</th>
                          <th>Mensaje</th>
                        </tr>
                      </thead>
                      <tbody>
                       <!-- WHILE PHP PARA LISTAR LOS CAMPEONATOS DE LA CONSULTA -->
					  <?php while($row = mysqli_fetch_array($listaContactos)){ ?>
				        <tr>
						  <td><?php echo $row['id']; ?></td>
						  <td><?php echo $row['nombre']; ?></td>
                          <td><?php echo $row['telefono']; ?></td>
                          <td><?php echo $row['correo']; ?></td>
                          <td><?php echo $row['fecha']; ?></td>
                          <td>
                            <?php if($row['gestion'] == 0){
	                            echo '<center><img src="https://www.felmatseguridad.cl/admin/img/red-cross.png" width="40" height="40"></center>';
	                      	}elseif($row['gestion'] == 1) {
							    echo '<center><img src="https://www.felmatseguridad.cl/admin/img/green-check.png" width="40" height="40"></center>';
						 	}?>
                          </td>
                          <td>
                          	 <?php 
                                 if($row['gestion'] == 0){
                                 echo '<a href="#" onclick="gestionarContacto(1,';
                             echo "'" . $row["id"] . "'";
                             echo')";>Cambiar a gestionado</a>';
                                 }else{
                                   echo '<a href="#" onclick="gestionarContacto(0,';
                             echo "'" . $row["id"] . "'";
                             echo')";>Cambiar a no gestionado</a>';
                                 }
                              ?>
                          </td>
                          
                          <td><?php echo $row['fecha_gestion']; ?></td>
                          <td>
                            <a href="#" data-toggle="modal" class="clickable" data-target="#myModal_<?php echo $row['id'];?>">Ver</a>
                               <!--<button data-toggle="modal" data-target="#myModal_<?php echo $row['id'];?>">ver</button>-->
                               <!-- Modal -->
                              <div class="modal hide" id="myModal_<?php echo $row['id'];?>" role="dialog">
                                <div class="modal-dialog">
                                  
                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
                                      <h4 class="modal-title">Mensaje del contacto</h4>
                                    </div>
                                    <div class="modal-body">
                                      <p>
                                          <?php echo $row['mensaje'];?>
                                      </p>
                                      
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                            <!-- fin modal-->
                          </td>
                        </tr>

				                <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Esta tabla contiene los datos de los contactos registrados en la página</div>
              </div>
        </div>
      </section>
      <!--seccion del contenido-->

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Felmat Seguridad &copy; <?php echo date("Y"); ?></p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <!--<script src="vendor/chart.js/Chart.min.js"></script>-->
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!--<script src="js/charts-home.js"></script>-->
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script src="js2/sb-admin-datatables.min.js"></script>
    <!-- SCRIPTS PARA LA TABLA -->
    <!-- Page level plugin JavaScript-->
    <script src="vendor2/datatables/jquery.dataTables.js"></script>
    <script src="vendor2/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/gestionarContacto.js"></script>
  </body>
</html>
