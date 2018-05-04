<html>
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


<?php
	  		include('conexion.php');
				
?>	



    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
					
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="index.php">  <img align ="top" src="IMG/logo.PNG" width="160" height="45"> </a>
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
							<li><a href="menu.php">Descargar Menu</a>
                            </li>
                      </ul>
                    </li>
                    <li><a href="services.php">Iniciar sesion</a>
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
					
					
					


<!--


                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Other Pages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="full-width.html">Full Width Page</a>
                            </li>
                            <li><a href="sidebar.html">Sidebar Page</a>
                            </li>
                            <li><a href="faq.html">FAQ</a>
                            </li>
                            <li><a href="404.html">404</a>
                            </li>
                            <li><a href="pricing.html">Pricing Table</a>
                            </li>
                        </ul>
                    </li>
					-->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
		
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://esphoto980x880.mnstatic.com/cafe-y-restaurante-el-gato-negro-avenida-corrientes_519207.jpg');"></div>
                <div class="carousel-caption">
<!--                    <h1>Modern Business - A Bootstrap 3 Template</h1>-->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://fbcdn-sphotos-c-a.akamaihd.net/hphotos-ak-xaf1/v/t1.0-9/483850_268545046561297_1608737414_n.jpg?oh=49e8f51a04ca0da86d5431f1af05f1c0&oe=54B96817&__gda__=1422212550_0cd4b5757b80199a635ed637510d4723');"></div>
                <div class="carousel-caption">
                    <!--<h1>Ready to Style &amp; Add Content</h1>-->
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://www.wallpaper4me.com/images/wallpapers/cafe_painting_w1.jpeg');"></div>
                <div class="carousel-caption">
                    <!--<h1>Additional Layout Options at <a href="http://startbootstrap.com">http://startbootstrap.com</a>-->
                    </h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-check-circle"></i>Mision</h3>
                    <p>"Nuestra mision es ofrecerte el mejor servicio que podamos todo eso juntanto una buena comodidad en el negocio y como siempre tener la responsabilidad de hacer sentir a cada cliente como el unico, por que preferimos que nos recuerden como un negocio aceptable y servicial."</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-pencil"></i>Vision</h3>
                    <p>"No solo queremos que nos vean como un negocio amable si no tambien queremos alcanzar lugares en los cuales todos puedan conocer lo serviciales que podemos llegar a ser, queremos llegar a ser el lugar favorito de nuestros clientes esa es nuestra vision."</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3><i class="fa fa-folder-open"></i>Descripcion</h3>
                    <p>"Nuestro negocio es un Café-Restaurant en donde contamos con multiples platillos , desayunos, ofertas y demas interraciones con los clientes para diferentes gustos en el lugar, todo complementado acompañado de un gran servicio."</p>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored text-center">

        <div class="container">

           
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Black Monkey Intragram</h2>
                    <hr>
              </div>
                
                   <!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/b140dcf3ff3d5858b4277d50054c98a3.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>


            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="section-colored">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2>Café's</h2>
                    <?php
$menuCafe = simplexml_load_file("xml2.xml");
foreach ($menuCafe->cafe as $tema) {
//echo "Comida  " . $tema["numero"] . "<br>";
echo "<b> " . $tema->nombre . "</b><br> - ";
echo $tema->op1 . "<br> - ";
echo $tema->op2 . "<br> -";
echo $tema->op3 . "<br>";
}
?>
              </div>
                <span class="col-lg-6 col-md-6 col-sm-6"><img src="IMG/cafe.JPG" width="800" height="800" class="img-responsive"></span>
                <div class="col-lg-6 col-md-6 col-sm-6"></div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section-colored -->

    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <img src="IMG/baguette.jpg" width="800" height="800" class="img-responsive">                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
				
				

				
				
				
				
				
				
				
                    <h2>Comidas</h2>
                    <?php
$menuComida = simplexml_load_file("xml1.xml");
foreach ($menuComida->comida as $tema) {
//echo "Comida  " . $tema["numero"] . "<br>";
echo "<b> " . $tema->nombre . "</b><br> - ";
echo $tema->op1 . "<br> - ";
echo $tema->op2 . "<br> -";
echo $tema->op3 . "<br>";
}
?>
              </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section -->

    <div class="container">

        <div class="row well">
            <div class="col-lg-8 col-md-8">
                <h4>Ingresar</h4>
                <p>"Ingresa tu nombre de usuario y contraseña de trabajador para entrar al sistema."</p>
          </div>
            <div class="col-lg-4 col-md-4">
                <a class="btn btn-lg btn-primary pull-right" href="services.php">Iniciar Sesion</a>            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Black Monkey 2017</p>
                    <p align="right">&nbsp;</p>
                    <div align="right">
					<?php
// Archivo en donde se acumular� el numero de visitas
$archivo = "contador.txt";
// Abrimos el archivo para solamente leerlo (r de read)
$abre = fopen($archivo, "r");
// Leemos el contenido del archivo
$total = fread($abre, filesize($archivo));
// Cerramos la conexi�n al archivo
fclose($abre);
// Abrimos nuevamente el archivo para escribir y borrar 
$abre = fopen($archivo, "w");
// Sumamos 1 nueva visita
//$total = $total + 1;
$total= $total+1;
// Y reemplazamos por la nueva cantidad de visitas en el archivo
$grabar = fwrite($abre, $total);
// Cerramos la conexi�n al archivo
fclose($abre);
// Imprimimos el total de visitas d�ndole un formato
echo "<font face='verdana' size='2'>Visitas:".$total."</font>";
?>
</div>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

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
