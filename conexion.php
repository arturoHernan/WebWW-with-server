<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "login";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion-> connect_error) {
	die("conexion falla". $conexion->connect_error);
}

?>