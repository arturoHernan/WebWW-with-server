<?php 
session_start();
?>

<?php 
require ('conexion.php');

$tbl_name = "users";
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM $tbl_name where name = '$username'";
$result = $conexion->query($sql);

if ($result-> num_rows > 0) {

 } 

 $row = $result-> fetch_array(MYSQLI_ASSOC);
 if ( $password == $row['password']) {

  $_SESSION['loggedin'] = true;
  $_SESSION['username'] = $username;
  $_SESSION['start']    = time();
  $_SESSION['expire']   = $_SESSION['start'] + (5 * 60);
	 
	    echo "Bienvenido! " . $_SESSION['username'];
	    echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 
 } else {
	echo "Acceso Incorrecto.";
	echo "<br><a href='login.html'>Volver a intentar </a>";
}

mysqli_close($conexion);
?>