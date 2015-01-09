
<!DOCTYPE html>
<HTML>
  <HEAD>
    <TITLE> LAMUN</TITLE>
    <meta charset="utf-8">
    <LINK REL="stylesheet" HREF="estilo.css" TYPE="text/css">
    <LINK REL="stylesheet" HREF="dist/css/bootstrap.css" TYPE="text/css">
    <script  src="dist/js/jquery-1.11.1.js"></script>
    <script  src="dist/js/bootstrap.js"></script>
    <LINK REL="stylesheet" HREF="paginas.css" TYPE="text/css">
  </HEAD>

<!-- Inicio del Body -->
  <body>
<!--Cabecera de la Página-->
    <header>
        <H1 align="center"> Delegación de Modelos de Naciones Unidas en Latinoamerica</H1>
    </br>
    </br>     
      <div id="navegador" class="navegador navbar">
        <ul>
          <li><a href="index.html">INICIO</a></li>
          <li><a href="delegacion.html">LA DELEGACI&OacuteN</a></li>
          <li><a href="evento.html">EVENTOS</a></li>
          <li><a href="ayudanos.html">COMO AYUDARNOS</a></li>
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
          <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
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
        <div class="row">
          <div class="col-md-12">
            <div class="col-md-4"></div>
            <div class="col-md-6">

          <a href="https://twitter.com/LAMUN_UCABG" class="twitter-follow-button" data-show-count="true">Seguir @LAMUN_UCABG</a>
          <style>.ig-b- { display: inline-block; }
.ig-b- img { visibility: hidden; }
.ig-b-:hover { background-position: 0 -60px; } .ig-b-:active { background-position: 0 -120px; }
.ig-b-v-24 { width: 137px; height: 24px; background: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24.png) no-repeat 0 0; }
@media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
.ig-b-v-24 { background-image: url(//badges.instagram.com/static/images/ig-badge-view-sprite-24@2x.png); background-size: 160px 178px; } }</style>
<a href="http://instagram.com/lamunucabg?ref=badge" class="ig-b- ig-b-v-24"><img src="//badges.instagram.com/static/images/ig-badge-view-24.png" alt="Instagram" /></a>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-3">
            <address>
              <strong><h4>LAMUN</h4></strong>
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
              <strong><h4 align="left">Mapa del Sitio</h4></strong>
              <div class="divider"></div>
                <ul class="list-unstyled">
                <li><a href="#" >Inicio</a></li>
                <li><a href="delegacion.html">La Delegaci&oacuten</a></li>
                <li><a href="evento.html">Eventos</a></li>
                <li><a href="ayudanos.html">Como Ayudarnos</a></li>
                <li><a href="contacto.html">Contacto</a></li> 
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