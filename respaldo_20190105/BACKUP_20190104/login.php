<?php
    include 'conexion/BDconexion.php';

    if(isset($_GET["mensaje"])){
        $mensaje = $_GET["mensaje"];
    }else{
        $mensaje = "";
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
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Utiles </span><strong class="text-primary"> Producción</strong></div>
            <b><div id="error" style="color: red"><?php echo $mensaje; ?></div></br></b>
            <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>-->
            <form name="form_login" class="text-left form-validate" method="POST" action="action_login.php">
              <div class="form-group-material">
                <input id="loginUsername" type="text" name="loginUsername" required data-msg="Please enter your username" class="input-material">
                <label for="login-username" class="label-material">Nombre de Usuario</label>
              </div>
              <div class="form-group-material">
                <input id="loginPassword" type="password" name="loginPassword" required data-msg="Please enter your password" class="input-material">
                <label for="login-password" class="label-material">Contraseña</label>
              </div>
              <button class="btn btn-primary btn-block"class="btn btn-primary btn-block" <input type="submit" name="btn_ingresar" id="btn_ingresar" value="Ingresar"/>Ingresar</button>
              <!--<div class="form-group text-center"><a id="login" href="action_login.php" class="btn btn-primary">Ingresar</a>-->
                <!-- This should be submit button but I replaced it with <a> for demo purposes-->
              </div>
            </form><!--<a href="#" class="forgot-pass">Forgot Password?</a><small>Do not have an account? </small><a href="register.html" class="signup">Signup</a>-->
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
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
  </body>
</html>
