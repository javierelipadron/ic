<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <?php 
	include("util/title.php")
	?>
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
  

    <!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
	$.src='//v2.zopim.com/?1LA7fJJKcjdaw4ZE29ecEN6D7brebjuX';z.t=+new Date;$.
	type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
	</script>
	<!--End of Zopim Live Chat Script-->
</head><!--/head-->

<body>

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                     <div class="col-sm-6 col-xs-4">
                       
                          <?php
                             include("util/telefono.php");
                            ?>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                             <?php
                           	 include("util/social-network.php");
                            ?>
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <?php
					include("util/menu-principal.php");
					?>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
	</header><!--/header-->

    <section class="header_tittle">
        
        	

	<div class="container" >
		<div class="row" >
		<br/>
		 <div class="col-sm-6">
		
		<h2><strong>Pasantias</strong></h2>

			<p>Si deseas realizar tus practicas profesionales en nuestra empresa mediante modalidad online, ponte en contacto con nosotros:</p>
<p>
	<h3><strong>Telefonos:</strong></h3>
	
	<ul>
		<li>&nbsp;+58 (251) 418.12.52&nbsp;</p></li>
		<li>&nbsp;+58 (424) 5777220&nbsp;</p></li>
	</ul>
	
	<h3><strong>Correo de Contacto:</strong></h3>
	<ul>
		
		<li><strong>Información</strong>: info@intercorp.com.ve </p></li>
	</ul>


    <h2><strong> Descripcion de Pasantias</strong></h2>

            <p> Practicas profesionales en modalidad online, en la que para todo asignacion, informacion, dudas y demas se hara de manera remota con eventuales puntos de control presenciales, para postular a dicha pasantia enviar curriculum a info@intercorp.com.ve y llenar el formulario adjunto.</p>
	



		</div>
		<div class="col-sm-6">
		<h2>Solicitud o información sobre practicas profesionales</h2>
			 <form  class="contact-form" name="contact-form" method="post" action="enviar_contacto.php">
                   
                        <div class="form-group">
                            <label>Nombre *</label>
                            <input type="text" name="nombre" class="form-control" required="required">
                        </div>
						<div class="form-group">
                            <label>Telefono de Contacto</label>
                            <input type="number" class="form-control"  name="telefono">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>  Casa de estudio *</label>
                            <input type="text" name="casa" class="form-control" required="required">
                        </div>
                        
                       
                        <div class="form-group">
                            <label>Escriba su Mensaje *</label>
                            <textarea name="mensaje" id="message" required="required" class="form-control" rows="4"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar Solicitud </button>
                        </div>
                    
                </form> 
		

		</div>
	
		</div>
		<br/>			

			

			

				
			</div><!--section-->
		</div><!--/.container-->
    </section><!--/about-us-->
	

    <footer id="footer" class="midnight-blue">
        	 <?php
                 include("util/footer.php");
             ?>
    </footer><!--/#footer-->
    
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
	
	
</body>
</html>