<!DOCTYPE html>
<html lang="en">
  <head>
<link rel="shortcut icon" type="image/x-icon" href="IMG/logo.ico" >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Black Monkey </title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
</head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
      <span class="navbar-header"><a class="navbar-brand" href="index.php"><img align ="top" src="IMG/logo.PNG" width="160" height="45"></a></span>
  <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
  </div>

             <div class="collapse navbar-collapse navbar-ex1-collapse">
			 
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="about.html">¡Ofertas!</a>
                    </li>
                    <li><a href="contact.php">Contacto</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuario Destacado<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio-item.html">De la semana</a>
                            </li>
                        </ul>
                    </li>
					<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ayuda<b class="caret"></b></a>
                       <ul class="dropdown-menu">
                            <li><a href="ManualUsuarioTheBlackMonkey.pdf">Manual De Usuario</a>
                            </li>
							<li><a href="ManualTecnicoTheBlackMonkey.pdf">Manual Tecnico</a>
                            </li>
                      </ul>
                    </li>
					<!--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-home-1.html">Blog Home 1</a>
                            </li>
                            <li><a href="blog-home-2.html">Blog Home 2</a>
                            </li>
                            <li><a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
					-->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>

    <!-- Page Content -->

    <div class="container">
      
      <div class="row">
      
        <div class="col-lg-12">
          <h1 class="page-header">Contacto
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d436.31496413153064!2d-58.390153410948024!3d-34.60423871960981!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac168638181%3A0xbf85da27fe23193b!2sEl+Gato+Negro!5e1!3m2!1ses-419!2smx!4v1418082497807" width="100%" height="450" frameborder="0" style="border:0"></iframe>          </h1>
         
        </div>
        
        <div class="col-lg-12">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
        </div>

      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>¿Alguna duda? ¡No te preocupes!</h3>
          <p>"¿Te quedaste con alguna duda y no sabes que hacer?, no te preocupes puedes dejarnos un correo con tu nombre y haciendonos la pregunta ¡con gusto la responderemos!."</p>
			<?php  

                // check for a successful form post  
                if (isset($_GET['s'])) echo "<div class=\"alert alert-success\">".$_GET['s']."</div>";  
          
                // check for a form error  
                elseif (isset($_GET['e'])) echo "<div class=\"alert alert-danger\">".$_GET['e']."</div>";  

			?>
            <form role="form" method="POST" action="contact-form-submission.php">
	            <div class="row">
	              <div class="form-group col-lg-4">
                   <label for="input1">Nombre</label>
	                <input type="nombre" name="contact_name" class="form-control" id="input1">
	                <p>&nbsp;</p>
                  </div>
	              <div class="form-group col-lg-4">
	                <label for="input2">Email</label>
	                <input type="email" name="contact_email" class="form-control" id="input2">
	              </div>
	              <div class="form-group col-lg-4">
	                <label for="input3">Numero de Telefono</label>
	                <input type="phone" name="contact_phone" class="form-control" id="input3">
	              </div>
	              <div class="clearfix"></div>
	              <div class="form-group col-lg-12">
	                <label for="input4">Mensaje</label>
	                <textarea name="contact_message" class="form-control" rows="6" id="input4"></textarea>
	              </div>
	              <div class="form-group col-lg-12">
	                <input type="hidden" name="save" value="contact">
	                <button type="submit" class="btn btn-primary">Enviar</button>
	              </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Medios<br>
          </h3>
<p><i class="fa fa-phone"></i>Telefono: 333 555 888</p>
          <p><i class="fa fa-envelope-o"></i>Correo: BlackMonkey@hotmail.com</p>
          <p><i class="fa fa-clock-o"></i>Horario: 9:00am - 10:30pm</p>
          <ul class="list-unstyled list-inline list-social-icons">
            <li class="tooltip-social facebook-link"><a href="https://www.facebook.com/BlackMonkey" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-square fa-2x"></i></a></li>
           <!-- <li class="tooltip-social linkedin-link"><a href="#linkedin-company-page" data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-linkedin-square fa-2x"></i></a></li> -->
            <li class="tooltip-social twitter-link"><a href="https://twitter.com/BlackMonkey" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter-square fa-2x"></i></a></li>
            <li class="tooltip-social google-plus-link"><a href="https://plus.google.com/BlackMonkey/posts" data-toggle="tooltip" data-placement="top" title="Google+"><i class="fa fa-google-plus-square fa-2x"></i></a></li>
          </ul>
        </div>

      </div><!-- /.row -->

    </div><!-- /.container -->

    <div class="container">

      <hr>

      <footer>
        <div class="row">
          <div class="col-lg-12">
            <p>Copyright &copy; Black Monkey  2014</p>
          </div>
        </div>
      </footer>

    </div><!-- /.container -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/modern-business.js"></script>
<div align="right">
<script type="text/javascript">
var d = new Date();
document.write(d.getDate(),'/'+d.getMonth(),'/'+d.getFullYear(),'<br>'+d.getHours(),':'+d.getMinutes());
</script>
</div>
  </body>
</html>
