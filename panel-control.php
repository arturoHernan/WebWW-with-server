<?php 
session_start();


if (isset($_SESSION ['loggedin']) && $_SESSION['loggedin'] == true) {

} else {
	echo "Pagina solo para usuarios registrados.<br>";
	echo "<br><a href='login.html'>Login </a>";
	echo "<br><br><a href='index.html'>Registrarme</a>";
exit;
}

$now = time();
if ($now > $_SESSION['expire']) {
session_destroy();

echo "Su Session a terminado,
<a href='login.html'> Inicie nuevamente </a>";
exit;
}
?>

<!DOCTYPE html>
<html lang="esp">

<head>
<title> Panel de Control </title>
</head>

<body>
<h1>Panel de Control </h1>
<p> Aqui hirian los enlaces que le permitirian al usuario modificar su perfil o lo que se les ocurra </p>

<ul>
	<li>Editar perfil</li>
	<li>Editar preferencias</li>
	<li>Editar configuracion</li>
    <li>etc......</li>
</ul>

<br><br>
<a href= logout.php> Cerrar Session </a>
</body>
</html>