<?php 

  //$site_key ='6LfkOokUAAAAAJ5PNt_LPERD2NlMeJ8XxsudtGMZ';

?>
<!DOCTYPE html>
<html lang="en">

  <head>
     <!-- Global site tag (gtag.js) - Google Analytics -->
    

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- meta tag para descripcion -->
    <meta name="description" content="Servicios Felmat Seguridad, conoce nuestros servicios en detalle y cotiza con nosotros.">
    
    <!-- meta tag para keywords -->
    <meta name="keywords" content="Felmat, Felmat Seguridad, Servicios, Guardias de seguridad, Asesorias, Prevencion de riesgo, Dotación de personal, Servicios de aseo, Tecnologia de seguridad, Guardias de seguridad, OS10, Servicios Felmat Seguridad, Cámaras de seguridad">  

    <meta name="author" content="Felmat Seguridad">

    <title>Felmat Seguridad | Nuestros Servicios</title>
    
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
    
    <!-- Ultima llave -->


    <style>


/* *{
  margin: 0;
  padding: 0;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
} */

.h1-servicios{
  font-size: 2.5rem;
  font-weight: normal;
  color: #444;
  text-align: center;
  margin: 2rem 0;
}

.wrapper{
  width: 90%;
  margin: 0 auto;
  max-width: 80rem;
}

