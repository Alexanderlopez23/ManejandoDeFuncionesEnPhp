<?php

#Cabe recalcar que esta logica solo funciona en servidores ya configurados que envien correos.
//Primero tomamos los valores que vienen por medio del formulario y los guardamos  en variables
//para el caso de correo destino agregamos uno ya por defecto .

$correodestino = "metall23alexleal@gmail.com";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$mensajedelusuario = $_POST['mensajedelusuario'];


//echo "<pre>";
//print_r($_POST);
//echo "</pre>";
//concatenamos en una variable el mensaje total a enviar al correo
// el (/n) significa un salto del linea

$contenidodelmensaje = "Nombre: " . $nombre . "\nemail: " . $email . "\nTelefono: " . $telefono . "\nMensaje: " . $mensajedelusuario;


//utilizamos la funcion de php mail() necesita de los parametros del correo destino, el asunto del correo, 
//cabe de recalcar que el asunto pudo haberse pedido al usuario en la vista, pero aqui lo definimos como 
//"CONTACTO" Y luego enviamos el contenido del mensaje concatenado anteriormente.
mail($correodestino, "CONTACTO", $contenidodelmensaje);
//una vez pase la logica de arriba direccionamos a una nueva pagina..
//continuar con logica pensada por mi.
header("Location:gracias.php");
?>