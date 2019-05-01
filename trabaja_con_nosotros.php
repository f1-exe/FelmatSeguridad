<?php 

  //$site_key ='6LfkOokUAAAAAJ5PNt_LPERD2NlMeJ8XxsudtGMZ';

?>
<!DOCTYPE html>
<html lang="en">

  <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
     <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132472756-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-132472756-1');
    </script>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- meta tag para descripcion -->
    <meta name="description" content="Trabaja con nosotros en Felmat Seguridad, sé parte de nuestro equipo, llenando el formulario de postulación">
    
    <!-- meta tag para keywords -->
    <meta name="keywords" content="Felmat, Felmat Seguridad, Trabaja con nosotros, Trabajar, Empleo, Guardia de seguridad,trabajos en seguridad privada, trabajo de guardia de seguridad, seguridad privada, empleos de guardia de seguridad, OS10, envia tu curriculum">  

    <meta name="author" content="Felmat Seguridad">

    <title>Felmat Seguridad | Trabaja con nosotros</title>
    
    <link href="https://www.felmatseguridad.cl/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="icon" href="https://www.felmatseguridad.cl/img/favicon.ico" type="image/x-icon" >

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Animacion SweetAlert -->
    <link href="css/animate.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <link href="css/creative.min.css" rel="stylesheet">
    <link href="css/felmat.css" rel="stylesheet">
    <!--<link rel="shortcut icon" href="img/felmat-ico.ico"/>-->
<!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Ultima llave -->
    <script src='https://www.google.com/recaptcha/api.js?render=6Le3VIkUAAAAAFikY_70XjXXwJs41vUuTfowe_-3'></script>
    <!-- Ultima llave -->
    
  </head>

  <body id="page-top">
	<div class="new-header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 m-dis">
				
				</div>
				<div class="col-md-4 col-sm-6 col-6 logo">
					<a href="https://www.felmatseguridad.cl">
					 <img src="https://www.felmatseguridad.cl/img/felmat-logo.png" alt="">	
					</a>
				</div>
				<div class="col-md-4 col-sm-6 col-6 home-btn">
					<a href="https://www.felmatseguridad.cl"><i class="fas fa-chevron-circle-left"></i> Volver al Inicio</a>
				</div>    
			</div>
		</div>
	</div>
	
	<div class="slider-container">
		 <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="img/Trabaja_con_nosotros_banner.jpg" alt="Felmat Seguridad Trabaja con nosotros" style="width:100%;">
                <div class="carousel-caption">
                  <h3>Trabaja con nosotros!</h3>
                  <p>Te gustaría formar parte de la mejor empresa emergente de seguridad privada?. Postula aquí con nosotros</p>
                  <p><strong>Felmat Seguridad</strong></p>
                </div>
              </div>
            </div>
     </div>

	</div>


	
	<div class="form-container">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<form method="POST" class="appointment-form" id="appointment-form">
                <h2>Formulario de Postulación</h2>
                <div class="form-group-1">
                    <input type="text" name="name" id="name" placeholder="Nombre y Apellido"/>
                    <input type="email" name="email" id="email" placeholder="Correo Electrónico"/>
                    <input type="number" name="number" id="number" min="1" placeholder="Número de Teléfono"/>
                    <div class="select-list">
                        <select name="course_type" id="course_type">
                            <option value="0">Cargo al que Postula</option>
                            <option value="Guardia">Guardia</option>
                            <option value="Supervisor">Supervisor</option>
                        </select>
                    </div>
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>¿Por qué deberías trabajar con nosotros?</label><br><br>
                    <textarea id="texto" name="texto" rows="10"></textarea>
                </div>
            
				</div>
				<div class="col-md-6">
				    <div class="upload">
                          <div class="upload-files">
                            <header>
                              <p>
                                
                                <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>
                                <span class="up"></span>Subir <span class="load">Archivos</span>
                              </p>
                            </header>
                            <div class="body" id="drop">
                              <i class="far fa-file-alt pointer-none" aria-hidden="true"></i>
                              <p class="pointer-none">
                                <b>Arrastra y suelta</b> tus archivos aquí <br />
                                o <a href="" id="triggerFile"><b>Examina</b></a> Para comenzar la carga de archivos
                              </p>
                              <p class="pointer-none">
                                Aquí puedes cargar tu curriculum <br> y tu curso OS10
                              </p>
                              <input id="archivos" name="archivos" type="file" multiple="multiple" accept="application/pdf, image/*, .doc, .docx"/>
                            </div>
                            <footer>
                              <div class="divider">
                                <span><AR>ARCHIVOS</AR></span>
                              </div>
                              <div class="list-files"><!--   template   --></div>
                              <a href="javascript:void(0);" class="importar">VOLVER A CARGAR ARCHIVOS</a>
                            </footer>
                          </div>
                        </div>
				</div>
				<div class="col-md-12">
				    <div class="form-submit">
              <button name="enviar" id="enviar" class="submit">Enviar Postulación</button>
            </div>
				</div>
          <input type="hidden" id="g-recaptcha-response1" name="g-recaptcha-response1"/>
          <input type="hidden" name="action" value="validate_captcha">  
        </form>
			</div>
		</div>
	</div>
	
	 <!--footer starts from here-->
