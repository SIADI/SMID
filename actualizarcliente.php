<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>smid</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		   <link rel="stylesheet" type="text/css" href="../estilos.css">
	</head>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>CAR HYUNDAI & RENAULT</h1>
						<p>SOLUCIONES MECANICAS &nbsp;&bull;&nbsp; VENTA DE VEHICULOS &nbsp;&bull;&nbsp; SERVICIO ESPECIALIZADO</p>
				
<br><br><br>
<?php
//CONEXIÓN A LA BASE DE DATOS
//Datos de conexión
$zz=$_POST["id"];

$hostname_db = "localhost";
$database_db = "taller";
$username_db = "root";
$password_db = "";

// Creación del Objeto y entregando los datos a los atributos
$z = new mysqli($hostname_db, $username_db, $password_db,$database_db);
$sql = "select * from clientes where id='$zz'";
$query=$z->query($sql);

if ($z->connect_errno) {
    printf("Fallo en la conexion a la base de datos: %s\n", $a->connect_error);
    exit();
}
// Consulta en SQL
	if($query->num_rows>0)
	{
		while($res=$query->fetch_array())
		{
			 
?>

<form name="form1" method="post" action="2actualizarcliente.php">
  <p>Formulario de Actualizacion  </p>
  <table width="200" border="1">
    <tr>
      <td>id:</td>
      <td><input type="text" name="id" nombre="id" value="<?php echo $res['id'];?>"></td>
    </tr>
	<tr>
      <td>Nombre: </td>
      <td><input type="text" name="Nombre" id="Nombre" value="<?php echo $res['nombre'];?>"></td>
    </tr>
    <tr>
      <td>identificacion:</td>
		<td><input type="text" name="identificacion" nombre="identificacion" value="<?php echo $res['identificacion'];?>"></td>
    </tr>
    
    <tr>
      <td><label for="numero">numero: </label></td>
      <td><input type="text" name="numero" id="numero" value="<?php echo $res['numero'];  ?>" ></td>
    </tr>
    <tr>
      <td><label for="carro">carro: </label></td>
      <td><input type="text" name="carro" id="carro" value="<?php echo $res['carro'];  ?>" ></td>
    </tr>
	<tr>
      <td>placa: </td>
      <td><input type="text" name="placa" id="placa" value="<?php echo $res['placa'];?>"></td>
    </tr>
    <tr>
      <td><label for="fecha">fecha: </label></td>
      <td><input type="date" name="fecha" id="fecha" value="<?php echo $res['fecha'];?>"></td>
    </tr>
	<tr>
      <td><label for="servicio"> servicio:</label></td>
      <td><input type="text" name="servicio" id="servicio" value="<?php echo $res['servicio'];} }?>"></td>
    </tr>
    <tr>
      <td><input type="submit" name="Guardar" id="Guardar" value="Actualizar"></td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>
    <label for="Nombre"></label>
  </p>
 </form>
<p><a href="menuclientes.html">Volver menu principal</a></p>
<br><br><br>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">andres</a>.</span>
					</footer>

			</div>
		</div>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script>
			window.onload = function() { document.body.className = ''; }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
		   <script src="http://code.jquery.com/jquery_latest.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	</body>
</html>