<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ingreso CTP</title>

<!-- Bootstrap -->
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet">
<style type="text/css">
.text-cen {
}
</style>
<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css">
    <script src="<?php echo base_url();?>js/codigo-SICET.js" language="javascript" type="text/javascript"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<header>
	<!--   Cabecera de Pagina   -->
  <div class="top text-center">
		<!--   Logo y barra superior   -->
	<div class="logo-ponal col-md-1 col-md-offset-1 col-sm-1 col-sm-offset-1 col-xs-2 "><img src="imagenes/ponal.png" alt=""/></div>
	<div class="container-fluid col-md-8 col-sm-8 col-xs-8">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
						<a class="navbar-brand" href="menupal.html">SICET</a></div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="defaultNavbar1">
					  <ul class="nav navbar-nav">
					    <li class="dropdown"><a href="#" class="registros-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro<span class="caret"></span></a>
					      <ul class="dropdown-menu">
					        <li><a href="Ingreso_CTP.html">Ingresos</a></li>
					        <li role="separator" class="divider"></li>
					        <li><a href="Salida_CTP.html">Salidas</a></li>
					        <li role="separator" class="divider"></li>
					        <li><a href="Crear_Persona.html">Crear Persona</a></li>
				          </ul>
				        </li>
					    <li><a href="cambio_pass.html">Cambiar Contraseña</a></li>
					    <li><a href="#salir">Salir</a></li>
				      </ul>
				  </div>
				</div>
			</nav>
		</div>
	</div>
</header>

<div class="encabezado col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" id="encabezad">
    <div>
      <h1 class="text-center">REGISTRO CTP</h1>
      <h3 class="text-center">INGRESO</h3>
    </div>
  <hr>
</div>

<div class="forma col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 text-center" id="forma">
	<form>
		<input type="text" size="5" id="tipoid" placeholder="ID" autocomplete="on">
		<input type="text" id="identificacion" placeholder="Identificacion" autocomplete="on" onkeypress="return validarnumeros(event)">
		<input type="text" id="genero" placeholder="Genero" autocomplete="on">
		<input type="date" id="f_nacimiento">
		<input type="text" size="4" id="edad" placeholder="Edad" readonly onmousedown="return false;"><br>
		<input type="text" size="35" id="apellidos" placeholder="Apellidos">
		<input type="text" size="35" id="nombres" placeholder="Nombres">
		<input type="text" size="8" id="telefono" placeholder="Telefono" autocomplete="on" onkeypress="return validarnumeros(event)">
	<hr>
		<input type="text" id="nreg" placeholder="N° Registro" autocomplete="on" readonly onmousedown="return false;">
		<input type="date" id="f_ingreso">
		<input type="time" id="h_ingreso">
		<hr>
		<div class="col-md-12" id="detalle">
		  <article class="col-md-6" id="pc">
		    <h4 class="text-center">Policia Conduce</h4>
		    <input type="text" size="15" id="idpolicia" placeholder="Identificacion" autocomplete="on">
		  		<input type="text" size="8" id="placapolicia" placeholder="Placa" autocomplete="on">
		  		<br>
		  		<input type="text" size="45" id="appolicia" placeholder="Apellidos">
				<input type="text" size="45" id="nmpolicia" placeholder="Nombres">
		  </article>
       	  <article class="col-md-6" id="conduccion">
       	    <h4 class="text-center">Detalle Conduccion</h4>
       	    <input type="date" id="f_conduccion">
			<input type="time" id="h_detencion">
			<br>
			<input type="text" size="35" id="motivo" placeholder="Motivo" autocomplete="on">
       	  </article>
      </div>
      <div>
      	<input type="button" value= "GRABAR INGRESO"><br>
      </div>
      
	</form>
	<hr>
</div>

<div class="pie">
	<div class="text-center col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
	  <h5>Sistema de Registro para Centros de Traslado por Protección - SICET</h5>
	</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="<?php echo base_url();?>js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="<?php echo base_url();?>js/bootstrap.js"></script>
</body>
</html>
