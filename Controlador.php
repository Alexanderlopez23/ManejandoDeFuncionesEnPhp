<?php

$correodestino="metall23alexleal@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensajedelusuario = $_POST['mensajedelusuario'];
$asunto="pruebas de desarrollo";




//echo "<pre>";
//print_r($_POST);
//echo "</pre>";

$contenidodelmensaje="Nombre: ". $nombre . "\nemail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " .$mensajedelusuario;



mail($correodestino,$asunto,$contenidodelmensaje);
header("Location:gracias.php");

