<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Link Tecnologías y Accesorios</title>
	<link rel=”Shortcut Icon” href=”favicon.ico” type=”image/x-icon” />
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600" rel="stylesheet">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/grid.css">
</head>
<body>
<!--Cabezera-->
    <header class="container-fluid visible-sm-block visible-md-block visible-lg-block">
       <div class="row">
           <div class="col-xs-2">
             <a href="index.html"><img src="img/Logo/link.png" alt="Link Tecnologías y Accesorios" class="img img-responsive"></a>  
           </div>
       </div>  
    </header>
	<!--Menu-->
       <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header visible-xs-block">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Link Tecnologías y Accesorios</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MARCA <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="productos.html">Bahía</a></li>
                <li><a href="productos.html">Blacklion</a></li>
                <li><a href="productos.html">Búnker</a></li>
                <li><a href="productos.html">Hashtag</a></li>
                <li><a href="productos.html">Kiki Riki</a></li>
                <li><a href="productos.html">Republiq</a></li>
                <li><a href="productos.html">Tempo</a></li>
                <li><a href="productos.html">Ulter</a></li> 
                <li><a href="productos.html">URBN</a></li>
                <li><a href="productos.html">Generation Accesories</a></li>         
          </ul>
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORÍA <span class="caret"></span></a>
          <ul class="dropdown-menu">
               <li><a href="productos.html">Audio</a></li>
               <li><a href="productos.html">Almacenamiento</a></li>
               <li><a href="productos.html">Batería y carga</a></li>
               <li><a href="productos.html">Proteccion</a></li>
               <li><a href="productos.html">Ergonomía</a></li>
               <li><a href="productos.html">Smartphones</a></li>
               <li><a href="productos.html">Tablets</a></li>       
          </ul>
          
        </li>
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EQUIPOS <span class="caret"></span></a>
          <ul class="dropdown-menu">
                <li><a href="productos.html">Iphone 7</a></li>
                <li><a href="productos.html">Iphone 7 Plus</a></li> 
                <li><a href="productos.html">Iphone 6s/6</a></li> 
                <li><a href="productos.html">Iphone 6s Plus/6</a></li> 
                <li><a href="productos.html">Plus</a></li> 
                <li><a href="productos.html">Iphone SE/5s/5</a></li> 
                <li><a href="productos.html">Iphone 5c</a></li> 
                <li><a href="productos.html">Ipad</a></li> 
                <li><a href="productos.html">Samsung</a></li> 
                <li><a href="productos.html">Sony</a></li> 
                <li><a href="productos.html">Nexus</a></li> 
                <li><a href="productos.html">Motorola</a></li>  
          </ul>
        </li>
          
          <li><a href="catalogo.html">CATALOGO</a></li>
          <li><a href="contacto.html">CONTACTO</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <!--Contendido-->
   <section class="container back">
      <div class="row">
          <div class="col-xs-12 text-center">
              <h1>¡Upss! Esta pagina no existe</h1>
              <h4>Parece que hemos perdido la pagina que busques:  <b><?=$_SERVER['REQUEST_URI'];?></b> </h4>
              <p class="text-primary">El error ha sido comunicado al administrador del sitio. Disculpe las molestias 
ocasionadas.</p>
      <br>
       <div class="col-sm-5 col-xs-3"></div>
       <div class="col-sm-2 col-xs-6"><a href="index.html"><img src="img/home.png" alt="error 404" class="img img-responsive"></a> </div>
       <div class="col-sm-5 col-xs-3"></div>
          </div>
          <?
                //Indicamos la fecha y hora del suceso.
                $fecha = date('d-m-Y H:i:s');
                $para='geforcesalomonti@gmail.com';
                $asunto='Documento no encontrado.';
                $mensaje='El documento: ' . $_SERVER['REQUEST_URI'] . ' no ha sido encontrado en el sitio: ' .$_SERVER['SERVER_NAME']. ' al tratar de ser accedido el ' . $fecha . ' desde la dirección ' . $_SERVER['HTTP_REFERER'];

                mail($para, $asunto, $mensaje);
            ?>
      </div>
       
   </section> 
    <!--Footer-->
    <div class="container-fluid redes">
        <div class="row">
            <div class="col-xs-12">
                <h3><strong>SIGUENOS</strong></h3>
                <ul>
                     <a href="https://www.facebook.com/Link.Tecnologias.y.Accesorios"><li><img src="img/facebook.png" alt="Facebook"></li></a>
                    <a href="https://twitter.com/AccesoriosLink"><li><img src="img/twitter.png" alt="Twitter"></li></a>
                   <!-- <a href="https://plus.google.com/u/0/102154097724424015300"><li><img src="img/gpluse.png" alt="Google Plus"></li></a>-->
                    <a href="https://www.instagram.com/linkaccesories/"><li><img src="img/instagram.png" alt="Pinterest"></li></a>
                     <a href="https://es.pinterest.com/linktecnologiay/"><li><img src="img/pinterest.png" alt="Pinterest"></li></a>
                     <!--<a href="https://www.youtube.com/channel/UCF6Brasu0gd2i_TorkWoQBg"><li><img src="img/youtube.png" alt="Pinterest"></li></a>-->
                </ul>
            </div>
        </div>
    </div>
    <footer class="container-fluid">
        <div>
             <p class="text-center">&copy; Copyright 2016. | <a href="terminos-y-condiciones.html">Términos y Condiciones</a> | Website diseñado por: <a href="derechos.html"> Saúl Salómon Ramírez Zúñiga</a> </p>
        </div>
    </footer>
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/lightbox.js"></script>
</body>
</html>