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
                      </ul>
                    </li>
					
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
	<div align="center">
        <form action="eliminarClientes.php" method="post">
  ID: 
	  <?php 
$link=mysql_connect("localhost","root",""); 
mysql_select_db("blackmonkey",$link); 
echo"<select name=ncombo1 id=combo1>"; 

$sql="SELECT nombre FROM clientes"; 
$result=mysql_query($sql); 
$i=0; 
while ($row=mysql_fetch_row($result)) 
{ 
echo "<option value=".$row[$i].">".$row[$i]."</option>\n"; 
} 
echo "</select>"; 
?> 
</p>
  <p>
    <label>
    <input type="submit" name="Submit" value="Enviar" />
    </label>
</p>
</form>
<a href="javascript:window.history.back();"><input type="button" name="Submit" value="Atras" /></a>
</div>
    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Black Monkey 2014</p>
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
