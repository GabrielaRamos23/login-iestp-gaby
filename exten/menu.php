<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	    <!-- Compiled and minified CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<body>
	
	<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>
<nav>
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="../img/logo.jpg" alt="" width="7%"></a>
    <ul class="right hide-on-med-and-down">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Configuración</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Servicios</a></li>
      <!-- Dropdown Trigger-->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown <i class="material-icons right">arrow_drop_down</i></a></li>
	</ul>
</div>
</nav>
<script>
	$(".dropdown-trigger").dropdown();
</script>
</body>
</html>