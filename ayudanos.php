
<!DOCTYPE html>
<HTML>
	<HEAD>
		<title>LAMUN | Aprende como ayudarnos</title>
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
					<li><a href="#" class="activo">COMO AYUDARNOS</a></li>
					<li><a href="contacto.php">CONTACTO</a></li>
				</ul>
			</div>
		</header>
		<div class="container">
				<div class="row">					
					<div class="col-md-3">
						<img src="LOGO.png" width='250' height='250'>						
					</div>			
				<div  id="titulo1" class="col-md-9">
						<h1>Como Ayudarnos</h1>
						<p>LAMUN UCAB-Guayana es una agrupación sin fines de lucro y está conformada por estudiantes de las diferentes carreras que ofrece la Universidad Católica Simón Bolívar. Como delegación, buscamos que el aspecto económico no sea una limitante para la participación y es por esto que el apoyo brindado a través de patrocinios y donaciones es tan importante para la consecución de los fines de nuestra delegación.</p>
						<br><br><br>
						<p>Agradecemos cualquier donación, grande o pequeña,  pues permite la preparación y participación de nuestros delegados en y para Modelos de Naciones Unidas de un alto nivel Académico.</p>
						<br>
						<p>A continuación por medio del siguiente enlace podrás contribuir con nosotros, donando a través de la plataforma de MercadoPago:</p>
					</br></br>
					<!--<input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Donación .BsF" style="width:20%" required >-->
<?php
	//require_once ('lib/mercadopago.php');

	/* Obtén tus credenciales en:
	* Argentina: https://www.mercadopago.com/mla/herramientas/aplicaciones
	* Brasil: https://www.mercadopago.com/mlb/ferramentas/aplicacoes
	* México: https://www.mercadopago.com/mlm/herramientas/aplicaciones
	* Venezuela: https://www.mercadopago.com/mlv/herramientas/aplicaciones
	* Colombia: https://www.mercadopago.com/mco/herramientas/aplicaciones
	*/
	
	/*$mp = new MP('TU_CLIENT_ID', 'TU_CLIENT_SECRET');
	$preference_data = array(
	    "items" => array(
	       array(
	           "title" => "Donativo LAMUN UCAB Guayana",
	           "quantity" => 1,
	           "currency_id" => "VEF",
	           "unit_price" => 100.00
	       )
	    )
	);

	$preference = $mp->create_preference ($preference_data);*/
?>
					<!--<a href="<?php echo $preference['response']['init_point']; ?>">Pagar</a>-->
<a href="https://www.mercadopago.com/mlv/checkout/pay?pref_id=144225358-30965a09-cd17-4928-8eb9-bd474d9b6730" name="MP-payButton" class="blue-l-rn-ar">Donación de Bs. 100</a>
<script type="text/javascript">
(function(){function $MPBR_load(){window.$MPBR_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = ("https:"==document.location.protocol?"https://www.mercadopago.com/org-img/jsapi/mptools/buttons/":"http://mp-tools.mlstatic.com/buttons/")+"render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPBR_loaded = true;})();}window.$MPBR_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPBR_load) : window.addEventListener('load', $MPBR_load, false)) : null;})();
</script>
						<h2>¡MUCHAS GRACIAS POR TU APOYO!</h2>

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
								<li><a href="#">Como Ayudarnos</a></li>
								<li><a href="contacto.php">Contacto</a></li> 
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