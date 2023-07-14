<!DOCTYPE html>
<html>
    <head>
        <title>REGISTRO</title>
        <link rel="stylesheet" href="../estilos/stylesre.css">
    </head>
    <body>
      <form method="POST" action="">
        <h1>FORMULARIO DE REGISTRO</h1>
        <?php
        include "registroc.php";
        ?>  
        <input type="text" name="nombre" placeholder="NOMBRE">
        <input type="text" name="apellido" placeholder="APELLIDO">
        <input type="email" name="correo" placeholder="CORREO ELECTRONICO">
        <input type="password" name="clave" placeholder="CONTRASEÑA">
        <P class="acuerdo">Estoy deacuerdo con terminos y condiciones</P>
        <button type="submit" name="register" class="btn" value="enviar">registrar</button>
        <p class="link"><a href="iniciose.php">¿YA TIENES CUENTA?</a></p>
      </form>
    </body>
</html>