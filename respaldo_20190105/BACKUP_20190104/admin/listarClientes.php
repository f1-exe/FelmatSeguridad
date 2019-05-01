<?php
session_start();

//Include para traer la conexion y realizar querys
include 'funciones/funciones.php';

//CAPTURAMOS EL TIEMPO ACTUAL PARA COMPARARLO CON EL DE LA SESION QUE SE COMENZO EN EL LOGIN
//MUYYY IMPORTANTE, LA SESION EXPIRA CUANDO EL TIEMPO SE CUMPLE , PERO SE VERIFICA CUANDO LA PAGINA SUFRE UN
//REFRESH,SUBMIT O CUANDO SE REALIZA CUALQUIER ACCION EN LA PAGINA QUE REFRESQUE EL NAVEGADOR
$now = time();

if ($now > $_SESSION['expire']) {
  $tipo = 1;
  header("location: logout.php?tipo=$tipo");
}

$tipo = $_SESSION["session_tipo"];
$nombre = $_SESSION["session_nombre"];
$usuario = $_SESSION["session_usuario"];

if(!isset($_SESSION["session_usuario"])){
    $mensaje = "No se ha iniciado sesión";
    header("location: login.php?mensaje=$mensaje");
}

//Validacion de mensaje
if(isset($_GET["mensaje"])){
    $mensaje = $_GET["mensaje"];
}else{
    $mensaje = "";
}

$conexiones = listarClientes();
$datos = obtieneUsuario($usuario);
$datos2 = obtieneUsuario($usuario);

while($row3 = mysqli_fetch_array($datos2)){
  if($row3['cargo'] == 1){
    $cargo = "Supervisor Technical Consultant";
  }elseif ($row3['cargo'] == 2) {
    $cargo = "Technical Consultant";
  }elseif ($row3['cargo'] == 3) {
    $cargo = "Technical Consultant II";
  }
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bootstrap Dashboard by Bootstrapious.com</title>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/tabla.css" rel="stylesheet">
    <link href="vendor2/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center">
            <?php while($row = mysqli_fetch_array($datos)){
                    echo '<img src=img/'.$row['foto'].' alt="person" class="img-fluid rounded-circle">';
                    echo '<h2 class="h5">'.$row['nombre'].'</h2>';
                    echo '<span>'.$cargo.'</span>'; }?>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>

        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Menu</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">
            <li>
              <a href="index.php"> <i class="icon-home"></i>Inicio</a>
            </li>
            <?php if($tipo === '1'){?>
            <li>
              <a href="#admin" aria-expanded="false" data-toggle="collapse"> <i class="icon-form"></i>Menu administrador</a>
              <ul id="admin" class="collapse list-unstyled ">
                <li>
                  <a href="adminUsuario.php"> <i class="icon-home"></i>Administrar Usuario</a>
                </li>
                <li>
                  <a href="adminConexion.php"> <i class="icon-home"></i>Administrar Conexión</a>
                </li>
                <li>
                  <a href="adminCliente.php"> <i class="icon-home"></i>Administrar Clientes</a>
                </li>
              </ul>
            </li>
            <?php } ?>
            <li> <a href="listarConexiones.php"> <i class="icon-screen"> </i>Conexiones</a></li>
            <li> <a href="listarClientes.php"> <i class="icon-screen"> </i>Listado Clientes</a></li>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Extras</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="http://intranet.paperless.cl/intranetprod/" target="blank"> <i class="icon-screen"> </i>Intranet</a></li>
            <li> <a href="https://outlook.office365.com/" target="blank"> <i class="icon-flask"> </i>Correo
                <div class="badge badge-info">Outlook</div></a></li>
            <li> <a href="http://wiki.paperless.cl/Wiki/" target="blank"> <i class="icon-flask"> </i>Wiki</a></li>
            <li> <a href="http://wiki.paperlessla.com/" target="blank"> <i class="icon-picture"> </i>TWiki</a></li>
            <li> <a href="https://www.openair.com/index.pl" target="blank"> <i class="icon-picture"> </i>openAir</a></li>
            <li> <a href="http://otrs.paperlessla.com/otrs/index.pl" target="blank"> <i class="icon-picture"> </i>Otrs</a></li>
          </ul>
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
                  <div class="brand-text d-none d-md-inline-block"><span>Utiles </span><strong class="text-primary"> Producción</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Cerrar sesión</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
            <li class="breadcrumb-item active">Lista de Clientes</li>
          </ul>
        </div>
      </div>
      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Lista de Clientes</h1>
          </header>

          <!-- COMIENZO DE LA TABLA -->
              <div class="card mb-3">
                <div class="card-header">
                  <i class="fa fa-table"></i> Lista de Clientes
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>Maquina</th>
                          <th>RUT</th>
				                  <th>Nombre</th>
				                  <th>Usuario</th>
				                  <th>Ingresar</th>
                        </tr>
                      </thead>
                      <tbody>
											 <?php while($row = mysqli_fetch_array($conexiones)){ ?>
				                <tr>
                          <td><?php echo $row['maquina']; ?></td>
                          <td><?php echo $row['rut']; ?></td>
                          <td><?php echo $row['nombre']; ?></td>
													<td><?php echo $row['usuario']; ?></td>
                          <td>
                          <form autocomplete="off" id="frmLogin" method="post"  action="<?php echo $row['url']; ?>" onsubmit="return util_cleanXSS(this) && checkLogin();" target="_blank"> 
                            <input name="txtRut" id="txtRutCompany" type="hidden" size="15" max="10" value="<?php echo $row['rut']; ?>">
                            <input name="txtLogin" id="txtLogin" type="hidden" size="15" max="10" value="<?php echo $row['usuario']; ?>">
                            <input name="txtPasswd" txt="Passwd" type="hidden" size="15" max="20" value="<?php echo $row['clave']; ?>">
                            <input name="imageField" type="image" src="img/login.png" width="7%" height="7%"/></a>
                          </form>
                          </td>
				                </tr>
				                <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer small text-muted">Esta tabla contiene los datos de los clientes</div>
              </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
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
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js2/sb-admin-datatables.min.js"></script>
    <!-- SCRIPTS PARA LA TABLA -->
    <!-- Page level plugin JavaScript-->
    <script src="vendor2/datatables/jquery.dataTables.js"></script>
    <script src="vendor2/datatables/dataTables.bootstrap4.js"></script>
  </body>
</html>