.cols{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.col{
  width: calc(25% - 2rem);
  margin: 1rem;
  cursor: pointer;
}

.container{
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
	-webkit-perspective: 1000px;
	        perspective: 1000px;
}

.front,
.back{
  background-size: cover;
	background-position: center;
	-webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	-o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
	-webkit-backface-visibility: hidden;
	        backface-visibility: hidden;
	text-align: center;
	min-height: 280px;
	height: auto;
	border-radius: 10px;
	color: #fff;
	font-size: 1.5rem;
}

.back{
  background: #cedce7;
  background: -webkit-linear-gradient(45deg,  #cedce7 0%,#1f4e79  100%);
  background: -o-linear-gradient(45deg,  #cedce7 0%,#1f4e79  100%);
  background: linear-gradient(45deg,  #cedce7 0%,#1f4e79  100%);
}

.front:after{
	position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    width: 100%;
    height: 100%;
    content: '';
    display: block;
    opacity: .6;
    background-color: #000;
    -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
    border-radius: 10px;
}
.container:hover .front,
.container:hover .back{
    -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
    transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
}

.back{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
}

.inner{
    -webkit-transform: translateY(-50%) translateZ(60px) scale(0.94);
            transform: translateY(-50%) translateZ(60px) scale(0.94);
    top: 50%;
    position: absolute;
    left: 0;
    width: 100%;
    padding: 2rem;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    outline: 1px solid transparent;
    -webkit-perspective: inherit;
            perspective: inherit;
    z-index: 2;
}

.container .back{
    -webkit-transform: rotateY(180deg);
            transform: rotateY(180deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container .front{
    -webkit-transform: rotateY(0deg);
            transform: rotateY(0deg);
    -webkit-transform-style: preserve-3d;
            transform-style: preserve-3d;
}

.container:hover .back{
  -webkit-transform: rotateY(0deg);
          transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.container:hover .front{
  -webkit-transform: rotateY(-180deg);
          transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
          transform-style: preserve-3d;
}

.front .inner p{
  font-size: 2rem;
  margin-bottom: 2rem;
  position: relative;
}

.front .inner p:after{
  content: '';
  width: 4rem;
  height: 2px;
  position: absolute;
  background: #C6D4DF;
  display: block;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -.75rem;
}

.front .inner span{
  color: rgba(255,255,255,0.7);
  font-family: 'Montserrat';
  font-weight: 300;
}

@media screen and (max-width: 64rem){
  .col{
    width: calc(33.333333% - 2rem);
  }
}

@media screen and (max-width: 48rem){
  .col{
    width: calc(50% - 2rem);
  }
}

@media screen and (max-width: 32rem){
  .col{
    width: 100%;
    margin: 0 0 2rem 0;
  }
}


    #seguridad{
      display: none;
    }

    #asesorias{
      display: none;
    }

    #aseo_industrial{
      display: none;
    }

    #soluciones_tecnologicas{
      display: none;
    }
    </style>
    
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
	
      <div class="wrapper">
          <h1 class="h1-servicios">Nuestros Servicios</h1>
          <div class="cols">
              <div class="col-md-3 mt-3" ontouchstart="this.classList.toggle('hover');">
                <div class="container">
                  <div class="front" style="background-image: url(img/lock.JPG)">
                    <div class="inner">
                      <p>Seguridad</p>
                      <span>Personal</span>
                    </div>
                  </div>
                  <div class="back">
                    <div class="inner">
                      <p>Dotación de GGSS, Instalación y control de CCTV.</p>
                      <a href="servicios.php#contenedor"><button id="btn_seguridad" class="btn btn-primary">Conoce más</button></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-3 mt-3" ontouchstart="this.classList.toggle('hover');">
                  <div class="container">
                    <div class="front" style="background-image: url(img/lock.JPG)">
                      <div class="inner">
                        <p>Asesorias</p>
                        <span>Capacitación</span>
                      </div>
                    </div>
                    <div class="back">
                      <div class="inner">
                        <p>Consultoría en seguridad y Asesoría en prevención de riesgo.</p>
                        <a href="servicios.php#contenedor"><button id="btn_asesorias" class="btn btn-primary">Conoce más</button></a>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-3 mt-3" ontouchstart="this.classList.toggle('hover');">
                  <div class="container">
                    <div class="front" style="background-image: url(img/lock.JPG)">
                      <div class="inner">
                        <p>Aseo Industrial</p>
                        <span>Servicios</span>
                      </div>
                    </div>
                    <div class="back">
                      <div class="inner">
                        <p>Aseo industrial, dotación de personal.</p>
                        <a href="servicios.php#contenedor"><button id="btn_aseo" class="btn btn-primary">Conocer más</button></a>
                      </div>
                    </div>
                  </div>
              </div>

              <div class="col-md-3 mt-3" ontouchstart="this.classList.toggle('hover');">
                  <div class="container">
                    <div class="front" style="background-image: url(img/lock.JPG)">
                      <div class="inner">
                        <p>Soluciones Tecnológicas</p>
                        <span>Tecnología</span>
                      </div>
                    </div>
                    <div class="back">
                      <div class="inner">
                        <p>Cámaras de seguridad y tecnología de vanguardia.</p>
                        <a href="servicios.php#contenedor"><button id="btn_soluciones"  class="btn btn-primary">Conocer más</button></a>
                      </div>
                    </div>
                  </div>
              </div>

              <div id="contenedor">

                  <div class="container my-3" id="seguridad">
                      <h1 class="h1-servicios">Seguridad</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, odio nec volutpat malesuada, 
                          orci massa sodales ligula, at ornare odio metus eget leo. Etiam eleifend commodo urna, ac convallis enim consectetur at. 
                          Sed vitae fringilla nisi. Maecenas sit amet vulputate neque. Duis vitae volutpat justo. Quisque eu scelerisque ligula. 
                          Phasellus ultrices gravida massa eget vulputate. Sed nulla justo, congue vitae elementum eu, tristique in lectus. Phasellus non molestie enim. In porttitor lacinia felis vel viverra. 
                          Etiam a massa diam. In ac placerat quam, id venenatis tortor. Nunc rhoncus accumsan mattis. 
                          Suspendisse eu commodo enim, ut sagittis leo.
                      </p>
        
                      <section>
                          <div class="container-fluid">	 
                            <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 1" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad OHL" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat seguridad Alborada" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Grupo Claro Vicuña" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 4" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Dragados" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 5" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Achs" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 6" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad DVC" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 7" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Vinci" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 8" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Municipalidad de valdivia" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                          </div>
                    </section>

                  </div>  
                  
                  <div class="container my-3" id="asesorias">
                      <h1 class="h1-servicios">Asesorias</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, odio nec volutpat malesuada, 
                          orci massa sodales ligula, at ornare odio metus eget leo. Etiam eleifend commodo urna, ac convallis enim consectetur at. 
                          Sed vitae fringilla nisi. Maecenas sit amet vulputate neque. Duis vitae volutpat justo. Quisque eu scelerisque ligula. 
                          Phasellus ultrices gravida massa eget vulputate. Sed nulla justo, congue vitae elementum eu, tristique in lectus. Phasellus non molestie enim. In porttitor lacinia felis vel viverra. 
                          Etiam a massa diam. In ac placerat quam, id venenatis tortor. Nunc rhoncus accumsan mattis. 
                          Suspendisse eu commodo enim, ut sagittis leo.
                      </p>
        
                      <section>
                          <div class="container-fluid">	 
                            <div id="carouselExample1" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 1" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad OHL" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat seguridad Alborada" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Grupo Claro Vicuña" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 4" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Dragados" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 5" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Achs" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 6" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad DVC" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 7" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Vinci" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 8" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Municipalidad de valdivia" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample1" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample1" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                          </div>
                    </section>

                  </div>
        
                  <div class="container my-3" id="aseo_industrial">
                      <h1 class="h1-servicios">Aseo industrial</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, odio nec volutpat malesuada, 
                          orci massa sodales ligula, at ornare odio metus eget leo. Etiam eleifend commodo urna, ac convallis enim consectetur at. 
                          Sed vitae fringilla nisi. Maecenas sit amet vulputate neque. Duis vitae volutpat justo. Quisque eu scelerisque ligula. 
                          Phasellus ultrices gravida massa eget vulputate. Sed nulla justo, congue vitae elementum eu, tristique in lectus. Phasellus non molestie enim. In porttitor lacinia felis vel viverra. 
                          Etiam a massa diam. In ac placerat quam, id venenatis tortor. Nunc rhoncus accumsan mattis. 
                          Suspendisse eu commodo enim, ut sagittis leo.
                      </p>

                      <section>
                          <div class="container-fluid">	 
                            <div id="carouselExample2" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 1" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad OHL" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat seguridad Alborada" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Grupo Claro Vicuña" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 4" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Dragados" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 5" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Achs" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 6" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad DVC" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 7" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Vinci" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 8" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Municipalidad de valdivia" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample2" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                          </div>

                    </section>
        
                      
                  </div>
        
                  <div class="container my-3" id="soluciones_tecnologicas">
                      <h1 class="h1-servicios">Soluciones Tecnológicas</h1>
                      <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor, odio nec volutpat malesuada, 
                          orci massa sodales ligula, at ornare odio metus eget leo. Etiam eleifend commodo urna, ac convallis enim consectetur at. 
                          Sed vitae fringilla nisi. Maecenas sit amet vulputate neque. Duis vitae volutpat justo. Quisque eu scelerisque ligula. 
                          Phasellus ultrices gravida massa eget vulputate. Sed nulla justo, congue vitae elementum eu, tristique in lectus. Phasellus non molestie enim. In porttitor lacinia felis vel viverra. 
                          Etiam a massa diam. In ac placerat quam, id venenatis tortor. Nunc rhoncus accumsan mattis. 
                          Suspendisse eu commodo enim, ut sagittis leo.
                      </p>
        
                      <section>
                          <div class="container-fluid">	 
                            <div id="carouselExample3" class="carousel slide" data-ride="carousel" data-interval="9000">
                                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                                    <div class="carousel-item col-md-3  active">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 1" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad OHL" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat seguridad Alborada" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 3" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Grupo Claro Vicuña" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 4" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Dragados" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                        <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 5" class="thumb">
                                            <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Achs" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 6" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad DVC" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 7" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Vinci" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item col-md-3 ">
                                      <div class="panel panel-default">
                                          <div class="panel-thumbnail">
                                            <a href="#" title="image 8" class="thumb">
                                              <img class="img-fluid mx-auto d-block" src="img/fotos_servicios/default.jpg" alt="Felmat Seguridad Municipalidad de valdivia" width="299.75" height="199.83">
                                            </a>
                                          </div>
                                        </div>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next text-faded" href="#carouselExample3" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                          </div>
                    </section>

                  </div>
                
              </div>
          

    </div>
  </div>
	
	 <!--footer starts from here-->
<footer class="footer mt-5">
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
    <p class="text-center">Copyright @<?php echo date("Y"); ?> | Desarrollado por <a href="https://www.f1puntoexe.cl" target="_blank">&lt;F1.EXE/></a></p>

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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

    

    <script src="js/slider.js"></script>

    <!--Ultimo captcha script -->
    <!--Ultimo captcha script -->

    <script>
      $("#btn_seguridad").click(function(){
         $("#seguridad").show(1000);
         $("#asesorias").hide(1000);
         $("#aseo_industrial").hide(1000);
         $("#soluciones_tecnologicas").hide(1000);
      });

      $("#btn_asesorias").click(function(){
         $("#asesorias").show(1000);
         $("#seguridad").hide(1000);
         $("#aseo_industrial").hide(1000);
         $("#soluciones_tecnologicas").hide(1000);
      });

      $("#btn_aseo").click(function(){
         $("#aseo_industrial").show(1000);
         $("#asesorias").hide(1000);
         $("#seguridad").hide(1000);
         $("#soluciones_tecnologicas").hide(1000);
      });

      $("#btn_soluciones").click(function(){
         $("#soluciones_tecnologicas").show(1000);
         $("#asesorias").hide(1000);
         $("#seguridad").hide(1000);
         $("#aseo_industrial").hide(1000);
      });


    </script>

  </body>
  
  </html>