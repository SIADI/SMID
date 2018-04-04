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
 
$host="localhost";
$usuario="root";
$password="";
$db="taller";

$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from repuestos";
$query=$conexion->query($sql);
 
// $conexion = mysql_connect("localhost","root","");
//mysql_select_db("usuario",$conexion);
// $sql= mysql_query("select * from users");

//while($res=mysql_fetch_array($sql)){
	
//echo'<tr>
//		<td>'.$res['id'].'</td>
//		<td>'.$res['nombre'].'</td>
//		<td>'.$res['password'].'</td>
//	</tr>
//	';
//	}
	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='10px'>
             <header>
                <tr>
                  <th>id</th>
                  <th>repuesto</th>
                  <th>precio</th>
				  <th>codigo</th>
				  <th>cantidad</th>
				  <th>descripcion</th>
				  <th></th>
				  <th></th>
  
				  <th></th>
              
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		        <th>'.$res ['id'].'</th>
	            <th>'.$res ['repuesto'].'</th>
                <th>'.$res ['precio'].'</th>
				<th>'.$res ['codigo'].'</th>
				<th>'.$res ['cantidad'].'</th>
				<th>'.$res ['descripcion'].'</th>
				
				
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
<p><a href="menurepuestos.html">Volver menu principal</a></p>
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