<?php
session_start();

$now = time();

if(isset($_SESSION["expire"]) || empty($_SESSION["expire"]) == false){
  if ($now > $_SESSION['expire']) {
    session_unset();
    session_destroy();
    header("location: index.php");
  }
}

//Include para traer la conexion y realizar querys
include 'funciones/funciones.php';

$usuario = "";

if(isset($_SESSION["session_usuario"]) || empty($_SESSION["session_usuario"]) == false){
  $usuario = $_SESSION["session_usuario"];
}

$listarTCN = listarTCN();

function name($paso){
  return str_replace(array("\r\n","\r","\n"), "<br />", $paso);
}

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

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <link href="vendor2/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Sweet Alert2 -->
    <link href="css/animate.css" rel="stylesheet">    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/logout.js"></script>
  </head>
  <body>
  <input id="session" type="hidden" value="<?php echo $usuario;?>">
  <script>
    validaSesion();
  </script>
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
            <li> <a href="index.php"> <i class="icon-screen"> </i>Contactos</a></li>
            <li> <a href="trabajaConNosotros.php"> <i class="icon-screen"> </i>Trabaja con Nosotros</a></li>
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
                <li class="nav-item"><a onclick="logout()" href="#" class="nav-link logout"> <span class="d-none d-sm-inline-block">Cerrar sesión</span><i class="fa fa-sign-out"></i></a></li>
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
            <h1 class="h3 display">Trabaja con Nosotros</h1>
          </header>

          <!-- COMIENZO DE LA TABLA -->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Lista de solicitudes de trabajo</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>N°</th>
                          <th>Nombre</th>
                          <th>E-mail</th>
                          <th>Cargo</th>
                          <th>Teléfono</th>
                          <th>Fecha del registro</th>
                          <th>Mensaje</th>
                          <th>Archivo</th>
                        </tr>
                      </thead>
                      <tbody>
                        <!-- WHILE PHP PARA LISTAR LOS CAMPEONATOS DE LA CONSULTA -->
                        <?php while($row = mysqli_fetch_array($listarTCN)){ ?>
                        <tr>
                          <td><?php echo $row['id']; ?></td>
                          <td><?php echo $row['nombre']; ?></td>
                          <td><?php echo $row['correo']; ?></td>
                          <td><?php echo $row['cargo']; ?></td>
                          <td><?php echo $row['telefono']; ?></td>
                          <td><?php echo $row['fecha']; ?></td>
                          <td>
                            <a href="#" onclick='modal("<?php echo name($row["mensaje"])?>")'>Ver</a>
                          </td>
                          <td>
                            <ul>
                              <li><a href="<?php echo 'descarga.php?id='.$row['archivo1'] ?>">Documento_1</a></li>
                              <li><a href="<?php echo 'descarga.php?id='.$row['archivo2'] ?>">Documento_2</a></li>
                            </ul>
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