<footer class="footer">
  <div class="container bottom_border">
    <div class="row">
      <div class=" col-sm-4 col-md col-sm-4  col-12 col">
        <h5 class="headin5_amrc col_white_amrc pt2">Acerca de nosotros</h5>
        <!--headin5_amrc-->
        <p class="mb10">Si hablamos de seguridad, simplemente somos lo que estás buscando, una empresa joven, dinámica y accesible. Contáctanos <br> Felmat Seguridad, tu tranquilidad en nuestras manos.</p>
        <p><i class="fa fa-location-arrow"></i> <a class="text-white" href="https://goo.gl/maps/CNEaDLdAWo32" target="_blank"> Domingo caneleo trincado n° 925, Buin</a> </p>
        <p><i class="fa fa-phone"></i>  <a style="color: white" href="tel:+56934071924"> +56 9 3407 1924</a>  </p>
        <p><i class="fa fa fa-envelope"></i> <a style="color: white" href="mailto:contacto@felmatseguridad.cl" target="_top"> contacto@felmatseguridad.cl</a>  </p>
      </div>

    <!-- google map iframe -->
      <div class=" col-sm-12 col-md  col-6 col">
        <div class="container-fluid">
              <div class="row">
            <iframe class="well well-sm col-xs-8" width="707" height="282" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1581.7215011085482!2d-70.75156029108602!3d-33.738880634756505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x96632113e5eda2ad%3A0x320c8f80cb2dbc91!2sBarrio+Los+Ciruelos%2C+Buin%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses-419!2scl!4v1547523785585"></iframe>
          </div>
        </div>
      </div>
    <!-- google map iframe -->
    </div>
  </div>

  <hr>

  <div class="container">
    
    
  
  <!--foote_bottom_ul_amrc ends here-->
    <p class="text-center">Copyright @<?php echo date("Y"); ?> | Desarrollado por <a href="tel:+56975144189">&lt;F1.EXE/></a></p>

    <ul class="social_footer_ul">
      <li><a target="_blank" href="https://goo.gl/BCKt6g"><i class="fab fa-facebook-f"></i></a></li>
      <li><a target="_blank" href="https://goo.gl/gcF7SY"><i class="fab fa-linkedin"></i></a></li>
      <li><a target="_blank" href="https://goo.gl/x68BTg"><i class="fab fa-instagram"></i></a></li>
      <li><a target="_blank" href="https://www.youtube.com/channel/UCsnd7b1w-EcC3ArIHN9z87Q"><i class="fab fa-youtube"></i></a></li>
    </ul>
  <!--social_footer_ul ends here-->
  </div>

</footer>

<!-- page top -->
<a href="#0" class="cd-top js-cd-top">Top</a>
    
    <!-- barra negra luego del footer -->
    <div class="copyright py-4 text-center bg-dark text-white">
      <div class="container">
      </div>
    </div>
	
<!-- JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/index.js"></script>
    <script src="js/main.js"></script>
    <script src="js/tcn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    <!--Ultimo captcha script -->
     <script>
      grecaptcha.ready(function() {
        grecaptcha.execute('6Le3VIkUAAAAAFikY_70XjXXwJs41vUuTfowe_-3', {action: 'homepage'})
        .then(function(token) {
          document.getElementById('g-recaptcha-response1').value=token;
        });
      });
    </script>
    <!--Ultimo captcha script -->

  </body>
  
  </html>