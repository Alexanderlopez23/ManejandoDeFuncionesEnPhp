<!-- http://localhost/ManejandoDeFuncionesEnPhp/index.php -->
<!-- http://learfuncionenphp.byethost3.com/ -->

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8"/>
        <title> Manejo de funciones en PHP</title>
        <script type="text/javascript" src="js/validar.js" ></script>
        <link rel="shortcut icon" href="img/Favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <header>
            <h1>Contacto</h1>
        </header>
        <div class="info-contacto">
            <span>Nos interesa saber los intereses de nuestros usuarios 
                en este lugar podrá ponerse en contacto con nosotros <p>Su solicitud puede ser respondida maximo 3 dias de realizar el envio de un mensaje</p> </span>
        </div>
        <section>
            <form action="Controlador.php" method="POST"> 

                <input class="input-del-form"  type="text" name="nombre" id="nombre" placeholder="ingrese su nombre" />
                </br>
                <input class="input-del-form"  type="email" name="email" id="email" placeholder="ingrese su email" />
                </br>
                <input class="input-del-form" type="telefono" name="telefono" id="telefono" placeholder="ingrese su telefono" title="El número debe estar comprendido de 10 digitos" />
                </br>

                <textarea class="input-del-form-mensajedelusuario" id="mensajedelusuario" name="mensajedelusuario"> Tu mensaje aquí
                    
                </textarea>
                <br>

                <input type="submit" value="Enviar" class="btnsubmit" >    

            </form>
    </body>
</html>
