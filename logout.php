<?php 
session_start();
unset($session['username']);
session_destroy();

header('location: http://localhost:8080/login/login.html')


?>


