
<!DOCTYPE html>
<HTML>
  <HEAD>
    <title>LAMUN | Contacto</title>
    <meta name="Description" content="Página Oficial de LAMUN UCAB Guayana, Delegación ante Modelos de Naciones Unidas en Latino américa. Información General y contacto. ONU.">
    <meta charset="utf-8">
      <link rel="icon" href="imagenes/favico.ico">
    <LINK REL="stylesheet" HREF="estilo.css" TYPE="text/css">
    <LINK REL="stylesheet" HREF="paginas.css" TYPE="text/css">
    <LINK REL="stylesheet" HREF="dist/css/bootstrap.css" TYPE="text/css">
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <script  src="dist/js/jquery-1.11.1.js"></script>
    <script  src="dist/js/bootstrap.js"></script>
    <script  src="dist/js/slimslider.min.js"></script>
    <!-- Font-Awesome-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" type='text/css'>
  </HEAD>

<!-- Inicio del Body -->
  <body>
<!--Cabecera de la Página-->
    <header>
      <div class="cabecera">
        <div class="row">
              <div class="span9">
                      
              </div>
              <p>Delegacion ante Modelos de Naciones Unidas en Latinoamérica<br>UCAB - Guayana</p>
        </div>    
      </div>  
      <div id="navegador" class="navegador navbar">
        <ul>
          <li><a href="index.html">INICIO</a></li>
          <li><a href="delegacion.html">LA DELEGACI&OacuteN</a></li>
          <li><a href="evento.html">EVENTOS</a></li>
          <li><a href="ayudanos.php">COMO AYUDARNOS</a></li>
          <li><a href="#" class="activo">CONTACTO</a></li>
        </ul>
      </div>
    </header>
<!-- Contenedor de la Página -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <!-- <small><i></i>Add alerts if form ok... success, else error.</i></small>
    	<div class="alert alert-success"><strong><span class="glyphicon glyphicon-send"></span> Success! Message sent. (If form ok!)</strong></div>	  
        <div class="alert alert-danger"><span class="glyphicon glyphicon-alert"></span><strong> Error! Please check the inputs. (If form error!)</strong></div>
      </div>-->
      <form role="form" action="" method="post" >
        <div class="col-md-6">
          <div class="form-group">
            <div id="titulo1"><h1 >Ya puedes escribirnos</h1></div>
            <label for="InputName">Indique su nombre</label>
            <div class="input-group">
              <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Nombre y Apellido" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
          </div>
          <div class="form-group">
            <label for="InputEmail">Su Email</label>
            <div class="input-group">
              <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="ejemplo@dominio.com" required  >
              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
          </div>
          <div class="form-group">
            <label for="InputMessage">Mensaje</label>
            <div class="input-group"
    >
              <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
          </div>
          <?php  ?>
          <div class="form-group">
            <label for="InputReal">¿Cuánto es 4+<?php echo (date("d")*10); ?>?<br>(Disculpe, estamos verificando que sea una persona)</label>
            <div class="input-group">
              <input type="text" class="form-control" name="InputReal" id="InputReal" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
          </div>
          <input type="submit" name="submit" id="submit" value="Enviar" disabled="" class="btn btn-info pull-right">
        </div>
      </form>
      <div class="col-md-2"></div>
      <div class="col-md-4">
        <div>
          <img src="imagenes/LOGO.png" width="70%" style="margin-left:1em">
        </div>
        <address style="margin-top:-2em">
        <h3>Nuestro Teléfono y Correo Electrónico</h3>
        <p class="lead">
          <abbr title="Teléfono">Telf:</abbr> (+58) 414 766-9637<br>
          <a href="mailto:lamunucabg@gmail.com">lamunucabg@gmail.com</a><br> 
        </p>
        </address>
      </div>
    </div>
  </div>
</div>
<!-- Footer de la Página -->
  <footer class="footer">
      <div class="container">
        <br>
        <br>
        <!--Línea de Iconos Social Networks-->
        <div class="row">
          <div class="col-md-5">
          </div>
          <div class="col-md-1">
            <a href="https://twitter.com/LAMUN_UCABG"><span class="fa fa-twitter fa-inverse fa-3x"></span></a>
          </div>
          <div class="col-md-1">
          </div>
          <div class="col-md-1">
            <a href="http://instagram.com/lamunucabg/"><span class="fa fa-instagram fa-inverse fa-3x"></span></a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <address>
              <h4><strong>LAMUN</strong></h4>
              <div class="divider"></div>
             <strong>Universidad Cat&oacutelica Andr&eacutes Bello </strong><br>
              Avenida Atlantico<br>
              Ciudad Guayana 8050<br>
              Venezuela<br> 
             <a href="mailto:lamunucabg@gmail.com">lamunucabg@gmail.com</a><br>
               <abbr title="Teléfono">Telf:</abbr> (+58)4147669637    
          </address>
          </div>
          <div class="col-md-5">
            <br><br><br><br><br>
            <p class="text-center">Diseñado y Desarrollado por <a href="mailto:rodriguezdelymar@gmail.com">Delymar Rodríguez</a> y <a href="mailto:diturriza17@gmail.com">Daniel Iturriza</a>.<br>
            Copyright © Todos los Derechos Reservados | 2015
            </p>
          </div>
          <div class="col-md-2">
            <address>
              <h4 align="left"><strong>Mapa del Sitio</strong></h4>
              <div class="divider"></div>
                <ul class="list-unstyled">
                <li><a href="index.html" >Inicio</a></li>
                <li><a href="delegacion.html">La Delegaci&oacuten</a></li>
                <li><a href="evento.html">Eventos</a></li>
                <li><a href="ayudanos.php">Como Ayudarnos</a></li>
                <li><a href="#">Contacto</a></li> 
              </ul>
          </address>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      
    </div>
  </footer>
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </body>
</HTML> 